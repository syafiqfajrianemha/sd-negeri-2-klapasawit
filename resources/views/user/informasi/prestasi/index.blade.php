@extends('layouts.guest')

@section('title', 'Prestasi')

@section('content')
<div class="page-title dark-background" data-aos="fade">
    <div class="heading">
        <div class="container">
            <div class="row d-flex justify-content-center text-center">
                <div class="col-lg-8">
                    <h1 class="text-uppercase">Prestasi</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <thead class="table-light text-center">
                            <tr>
                                <th>No</th>
                                <th>Nama Siswa</th>
                                <th>Jenis Lomba</th>
                                <th>Tingkat</th>
                                <th>Juara</th>
                                <th>Tahun</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($prestasi as $item)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama_siswa }}</td>
                                    <td>{{ $item->nama_lomba }}</td>
                                    <td>{{ $item->tingkat }}</td>
                                    <td>{{ $item->juara }}</td>
                                    <td>{{ $item->tahun }}</td>
                                </tr>
                            @endforeach

                            @if ($prestasi->isEmpty())
                                <tr>
                                    <td colspan="6" class="text-center">Data tidak tersedia.</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
