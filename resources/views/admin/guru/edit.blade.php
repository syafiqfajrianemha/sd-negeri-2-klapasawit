@extends('layouts.admin')

@section('title', 'Edit Guru')

@section('content')
<h1 class="h3 mb-3 text-gray-800"><a href="{{ route('guru.index') }}" class="text-dark"><i class="fas fa-fw fa-arrow-left mr-3"></i></a> Edit Guru</h1>

<form action="{{ route('guru.update', $guru->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PATCH')

    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="image">Foto<span class="text-danger">*</span></label>
                <input type="file" onchange="previewImage()" class="form-control @error('foto') is-invalid @enderror" id="image" name="foto">
                @error('foto')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

                @if ($guru->foto)
                    <img src="{{ asset('storage/' . $guru->foto) }}" alt="Foto" class="img-thumbnail img-preview mt-2" width="200">
                @endif
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="nama">Nama<span class="text-danger">*</span></label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" required value="{{ old('nama', $guru->nama) }}">
                @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="jabatan">Jabatan<span class="text-danger">*</span></label>
                <input type="text" class="form-control @error('jabatan') is-invalid @enderror" id="jabatan" name="jabatan" required value="{{ old('jabatan', $guru->jabatan) }}">
                @error('jabatan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-primary mb-5">Update</button>
</form>
@endsection

@push('script')
    <script src="{{ asset('js/imgpreview.js') }}"></script>
@endpush
