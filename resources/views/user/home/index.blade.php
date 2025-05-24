@extends('layouts.guest')

@section('title', 'Home')

@section('content')
<div class="page-title dark-background" data-aos="fade">
    <div id="carouselExampleIndicators" class="carousel slide vh-80" data-bs-ride="carousel">
        <div class="carousel-indicators">
            @foreach ($slider as $item)
                <button type="button"
                    data-bs-target="#carouselExampleIndicators"
                    data-bs-slide-to="{{ $loop->iteration - 1 }}"
                    class="{{ $loop->first ? 'active' : '' }}"
                    aria-current="{{ $loop->first ? 'true' : 'false' }}"
                    aria-label="Slide {{ $loop->iteration }}">
                </button>
            @endforeach
        </div>
        <div class="carousel-inner">
            @foreach ($slider as $item)
                <div class="carousel-item active">
                    <img src="{{ asset('storage/' . $item->foto) }}" class="d-block w-100" style="object-fit: cover; height: 80vh;" alt="Foto">
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<section id="details" class="details section">
    <div class="container">
        <div class="row gy-4 align-items-center features-item">
            @forelse ($sambutan as $item)
                <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
                    <img src="{{ asset('storage/' . $item->foto) }}" class="img-fluid" alt="Foto">
                </div>
                <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="mb-3">Selamat Datang Di Website SD Negeri 2 Klapasawit</h3>
                    <span style="text-align: justify;">{!! nl2br($item->isi) !!}</span>
                </div>
            @empty
                <p class="text-danger text-center">Belum Ada Sambutan.</p>
            @endforelse
        </div>
    </div>
</section>

<section id="team" class="team section">
    <div class="container section-title" data-aos="fade-up">
        <h2>Home</h2>
        <div><span>Berita Terbaru</span></div>
    </div>

    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
            @forelse ($berita as $item)
                <div class="col">
                    <div class="member">
                        <a href="">
                            <div class="pic"><img src="{{ asset('storage/' . $item->foto) }}" class="img-fluid" alt=""></div>
                        </a>
                        <div class="member-info">
                            <h4>{{ $item->judul }}</h4>
                            <span>
                                {{ Str::limit(strip_tags($item->isi), 100) }}
                                <a href="">Baca Selengkapnya</a>
                            </span>
                            <span class="text-muted">{{ \Carbon\Carbon::parse($item->created_at)->translatedFormat('d F Y') }}</span>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-center text-danger">Belum ada Berita.</p>
            @endforelse
        </div>
        <div class="text-center mt-4">
            <a href="" class="btn btn-success text-center text-white">Lihat Semua Berita</a>
        </div>
    </div>
</section>

<section id="stats" class="stats section light-background">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4 justify-content-center">
            <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                <i class="bi bi-person-lines-fill"></i>
                <div class="stats-item">
                    <span data-purecounter-start="0" data-purecounter-end="14" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Guru</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                <i class="bi bi-person"></i>
                <div class="stats-item">
                    <span data-purecounter-start="0" data-purecounter-end="251" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Siswa</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                <i class="bi bi-person-arms-up"></i>
                <div class="stats-item">
                    <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Ekstrakurikuler</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="gallery" class="gallery section">
    <div class="container section-title" data-aos="fade-up">
        <h2>Home</h2>
        <div><span>Foto Kegiatan</span></div>
    </div>

    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row g-0">
            @forelse ($kegiatan as $item)
                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{ asset('storage/' . $item->foto) }}" class="glightbox" data-gallery="images-gallery">
                            <img src="{{ asset('storage/' . $item->foto) }}" alt="Foto" class="img-fluid" style="width: 100%; aspect-ratio: 4 / 3; object-fit: cover;">
                        </a>
                    </div>
                </div>
            @empty
                <p class="text-danger text-center">Belum Ada Foto Kegiatan.</p>
            @endforelse
        </div>
    </div>
</section>
@endsection
