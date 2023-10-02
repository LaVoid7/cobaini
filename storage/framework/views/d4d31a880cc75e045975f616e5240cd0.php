<!DOCTYPE html>
<html>
<head>
    <title>Laporan Procurement</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <style>
        html {
            font-size: 12px;
        }

        .table {
            border-collapse: collapse !important;
            width: 100%;
        }

        .table-bordered th,
        .table-bordered td {
            padding: 0.5rem;
            border: 1px solid black !important;
        }
    </style>

    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>No.</th>
                <th>Regional</th>
                <th>Unit Bisnis</th>
                <th>Justifikasi Pengadaan Pekerjaan (Juspeng)</th>
                <th>Tgl Penerimaan Juskeb</th>
                <th>Custommer</th>
                <th>Portofolio</th>
                <th>Jenis anggaran</th>
                <th>Customer (Rp.)</th>
                <th>Margin Presentase (%)</th>
                <th>Margin Nominal</th>
                <th>Nama PIC Procurement</th>
                <th>Metode Pengadaan</th>
                <th>Mitra Peserta</th>
                <th>Penetapan Mitra</th>
                <th>Pengelompokan Status</th>
                <th>Bidang Pekerjaan </th>
                <th>Kontrak</th>
                <th>Tanggal Penetapan</th>
                <th>Tanggal Kontrak</th>
                <th>Kesepakatan (Rp)</th>
                <th>Margin Presentase Reg</th>
                <th>Margin Nominal Reg</th>
                <th>Tanggal Mulai Pekerjaan</th>
                <th>Tanggal Selesai Pekerjaan</th>
                <th>Keterangan</th>
                <th>Tanggal Tagihan Mitra</th>
                <th>Tanggal Kirim Tagihan Mitra</th>
                <th>Tanggal Bayar Tagihan Mitra</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $procurements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($i + 1); ?></td>
                <td><?php echo e($p->regional); ?></td>
                <td><?php echo e($p->unitbisnis->name); ?></td>
                <td><?php echo e($p->juspeng); ?></td>
                <td><?php echo e($p->tgl_terima_juspeng); ?></td>
                <td><?php echo e($p->Custommer->name); ?></td>
                <td><?php echo e($p->Portofolio->name); ?></td>
                <td><?php echo e($p->jenisanggaran->name); ?></td>
                <td><?php echo e($p->customer); ?></td>
                <td><?php echo e($p->anggaran); ?></td>
                <td><?php echo e($p->margin_presentase); ?></td>
                <td><?php echo e($p->margin_nominal); ?></td>
                <td><?php echo e($p->nama_PIC); ?></td>
                <td><?php echo e($p->metode_pengadaan); ?></td>
                <td><?php echo e($p->mitra_peserta); ?></td>
                <td><?php echo e($p->penetapan_mitra); ?></td>
                <td><?php echo e($p->Status->name); ?></td>
                <td><?php echo e($p->bidang_pekerjaan); ?></td>
                <td><?php echo e($p->kontrak); ?></td>
                <td><?php echo e($p->tgl_penetapan); ?></td>
                <td><?php echo e($p->tgl_kontrak); ?></td>
                <td><?php echo e($p->kesepakatan); ?></td>
                <td><?php echo e($p->margin_presentase_regional); ?></td>
                <td><?php echo e($p->margin_nominal_regional); ?></td>
                <td><?php echo e($p->tgl_mulai_pekerjaan); ?></td>
                <td><?php echo e($p->tgl_selesai_pekerjaan); ?></td>
                <td><?php echo e($p->keterangan); ?></td>
                <td><?php echo e($p->tgl_tagihan_mitra); ?></td>
                <td><?php echo e($p->tgl_kirim_tagihan_mitra); ?></td>
                <td><?php echo e($p->tgl_bayar_tagihan_mitra); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

</body>
</html>
<?php /**PATH C:\Users\LaVoid\KULIAH\KP\KerjaPraktik\resources\views/procurement/exportPdf.blade.php ENDPATH**/ ?>