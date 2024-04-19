<?php $__env->startSection('admin'); ?>

<div class="page-content">
    <div class="container-fluid">


        <div class="col-12">
            <div class="card">
                <div class="card-body">
                      <h5><a href="<?php echo e(url()->previous()); ?>" class="float-end">Back</a></h5>
                    <h4 class="card-title">Add Department</h4>
                    <form action="<?php echo e(route('save.department')); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="row mb-3 mt-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Department Name<span class="text-danger">*</span></label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" placeholder="Enter Department Name"
                                    id="example-text-input" name="name">
                            </div>
                            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="alert text-danger">Department Name cannot be blank</div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>


                        <input type="submit" class="btn btn-success btn-rounded waves-effect waves-light" name="submit"
                            value="Add Department">
                    </form>
                    <!-- end row -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Department</h4>


                            <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Sl No.</th>
                                        <th>Name</th>
                                        <th>operation</th>
                                    </tr>
                                </thead>
                                <?php
                                $i=1;
                                ?>


                                <tbody>
                                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                                    <tr>
                                        <td><?php echo e($i++); ?></td>
                                        <td><?php echo e($item->name); ?></td>
                                        <td><a href="<?php echo e("/delete/department/".$item['id']); ?>" class="btn btn-danger sm" title="Delete Data" id="delete"> <i
                                                class="fas fa-trash"></i></a></td>

                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->


        </div> <!-- end col -->
    </div>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\warcat\resources\views/admin/department/department.blade.php ENDPATH**/ ?>