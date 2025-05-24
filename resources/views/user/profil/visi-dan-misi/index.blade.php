@extends('layouts.guest')

@section('title', 'Visi dan Misi')

@section('content')
<div class="page-title dark-background" data-aos="fade">
    <div class="heading">
        <div class="container">
            <div class="row d-flex justify-content-center text-center">
                <div class="col-lg-8">
                    <h1 class="text-uppercase">Visi dan Misi</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<section>
    <div class="container">
        @forelse ($visimisi as $item)
            <div class="row gy-4">
                <div class="col position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
                    <div class="text-center text-white py-2 rounded-top" style="background-color: #10058c;">
                        <span><strong>VISI</strong></span>
                    </div>
                    <p class="text-justify">{!! nl2br($item->visi) !!}</p>
                </div>
            </div>
            <div class="row gy-4">
                <div class="col content" data-aos="fade-up" data-aos-delay="200">
                    <div class="text-center text-white py-2 rounded-top" style="background-color: #10058c;">
                        <span>MISI</span>
                    </div>
                    <p class="text-justify">{!! nl2br($item->misi) !!}</p>
                </div>
            </div>
        @empty
            <p class="text-center text-danger">Belum ada Visi dan Misi.</p>
        @endforelse
    </div>
</section>
@endsection
