<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #3A5BA0">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
        <div class="sidebar-brand-icon">
            <img src="{{ url('8601.png') }}" alt="" width="80">
        </div>
        <div class="sidebar-brand-text mx-3"></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item @if(Route::is('dashboard')) active @endif">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Presensi
    </div>

    @if (Auth::user()->role == 'ADMIN')
    <!-- Nav Item - Tables -->
    <li class="nav-item @if(Route::is('berita.*')) active @endif">
        <a class="nav-link" href="{{ route('berita.index') }}">
            <i class="fas fa-fw fa-newspaper"></i>
            <span>Data Presensi</span></a>
            <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Pilih Data
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" a href="{{ route('kehadiran') }}">Absen Kehadiran</a>
                    <a class="dropdown-item" a href="{{ route('pulang') }}">Absen Pulang</a>
                    <a class="dropdown-item" a href="{{ route('keterlambatan') }}">Absen Keterlambatan</a>
                    <a class="dropdown-item" a href="{{ route('izin') }}">Absen Izin</a>
                </div>
</div>
    </li>
    <li class="nav-item @if(Route::is('siswa.*')) active @endif">
        <a class="nav-link" href="{{ route('siswa.index') }}">
            <i class="fas fa-fw fa-users"></i>
            <span>Siswa</span></a>
    </li>
    @else
    <li class="nav-item @if(Route::is('prestasi.*')) active @endif">
        <a class="nav-link" href="{{ route('prestasi.kelola') }}">
            <i class="fas fa-fw fa-trophy"></i>
            <span>Kelola Presensi</span></a>
    </li>
    @endif

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
