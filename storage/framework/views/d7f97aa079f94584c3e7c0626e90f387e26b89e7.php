<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php if(Auth::user()->avatar != NULL): ?>
                    <img src="<?php echo e(asset('storage/file-avatar/' . Auth::user()->avatar)); ?>" alt="" srcset="" class="rounded-circle" width="25">
                    <span class="ml-2 mr-2 d-none d-lg-inline text-gray-600 small"><?php echo e(Auth::user()->name); ?></span>
                <?php else: ?>
                    <img src="<?php echo e(url('images/avatar.png')); ?>" alt="" srcset="" class="rounded-circle" width="25">
                    <span class="ml-2 mr-2 d-none d-lg-inline text-gray-600 small"><?php echo e(Auth::user()->name); ?></span>
                <?php endif; ?>
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="userDropdown">
                <a class="dropdown-item" href="<?php echo e(route('home')); ?>">
                    <i class="fas fa-home fa-sm fa-fw mr-2 text-gray-400"></i>
                    Home
                </a>
                <a class="dropdown-item mt-1" href="<?php echo e(route('profile.edit')); ?>">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </div>
        </li>

    </ul>

</nav>
<!-- End of Topbar -->
<?php /**PATH C:\xampp\htdocs\projekattend\project_attend\resources\views/includes/navbar.blade.php ENDPATH**/ ?>