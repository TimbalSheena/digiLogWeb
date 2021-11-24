<?php echo $__env->make('includes.adminheader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="jumbotron container mt-5">
    <div class="row container">
        <a href="<?php echo e(route('admin')); ?>" class="btn btn-default" ><span class="fas fa-arrow-left mr-2"></span >Back</a>
        <h3 class="display-6 mt-1">Office Registration</h3>
    </div>
    <div class="mb-4"></div>
    <div class="row">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                <ul class="nav nav-tabs mt-4">
                        <li class="btn-block"><a href="<?php echo e(route('reg_data')); ?>"class="btn btn-primary mb-3 btn-block text-dark" style="background-color:#FDB417"  >Security Personnel</a></li>
                        <li class="btn-block"><a href="<?php echo e(route('reg_staff')); ?>"class="btn btn-primary  mb-3 btn-block text-dark" style="background-color:#FDB417"  >Office Staff</a></li>
                        <li class="btn-block"><a href="<?php echo e(route('reg_office')); ?>"class="btn btn-primary  mb-3 btn-block active text-dark" style="background-color:#FDB417" >Office</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="card container">
                <div class="card-body">
                <form method="post" action="<?php echo e(route('offices.store')); ?>">
                    <?php echo csrf_field(); ?>
                    
                    <div class="mb-3 mt-4">
                        <input type="text" name="build_num" id="build_num" placeholder="Building Number" value="<?php echo e(old('buidnum')); ?>"
                        class="form-control bg-gray-100 border-2 w-full p-4 rounded-lg <?php $__errorArgs = ['buidnum'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                        
                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="text-danger mt-2 text-sm">
                                <?php echo e($message); ?>

                            </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    
                    <div class="mb-3">
                        <input type="text" name="build_name" id="build_name" placeholder="Building Name"  value="<?php echo e(old('buildname')); ?>"
                        class="form-control bg-gray-100 border-2 w-full p-4 rounded-lg <?php $__errorArgs = ['buildname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                        
                        <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="text-danger mt-2 text-sm">
                                <?php echo e($message); ?>

                            </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    
                    <div class="mb-3">
                        <input type="contact" name="office_name" id="office_name" placeholder="Office" value="<?php echo e(old('office')); ?>"
                        class="form-control bg-gray-100 border-2 w-full p-4 rounded-lg <?php $__errorArgs = ['office'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                        
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="text-danger mt-2 text-sm">
                                <?php echo e($message); ?>

                            </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <hr class="my-4">
                    <div class="d-grid">
                        <div><button class="btn btn-success btn-login text-uppercase fw-bold" >Add Office</button></div>
                    </div>  
                    <hr class="my-3">
                </form>
                </div>  
            </div>
        </div>
    </div>
</div><?php /**PATH E:\digiLogWeb-main use to modify code\resources\views/admin/register/reg_office.blade.php ENDPATH**/ ?>