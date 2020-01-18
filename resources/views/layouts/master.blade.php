<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('assets/concept_dashboard/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link href="{{ url('assets/concept_dashboard/vendor/fonts/circular-std/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('assets/concept_dashboard/libs/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('assets/concept_dashboard/vendor/fonts/fontawesome/css/fontawesome-all.css') }}">
    <link rel="stylesheet" href="{{ url('assets/concept_dashboard/vendor/charts/chartist-bundle/chartist.css') }}">
    <link rel="stylesheet" href="{{ url('assets/concept_dashboard/vendor/charts/morris-bundle/morris.css') }}">
    <link rel="stylesheet" href="{{ url('assets/concept_dashboard/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/concept_dashboard/vendor/charts/c3charts/c3.css') }}">
    <link rel="stylesheet" href="{{ url('assets/concept_dashboard/vendor/fonts/flag-icon-css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/main.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>
    <title>GameStore</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="index.html">Game&middot;Store</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                            <div id="custom-search" class="top-search-bar">
                                <input class="form-control" type="text" placeholder="Search..">
                            </div>
                        </li>
                        <li class="nav-item dropdown notification">
                            <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span class="indicator"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                                <li>
                                    <div class="notification-title"> Notification</div>
                                    <div class="notification-list">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item list-group-item-action active">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/concept_dashboard/images/avatar-2.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Jeremy Rakestraw</span>accepted your invitation to join the team.
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/concept_dashboard/images/avatar-3.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">John Abraham </span>is now following you
                                                        <div class="notification-date">2 days ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/concept_dashboard/images/avatar-4.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Monaan Pechi</span> is watching your main repository
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/concept_dashboard/images/avatar-5.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Jessica Caruso</span>accepted your invitation to join the team.
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-footer"> <a href="#">View all notifications</a></div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown connection">
                            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-fw fa-th"></i> </a>
                            <ul class="dropdown-menu dropdown-menu-right connection-dropdown">
                                <li class="connection-list">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/concept_dashboard/images/github.png" alt="" > <span>Github</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/concept_dashboard/images/dribbble.png" alt="" > <span>Dribbble</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/concept_dashboard/images/dropbox.png" alt="" > <span>Dropbox</span></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/concept_dashboard/images/bitbucket.png" alt=""> <span>Bitbucket</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/concept_dashboard/images/mail_chimp.png" alt="" ><span>Mail chimp</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/concept_dashboard/images/slack.png" alt="" > <span>Slack</span></a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="conntection-footer"><a href="#">More</a></div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/concept_dashboard/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">{{Auth::user()->name}} </h5>
                                    <span class="status"></span><span class="ml-2">
                                        @if(Auth::user()->isAdmin())
                                            Administrador
                                        @else
                                            Cliente
                                        @endif
                                    </span>
                                </div>
                                <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                VideoGames
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="{{url('games')}}"  ><i class="fa fa-fw fa-gamepad"></i>Games <span class="badge badge-success">6</span></a>
                                <div id="submenu-1" class="collapse submenu" style=""></div>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="{{url('characters')}}"  ><i class="fa fa-fw fa-user-circle"></i>Characters <span class="badge badge-success">6</span></a>
                                <div id="submenu-1" class="collapse submenu" style=""></div>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="{{url('genres')}}"  ><i class="fa fa-fw fa-list-alt"></i>Genres <span class="badge badge-success">6</span></a>
                                <div id="submenu-1" class="collapse submenu" style=""></div>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="{{url('platforms')}}"  ><i class="fa fa-fw fa-tv"></i>Platforms <span class="badge badge-success">6</span></a>
                                <div id="submenu-1" class="collapse submenu" style=""></div>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="{{url('companies')}}"  ><i class="fa fa-fw fa-building"></i>Companies <span class="badge badge-success">6</span></a>
                                <div id="submenu-1" class="collapse submenu" style=""></div>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="{{url('reviews')}}"  ><i class="fa fa-fw fa-file"></i>Reviews <span class="badge badge-success">6</span></a>
                                <div id="submenu-1" class="collapse submenu" style=""></div>
                            </li>
                            <li class="nav-divider">
                                Sales
                            </li>
                            @if(Auth::User()->role == 2)
                                <li class="nav-item">
                                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-6" aria-controls="submenu-6">
                                        <i class="fas fa-fw fa-heart"></i> My Games </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-6" aria-controls="submenu-6"><i class="fas fa-fw fa-list-ol"></i> My Wishlist </a>
                                </li>
                            @else
                                <h4>Usted noooo</h4>
                            @endif
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header border-bottom">
                                <h1 style="text-align: center;" class="display-5">@yield('title')</h1>
                                <p class="pageheader-text">Pagehheader?.</p>
                                <!-- <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">E-Commerce Dashboard Template</li>
                                        </ol>
                                    </nav>
                                </div> -->
                            </div>
                        </div>
                    </div>

                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->

            @yield('content')


                </div>
            </div>
            
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <div class="footer" style="bottom: 0; padding-left: 190px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                     Copyright © 2019 JuanPabloXT &middot El Pichi. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a>.
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="text-md-right footer-links d-none d-sm-block">
                        <a href="javascript: void(0);">About</a>
                        <a href="javascript: void(0);">Support</a>
                        <a href="javascript: void(0);">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end footer -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="{{ url('assets/concept_dashboard/vendor/jquery/jquery-3.3.1.min.js') }}"></script>
    <!-- bootstap bundle js -->
    <script src="{{ url('assets/concept_dashboard/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
    <!-- slimscroll js -->
    <script src="{{ url('assets/concept_dashboard/vendor/slimscroll/jquery.slimscroll.js') }}"></script>
    <!-- main js -->
    <script src="{{ url('assets/concept_dashboard/libs/js/main-js.js') }}"></script>

    <!-- CHART LIBS DISABLED BECAUSE THEY AREN'T USED -->

    <!-- chart chartist js -->
    <!-- <script src="{{ url('assets/concept_dashboard/vendor/charts/chartist-bundle/chartist.min.js') }}"></script> -->
    <!-- sparkline js -->
    <!-- <script src="{{ url('assets/concept_dashboard/vendor/charts/sparkline/jquery.sparkline.js') }}"></script> -->
    <!-- morris js -->
    <!-- <script src="{{ url('assets/concept_dashboard/vendor/charts/morris-bundle/raphael.min.js') }}"></script> -->
    <!-- <script src="{{ url('assets/concept_dashboard/vendor/charts/morris-bundle/morris.js') }}"></script> -->
    <!-- chart c3 js -->
    <!-- <script src="{{ url('assets/concept_dashboard/vendor/charts/c3charts/c3.min.js') }}"></script> -->
    <!-- <script src="{{ url('assets/concept_dashboard/vendor/charts/c3charts/d3-5.4.0.min.js') }}"></script> -->
    <!-- <script src="{{ url('assets/concept_dashboard/vendor/charts/c3charts/C3chartjs.js') }}"></script> -->
    <!-- <script src="{{ url('assets/concept_dashboard/libs/js/dashboard-ecommerce.js') }}"></script> -->
</body>

</html>
