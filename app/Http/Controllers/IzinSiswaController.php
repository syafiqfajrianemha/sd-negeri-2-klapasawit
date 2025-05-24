<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IzinSiswaController extends Controller
{
    public function index()
    {
        return view('user.izin-siswa.index');
    }

    public function kirim(Request $request)
    {
        $nama = $request->nama;
        $nis = $request->nis;
        $kelas = $request->kelas;
        $waliKelas = $request->wali_kelas;
        $tanggal = $request->tanggal;
        $alasan = $request->alasan;

        $noWa = '6285179923306';

        $pesan = "Assalamu'alaikum, saya ingin memberi izin untuk siswa:\n\n"
            . "Nama: $nama\n"
            . "NIS: $nis\n"
            . "Kelas: $kelas\n"
            . "Wali Kelas: $waliKelas\n"
            . "Tanggal Izin: $tanggal\n"
            . "Alasan: $alasan\n\n"
            . "Terima kasih.";

        $waUrl = 'https://wa.me/' . $noWa . '?text=' . urlencode($pesan);

        return redirect()->away($waUrl);
    }
}
