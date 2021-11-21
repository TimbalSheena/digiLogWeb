<?php echo $__env->make('includes.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body>
    

<div class="jumbotron container mt-5">
    <div class="row container">
    <a href="<?php echo e(route('admin')); ?>" class="btn btn-default" ><span class="fas fa-arrow-left mr-2"></span >Back</a>
    <h3 class="display-6 mt-1">Ongoing</h>
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
                        <a class="btn btn-success" >Available</a>
                        <a class="btn btn-default" >Away</a>    
                    </ul>
                </div>
            </div>
        </div>
        <div class="container col-lg-8">
                <div class="form-group mb-2">
                    <input class="form-control py-2" type="search" value="search" id="example-search-input">
                    <div class="list-group mt-4" id="list-tab" role="tablist">
                        <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">202184377816 Anna Cruz<span class="fas fa-arrow-right mr-2 ml-4"></></a>
                        <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">202184377816 Anna Cruz</a>
                        <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">202184377816 Anna Cruz</a>
                        <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">202184377816 Anna Cruz</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body><?php /**PATH C:\xampp\htdocs\digiLogWeb-main\resources\views//office-staff/index.blade.php ENDPATH**/ ?>