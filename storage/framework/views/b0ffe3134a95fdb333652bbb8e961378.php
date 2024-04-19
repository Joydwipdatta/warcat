<?php $__env->startSection('admin'); ?>


<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
                                    <div class="col-xl-3 col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="flex-grow-1">
                                                        <?php
                                                        $direct=App\Models\Director::count();
                                                        ?>
                                                     <p class="text-truncate font-size-14 mb-2">Total Director</p>
                                                        <h4 class="mb-2"><?php echo e($direct); ?></h4>
                                                        <p class="text-muted mb-0"><span class="text-success fw-bold font-size-12 me-2">
                                                    </div>
                                                    <div class="avatar-sm">
                                                        <span class="avatar-title bg-light text-primary rounded-3">
                                                            <i class="ri-user-3-line font-size-24 font-size-24"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div><!-- end cardbody -->
                                        </div><!-- end card -->
                                    </div><!-- end col -->
                                    <div class="col-xl-3 col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <?php
                                                    $secretary=App\Models\Secretary::count();
                                                    ?>
                                                    <div class="flex-grow-1">
                                                        <p class="text-truncate font-size-14 mb-2">Total Sectretary</p>
                                                        <h4 class="mb-2"><?php echo e($secretary); ?></h4>
                                                        <p class="text-muted mb-0"><span class="text-success fw-bold font-size-12 me-2">
                                                    </div>
                                                    <div class="avatar-sm">
                                                        <span class="avatar-title bg-light text-success rounded-3">
                                                            <i class="ri-user-3-line font-size-24 font-size-24"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div><!-- end cardbody -->
                                        </div><!-- end card -->
                                    </div><!-- end col -->
                                    <div class="col-xl-3 col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <?php
                                                    $dept=App\Models\Department::count();
                                                    ?>
                                                    <div class="flex-grow-1">
                                                        <p class="text-truncate font-size-14 mb-2">Total Deprtment</p>
                                                        <h4 class="mb-2"><?php echo e($dept); ?></h4>
                                                        <p class="text-muted mb-0"><span class="text-success fw-bold font-size-12 me-2">
                                                    </div>
                                                    <div class="avatar-sm">
                                                        <span class="avatar-title bg-light text-primary rounded-3">
                                                            <i class="ri-file-list-line font-size-24"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div><!-- end cardbody -->
                                        </div><!-- end card -->
                                    </div><!-- end col -->
                                    
                                </div><!-- end row -->

                                <div class="row">
                                    <div class="col-xl-6">

                                        <div class="card">


                                        </div><!-- end card -->
                                    </div>
                                    <!-- end col -->

                                    <!-- end col -->
                                </div>
                                <!-- end row -->

                                
                                <!-- end row -->
                                </div>

                                </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\warcat\resources\views/admin/index.blade.php ENDPATH**/ ?>