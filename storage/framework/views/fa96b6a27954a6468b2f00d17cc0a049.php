<?php $__env->startSection('admin'); ?>

<div class="page-content">
    <div class="container-fluid">


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5><a href="<?php echo e(url()->previous()); ?>" class="float-end">Back</a></h5>
                        <?php if($departments->count() > 0): ?>
                        <h4 class="card-title">Assigned Department</h4>
                        <table id="datatable" class="table table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>Sl No.</th>
                                    <th>Department</th>
                                    <th>operation</th>
                                </tr>
                            </thead>
                            <?php
                            $i=1;
                            ?>


                            <tbody>


                               <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                                <tr>
                                    <td><?php echo e($i++); ?></td>
                                    <td><?php echo e($item->department->name); ?></td>
                                    <td><a href="<?php echo e(" /delete/assigndept/".$item['id']); ?>" class="btn btn-danger sm" title="Delete Data"
                                            id="delete"> <i class="fas fa-trash-alt"></i></a></td>

                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                            </tbody>
                        </table>
                        <?php else: ?>
                        <h3 class="text-danger">Department not assigned yet</h3>
                        <?php endif; ?>


                    </div>
                </div>
            </div> <!-- end col -->
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\warcat\resources\views/admin/director/viewassigndept.blade.php ENDPATH**/ ?>