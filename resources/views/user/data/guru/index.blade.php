@extends('layouts.guest')

@section('title', 'Data Guru')

@section('content')
<div class="page-title dark-background" data-aos="fade">
    <div class="heading">
        <div class="container">
            <div class="row d-flex justify-content-center text-center">
                <div class="col-lg-8">
                    <h1 class="text-uppercase">Data Guru</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<section id="team" class="team section">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
            @forelse ($guru as $item)
                <div class="col">
                    <div class="member">
                        <div class="pic">
                            <img src="{{ asset('storage/' . $item->foto) }}" class="img-fluid" alt="Foto">
                        </div>
                        <div class="member-info">
                            <h4>{{ $item->nama }}</h4>
                            <span>
                                {{ $item->jabatan }}
                            </span>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-center text-danger">Belum ada Data Guru.</p>
            @endforelse
        </div>
    </div>
</section>
@endsection
