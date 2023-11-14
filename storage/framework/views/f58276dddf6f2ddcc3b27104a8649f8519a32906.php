<?php $__env->startSection('content'); ?>
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Bukti Prestasi</h1>
    </div>

    <div class="card mb-5">
        <div class="card-body">
            <h3 class="text-center" style="color: black"><?php echo e($item->nama); ?> </h3>
            <h4 class="text-center" style="color: black"><?php echo e($item->prestasi); ?> </h4>
            <form action="<?php echo e(route('prestasi.show', $item->id)); ?>" method="POST" enctype="multipart/form-data">
                <embed src="<?php echo e(asset('storage/file-pdf/' . $item->bukti)); ?>" width="100%" height="1000"/>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pendataan-prestasi-laravel-main\resources\views/pages/admin/prestasi/show.blade.php ENDPATH**/ ?>