@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<h1 class="h3 mb-4 text-gray-800">Dashboard</h1>

<div class="row">
    <!-- Prestasi -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Prestasi</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $prestasiCount }}</div>
            </div>
        </div>
    </div>

    <!-- Berita -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Berita</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $beritaCount }}</div>
            </div>
        </div>
    </div>

    <!-- Ekstrakurikuler -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Ekstrakurikuler</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $ekstraCount }}</div>
            </div>
        </div>
    </div>

    <!-- Jumlah Akun -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total Akun</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $akunCount }}</div>
            </div>
        </div>
    </div>
</div>

<!-- Sambutan Kepala Sekolah -->
<div class="row">
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Sambutan Kepala Sekolah</h6>
            </div>
            <div class="card-body">
                {!! Str::limit($sambutan->isi ?? 'Belum ada sambutan.', 300, '...') !!}
            </div>
        </div>
    </div>
</div>
@endsection
