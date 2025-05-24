<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $berita = Berita::latest()->get();
        return view('admin.berita.index', compact('berita'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.berita.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'judul' => 'required',
            'foto' => 'required|image|max:2048',
            'isi' => 'required',
        ]);

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('images', 'public');
        }

        Berita::create($data);

        return redirect()->route('berita.index')->with('message', 'Berita berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $beritaTerbaru = Berita::latest()->limit(3)->get();
        $berita = Berita::findOrFail($id);
        return view('user.berita.show', compact('beritaTerbaru', 'berita'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        return view('admin.berita.edit', compact('berita'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'judul' => 'required',
            'foto' => 'nullable|image|max:2048',
            'isi' => 'required',
        ]);

        $berita = Berita::findOrFail($id);

        if ($request->hasFile('foto')) {
            if ($berita->foto) {
                Storage::disk('public')->delete($berita->foto);
            }
            $data['foto'] = $request->file('foto')->store('images', 'public');
        }

        $berita->update($data);

        return redirect()->route('berita.index')->with('message', 'Berita berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);
        if ($berita->foto) {
            Storage::disk('public')->delete($berita->foto);
        }
        $berita->delete();
        return redirect()->route('berita.index')->with('message', 'Berita berhasil dihapus');
    }

    public function guest()
    {
        $berita = Berita::latest()->get();
        return view('user.berita.index', compact('berita'));
    }
}
