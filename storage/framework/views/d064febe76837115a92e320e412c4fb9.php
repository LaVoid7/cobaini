<?php $__env->startSection('content'); ?>
    <div class="container mt-4">
        <div class="row mb-0">
            <div class="col-lg-9 col-xl-6">
                <h4 class="mb-3"><?php echo e("Data Finance"); ?></h4>
            </div>
            <div class="col-lg-3 col-xl-6">
                <ul class="list-inline mb-0 float-end">
                    <li class="list-inline-item">
                        <a href="<?php echo e(route('finance.create')); ?>" class="btn btn-primary">
                            <i class="bi bi-plus-circle me-1"></i> Tambahkan Data
                        </a>
                    </li>

                    <li class="list-inline-item">
                        <a href="<?php echo e(route('finance.exportExcel')); ?>" class="btn btn-outline-success">
                            <i class="bi bi-download me-1"></i> to Excel
                        </a>
                    </li>

                    <li class="list-inline-item">
                        <a href="<?php echo e(route('finance.exportPdf')); ?>" target="_blank" class="btn btn-outline-danger">
                            <i class="bi bi-download me-1"></i> to PDF
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <hr>
        <div class="table-responsive border p-3 rounded-3">
            <table class="table table-bordered table-hover mb-0 datatable" id="financesTable">
                    <thead>
                        <tr class="text-white"style="background-color: #F2B216">
                            <th scope="col">No</th>
                            <th scope="col">No</th>
                            <th scope="col">Tahun</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">File</th>
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
            $("#financesTable").DataTable({
                serverSide: true,
                processing: true,
                ajax: "/getfinance",
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
                        data: "tahun",
                        name: "tahun",
                    },
                    {
                        data: "deskripsi",
                        name: "deskripsi"
                    },
                    {
                        data: "file",
                        name: "file",
                        searchable: false
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


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\LaVoid\KULIAH\KP\KerjaPraktik\resources\views/finance/index.blade.php ENDPATH**/ ?>