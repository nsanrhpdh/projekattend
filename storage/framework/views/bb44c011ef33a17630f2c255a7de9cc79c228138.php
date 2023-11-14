<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="<?php echo e(route('home')); ?>">SISTEM PRESENSI</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Fitur</a></li>
          <?php if(Auth::user()): ?>
          <li><a class="nav-link scrollto" href="<?php echo e(route('dashboard')); ?>">Dashboard</a></li>
            <li>
                <form method="POST" action="<?php echo e(route('logout')); ?>">
                    <?php echo csrf_field(); ?>
                    <a class="getstarted scrollto" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); this.closest('form').submit();">
                        <?php echo e(__('Log Out')); ?>

                    </a>
                </form>
                
            </li>
          <?php else: ?>
            <li><a class="getstarted scrollto" href="<?php echo e(route('login')); ?>" style="margin-left: 18px">Login</a></li>
            <li><a class="getstarted scrollto" href="<?php echo e(route('register')); ?>" style="margin-left: 6px">Register</a></li>
          <?php endif; ?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
<?php /**PATH C:\xampp\htdocs\pendataan-prestasi-laravel-main\pendataan-prestasi-laravel-main\resources\views/includes/user/navbar.blade.php ENDPATH**/ ?>