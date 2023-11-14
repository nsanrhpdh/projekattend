<?php $__env->startPush('addon-style'); ?>
<!-- Custom fonts for this template-->
<link href="<?php echo e(url('backend/vendor/fontawesome-free/css/all.min.css')); ?>" rel="stylesheet" type="text/css">
<link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

<!-- Custom styles for this template-->
<link href="<?php echo e(url('backend/css/sb-admin-2.min.css')); ?>" rel="stylesheet">

<!-- Custom styles for this page -->
<link href="<?php echo e(url('backend/vendor/datatables/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet">


<?php $__env->stopPush(); ?>

<?php $__env->startSection('title'); ?>
    Home
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
        <h1>Sistem Presensi</h1>
        <h2>Aplikasi inovatif untuk membantu sekolah dalam melakukan absensi siswa secara efisien menggunakan teknologi QR code dengan mudah mencatat kehadiran siswa secara instan. </h2>
        <div class="d-flex justify-content-center justify-content-lg-start">
            <?php if(Auth::user()): ?>
            <a href="<?php echo e(route('dashboard')); ?>" class="btn-get-started scrollto">DASHBOARD</a>
            <?php else: ?>
            <a href="<?php echo e(route('login')); ?>" class="btn-get-started scrollto">LOGIN</a>
            <?php endif; ?>
          
        </div>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
        <img src="<?php echo e(url('frontend/assets/img/8601.png')); ?>" class="img-fluid animated" alt="">
      </div>
    </div>
  </div>

</section><!-- End Hero -->
<main id="main">
    

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Fitur</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6" style="text-align: justify">
            <p>
                Fitur Admin: <br>
                <i>Fitur aplikasi yang tersedia untuk admin adalah admin dapat mengelola semua data presensi sekligus dapat membuat barcode untuk presensi siswa.</i>
            </p>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" style="text-align: justify">
            <p>
              Fitur User: <br>
              <i>Fitur aplikasi yang tersedia untuk user adalah user hanya dapat melakukan presensi saja, dan user juga dapat mempunyai akun untuk presensi.</i>
            </p>
            
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>SMK Unggulan yang Menghasilkan SDM Bermutu dan Berdaya Saing Tinggi. Tiada Hari Tanpa Prestasi</p>
        </div>

        <div class="row">

          <div class="col-lg-7 d-flex align-items-stretch">
            <div class="info">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.9013500215187!2d107.53596797420566!3d-6.902399893096904!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e5a529094097%3A0x5d638aee4fd75b1d!2sSMKN%201%20Cimahi!5e0!3m2!1sid!2sid!4v1686642163114!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

          </div>

          <div class="col-lg-5 mt-5 mt-lg-0 d-flex align-items-stretch">
            <div class="info">
                <div class="address">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Location:</h4>
                  <p>Jl. Mahar Martanegara No.48, Utama, Kec. Cimahi Sel., Kota Cimahi, Jawa Barat 40521</p>
                </div>

                <div class="email">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>smkn1cimahi@gmail.com</p>
                </div>

                <div class="phone">
                  <i class="bi bi-phone"></i>
                  <h4>Call:</h4>
                  <p>+0226629683</p>
                </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Perhatian</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Silahkan login terlebih dahulu...
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <a class="btn btn-primary" href="<?php echo e(route('login')); ?>" >Login</a>
        </div>
        </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('addon-script'); ?>
<!-- Bootstrap core JavaScript-->
<script src="<?php echo e(url('backend/vendor/jquery/jquery.min.js')); ?>"></script>
<script src="<?php echo e(url('backend/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo e(url('backend/vendor/jquery-easing/jquery.easing.min.js')); ?>"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo e(url('backend/js/sb-admin-2.min.js')); ?>"></script>

<!-- Page level plugins -->
<script src="<?php echo e(url('backend/vendor/datatables/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(url('backend/vendor/datatables/dataTables.bootstrap4.min.js')); ?>"></script>

<!-- Page level custom scripts -->
<script src="<?php echo e(url('backend/js/demo/datatables-demo.js')); ?>"></script>

<!-- Page level plugins -->
<script src="<?php echo e(url('backend/vendor/chart.js/Chart.min.js')); ?>"></script>

<!-- Page level custom scripts -->
<script src="<?php echo e(url('backend/js/demo/chart-area-demo.js')); ?>"></script>
<script src="<?php echo e(url('backend/js/demo/chart-pie-demo.js')); ?>"></script>

<script>
    $('#dataTable').dataTable( {
        "ordering": false
      } );
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projekattend\resources\views/pages/home.blade.php ENDPATH**/ ?>