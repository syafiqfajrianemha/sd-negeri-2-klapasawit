@extends('layouts.guest')

@section('title', 'Detail Berita')

@section('content')
<div class="page-title dark-background" data-aos="fade">
    <div class="heading">
        <div class="container">
            <div class="row d-flex justify-content-center text-center">
                <div class="col-lg-8">
                    <h1 class="text-uppercase">Detail Berita</h1>
                </div>
            </div>
        </div>
    </div>
    <nav class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="{{ route('guest.berita') }}">Berita</a></li>
                <li class="current">Detail Berita</li>
            </ol>
        </div>
    </nav>
</div>

<section id="service-details" class="service-details section">
    <div class="container">
        <div class="row gy-5">
            <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
                <img src="{{ asset('storage/' . $berita->foto) }}" alt="Foto" class="img-fluid services-img">
                <h3 class="mt-3">{{ $berita->judul }}</h3>
                <p class="text-muted">{{ \Carbon\Carbon::parse($berita->created_at)->translatedFormat('d F Y') }}</p>
                <p>{!! nl2br($berita->isi) !!}</p>
            </div>

            <div class="col-lg-4 ps-lg-5" data-aos="fade-up" data-aos-delay="100">
                <div class="service-box">
                    <h4>Berita Terbaru</h4>
                    <div class="services-list">
                        @foreach ($beritaTerbaru as $item)
                            <a href="{{ route('guest.berita.detail', $item->id) }}"><span>{{ $item->judul }}</span></a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
