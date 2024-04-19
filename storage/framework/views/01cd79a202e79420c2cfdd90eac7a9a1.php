<div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!-- User details -->


                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Menu</li>

                            <li>
                                <a href="<?php echo e(url('/dashboard')); ?>" class="waves-effect">
                                    <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end"></span>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('department')); ?>" class="waves-effect">
                                    <i class="far fa-check-square"></i><span class="badge rounded-pill bg-success float-end"></span>
                                    <span> Add Department</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="far fa-user-circle  "></i>
                                    <span>Director</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="<?php echo e(route('director')); ?>">Add Director</a></li>
                                    <li><a href="<?php echo e(route('assign')); ?>">Assign  Department</a></li>
                                    <li><a href="<?php echo e(route('view.director')); ?>">View </a></li>
                                    <li><a href="<?php echo e(route('director.table')); ?>">Assigned Department </a></li>


                                </ul>
                            </li>


                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="far fa-user  "></i>
                                <span>Secretary</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="<?php echo e(route('secretary')); ?>">Add Secretary</a></li>
                                <li><a href="<?php echo e(route('secassign')); ?>">Assign  Department</a></li>
                                <li><a href="<?php echo e(route('view.Secretary')); ?>">View </a></li>
                                <li><a href="<?php echo e(route('name.sectable')); ?>">Assigned Department </a></li>
                            </ul>
                        </li>



                                    <!--<li><a href="">Gallery section </a></li>--->








                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
<?php /**PATH C:\xampp\htdocs\warcat\resources\views/admin/body/sidebar.blade.php ENDPATH**/ ?>