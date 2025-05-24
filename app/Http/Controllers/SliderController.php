<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slider = Slider::latest()->get();
        return view('admin.slider.index', compact('slider'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'foto' => 'required|image|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('images', 'public');
        }

        Slider::create($data);

        return redirect()->route('slider.index')->with('message', 'Slider berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return redirect()->route('slider.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $slider = Slider::findOrFail($id);
        return view('admin.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'foto' => 'nullable|image|max:2048',
        ]);

        $slider = Slider::findOrFail($id);

        if ($request->hasFile('foto')) {
            if ($slider->foto) {
                Storage::disk('public')->delete($slider->foto);
            }
            $data['foto'] = $request->file('foto')->store('images', 'public');
        }

        $slider->update($data);

        return redirect()->route('slider.index')->with('message', 'Slider berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $slider = Slider::findOrFail($id);
        if ($slider->foto) {
            Storage::disk('public')->delete($slider->foto);
        }
        $slider->delete();
        return redirect()->route('slider.index')->with('message', 'Slider berhasil dihapus');
    }
}
