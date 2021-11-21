<?php echo $__env->make('includes.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  
</body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="<?php echo e(route('admin')); ?>" class="p-3 text-white">Welcome <?php echo e(Auth::user()->name); ?></a>
        <div class="navbar-nav ml-auto">
        <?php if(auth()->guard()->check()): ?>
            <form action="<?php echo e(route('logout')); ?>" method="post" class="nav-item nav-link" >
            <?php echo csrf_field(); ?>
                <button type="submit" class="btn btn-light">Logout</button>
            </form>
        <?php endif; ?>
        </div>
    </nav>
</body>
<?php /**PATH C:\xampp\htdocs\digiLogWeb-main\resources\views/includes/adminheader.blade.php ENDPATH**/ ?>