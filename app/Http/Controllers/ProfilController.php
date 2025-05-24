<?php

namespace App\Http\Controllers;

use App\Models\VisiMisi;

class ProfilController extends Controller
{
    public function visimisi()
    {
        $visimisi = VisiMisi::latest()->get();
        return view('user.profil.visi-dan-misi.index', compact('visimisi'));
    }

    public function strukturkomite()
    {
        return view('user.profil.struktur-komite.index');
    }
}
