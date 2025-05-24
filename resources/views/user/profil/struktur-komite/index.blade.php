@extends('layouts.guest')

@section('title', 'Struktur Komite')

@section('content')
<div class="page-title dark-background" data-aos="fade">
    <div class="heading">
        <div class="container">
            <div class="row d-flex justify-content-center text-center">
                <div class="col-lg-8">
                    <h1 class="text-uppercase">Struktur Komite</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<section>
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <img src="{{ asset('images/struktur-komite.svg') }}" alt="Struktur Komite">
            </div>
        </div>
    </div>
</section>
@endsection
