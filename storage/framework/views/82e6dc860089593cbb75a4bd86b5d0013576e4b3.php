<?php $__env->startSection('content'); ?>
<!-- Begin Page Content -->
    <div class="container-fluid">

        <?php if(session()->has('success')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Sukses!</strong> <?php echo e(session()->get('success')); ?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>

        <!-- Page Heading -->
        <h1 class="h3 mb-3 text-gray-800 font-weight-bold">Proses Presensi</h1>
        

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            
            <div class="card-body">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-2">
                    <a href="<?php echo e(route('prestasi.create')); ?>" class="btn btn-primary mb-3">Tambah Data</a>
                </div>
                <!--nanti isi sama qr-->
            </div>
        </div>

    </div>
<!-- /.container-fluid -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pendataan-prestasi-laravel-main\pendataan-prestasi-laravel-main\resources\views/pages/admin/prestasi/index.blade.php ENDPATH**/ ?>