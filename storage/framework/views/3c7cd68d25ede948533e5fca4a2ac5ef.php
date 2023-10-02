<?php $__env->startSection('content'); ?>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" data-bs-theme="light">
<div class="row justify-content-center">
    <div class="col-sm-11">
      <h2></h2>
        <div class="row">
            <div class="col-sm-4">
            <div class= "card p-3 m-2 text-center shadow-sm p-3 mb-5 bg-body rounded border-0">
               <div class="card-body">
                    <img src ="<?php echo e(Vite::asset('resources/images/procurement.png')); ?>" alt="image" class="img-fluid">
               </div>
               <div class="card-footer bg-white">
               	  <h3>Procurement</h3>
               </div>
            </div>
            </div>
            <div class="col-sm-4">
            <div class= "card p-3 m-2 text-center shadow-sm p-3 mb-5 bg-body rounded border-0">
               <div class="card-body">
                    <img src ="<?php echo e(Vite::asset('resources/images/hr.png')); ?>" alt="image" class="img-fluid">
               </div>
               <div class="card-footer bg-white">
               	  <h3>Human Resource</h3>
               </div>
            </div>
            </div>
            <div class="col-sm-4">
            <div class= "card p-3 m-2 text-center shadow-sm p-3 mb-5 bg-body rounded border-0">
               <div class="card-body">
                    <img src ="<?php echo e(Vite::asset('resources/images/finance.png')); ?>" alt="image" class="img-fluid">
               </div>
               <div class="card-footer bg-white">
               	  <h3>Finance</h3>
               </div>
            </div>
            </div>
        </div>
        <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
   </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Framework\laravel-application\KerjaPraktik\resources\views/home.blade.php ENDPATH**/ ?>