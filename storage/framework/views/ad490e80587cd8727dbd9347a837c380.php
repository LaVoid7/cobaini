<?php $__env->startSection('content'); ?>
    <div class="container mt-4">
        <div class="row mb-0">
            <div class="col-lg-9 col-xl-6">
                <h4 class="mb-3"><?php echo e("Data Procurement"); ?></h4>
            </div>
            <div class="col-lg-3 col-xl-6">
                <ul class="list-inline mb-0 float-end">
                    <li class="list-inline-item">
                        <a href="<?php echo e(route('procurement.create')); ?>" class="btn btn-primary">
                            <i class="bi bi-plus-circle me-1"></i> Tambahkan Data
                        </a>
                    </li>

                    <li class="list-inline-item">
                        
                    </li>

                    <li class="list-inline-item">
                        
                    </li>
                </ul>
            </div>
        </div>
        <hr>
        <div class="table-responsive border p-3 rounded-3">
            <table class="table table-bordered table-hover mb-0 datatable" id="procurmentsTable">
                    <thead>
                        <tr class="text-white"style="background-color: #F2B216">
                            <th scope="col">No</th>
                            <th scope="col">No</th>
                            <th scope="col">Unit Bisnis</th>
                            <th scope="col">Justifikasi Pengadaan Pekerjaan (Juspeng) </th>
                            <th scope="col">Tanggal terima juspeng</th>
                            <th scope="col">Custommer</th>
                            <th scope="col">Portofolio</th>
                            <th scope="col">Jenis anggaran </th>
                            <th scope="col">Customer</th>
                            <th scope="col">Anggaran</th>
                            <th scope="col">TANGGAL KIRIM TAGIHAN MITRA</th>
                            <th scope="col">TANGGAL BAYAR TAGIHAN MITRA</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
    <script type="module">
        $(document).ready(function() {
            $("#procurmentsTable").DataTable({
                serverSide: true,
                processing: true,
                ajax: "/getprocurement",
                columns: [{
                        data: "id",
                        name: "id",
                    },
                    {
                        data: "DT_RowIndex",
                        name: "DT_RowIndex",
                        orderable: false,
                        searchable: false,
                        visible: false
                    },
                    {
                        data: "unitbisnis.name",
                        name: "unitbisnis.name",
                    },
                    {
                        data: "juspeng",
                        name: "juspeng"
                    },
                    {
                        data: "tgl_terima_juspeng",
                        name: "tgl_terima_juspeng",
                        searchable: false
                    },
                    {
                        data: "custommer.name",
                        name: "custommer.name",
                        visible: false,
                        searchable: false
                    }, {
                        data: "portofolio.name",
                        name: "portofolio.name",
                        visible: false,
                        searchable: false
                    }, {
                        data: "jenis_anggaran.name",
                        name: "jenis_anggaran.name",
                        searchable: false
                    }, {
                        data: "customer",
                        name: "customer",

                    }, {
                        data: "anggaran",
                        name: "anggaran"
                    }, {
                        data: "tgl_kirim_tagihan_mitra",
                        name: "tgl_kirim_tagihan_mitra"
                    }, {
                        data: "tgl_bayar_tagihan_mitra",
                        name: "tgl_bayar_tagihan_mitra"
                    },
                    {
                        data: "action",
                        name: "action",
                        searchable: false
                    }
                ],
                order: [
                    [0, "desc"]
                ],
                lengthMenu: [
                    [10, 25, 50, 100, -1],
                    [10, 25, 50, 100, "All"],
                ],
            });

            // $(".datatable").on("click", ".btn-delete", function(e) {
            //     e.preventDefault();

            //     var form = $(this).closest("form");
            //     var name = $(this).data("name");

            //     Swal.fire({
            //         title: "Apakah anda yakin untuk menghapus\n" + name + "?",
            //         text: "Anda tidak bisa mengembalikan ini!",
            //         icon: "warning",
            //         showCancelButton: true,
            //         confirmButtonClass: "bg-primary",
            //         confirmButtonText: "Iya!",
            //     }).then((result) => {
            //         if (result.isConfirmed) {
            //             form.submit();
            //         }
            //     });
            // });
        });
    </script>
<?php $__env->stopPush(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\LaVoid\KULIAH\KP\KerjaPraktik\resources\views/procurement/index.blade.php ENDPATH**/ ?>