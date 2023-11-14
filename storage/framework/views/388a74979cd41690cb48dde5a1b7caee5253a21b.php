<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo $__env->yieldContent('title'); ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo e(url('logo-pendidikan.png')); ?>" rel="icon">
  <link href="<?php echo e(url('logo-pendidikan.png')); ?>" rel="apple-touch-icon">

  <?php echo $__env->make('includes.user.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <?php echo $__env->yieldPushContent('addon-style'); ?>

</head>

<body>

  <!-- ======= Header ======= -->
  <?php echo $__env->make('includes.user.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldContent('content'); ?>


    <?php echo $__env->make('includes.user.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <?php echo $__env->make('includes.user.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
<?php echo $__env->yieldPushContent('addon-script'); ?>
</html>
<?php /**PATH C:\xampp\htdocs\pendataan-prestasi-laravel-main\resources\views/layouts/user.blade.php ENDPATH**/ ?>