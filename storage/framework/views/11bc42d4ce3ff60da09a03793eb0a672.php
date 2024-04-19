<?php $__env->startSection('admin'); ?>

<div class="page-content">
 <div class="container-fluid">


    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5><a href="<?php echo e(url()->previous()); ?>" class="float-end">Back</a></h5>
                <h4 class="card-title">Add Director</h4>
                 <form action="<?php echo e(Route('save.director')); ?>"  method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="row mb-3 mt-3">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Director Name<span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" placeholder="Enter Director Name" id="example-text-input" name="name">
                    </div>
                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="alert text-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="row mb-3">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Phone No.<span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" placeholder="Enter Phone no." id="example-text-input" name="phone">
                    </div>
                    <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="alert text-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="row mb-3">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Email<span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" placeholder="Enter email" id="example-text-input" name="email">
                    </div>
                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="alert text-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

             <input type="submit"  class="btn btn-success btn-rounded waves-effect waves-light"   name="submit" value="Add Director">
        </form>
                <!-- end row -->
            </div>
        </div>


    </div> <!-- end col -->
</div>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\warcat\resources\views/admin/director/director.blade.php ENDPATH**/ ?>