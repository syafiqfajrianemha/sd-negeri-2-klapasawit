@extends('layouts.guest')

@section('title', 'Izin Siswa')

@section('content')
<div class="page-title dark-background" data-aos="fade">
    <div class="heading">
        <div class="container">
            <div class="row d-flex justify-content-center text-center">
                <div class="col-lg-8">
                    <h1 class="text-uppercase">Izin Siswa</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="py-5">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-6">
                <div class="card shadow">
                    <div class="card-body">
                        <form action="{{ route('guest.izin.siswa.kirim') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="nama">Nama Siswa</label>
                                <input type="text" id="nama" name="nama" class="form-control" required>
                            </div>
                            <div class="form-group mt-2">
                                <label for="nis">NIS</label>
                                <input type="text" id="nis" name="nis" class="form-control" required>
                            </div>
                            <div class="form-group mt-2">
                                <label for="kelas">Kelas</label>
                                <input type="text" id="kelas" name="kelas" class="form-control" required>
                            </div>
                            <div class="form-group mt-2">
                                <label for="wali_kelas">Wali Kelas</label>
                                <input type="text" id="wali_kelas" name="wali_kelas" class="form-control" required>
                            </div>
                            <div class="form-group mt-2">
                                <label for="tanggal">Tanggal Izin</label>
                                <input type="date" id="tanggal" name="tanggal" class="form-control" required>
                            </div>
                            <div class="form-group mt-2">
                                <label for="alasan">Alasan</label>
                                <textarea id="alasan" name="alasan" class="form-control" rows="3" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-success w-100 mt-3">Kirim ke WhatsApp</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
