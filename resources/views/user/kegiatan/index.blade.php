@extends('layouts.guest')

@section('title', 'Kegiatan')

@section('content')
<div class="page-title dark-background" data-aos="fade">
    <div class="heading">
        <div class="container">
            <div class="row d-flex justify-content-center text-center">
                <div class="col-lg-8">
                    <h1 class="text-uppercase">Kegiatan</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<section id="team" class="team section">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
            @forelse ($kegiatan as $item)
                <div class="col">
                    <div class="member">
                        <div class="pic">
                            <img src="{{ asset('storage/' . $item->foto) }}" class="img-fluid" alt="Foto">
                        </div>
                        <div class="member-info">
                            <span class="text-center" style="font-style: normal; font-size: 18px; font-weight: bold;">
                                {!! nl2br($item->deskripsi) !!}
                            </span>
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
