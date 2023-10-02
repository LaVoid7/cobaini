<body>
    <div class="d-flex">
        <a href="<?php echo e(route('finance.show', ['finance' => $finances->id])); ?>"
            class="btn btn-outline-light bg-info btn-sm me-2"><i class="bi-person-lines-fill"></i></a>
        <a href="<?php echo e(route('finance.edit', ['finance' => $finances->id])); ?>"
            class="btn btn-outline-warning btn-sm me-2"><i class="bi-pencil-square"></i></a>
        <div>
            <form action="<?php echo e(route('finance.destroy', ['finance' => $finances->id])); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('delete'); ?>
                <button type="submit" class="btn btn-outline-danger btn-sm me-2 btn-delete"
                    data-name="<?php echo e($finances->id . ' ' . $finances->nama_finance); ?>">
                    <i class="bi-trash"></i>
                </button>
            </form>
        </div>
    </div>
</body>
<?php /**PATH C:\Users\LaVoid\KULIAH\KP\KerjaPraktik\resources\views/finance/action.blade.php ENDPATH**/ ?>