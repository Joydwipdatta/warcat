<?php $__env->startSection('admin'); ?>

<div class="page-content">
 <div class="container-fluid">


 <div class="row">
                      <div class="col-lg-6">
                       <div class="card"><br><br>


                                    <div class="card-body">
                                        <h4 class="card-title">Name : <?php echo e($adminData-> name); ?></h4>
                                        <hr>

                                        <h4 class="card-title">Username : <?php echo e($adminData-> email); ?></h4>
                                        <hr>
                                        <h4 class="card-title mt-2">Password : </h4>
                                        <a href="<?php echo e(route('edit.profile')); ?>" class="btn btn-info btn-rounded waves-effect waves-light">Edit profile and Password</a>

                                    </div>
                                </div>
                            </div>

                        </div>
</div>
<?php $__env->stopSection(); ?>/

<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\warcat\resources\views/admin/admin_profile.blade.php ENDPATH**/ ?>