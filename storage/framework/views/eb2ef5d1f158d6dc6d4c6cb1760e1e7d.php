<?php $__env->startSection('admin'); ?>

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5><a href="<?php echo e(url()->previous()); ?>" class="float-end">Back</a></h5>
                        <h4 class="card-title">Secretary</h4>


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
                                <?php $__currentLoopData = $table; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                                <tr>
                                    <td><?php echo e($i++); ?></td>
                                    <td><?php echo e($item->name); ?></td>
                                    <td><a href="<?php echo e(" /secretary-department/".$item['id']); ?>" class="btn btn-primary sm"
                                            title="view"> <i class="fas fa-eye"></i></a>
                                    <a href="<?php echo e(" /assign-secretary-department/".$item['id']); ?>" class="btn btn-success sm" title="Assign"> <i
                                                    class="fas fa-th-list"></i></a>
                                        </td>

                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div> <!-- end col -->
        </div>
    </div>
</div> <!-- end row -->



<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\warcat\resources\views/admin/secretary/viewsecretary.blade.php ENDPATH**/ ?>