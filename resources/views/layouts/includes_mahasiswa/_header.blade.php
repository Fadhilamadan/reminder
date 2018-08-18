<!-- Top Bar Start -->
<div class="topbar" id="topnav">

    <!-- Top navbar -->
    <div class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="">
                        <a class="logo">
                            <img src="{{ asset('assets_mahasiswa/images/logo.png') }}" alt="logo" class="logo-lg" />
                            <img src="{{ asset('assets_mahasiswa/images/favicon.png') }}" alt="logo" class="logo-sm hidden" />
                        </a>
                    </div>
                </div>

                <div class="navbar-custom navbar-left">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">
                            <li>
                                <a href="{{ URL::to('/user/mahasiswa') }}">
                                    <span><i class="fa fa-calendar"></i></span><span>Calendar</span></a>
                            </li>

                        </ul>
                        <!-- End navigation menu  -->
                    </div>
                </div>

                <!-- Top nav Right menu -->
                <ul class="nav navbar-nav navbar-right top-navbar-items-right pull-right">
                    <li class="top-menu-item-xs">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </li>
                    <!-- <li class="hidden-xs">
                        <form role="search" class="navbar-left app-search pull-left">
                             <input type="text" placeholder="Search..." class="form-control">
                             <a href=""><i class="fa fa-search"></i></a>
                        </form>
                    </li> -->
                    <li class="dropdown top-menu-item-xs">
                        <a href="#" data-target="#" class="dropdown-toggle menu-right-item" data-toggle="dropdown" aria-expanded="true">
                            <i class="mdi mdi-bell"></i> <span class="label label-danger">3</span>
                        </a>
                        <ul class="dropdown-menu p-0 dropdown-menu-lg">
                            <li class="notifi-title"><span class="label label-default pull-right">New 3</span>Notification</li>
                            <li class="list-group notification-list" style="height: 267px;">
                               <div class="slimscroll">
                                   <!-- list item-->
                                   <a href="javascript:void(0);" class="list-group-item">
                                      <div class="media">
                                         <div class="media-left p-r-10">
                                            <em class="fa fa-diamond bg-primary"></em>
                                         </div>
                                         <div class="media-body">
                                            <h5 class="media-heading">A new order has been placed A new order has been placed</h5>
                                            <p class="m-0">
                                                <small>There are new settings available</small>
                                            </p>
                                         </div>
                                      </div>
                                   </a>

                                   <!-- list item-->
                                   <a href="javascript:void(0);" class="list-group-item">
                                      <div class="media">
                                         <div class="media-left p-r-10">
                                            <em class="fa fa-cog bg-warning"></em>
                                         </div>
                                         <div class="media-body">
                                            <h5 class="media-heading">New settings</h5>
                                            <p class="m-0">
                                                <small>There are new settings available</small>
                                            </p>
                                         </div>
                                      </div>
                                   </a>

                                   <!-- list item-->
                                   <a href="javascript:void(0);" class="list-group-item">
                                      <div class="media">
                                         <div class="media-left p-r-10">
                                            <em class="fa fa-bell-o bg-custom"></em>
                                         </div>
                                         <div class="media-body">
                                            <h5 class="media-heading">Updates</h5>
                                            <p class="m-0">
                                                <small>There are <span class="text-primary font-600">2</span> new updates available</small>
                                            </p>
                                         </div>
                                      </div>
                                   </a>

                                   <!-- list item-->
                                   <a href="javascript:void(0);" class="list-group-item">
                                      <div class="media">
                                         <div class="media-left p-r-10">
                                            <em class="fa fa-user-plus bg-danger"></em>
                                         </div>
                                         <div class="media-body">
                                            <h5 class="media-heading">New user registered</h5>
                                            <p class="m-0">
                                                <small>You have 10 unread messages</small>
                                            </p>
                                         </div>
                                      </div>
                                   </a>

                                    <!-- list item-->
                                   <a href="javascript:void(0);" class="list-group-item">
                                      <div class="media">
                                         <div class="media-left p-r-10">
                                            <em class="fa fa-diamond bg-primary"></em>
                                         </div>
                                         <div class="media-body">
                                            <h5 class="media-heading">A new order has been placed A new order has been placed</h5>
                                            <p class="m-0">
                                                <small>There are new settings available</small>
                                            </p>
                                         </div>
                                      </div>
                                   </a>

                                   <!-- list item-->
                                   <a href="javascript:void(0);" class="list-group-item">
                                      <div class="media">
                                         <div class="media-left p-r-10">
                                            <em class="fa fa-cog bg-warning"></em>
                                         </div>
                                         <div class="media-body">
                                            <h5 class="media-heading">New settings</h5>
                                            <p class="m-0">
                                                <small>There are new settings available</small>
                                            </p>
                                         </div>
                                      </div>
                                   </a>
                               </div>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="list-group-item text-right">
                                    <small class="font-600">See all notifications</small>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown top-menu-item-xs">
                        <a href="" class="dropdown-toggle menu-right-item profile" data-toggle="dropdown" aria-expanded="true"><img src="{{ asset('assets_admin/images/users/avatar-1.png') }}" alt="user-img" class="img-circle"> {{ Auth::user()->name }} <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="ti-power-off m-r-10"></i> Logout</a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              {{ csrf_field() }}
                            </form>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>