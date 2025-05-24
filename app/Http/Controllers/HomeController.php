<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Kegiatan;
use App\Models\Sambutan;
use App\Models\Slider;

class HomeController extends Controller
{
    public function index()
    {
        $slider = Slider::latest()->get();
        $sambutan = Sambutan::latest()->get();
        $berita = Berita::latest()->limit(3)->get();
        $kegiatan = Kegiatan::latest()->limit(8)->get();
        return view('user.home.index', compact('slider', 'sambutan', 'berita', 'kegiatan'));
    }
}
