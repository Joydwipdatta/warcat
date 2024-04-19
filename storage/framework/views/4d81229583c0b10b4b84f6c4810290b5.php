<?php $__env->startSection('admin'); ?>

<div class="page-content">
    <div class="container-fluid">


        <div class="col-12">
            <div class="card">
                <div class="card-body">
                   <h5><a href="<?php echo e(url()->previous()); ?>" class="float-end">Back</a></h5>
                    <h4 class="card-title">Assign Department</h4>

                    <form action="<?php echo e(route('save.assign')); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                    <div class="mb-3 col-6">
                        <label class="form-label">Director<span class="text-danger">*</span></label>
                        <select class="form-control select2" data-select2-id="1"
                                tabindex="-1" aria-hidden="true" name="director_id">
                            <option value="">Select</option>
                           <?php $__currentLoopData = $director; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $direct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($direct->id); ?>"><?php echo e($direct->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </select>
                        <?php $__errorArgs = ['director_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="alert text-danger">Director Name cannot be blank</div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    </div>
                    <div class="mb-3 col-6">
                        <label class="form-label">Assign Department<span class="text-danger">*</span></label>
                        <select class="select2 form-control select2-multiple" multiple="multiple" name="department_id[]" data-placeholder="Choose ...">
                            <?php $__currentLoopData = $department; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <?php $__errorArgs = ['department_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="alert text-danger">Department field cannot be blank</div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>


                    <input type="submit" class="btn btn-success btn-rounded waves-effect waves-light" name="submit"
                        value="Assign Department">
                    </form>
                    </div>
                </div>









      </div >
    </div >
</div >
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\warcat\resources\views/admin/assign/assigndirector.blade.php ENDPATH**/ ?>