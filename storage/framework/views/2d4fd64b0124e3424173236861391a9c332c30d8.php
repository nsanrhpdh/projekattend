<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #3A5BA0">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo e(route('dashboard')); ?>">
        <div class="sidebar-brand-icon">
            <img src="<?php echo e(url('8601.png')); ?>" alt="" width="80">
        </div>
        <div class="sidebar-brand-text mx-3"></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item <?php if(Route::is('dashboard')): ?> active <?php endif; ?>">
        <a class="nav-link" href="<?php echo e(route('dashboard')); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Presensi
    </div>

    <?php if(Auth::user()->role == 'ADMIN'): ?>
    <!-- Nav Item - Tables -->
    <li class="nav-item <?php if(Route::is('berita.*')): ?> active <?php endif; ?>">
        <a class="nav-link" href="<?php echo e(route('berita.index')); ?>">
            <i class="fas fa-fw fa-newspaper"></i>
            <span>Data Presensi</span></a>
            <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Pilih Data
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" a href="<?php echo e(route('kehadiran')); ?>">Absen Kehadiran</a>
                    <a class="dropdown-item" a href="<?php echo e(route('pulang')); ?>">Absen Pulang</a>
                    <a class="dropdown-item" a href="<?php echo e(route('keterlambatan')); ?>">Absen Keterlambatan</a>
                    <a class="dropdown-item" a href="<?php echo e(route('izin')); ?>">Absen Izin</a>
                </div>
</div>
    </li>
    <li class="nav-item <?php if(Route::is('siswa.*')): ?> active <?php endif; ?>">
        <a class="nav-link" href="<?php echo e(route('siswa.index')); ?>">
            <i class="fas fa-fw fa-users"></i>
            <span>Siswa</span></a>
    </li>
    <?php else: ?>
    <li class="nav-item <?php if(Route::is('prestasi.*')): ?> active <?php endif; ?>">
        <a class="nav-link" href="<?php echo e(route('prestasi.kelola')); ?>">
            <i class="fas fa-fw fa-trophy"></i>
            <span>Kelola Presensi</span></a>
    </li>
    <?php endif; ?>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
<?php /**PATH C:\xampp\htdocs\projekattend\project_attend\resources\views/includes/sidebar.blade.php ENDPATH**/ ?>