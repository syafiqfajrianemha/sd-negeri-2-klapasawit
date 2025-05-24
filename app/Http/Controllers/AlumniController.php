<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use Illuminate\Http\Request;

class AlumniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumni = Alumni::latest()->get();
        return view('admin.alumni.index', compact('alumni'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.alumni.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'tahun_masuk' => 'required|digits:4|integer',
            'tahun_keluar' => 'required|digits:4|integer|gte:tahun_masuk',
        ]);

        Alumni::create($request->all());

        return redirect()->route('alumni.index')->with('message', 'Data alumni berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return redirect()->route('alumni.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $alumni = Alumni::findOrFail($id);
        return view('admin.alumni.edit', compact('alumni'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'tahun_masuk' => 'required|digits:4|integer',
            'tahun_keluar' => 'required|digits:4|integer|gte:tahun_masuk',
        ]);

        $alumni = Alumni::findOrFail($id);

        $alumni->update($request->all());

        return redirect()->route('alumni.index')->with('message', 'Data alumni berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $alumni = Alumni::findOrFail($id);
        $alumni->delete();
        return redirect()->route('alumni.index')->with('message', 'Data alumni berhasil diperbarui');
    }

    public function guest()
    {
        $alumni = Alumni::latest()->get();
        return view('user.data.alumni.index', compact('alumni'));
    }
}
