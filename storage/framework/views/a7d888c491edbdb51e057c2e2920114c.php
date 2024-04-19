<?php $__env->startSection('admin'); ?>

<div class="page-content">
    <div class="container-fluid">
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
                                    <th>Secretary Name</th>
                                    <th>Assigned Department</th>
                                </tr>
                            </thead>
                            <?php
                            $i=1;
                            ?>


                            <tbody>


                                <?php $__currentLoopData = $department; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($i++); ?></td>
                                    <td><?php echo e($item->secretary->name); ?></td>
                                    <td>
                                        <?php echo e($item->department->name); ?>

                                    </td>
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

<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\warcat\resources\views/admin/secretary/sectable.blade.php ENDPATH**/ ?>