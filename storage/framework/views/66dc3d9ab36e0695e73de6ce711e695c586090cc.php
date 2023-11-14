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
        <h1 class="h3 mb-3 text-gray-800 font-weight-bold">Manajemen Prestasi</h1>
        

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            
            <div class="card-body">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-2">
                    <a href="<?php echo e(route('prestasi.create')); ?>" class="btn btn-primary mb-3">Tambah Data</a>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Tanggal</th>
                                <th>Prestasi</th>
                                <th>Penyelenggara</th>
                                <th>Tingkat</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td><?php echo e($item->nama); ?></td>
                                    <td><?php echo e($item->tanggal); ?></td>
                                    <td><?php echo e($item->prestasi); ?></td>
                                    <td><?php echo e($item->penyelenggara); ?></td>
                                    <td><?php echo e($item->tingkat); ?></td>
                                    <td class="text-center">
                                        <a href="<?php echo e(route('prestasi.show', $item->id)); ?>" class="btn btn-success">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a href="<?php echo e(route('prestasi.edit', $item->id)); ?>" class="btn btn-primary" data-toggle="tooltip" data-placement="top"
                                            title="Edit Data">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>
                                        <form action="<?php echo e(route('prestasi.destroy', $item->id)); ?>" method="POST" class="d-inline">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button type="submit" class="btn btn-danger">
                                                <i class="fa fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <?php endif; ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
<!-- /.container-fluid -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pendataan-prestasi-laravel-main\resources\views/pages/admin/prestasi/index.blade.php ENDPATH**/ ?>