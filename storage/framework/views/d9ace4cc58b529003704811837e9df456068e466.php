<?php echo $__env->make('includes.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="jumbotron container mt-5">
    <div class="row container">
    <a href="<?php echo e(route('admin')); ?>" class="btn btn-default" ><span class="fas fa-arrow-left mr-2"></span >Back</a>
    <h3 class="display-6 mt-1">View Data</h>
    </div>
    <div class="mb-4"></div>
    <div class="row">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-tabs mt-4">
                        <li class="btn-block"><a href="<?php echo e(route('view_data')); ?>"class="btn btn-primary mb-3 btn-block active"  >Security Personnel</a></li>
                        <li class="btn-block"><a href="<?php echo e(route('view_staff')); ?>"class="btn btn-primary  mb-3 btn-block"  >Office Staff</a></li>
                        <li class="btn-block"><a href="<?php echo e(route('view_office')); ?>"class="btn btn-primary  mb-3 btn-block" >Office</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="card container">
                <div class="card-body">
                    <div class="input-group col-md-12">
                        <input class="form-control py-2" type="search" value="search" id="example-search-input">
                        <span class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                <div>
            <hr>
            <div class="row container ml-2">
            <div class="card ml-2" style="width:190px">
                    <div class="row ml-2">  
                        <a href="<?php echo e(route('view/personnel')); ?>"class="btn btn-default btn-small btn-block"><img class="card-img-bot" src="img_avatar1.png" alt="Card image">
                        <h5 class="card-title">John Doe</h5></a>
                    </div>
                </div>  
            </div>
        </div>
    </div>
</div><?php /**PATH C:\xampp\htdocs\digiLogWeb-main\resources\views/admin/view_data.blade.php ENDPATH**/ ?>