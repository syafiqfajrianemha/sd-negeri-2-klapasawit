@extends('layouts.admin')

@section('title', 'Edit Akun')

@section('content')
<h1 class="h3 mb-3 text-gray-800">
    <a href="{{ route('manajemen-akun.index') }}" class="text-dark">
        <i class="fas fa-fw fa-arrow-left mr-3"></i>
    </a>
    Edit Akun
</h1>

<form action="{{ route('manajemen-akun.update', $user->id) }}" method="POST">
    @csrf
    @method('PATCH')

    <div class="row">
        <div class="col-md-6">
            <div class="form-group mt-3">
                <label>Username <span class="text-danger">*</span></label>
                <input type="text" name="username" value="{{ old('username', $user->username) }}" class="form-control @error('username') is-invalid @enderror" required>
                @error('username')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mt-3">
                <label>Password</label>
                <span class="text-danger">Biarkan kosong jika tidak merubah Password</span>
                <input type="password" name="password" value="{{ old('password') }}" class="form-control @error('password') is-invalid @enderror">
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-primary mt-4 mb-5">Update</button>
</form>
@endsection
