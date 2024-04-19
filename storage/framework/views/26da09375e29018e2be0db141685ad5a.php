<?php $__env->startSection('admin'); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="page-content">
<div class="container-fluid">

<div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="card-title">Edit Profile page</h4>
                                      <form action="<?php echo e(route('store.profile')); ?>" method="Post" enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" name="id"  value= "<?php echo e($editData->id); ?>">
                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" value="<?php echo e($editData->name); ?>"  name="name" id="example-text-input">
                                            </div>
                                        </div>

                                        <!-- end row -->
                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" value="<?php echo e($editData->email); ?>"  name="email" id="example-text-input">
                                            </div>
                                        </div>
                                            <!-- end row -->
                                            <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Old password</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="password" value=""  name="oldpassword" id="oldpassword">
                                                </div>
                                            </div>

                                             <!-- end row -->
                                             <div class="row mb-3">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">New password</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="password" value=""  name="newpassword" id="newpassword">
                                                </div>
                                            </div>

                                            <!-- end row -->

                                         <!-- end row -->
                                         <input type="submit"  class="btn btn-success btn-rounded waves-effect waves-light"   name="submit" value="update Profile">

                                        </form>
                                        <!-- end row -->
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
</div>
</div>

<script type="text/javascript">

  $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
  });

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\warcat\resources\views/admin/edit_admin_profile.blade.php ENDPATH**/ ?>