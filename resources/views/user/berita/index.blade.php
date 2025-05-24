@extends('layouts.guest')

@section('title', 'Berita')

@section('content')
<div class="page-title dark-background" data-aos="fade">
    <div class="heading">
        <div class="container">
            <div class="row d-flex justify-content-center text-center">
                <div class="col-lg-8">
                    <h1 class="text-uppercase">Berita</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<section id="team" class="team section">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
            @forelse ($berita as $item)
                <div class="col">
                    <div class="member">
                        <a href="{{ route('guest.berita.detail', $item->id) }}">
                            <div class="pic"><img src="{{ asset('storage/' . $item->foto) }}" class="img-fluid" alt=""></div>
                        </a>
                        <div class="member-info">
                            <h4>{{ $item->judul }}</h4>
                            <span>
                                {{ Str::limit(strip_tags($item->isi), 100) }}
                                <a href="{{ route('guest.berita.detail', $item->id) }}">Baca Selengkapnya</a>
                            </span>
                            <span class="text-muted">{{ \Carbon\Carbon::parse($item->created_at)->translatedFormat('d F Y') }}</span>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-center text-danger">Belum ada Berita.</p>
            @endforelse
        </div>
    </div>
</section>
@endsection
