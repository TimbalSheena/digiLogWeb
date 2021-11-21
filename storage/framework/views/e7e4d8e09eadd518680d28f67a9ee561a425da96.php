<?php echo $__env->make('includes.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body>
    

<div class="jumbotron container mt-5">
    <div class="row container">
    <a href="<?php echo e(route('office-staff')); ?>" class="btn btn-default" ><span class="fas fa-arrow-left mr-2"></span >Back</a>
    <h3 class="display-6 mt-1">Scan QR Code</h>
    </div>
    <div class="mb-4"></div>
    <div class="row">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-tabs mt-4">
                        <li class="btn-block"><a href="<?php echo e(route('office-staff')); ?>"class="btn btn-primary mb-3 btn-block active"  >Ongoing</a></li>
                        <li class="btn-block"><a href="<?php echo e(route('scan')); ?>"class="btn btn-primary  mb-3 btn-block"  >Scan QR Code</a></li>
                        <li class="btn-block"><a href="<?php echo e(route('viewvisit')); ?>"class="btn btn-primary  mb-3 btn-block" >All Visit</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card container">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="container text-center">
                                <img src="#" alt="qrcode scan" width="500" height="600">
                                <h4>Scan Visitor QR Code</h4>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="container text-center">
                                <h4>Visitor Details</h4>
                            
                            </div>
                            <form action="#" method="#" class=" text-center">
                                    <?php echo csrf_field(); ?>
                                    
                                    <div class="mb-3 mt-4">
                                        <input type="text" name="firstname" id="firstname" placeholder="First Name" value="<?php echo e(old('firstname')); ?>"
                                        class="form-control bg-gray-100 border-2 w-full p-4 rounded-lg <?php $__errorArgs = ['firstname'];
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
                                    
                                    <div class="mb-3 mt-4">
                                        <input type="text" name="code" id="code" placeholder="Code" value="<?php echo e(old('code')); ?>"
                                        class="form-control bg-gray-100 border-2 w-full p-4 rounded-lg <?php $__errorArgs = ['code'];
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
                                    <a class="btn btn-success" >Start Visit</a>    
                            </form>
                        </div>
                    </div>
                </div>                 
            </div>                    
        </div>
    </div>
</div>
</body><?php /**PATH C:\xampp\htdocs\digiLogWeb-main\resources\views//office-staff/scan.blade.php ENDPATH**/ ?>