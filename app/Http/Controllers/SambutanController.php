<?php

namespace App\Http\Controllers;

use App\Models\Sambutan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SambutanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sambutan = Sambutan::latest()->get();
        return view('admin.sambutan.index', compact('sambutan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (Sambutan::get()->count() >= 1) {
            return redirect()->route('sambutan.index');
        }
        return view('admin.sambutan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (Sambutan::get()->count() >= 1) {
            return redirect()->route('sambutan.index');
        }

        $data = $request->validate([
            'foto' => 'required|image|max:2048',
            'isi' => 'required',
        ]);

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('images', 'public');
        }

        Sambutan::create($data);

        return redirect()->route('sambutan.index')->with('message', 'Sambutan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return redirect()->route('sambutan.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $sambutan = Sambutan::findOrFail($id);
        return view('admin.sambutan.edit', compact('sambutan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'foto' => 'nullable|image|max:2048',
            'isi' => 'required',
        ]);

        $sambutan = Sambutan::findOrFail($id);

        if ($request->hasFile('foto')) {
            if ($sambutan->foto) {
                Storage::disk('public')->delete($sambutan->foto);
            }
            $data['foto'] = $request->file('foto')->store('images', 'public');
        }

        $sambutan->update($data);

        return redirect()->route('sambutan.index')->with('message', 'Sambutan berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $sambutan = Sambutan::findOrFail($id);
        if ($sambutan->foto) {
            Storage::disk('public')->delete($sambutan->foto);
        }
        $sambutan->delete();
        return redirect()->route('sambutan.index')->with('message', 'Sambutan berhasil dihapus');
    }
}
