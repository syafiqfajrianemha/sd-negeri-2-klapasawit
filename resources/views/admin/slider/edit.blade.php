@extends('layouts.admin')

@section('title', 'Edit Slider')

@push('style')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endpush

@section('content')
<h1 class="h3 mb-3 text-gray-800"><a href="{{ route('slider.index') }}" class="text-dark"><i class="fas fa-fw fa-arrow-left mr-3"></i></a> Edit Slider</h1>

<form action="{{ route('slider.update', $slider->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PATCH')

    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="image">Foto</label>
                <input type="file" onchange="previewImage()" class="form-control @error('foto') is-invalid @enderror" id="image" name="foto">
                @error('foto')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

                @if ($slider->foto)
                    <img src="{{ asset('storage/' . $slider->foto) }}" alt="foto" class="img-thumbnail img-preview mt-2" width="200">
                @endif
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-primary mb-5">Update</button>
</form>
@endsection

@push('script')
    <script src="{{ asset('js/imgpreview.js') }}"></script>
@endpush
