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
                        <label for="unitbisnis" class="form-label">Unit Bisnis</label>
                        <h5><?php echo e($procurements->unitbisnis->name); ?></h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="harga" class="form-label">Justifikasi Pengadaan Pekerjaan (Juspeng) </label>
                        <h5><?php echo e(($procurements->juspeng)); ?></h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="deskripsiCucian" class="form-label">Tanggal Penerimaan Juskeb</label>
                        <h5><?php echo e($procurements->tgl_terima_juspeng); ?></h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="custommer" class="form-label">Custommer</label>
                        <h5><?php echo e($procurements->Custommer->name); ?></h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="Portofolio" class="form-label">Portofolio</label>
                        <h5><?php echo e($procurements->Portofolio->name); ?></h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="Jenis Anggaran" class="form-label">Jenis Anggaran</label>
                        <h5><?php echo e($procurements->jenisanggaran->name); ?></h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="Customer (Rp)" class="form-label">Customer (Rp)</label>
                        <h5>Rp.<?php echo e($procurements->customer); ?></h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="Anggaran (Rp)" class="form-label">Anggaran (Rp)</label>
                        <h5>Rp.<?php echo e($procurements->anggaran); ?></h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="Anggaran (Rp)" class="form-label">Anggaran (Rp)</label>
                        <h5>Rp.<?php echo e($procurements->anggaran); ?></h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="Margin (Rp)" class="form-label">Margin (%)</label>
                        <h5><?php echo e($procurements->margin_presentase); ?></h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="Margin nominal" class="form-label">Margin Nominal</label>
                        <h5><?php echo e($procurements->margin_nominal); ?></h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="nama PIC" class="form-label">Nama PIC</label>
                        <h5><?php echo e($procurements->nama_PIC); ?></h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="metode_pengadaan" class="form-label">Metode Pengadaan</label>
                        <h5><?php echo e($procurements->metode_pengadaan); ?></h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="mitra peserta" class="form-label">Mitra Peserta</label>
                        <h5><?php echo e($procurements->mitra_peserta); ?></h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="penetapan mitra" class="form-label">Penetapan Mitra</label>
                        <h5><?php echo e($procurements->penetapan_mitra); ?></h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="status" class="form-label">Status</label>
                        <h5><?php echo e($procurements->Status->name); ?></h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="bidang pekerjaan" class="form-label">Bidang Pekerjaan</label>
                        <h5><?php echo e($procurements->bidang_pekerjaan); ?></h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="kontrak" class="form-label">Kontrak</label>
                        <h5><?php echo e($procurements->kontrak); ?></h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="tanggal penetapan" class="form-label">Tanggal Penetapan</label>
                        <h5><?php echo e($procurements->tgl_penetapan); ?></h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="tanggal kontrak" class="form-label">Tanggal Kontrak</label>
                        <h5><?php echo e($procurements->tgl_kontrak); ?></h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="kesepakatan" class="form-label">Kesepakatan (Rp)</label>
                        <h5>Rp.<?php echo e($procurements->kesepakatan); ?></h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="margin presentase regional" class="form-label">Margin Presentase Regional</label>
                        <h5><?php echo e($procurements->margin_presentase_regional); ?></h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="margin nominal regional" class="form-label">Margin Nominal Regional</label>
                        <h5><?php echo e($procurements->margin_nominal_regional); ?></h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="tanggal mulai pekerjaan" class="form-label">Tanggal Mulai Pekerjaan</label>
                        <h5><?php echo e($procurements->tgl_mulai_pekerjaan); ?></h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="tanggal selesai pekerjaan" class="form-label">Tanggal selesai Pekerjaan</label>
                        <h5><?php echo e($procurements->tgl_selesai_pekerjaan); ?></h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="keterangan" class="form-label">Keterangan</label>
                        <h5><?php echo e($procurements->keterangan); ?></h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="Tanggal Tagihan Mitra" class="form-label">Tanggal Tagihan Mitra</label>
                        <h5><?php echo e($procurements->tgl_tagihan_mitra); ?></h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="Tanggal Kirim Tagihan Mitra" class="form-label">Tanggal Kirim Tagihan Mitra</label>
                        <h5><?php echo e($procurements->tgl_kirim_tagihan_mitra); ?></h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="Tanggal Bayar Tagihan Mitra" class="form-label">Tanggal Bayar Tagihan Mitra</label>
                        <h5><?php echo e($procurements->tgl_bayar_tagihan_mitra); ?></h5>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\LaVoid\KULIAH\KP\KerjaPraktik\resources\views/procurement/show.blade.php ENDPATH**/ ?>