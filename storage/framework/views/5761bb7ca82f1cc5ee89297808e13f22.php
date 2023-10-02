<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="p-5 bg-light rounded-3 col-xl-4 border">
                <div class="mb-3 text-center">
                    <img class="img-fluid bg-light rounded-circle"
                        src="<?php echo e(Vite::asset('resources/images/telpro.png')); ?>"alt="image" style="width: 100px;">
                    <h4><?php echo e($pageTitle); ?></h4>
                </div>
                <hr>
                <div class="row justify-content-space-evenly">
                    <div class="col-md-12 mb-3">
                        <label for="tahun" class="form-label">Tahun</label>
                        <h5><?php echo e($finances->tahun); ?></h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <h5><?php echo e(($finances->deskripsi)); ?></h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="file" class="form-label">File</label>
                        <h5><?php echo e($finances->file); ?></h5>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="file" class="form-label"></label>
                        <?php if($finances->file): ?>

                            <a href="<?php echo e(route('finance.downloadFile', ['financeId' => $finances->id])); ?>"
                                class="btn btn-primary btn-sm mt-2">
                                <i class="bi bi-download me-1"></i> Download File
                            </a>
                        <?php else: ?>
                            <h5>Tidak ada</h5>
                        <?php endif; ?>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 d-grid">
                        <a href="<?php echo e(URL::PREVIOUS()); ?>" class="btn btn-outline-dark btn-lg mt-3"><i
                                class="bi-arrow-left-circle me-2"></i> Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>


</html>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\LaVoid\KULIAH\KP\KerjaPraktik\resources\views/finance/show.blade.php ENDPATH**/ ?>