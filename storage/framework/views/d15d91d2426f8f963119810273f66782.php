<header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
               <div class="navbar-brand-box">


                            <a href="/dashboard" class="logo logo-light">
                               <span class="logo-sm">
                                    
                               
                                </span>
                                <span class="logo-lg">
                                    
                                    <p style="color:white;font-size:25px">Master Database</p>
                                </span>
                            </a>
                        </div>
                        <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                            <i class="ri-menu-2-line align-middle"></i>
                        </button>

                        <!---<button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                            <i class="ri-menu-2-line align-middle"></i>
                        </button>--->

                        <!-- App Search-->
                        <form class="app-search d-none d-lg-block">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="ri-search-line"></span>
                            </div>
                        </form>


                    </div>

                    <div class="d-flex">




                        <div class="dropdown d-none d-lg-inline-block ms-1">
                            <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                                <i class="ri-fullscreen-line"></i>
                            </button>
                        </div>
          <!-- condition of  controller to call the profile picture-->




                        <div class="dropdown d-inline-block user-dropdown">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <!---admin header profile picture--->
                                
                                <span class="d-none d-xl-inline-block ms-1"><!--to show the name of dynamically--></span>

                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>


                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                
                                <a class="dropdown-item" href="<?php echo e(route('admin.profile')); ?>"><i class="ri-user-line align-middle me-1"></i> Profile</a>
                                
                                







                                   <div class="dropdown-divider"></div>
                                    <a class="dropdown-item text-danger" href="<?php echo e(route('admin.logout')); ?>"><i
                                            class="ri-shut-down-line align-middle me-1 text-danger"></i> Logout</a>
                                    </div>




                        </div>
                    </div>
                </div>
            </header>
<?php /**PATH C:\xampp\htdocs\warcat\resources\views/admin/body/header.blade.php ENDPATH**/ ?>