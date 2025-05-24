<ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard.index') }}">
        <div class="sidebar-brand-text mx-3">{{ config('app.name') }}</div>
    </a>

    <hr class="sidebar-divider my-0">

    <li class="nav-item{{ Request::routeIs('dashboard.index', 'dashboard.*') ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('dashboard.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <hr class="sidebar-divider my-0">

    <li class="nav-item">
        <a class="nav-link" href="">
            <i class="fas fa-fw fa-users"></i>
            <span>Izin Siswa</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Master</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item{{ Request::routeIs('slider.index', 'slider.*') ? ' active' : '' }}" href="{{ route('slider.index') }}">Slider</a>
                <a class="collapse-item{{ Request::routeIs('sambutan.index', 'sambutan.*') ? ' active' : '' }}" href="{{ route('sambutan.index') }}">Sambutan</a>
                <a class="collapse-item{{ Request::routeIs('berita.index', 'berita.*') ? ' active' : '' }}" href="{{ route('berita.index') }}">Berita</a>
                <a class="collapse-item{{ Request::routeIs('kegiatan.index', 'kegiatan.*') ? ' active' : '' }}" href="{{ route('kegiatan.index') }}">Kegiatan</a>
                <a class="collapse-item{{ Request::routeIs('visi-misi.index', 'visi-misi.*') ? ' active' : '' }}" href="{{ route('visi-misi.index') }}">Visi dan Misi</a>
                <a class="collapse-item{{ Request::routeIs('guru.index', 'guru.*') ? ' active' : '' }}" href="{{ route('guru.index') }}">Data Guru</a>
            </div>
        </div>
    </li>

    <hr class="sidebar-divider my-0">

    <li class="nav-item{{ Request::routeIs('manajemen-akun.index', 'manajemen-akun.*') ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('manajemen-akun.index') }}">
            <i class="fas fa-fw fa-user"></i>
            <span>Manajemen Akun</span>
        </a>
    </li>

    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
