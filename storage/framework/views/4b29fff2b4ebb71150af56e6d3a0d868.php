<?php $__env->startSection('admin'); ?>

<div class="page-content">
    <div class="container-fluid">


        <div class="col-12">
            <div class="card">
                <div class="card-body">
                      <h5><a href="<?php echo e(url()->previous()); ?>" class="float-end">Back</a></h5>
                    <h4 class="card-title font-weight-bold mb-3"><span class="text-primary m-2"> Name:</span><?php echo e($director->name); ?></h4>

                    <form action="<?php echo e(route('update.department')); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="id"  value="<?php echo e($director->id); ?>">


                        <input  type="hidden"  name="director_id" value="<?php echo e($director->id); ?>">

                        <div class="mb-3 col-6 m-2" >
                            <label class="form-label">Assign Department</label>
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
                            <div class="alert alert-danger"><?php echo e($message); ?></div>
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









        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\warcat\resources\views/admin/assign/assigndirecid.blade.php ENDPATH**/ ?>