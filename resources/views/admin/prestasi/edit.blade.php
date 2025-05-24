@extends('layouts.admin')

@section('title', 'Edit Prestasi')

@section('content')
<h1 class="h3 mb-3 text-gray-800"><a href="{{ route('prestasi.index') }}" class="text-dark"><i class="fas fa-fw fa-arrow-left mr-3"></i></a> Edit Prestasi</h1>

<form action="{{ route('prestasi.update', $prestasi->id) }}" method="POST">
    @csrf
    @method('PATCH')
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="nama_siswa">Nama Siswa<span class="text-danger">*</span></label>
                <input type="text" class="form-control @error('nama_siswa') is-invalid @enderror" id="nama_siswa" name="nama_siswa" required value="{{ $prestasi->nama_siswa }}">
                @error('nama_siswa')
                    <div id="nama_siswa" class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="nama_lomba">Lomba<span class="text-danger">*</span></label>
                <input type="text" class="form-control @error('nama_lomba') is-invalid @enderror" id="nama_lomba" name="nama_lomba" required value="{{ $prestasi->nama_lomba }}">
                @error('nama_lomba')
                    <div id="nama_lomba" class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="tingkat">Tingkat<span class="text-danger">*</span></label>
                <input type="text" class="form-control @error('tingkat') is-invalid @enderror" id="tingkat" name="tingkat" required value="{{ $prestasi->tingkat }}">
                @error('tingkat')
                    <div id="tingkat" class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="juara">Juara<span class="text-danger">*</span></label>
                <input type="text" class="form-control @error('juara') is-invalid @enderror" id="juara" name="juara" required value="{{ $prestasi->juara }}">
                @error('juara')
                    <div id="juara" class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="tahun">Tahun<span class="text-danger">*</span></label>
                <input type="number" class="form-control @error('tahun') is-invalid @enderror" id="tahun" name="tahun" required value="{{ $prestasi->tahun }}">
                @error('tahun')
                    <div id="tahun" class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary mb-5">Update</button>
</form>
@endsection
