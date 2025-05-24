<?php

namespace App\Http\Controllers;

use App\Models\VisiMisi;
use Illuminate\Http\Request;

class VisiMisiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $visimisi = VisiMisi::latest()->get();
        return view('admin.visi-misi.index', compact('visimisi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.visi-misi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (VisiMisi::get()->count() >= 1) {
            return redirect()->route('visi-misi.index');
        }

        $data = $request->validate([
            'visi' => 'required',
            'misi' => 'required',
        ]);

        VisiMisi::create($data);

        return redirect()->route('visi-misi.index')->with('message', 'Visi dan Misi berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return redirect()->route('visi-misi.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $visimisi = VisiMisi::findOrFail($id);
        return view('admin.visi-misi.edit', compact('visimisi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'visi' => 'required',
            'misi' => 'required',
        ]);

        $visimisi = VisiMisi::findOrFail($id);

        $visimisi->update($data);

        return redirect()->route('visi-misi.index')->with('message', 'Visi dan Misi berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $visimisi = VisiMisi::findOrFail($id);
        $visimisi->delete();
        return redirect()->route('visi-misi.index')->with('message', 'Visi dan Misi berhasil dihapus');
    }
}
