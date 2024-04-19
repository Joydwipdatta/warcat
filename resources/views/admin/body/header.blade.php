<header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
               <div class="navbar-brand-box">


                            <a href="/dashboard" class="logo logo-light">
                               <span class="logo-sm">
                                    {{-- <img src="{{asset('backend/assets/images/Group-53.png')}}" alt="logo-sm-light" height="auto" width="40px"> --}}
                               {{-- <p style="color:white">Master Database</p> --}}
                                </span>
                                <span class="logo-lg">
                                    {{-- <img src="{{asset('backend/assets/images/Group-53.png')}}" alt="logo-light" height="auto" width="60px"> --}}
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
                                {{-- <img class="rounded-circle header-profile-user" src="{{asset('backend/assets/images/Group-53.png')}}"
                                    alt="Header Avatar"> --}}
                                <span class="d-none d-xl-inline-block ms-1"><!--to show the name of dynamically--></span>

                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>


                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                {{-- @if (Auth::user()->utype == 'ADM') --}}
                                <a class="dropdown-item" href="{{route('admin.profile')}}"><i class="ri-user-line align-middle me-1"></i> Profile</a>
                                {{-- <a class="dropdown-item" href="{{route('manager')}}"><i class="ri-user-line align-middle me-1"></i> Add Manager</a> --}}
                                {{-- @endif --}}







                                   <div class="dropdown-divider"></div>
                                    <a class="dropdown-item text-danger" href="{{route('admin.logout')}}"><i
                                            class="ri-shut-down-line align-middle me-1 text-danger"></i> Logout</a>
                                    </div>




                        </div>
                    </div>
                </div>
            </header>
