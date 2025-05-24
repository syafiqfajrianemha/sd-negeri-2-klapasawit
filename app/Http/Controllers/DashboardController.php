<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Ekstrakurikuler;
use App\Models\Prestasi;
use App\Models\Sambutan;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'prestasiCount' => Prestasi::count(),
            'beritaCount' => Berita::count(),
            'ekstraCount' => Ekstrakurikuler::count(),
            'akunCount' => User::count(),
            'sambutan' => Sambutan::first()
        ]);
    }
}
