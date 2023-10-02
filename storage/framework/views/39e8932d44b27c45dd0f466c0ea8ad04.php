<?php $__env->startSection('content'); ?>
    <div class="container-sm mt-5">
        <form action="<?php echo e(route('procurement.update', ['procurement' =>$procurements->id])); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('put'); ?>
            <div class="mb-3 text-center">
                <img class="img-fluid rouned-circle"
                    src="<?php echo e(Vite::asset('resources/images/telpro.png')); ?>"alt="image" style="width: 20%;">
                </i>d
                <h2><?php echo e('Edit Data Procurement'); ?></h2>
            </div>
            <div class="row justify-content-space-evenly">
                <div class="p-5 bg-light rounded-3 border col-xl-6">
                    <div class="row">
                        <div class="col-md-8 mb-3">
                            <label for="regional" class="form-label">Regional</label>
                            <input class="form-control <?php $__errorArgs = ['regional'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text"
                                name="regional" id="regional" value="<?php echo e($errors->any() ? old('regional') : $procurements->regional); ?>"
                                placeholder="Masukkan regional">
                            <?php $__errorArgs = ['regional'];
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
                        <div class="col-md-12 mb-3">
                            <label for="unit_bisnis" class="form-label">Unit Bisnis</label>
                            <select name="unit_bisnis" id="unit_bisnis" class="form-select">
                                <?php
                                    $selected = '';
                                    if ($errors->any()) {
                                        $selected = old('unit_bisnis');
                                    } else {
                                        $selected = $procurements->unitbisnis_id;
                                    }
                                ?>
                                <?php $__currentLoopData = $unitbisnis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unit_bisnis): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($unit_bisnis->id); ?>" <?php echo e(old('unit_bisnis') == $unit_bisnis->id ? 'selected' : ''); ?>>
                                        <?php echo e($unit_bisnis->code . ' - ' . $unit_bisnis->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php $__errorArgs = ['unit_bisnis'];
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
                        <div class="col-md-12 mb-3">
                            <label for="juspeng" class="form-label">Juspeng</label>
                            <input class="form-control <?php $__errorArgs = ['juspeng'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" name="juspeng"
                                id="juspeng"value="<?php echo e($errors->any() ? old('juspeng') : $procurements->juspeng); ?>" placeholder="Juspeng">
                            <?php $__errorArgs = ['juspeng'];
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
                        <div class="col-md-12 mb-3">
                            <label for="tgl_terima_juspeng" class="form-date">Tanggal Terima Juspeng</label>
                            <input class="form-control <?php $__errorArgs = ['tgl_terima_juspeng'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="date" name="tgl_terima_juspeng"
                                id="tgl_terima_juspeng" value="<?php echo e($errors->any() ? old('tgl_terima_juspeng') : $procurements->tgl_terima_juspeng); ?>" placeholder="Tanggal Terima Juspeng">
                            <?php $__errorArgs = ['tgl_terima_juspeng'];
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
                        <div class="col-md-12 mb-3">
                            <label for="custommer" class="form-label">Custommer</label>
                            <select name="custommer" id="custommer" class="form-select">
                                <?php
                                    $selected = '';
                                    if ($errors->any()) {
                                        $selected = old('custommer');
                                    } else {
                                        $selected = $procurements->custommer_id;
                                    }
                                ?>
                                <?php $__currentLoopData = $custommer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $custommer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($custommer->id); ?>" <?php echo e(old('custommer') == $custommer->id ? 'selected' : ''); ?>>
                                        <?php echo e($custommer->code . ' - ' . $custommer->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php $__errorArgs = ['custommer'];
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
                        <div class="col-md-12 mb-3">
                            <label for="portofolio" class="form-label">Portofolio</label>
                            <select name="portofolio" id="portofolio" class="form-select">
                                <?php
                                    $selected = '';
                                    if ($errors->any()) {
                                        $selected = old('portofolio');
                                    } else {
                                        $selected = $procurements->portofolio_id;
                                    }
                                ?>
                                <?php $__currentLoopData = $portofolio; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $portofolio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($portofolio->id); ?>" <?php echo e(old('portofolio') == $portofolio->id ? 'selected' : ''); ?>>
                                        <?php echo e($portofolio->code . ' - ' . $portofolio->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php $__errorArgs = ['portofolio'];
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
                        <div class="col-md-12 mb-3">
                            <label for="jenis_anggaran" class="form-label">Jenis Anggaran</label>
                            <select name="jenis_anggaran" id="jenis_anggaran" class="form-select">
                                <?php
                                    $selected = '';
                                    if ($errors->any()) {
                                        $selected = old('jenis_anggaran');
                                    } else {
                                        $selected = $procurements->jenisanggaran_id;
                                    }
                                ?>
                                <?php $__currentLoopData = $jenisanggaran; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jenis_anggaran): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($jenis_anggaran->id); ?>" <?php echo e(old('jenis_anggaran') == $jenis_anggaran->id ? 'selected' : ''); ?>>
                                        <?php echo e($jenis_anggaran->code . ' - ' . $jenis_anggaran->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php $__errorArgs = ['jenis_anggaran'];
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
                        <div class="col-md-12 mb-3">
                            <label for="customer" class="form-label">Customer</label>
                            <input class="form-control <?php $__errorArgs = ['customer'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" name="customer"
                                id="customer" value="<?php echo e($errors->any() ? old('customer') : $procurements->customer); ?>" placeholder="Customer">
                            <?php $__errorArgs = ['customer'];
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
                        <div class="input-group mb-3">
                            <div class="col-md-12 mb-3">
                                <label for="anggaran" class="form-label">Anggaran</label>
                            </div>
                                <span class="input-group-text">Rp. </span>
                                <input class="form-control <?php $__errorArgs = ['anggaran'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" name="anggaran"
                                    id="anggaran" value="<?php echo e($errors->any() ? old('anggaran') : $procurements->anggaran); ?>" placeholder="Anggaran">
                                <?php $__errorArgs = ['anggaran'];
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
                        <div class="col-md-12 mb-3">
                            <label for="margin_presentase" class="form-label">Margin Presentase</label>
                            <input class="form-control <?php $__errorArgs = ['margin_presentase'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" name="margin_presentase"
                                id="margin_presentase" value="<?php echo e($errors->any() ? old('margin_presentase') : $procurements->margin_presentase); ?>" placeholder="Margin Presentase">
                            <?php $__errorArgs = ['margin_presentase'];
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
                        <div class="col-md-12 mb-3">
                            <label for="margin_nominal" class="form-label">Margin Nominal</label>
                            <input class="form-control <?php $__errorArgs = ['margin_nominal'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" name="margin_nominal"
                                id="margin_nominal" value="<?php echo e($errors->any() ? old('margin_nominal') : $procurements->margin_nominal); ?>" placeholder="Margin Nominal">
                            <?php $__errorArgs = ['margin_nominal'];
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
                        <div class="col-md-12 mb-3">
                            <label for="nama_PIC" class="form-label">Nama PIC</label>
                            <input class="form-control <?php $__errorArgs = ['nama_PIC'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" name="nama_PIC"
                                id="nama_PIC" value="<?php echo e($errors->any() ? old('nama_PIC') : $procurements->nama_PIC); ?>" placeholder="Nama PIC">
                            <?php $__errorArgs = ['nama_PIC'];
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
                        <div class="col-md-12 mb-3">
                            <label for="metode_pengadaan" class="form-label">Metode Pengadaan</label>
                            <input class="form-control <?php $__errorArgs = ['metode_pengadaan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" name="metode_pengadaan"
                                id="metode_pengadaan" value="<?php echo e($errors->any() ? old('metode_pengadaan') : $procurements->metode_pengadaan); ?>" placeholder="Metode Pengadaan">
                            <?php $__errorArgs = ['metode_pengadaan'];
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
                        <div class="col-md-12 mb-3">
                            <label for="mitra_peserta" class="form-label">Mitra Peserta</label>
                            <input class="form-control <?php $__errorArgs = ['mitra_peserta'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" name="mitra_peserta"
                                id="mitra_peserta" value="<?php echo e($errors->any() ? old('mitra_peserta') : $procurements->mitra_peserta); ?>" placeholder="Mitra Peserta">
                            <?php $__errorArgs = ['mitra_peserta'];
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
                        <div class="col-md-12 mb-3">
                            <label for="penetapan_mitra" class="form-label">Penetapan Mitra</label>
                            <input class="form-control <?php $__errorArgs = ['penetapan_mitra'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" name="penetapan_mitra"
                                id="penetapan_mitra" value="<?php echo e($errors->any() ? old('penetapan_mitra') : $procurements->penetapan_mitra); ?>" placeholder="Penetapan Mitra">
                            <?php $__errorArgs = ['penetapan_mitra'];
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
                    </div>
                </div>
                    <div class="p-5 bg-light rounded-3 border col-xl-6">
                        <div class="col-md-12 mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select name="status" id="status" class="form-select">
                                <?php
                                    $selected = '';
                                    if ($errors->any()) {
                                        $selected = old('status');
                                    } else {
                                        $selected = $procurements->status_id;
                                    }
                                ?>
                                <?php $__currentLoopData = $status; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($status->id); ?>" <?php echo e(old('status') == $status->id ? 'selected' : ''); ?>>
                                        <?php echo e($status->code . ' - ' . $status->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php $__errorArgs = ['status'];
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
                        <div class="col-md-12 mb-3">
                            <label for="bidang_pekerjaan" class="form-label">Bidang Pekerjaan</label>
                            <input class="form-control <?php $__errorArgs = ['bidang_pekerjaan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" name="bidang_pekerjaan"
                                id="bidang_pekerjaan" value="<?php echo e($errors->any() ? old('bidang_pekerjaan') : $procurements->bidang_pekerjaan); ?>" placeholder="Bidang Pekerjaan">
                            <?php $__errorArgs = ['bidang_pekerjaan'];
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
                        <div class="col-md-12 mb-3">
                            <label for="kontrak" class="form-label">Kontrak</label>
                            <input class="form-control <?php $__errorArgs = ['kontrak'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" name="kontrak"
                                id="kontrak" value="<?php echo e($errors->any() ? old('kontrak') : $procurements->kontrak); ?>" placeholder="Kontrak ">
                            <?php $__errorArgs = ['kontrak'];
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
                        <div class="col-md-12 mb-3">
                            <label for="tgl_penetapan" class="form-label">Tanggal Penetapan</label>
                            <input class="form-control <?php $__errorArgs = ['tgl_penetapan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="date" name="tgl_penetapan"
                                id="tgl_penetapan" value="<?php echo e($errors->any() ? old('tgl_penetapan') : $procurements->tgl_penetapan); ?>" placeholder="Tanggal Penetapan ">
                            <?php $__errorArgs = ['tgl_penetapan'];
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
                        <div class="col-md-12 mb-3">
                            <label for="tgl_kontrak" class="form-label">Tanggal Kontrak</label>
                            <input class="form-control <?php $__errorArgs = ['tgl_kontrak'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="date" name="tgl_kontrak"
                                id="tgl_kontrak" value="<?php echo e($errors->any() ? old('tgl_kontrak') : $procurements->tgl_kontrak); ?>" placeholder="Tanggal Kontrak ">
                            <?php $__errorArgs = ['tgl_kontrak'];
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
                        <div class="col-md-12 mb-3">
                            <label for="kesepakatan" class="form-label">Kesepakatan</label>
                            <input class="form-control <?php $__errorArgs = ['kesepakatan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" name="kesepakatan"
                                id="kesepakatan" value="<?php echo e($errors->any() ? old('kesepakatan') : $procurements->kesepakatan); ?>" placeholder="Kesepakatan ">
                            <?php $__errorArgs = ['kesepakatan'];
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
                        <div class="col-md-12 mb-3">
                            <label for="margin_presentase_regional" class="form-label">Margin Presentase Regional</label>
                            <input class="form-control <?php $__errorArgs = ['margin_presentase_regional'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" name="margin_presentase_regional"
                                id="margin_presentase_regional" value="<?php echo e($errors->any() ? old('margin_presentase_regional') : $procurements->margin_presentase_regional); ?>" placeholder="Margin Presentase Regional ">
                            <?php $__errorArgs = ['margin_presentase_regional'];
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
                        <div class="col-md-12 mb-3">
                            <label for="margin_nominal_regional" class="form-label">Margin Nominal Regional</label>
                            <input class="form-control <?php $__errorArgs = ['margin_nominal_regional'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" name="margin_nominal_regional"
                                id="margin_nominal_regional" value="<?php echo e($errors->any() ? old('margin_nominal_regional') : $procurements->margin_nominal_regional); ?>" placeholder="Margin Nominal Regional">
                            <?php $__errorArgs = ['margin_nominal_regional'];
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
                        <div class="col-md-12 mb-3">
                            <label for="tgl_mulai_pekerjaan" class="form-label">Tanggal Mulai Pekerjaan</label>
                            <input class="form-control <?php $__errorArgs = ['tgl_mulai_pekerjaan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="date" name="tgl_mulai_pekerjaan"
                                id="tgl_mulai_pekerjaan" value="<?php echo e($errors->any() ? old('tgl_mulai_pekerjaan') : $procurements->tgl_mulai_pekerjaan); ?>" placeholder="Tanggal Mulai Pekerjaan">
                            <?php $__errorArgs = ['tgl_mulai_pekerjaan'];
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
                        <div class="col-md-12 mb-3">
                            <label for="tgl_selesai_pekerjaan" class="form-label">Tanggal Selesai Pekerjaan</label>
                            <input class="form-control <?php $__errorArgs = ['tgl_selesai_pekerjaan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="date" name="tgl_selesai_pekerjaan"
                                id="tgl_selesai_pekerjaan" value="<?php echo e($errors->any() ? old('tgl_selesai_pekerjaan') : $procurements->tgl_selesai_pekerjaan); ?>" placeholder="Tanggal Selesai Pekerjaan">
                            <?php $__errorArgs = ['tgl_selesai_pekerjaan'];
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
                        <div class="col-md-12 mb-3">
                            <label for="keterangan" class="form-label">Keterangan</label>
                            <textarea class="form-control <?php $__errorArgs = ['keterangan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="text" name="keterangan"
                                id="keterangan" value="<?php echo e($errors->any() ? old('keterangan') : $procurements->keterangan); ?>" placeholder="Keterangan"></textarea>
                            <?php $__errorArgs = ['keterangan'];
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
                        <div class="col-md-12 mb-3">
                            <label for="tgl_tagihan_mitra" class="form-label">Tanggal Tagihan Mitra</label>
                            <input class="form-control <?php $__errorArgs = ['tgl_tagihan_mitra'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="date" name="tgl_tagihan_mitra"
                                id="tgl_tagihan_mitra" value="<?php echo e($errors->any() ? old('tgl_tagihan_mitra') : $procurements->tgl_tagihan_mitra); ?>" placeholder="Tanggal Tagihan Mitra">
                            <?php $__errorArgs = ['tgl_tagihan_mitra'];
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
                        <div class="col-md-12 mb-3">
                            <label for="tgl_kirim_tagihan_mitra" class="form-label">Tanggal Kirim Tagihan Mitra</label>
                            <input class="form-control <?php $__errorArgs = ['tgl_kirim_tagihan_mitra'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="date" name="tgl_kirim_tagihan_mitra"
                                id="tgl_kirim_tagihan_mitra" value="<?php echo e($errors->any() ? old('tgl_kirim_tagihan_mitra') : $procurements->tgl_kirim_tagihan_mitra); ?>" placeholder="Tanggal Kirim Tagihan Mitra">
                            <?php $__errorArgs = ['tgl_kirim_tagihan_mitra'];
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
                        <div class="col-md-12 mb-3">
                            <label for="tgl_bayar_tagihan_mitra" class="form-label">Tanggal Bayar Tagihan Mitra</label>
                            <input class="form-control <?php $__errorArgs = ['tgl_bayar_tagihan_mitra'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="date" name="tgl_bayar_tagihan_mitra"
                                id="tgl_bayar_tagihan_mitra" value="<?php echo e($errors->any() ? old('tgl_bayar_tagihan_mitra') : $procurements->tgl_bayar_tagihan_mitra); ?>" placeholder="Tanggal Bayar Tagihan Mitra">
                            <?php $__errorArgs = ['tgl_bayar_tagihan_mitra'];
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


                    <hr>
                    <div class="row">
                        <div class="col-md-6 d-grid">
                            <a href="<?php echo e(route('procurement.index')); ?>" class="btn btn-outline-dark btn-lg mt-3"><i
                                    class="bi-arrow-left-circle me-2"></i>
                                Cancel</a>
                        </div>
                        <div class="col-md-6 d-grid">
                            <button type="submit" class="btn btn-primary btn-lg mt-3"><i class="bi-check-circle me-2"></i>
                                Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
<?php $__env->stopSection(); ?>
<?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>


</html>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\LaVoid\KULIAH\KP\KerjaPraktik\resources\views/procurement/edit.blade.php ENDPATH**/ ?>