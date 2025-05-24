@extends('layouts.admin')

@section('title', 'Edit Sambutan')

@push('style')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endpush

@section('content')
<h1 class="h3 mb-3 text-gray-800"><a href="{{ route('sambutan.index') }}" class="text-dark"><i class="fas fa-fw fa-arrow-left mr-3"></i></a> Edit Sambutan</h1>

<form action="{{ route('sambutan.update', $sambutan->id) }}" method="POST" enctype="multipart/form-data">
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

                @if ($sambutan->foto)
                    <img src="{{ asset('storage/' . $sambutan->foto) }}" alt="Foto" class="img-thumbnail img-preview mt-2" width="200">
                @endif
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col">
            <div class="form-group">
                <label for="summernote">Kata Sambutan<span class="text-danger">*</span></label>
                <textarea name="isi" id="summernote" rows="5" class="form-control @error('isi') is-invalid @enderror" required>{{ old('isi', $sambutan->isi) }}</textarea>
                @error('isi')
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
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $('#summernote').summernote({
            height: 300
        });
    </script>
    <script src="{{ asset('js/imgpreview.js') }}"></script>
@endpush
