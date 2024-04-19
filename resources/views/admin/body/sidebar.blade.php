<div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!-- User details -->


                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Menu</li>

                            <li>
                                <a href="{{url('/dashboard')}}" class="waves-effect">
                                    <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end"></span>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('department') }}" class="waves-effect">
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
                                    <li><a href="{{ route('director') }}">Add Director</a></li>
                                    <li><a href="{{ route('assign') }}">Assign  Department</a></li>
                                    <li><a href="{{ route('view.director') }}">View </a></li>
                                    <li><a href="{{ route('director.table') }}">Assigned Department </a></li>


                                </ul>
                            </li>


                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <i class="far fa-user  "></i>
                                <span>Secretary</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{ route('secretary') }}">Add Secretary</a></li>
                                <li><a href="{{ route('secassign') }}">Assign  Department</a></li>
                                <li><a href="{{ route('view.Secretary') }}">View </a></li>
                                <li><a href="{{ route('name.sectable') }}">Assigned Department </a></li>
                            </ul>
                        </li>



                                    <!--<li><a href="">Gallery section </a></li>--->








                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
