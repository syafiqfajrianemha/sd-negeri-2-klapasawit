@extends('layouts.admin')

@section('title', 'Tambah Slider')

@section('content')
<h1 class="h3 mb-3 text-gray-800"><a href="{{ route('slider.index') }}" class="text-dark"><i class="fas fa-fw fa-arrow-left mr-3"></i></a> Tambah Slider</h1>

<form action="{{ route('slider.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="image">Foto<span class="text-danger">*</span></label>
                <input type="file" onchange="previewImage()" class="form-control @error('foto') is-invalid @enderror" id="image" name="foto" required>
                @error('foto')
                    <div id="foto" class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                <img src="{{ asset('images/default-image.jpg') }}" alt="Default Image" class="img-thumbnail img-preview mt-2" width="200">
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary mb-5">Simpan</button>
</form>
@endsection

@push('script')
    <script src="{{ asset('js/imgpreview.js') }}"></script>
@endpush
