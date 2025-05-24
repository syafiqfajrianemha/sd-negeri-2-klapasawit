<header id="header" class="header d-flex align-items-center fixed-top shadow-sm" style="background-color: #10058c;">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
        <a href="{{ route('home') }}" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="guest/img/logo.png" alt=""> -->
            <h1 class="sitename">{{ config('app.name') }}</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ route('home') }}" class="{{ Request::routeIs('home') ? 'active' : '' }}">Home</a></li>
                <li class="dropdown"><a href="#" class="{{ Request::routeIs('guest.profil.visi-dan-misi', 'guest.profil.struktur-komite') ? 'active' : '' }}"><span>Profil</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="{{ route('guest.profil.visi-dan-misi') }}">Visi dan Misi</a></li>
                        <li><a href="{{ route('guest.profil.struktur-komite') }}">Struktur Komite</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#" class="{{ Request::routeIs('guest.guru', 'guest.alumni') ? 'active' : '' }}"><span>Data</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="{{ route('guest.guru') }}">Guru</a></li>
                        <li><a href="{{ route('guest.alumni') }}">Alumni</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#" class="{{ Request::routeIs('guest.prestasi', 'guest.ekstrakurikuler') ? 'active' : '' }}"><span>Informasi</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="{{ route('guest.prestasi') }}">Prestasi</a></li>
                        <li><a href="{{ route('guest.ekstrakurikuler') }}">Ekstrakurikuler</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('guest.berita') }}" class="{{ Request::routeIs('guest.berita', 'guest.berita.*') ? 'active' : '' }}">Berita</a></li>
                <li><a href="{{ route('guest.kegiatan') }}" class="{{ Request::routeIs('guest.kegiatan') ? 'active' : '' }}">Kegiatan</a></li>
                <li><a href="{{ route('guest.izin.siswa.index') }}" class="{{ Request::routeIs('guest.izin.siswa.index') ? 'active' : '' }}">Izin Siswa</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
        <a class="text-uppercase" href="{{ route('login') }}">MASUK</a>
    </div>
</header>
