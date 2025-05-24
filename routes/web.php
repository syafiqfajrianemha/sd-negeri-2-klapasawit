<?php

use App\Http\Controllers\AlumniController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EkstrakurikulerController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IzinSiswaController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\ManajemenAkunController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\SambutanController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\VisiMisiController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.check');

Route::get('/visi-dan-misi', [ProfilController::class, 'visimisi'])->name('guest.profil.visi-dan-misi');
Route::get('/struktur-komite', [ProfilController::class, 'strukturkomite'])->name('guest.profil.struktur-komite');

Route::get('/guru', [GuruController::class, 'guest'])->name('guest.guru');
Route::get('/alumni', [AlumniController::class, 'guest'])->name('guest.alumni');

Route::get('/prestasi', [PrestasiController::class, 'guest'])->name('guest.prestasi');
Route::get('/ekstrakurikuler', [EkstrakurikulerController::class, 'guest'])->name('guest.ekstrakurikuler');

Route::get('/berita', [BeritaController::class, 'guest'])->name('guest.berita');
Route::get('/berita/detail/{id}', [BeritaController::class, 'show'])->name('guest.berita.detail');

Route::get('/kegiatan', [KegiatanController::class, 'guest'])->name('guest.kegiatan');

Route::get('/izin-siswa', [IzinSiswaController::class, 'index'])->name('guest.izin.siswa.index');
Route::post('/izin-siswa/kirim', [IzinSiswaController::class, 'kirim'])->name('guest.izin.siswa.kirim');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    Route::resource('/admin/slider', SliderController::class);
    Route::resource('/admin/sambutan', SambutanController::class);
    Route::resource('/admin/berita', BeritaController::class);
    Route::resource('/admin/kegiatan', KegiatanController::class);
    Route::resource('/admin/visi-misi', VisiMisiController::class);
    Route::resource('/admin/guru', GuruController::class);
    Route::resource('/admin/alumni', AlumniController::class);
    Route::resource('/admin/prestasi', PrestasiController::class);
    Route::resource('/admin/ekstrakurikuler', EkstrakurikulerController::class);

    Route::resource('/admin/manajemen-akun', ManajemenAkunController::class);

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
