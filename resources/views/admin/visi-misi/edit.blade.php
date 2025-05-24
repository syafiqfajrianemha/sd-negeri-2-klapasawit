@extends('layouts.admin')

@section('title', 'Edit Visi dan Misi')

@push('style')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endpush

@section('content')
<h1 class="h3 mb-3 text-gray-800"><a href="{{ route('visi-misi.index') }}" class="text-dark"><i class="fas fa-fw fa-arrow-left mr-3"></i></a> Edit Visi dan Misi</h1>

<form action="{{ route('visi-misi.update', $visimisi->id) }}" method="POST">
    @csrf
    @method('PATCH')

    <div class="row mt-3">
        <div class="col">
            <div class="form-group">
                <label for="summernote-visi">Kata Sambutan<span class="text-danger">*</span></label>
                <textarea name="visi" id="summernote-visi" rows="5" class="form-control @error('visi') is-invalid @enderror" required>{{ old('visi', $visimisi->visi) }}</textarea>
                @error('visi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col">
            <div class="form-group">
                <label for="summernote-misi">Kata Sambutan<span class="text-danger">*</span></label>
                <textarea name="misi" id="summernote-misi" rows="5" class="form-control @error('misi') is-invalid @enderror" required>{{ old('misi', $visimisi->misi) }}</textarea>
                @error('misi')
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
        $('#summernote-visi').summernote({
            height: 300
        });
        $('#summernote-misi').summernote({
            height: 300
        });
    </script>
@endpush
