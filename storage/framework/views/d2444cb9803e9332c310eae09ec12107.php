<?php $__env->startSection('content'); ?>

    <body class="bg-light">
        <div class="container-sm my-5">
            <div class="row justify-content-center">
                <div class="p-5 rounded-3 col-lg-4 border" style="width: 25rem ; background-color : #E0E0E0">
                    <div class="mb-3 text-center">
                        <img class="img-fluid" src="<?php echo e(Vite::asset('resources/images/telpro.png')); ?>"alt="image"
                            style="width: ;">
                        <h4> <strong>TELKOM PROPERTY</strong> </h4>
                        <h5>REGIONAL V JATIM BALI NUSRA</h5>
                    </div>
                    <hr>
                    <div class="row">
                        <form method="POST" action="<?php echo e(route('register')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="form-floating form-label">
                                <input type="text" class="form-control  <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    id="name" placeholder="name" name="name" value="<?php echo e(old('name')); ?>">
                                <label class="form-label " for="name"><?php echo e(__('Name')); ?></label>
                                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="text-danger"><small><?php echo e($message); ?></small></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="form-floating form-label">
                                <input type="email"
                                    class="form-control
                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    id="email" placeholder="name@example.com" name="email"
                                    value="<?php echo e(old('email')); ?>">
                                <label for="email"><?php echo e(__('Email Address')); ?></label>
                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="text-danger"><small><?php echo e($message); ?></small></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="form-floating form-label">
                                <input type="password" class="form-control  <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    id="password" placeholder="Password" name="password" value="<?php echo e(old('password')); ?>">
                                <label for="password"><?php echo e(__('Password')); ?></label>
                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="text-danger"><small><?php echo e($message); ?></small></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="form-floating form-label">
                                <input type="password" class="form-control" id="password-confirm" placeholder="confirm password"
                                    name="password_confirmation" required autocomplete="new-password">
                                <label for="password-confirm"><?php echo e(__('Confirm Password')); ?></label>
                            </div>
                    </div>
                    <div class="row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                <?php echo e(__('Register')); ?>

                            </button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
        </div>
    </body>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\LaVoid\KULIAH\KP\KerjaPraktik\resources\views/auth/register.blade.php ENDPATH**/ ?>