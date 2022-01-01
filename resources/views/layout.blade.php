<!doctype html>
<html lang="en">

<!-- 
* ---------------------------------------------
* Hey there, What are you looking for in Here ?
* ---------------------------------------------
* Welcome to Laradmin - Developed by Bal Sankar

* Interested in this Application
* visit our Github www.github.com/balworld/bw-laradmin
* our Website www.balworld.in
* Email us on info@balworld.in

* Licensed under GNU General Public License v3.0
* Developed by Bal Sankar. Made with Love in Thissur.

-->
<?php $strings= array('Swapping time and space...', 'A E I O U are Vowels... What about U?', 'To Infinity and Beyond...', 'Hungry? Grab a Snickers...', 'Epic is waiting for you...', 'Dont Panic.. Just a loading Screen','Im Watching you :P','Look Out Behind You :P','Keep Refreshing... To Find More','Everything is Awesome','Why dont you order a sandwich?','Counting backwards from Infinity','Why so serious?','I feel like im supposed to be loading something...','Granting wishes...','Computing the secret to life, the universe, and everything.','Winter is coming...','Loading funny message...','Alt-F4 speeds things up.','Work, work...');
$random_str = $strings[rand(0,18)];
?>

<head>
    <meta charset="utf-8" />
    <title>HR App by Bal Sankar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Design and Developed by Bal Sankar" name="description" />
    <meta content="Bal Sankar" name="author" />

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <link href="/bw-corp/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!-- DataTables -->
    <link href="/bw-corp/css/datatable-bs4.css" rel="stylesheet" type="text/css" />
    <link href="/bw-corp/css/datatable-responsive.css" rel="stylesheet" type="text/css" />

    <!-- Main Style -->
    <link href="/bw-corp/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="/bw-corp/css/bw-corp.css?v.4.0" rel="stylesheet" type="text/css" />

    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />
</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">

                    <button type="button" class="btn btn-sm px-3 font-size-24 header-item ml-2" id="vertical-menu-btn">
                        <i class="mdi mdi-menu"></i>
                    </button>

                    <!-- App Search-->
                    <div class="d-none d-lg-block pt-3">

                        <div class="nav">
                            <li class="nav-item pl-4">
                                <a class="nav-link" href="https://www.vncdigitalservices.com/"
                                    target="_blank">Website</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.vncdigitalservices.com/devops/"
                                    target="_blank">Solutions</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.vncdigitalservices.com/career/"
                                    target="_blank">Careers</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.vncdigitalservices.com/contact-us/"
                                    target="_blank" tabindex="-1">Contact</a>
                            </li>

                        </div>
                    </div>
                </div>

                <div class="d-flex">

                    <div class="dropdown d-inline-block d-lg-none ml-2">
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                            aria-labelledby="page-header-search-dropdown">

                            <form class="p-3">
                                <div class="form-group m-0">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search ..."
                                            aria-label="Recipient's username">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit"><i
                                                    class="mdi mdi-magnify"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item" id="page-header-user-dropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <!--<img class="rounded-circle header-profile-user" src="/img/user.jpg" alt="Header Avatar">-->
                            <div class="profileImage">{{ substr(Auth::user()->name, 0, 2) }}</div>
                            <span class="ml-1">
                                {{ Auth::user()->name }}
                            </span>
                            <i class="mdi mdi-chevron-down"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- item-->
                            <a href="#" class="dropdown-item" data-toggle="modal" data-target="#userprofile"><i
                                    class="mdi mdi-account-settings font-size-16 align-middle mr-1"></i> Profile</a>

                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i
                                    class="mdi mdi-logout font-size-16 align-middle mr-1"></i> Logout</a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>

                </div>
            </div>

        </header>

        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <div class="h-100 custom-scroll">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title">Resume</li>

                        <li>
                            <a href="/resumes">
                                <div class="d-inline-block icons-sm mr-1"><i class="ti-view-list-alt px-1"></i></div>
                                <span>All Resumes <span class="ml-2 badge badge-danger">Ajax</span></span>
                            </a>
                        </li>

                        <li>
                            <a href="/add">
                                <div class="d-inline-block icons-sm mr-1"><i class="ti-plus px-1"></i>
                                </div>
                                <span>Add New Resume</span>
                            </a>
                        </li>
                        <li class="menu-title">Job Applications</li>
                        <li>
                            <a href="/jobapplications">
                                <div class="d-inline-block icons-sm mr-1"><i class="ti-layout-tab px-1"></i></div>
                                <span>Job Applications <span class="ml-2 badge badge-danger">Ajax</span></span>
                            </a>
                        </li>
                        <li class="menu-title">Job Lisiting</li>
                        <li>
                            <a href="/jobs">
                                <div class="d-inline-block icons-sm mr-1"><i class="ti-bag px-1"></i></div>
                                <span>All Job Lisiting <span class="ml-2 badge badge-success">Updated</span></span>
                            </a>
                        </li>
                        <li>
                            <a href="/addjob">
                                <div class="d-inline-block icons-sm mr-1"><i class="ti-plus px-1"></i>
                                </div>
                                <span>Add New Job <span class="ml-2 badge badge-primary">New</span></span>
                            </a>
                        </li>

                        <li class="menu-title">Users</li>
                        <li>
                            <a href="/users">
                                <div class="d-inline-block icons-sm mr-1"><i class="ti-user px-1"></i>
                                </div>
                                <span>All Users <span class="ml-2 badge badge-primary">New</span></span>
                            </a>
                        </li>

                        <li class="menu-title">Theme</li>
                        <li onclick="themeToggle()" data-toggle="tooltip"
                            title="Theme Preference is stored in your System Cache" data-placement="bottom">
                            <a>
                                <div class="d-inline-block icons-sm mr-1"><i class="ti-shine"></i>
                                </div>
                                <span>Toogle Dark/ Light Mode</span>
                            </a>
                        </li>

                        <li class="menu-title">Developer</li>

                        <li>
                            <a data-toggle="modal" data-target="#about">
                                <div class="d-inline-block icons-sm mr-1"><i class="ti-star"></i>
                                </div>
                                <span>About</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/balzankar/HRApp" target="_blank">
                                <div class="d-inline-block icons-sm mr-1"><i class="ti-github"></i>
                                </div>
                                <span>Github</span>
                            </a>

                        </li>
                        <li>
                            <a href="mailto:bal.shankar@vncservices.in" target="_blank">
                                <div class="d-inline-block icons-sm mr-1"><i class="ti-email"></i>
                                </div>
                                <span>Report a Bug</span>
                            </a>
                        </li>

                    </ul>

                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                @if(Session::has('message'))
                <div class="alert alert-msg alert-dismissible fade show animated fadeOut" role="alert">
                    {{ Session::get('message') }}
                    <button type="button" class="close text-dark" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif

                @yield('content')
            </div>
            <!-- End Page-content -->


            <!--  modal Profile -->
            <div id="userprofile" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title mt-0">User Profile</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <form action="" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3 d-flex justify-content-center profileImageCover">
                                    <div class="profileImageBig">{{ substr(Auth::user()->name, 0, 2) }}</div>
                                </div>
                                <div class="col-md-12 pt-2 mb-3">
                                    <label for="profilename">Name</label>
                                    <input type="text" class="form-control bg-light" style="cursor:no-drop;"
                                        id="profilename" name="name" placeholder="name" value="{{ Auth::user()->name }}"
                                        disabled>
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="profileemail">Email</label>
                                    <input type="email" class="form-control bg-light" style="cursor:no-drop;"
                                        id="profileemail" name="email" placeholder="email"
                                        value="{{ Auth::user()->email }}" disabled>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="profileemail">Role</label>
                                    <input type="text" class="form-control bg-light" style="cursor:no-drop;"
                                        id="profileemail" name="email" placeholder="role"
                                        value="@if (Auth::user()->role == 0) User @else Admin @endif" disabled>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <a class="btn btn-secondary text-white" data-dismiss="modal">Close</a>
                                </div>

                            </form>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->


            <!--  modal About -->
            <div id="about" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title mt-0">About</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div>
                                <h2>HR-App</h2>
                                <p class="pt-2">Based on BW-HRApp<br>Laravel 7.3</p>
                                <p>Designed and Developed by Bal Sankar. All Rights Reserved.</p>
                                <a class="btn btn-dark btn-rounded dropdown-toggle"
                                    href="https://github.com/balzankar/HRApp" target="_blank">View on
                                    Github
                                </a>
                            </div>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->

            <!--  modal About -->
            <div id="update" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title mt-0">Update</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div>
                                <h3>This Feature will be added in Next Update</h3>
                                <p>Designed and Developed by Bal Sankar.</p>
                                <a class="btn btn-dark btn-rounded dropdown-toggle"
                                    href="https://github.com/balzankar/HRApp" target="_blank">View on
                                    Github
                                </a>
                            </div>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            ©2020 HR-App v.4.0.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-right d-none d-sm-block">
                                Designed and Developed by <a href="https://www.balworld.in" target="_blank">Bal
                                    Sankar</a>. All Rights Reserved.
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

        <!-- <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>  -->
        <div id="preloader">
            <img src="/img/loading-sm.gif"><span class="d-inline text-center small"><?php echo $random_str; ?></span>
        </div>

    </div>
    <!-- END layout-wrapper -->

    <!-- BW JAVASCRIPT -->
    <script src="/bw-corp/js/jquery.min.js"></script>
    <script src="/bw-corp/js/bootstrap.bundle.min.js"></script>
    <script src="/bw-corp/js/metisMenu.min.js"></script>
    <script src="/bw-corp/js/bw.animate.min.js"></script>
    <script src="/bw-corp/js/unicons.js"></script>

    <script src="/bw-corp/js/jquery.dataTables.min.js"></script>
    <script src="/bw-corp/js/dataTables.bootstrap4.min.js"></script>
    <script src="/bw-corp/js/dataTables.responsive.min.js"></script>
    <script src="/bw-corp/js/responsive.bootstrap4.min.js"></script>


    <script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.colVis.min.js"></script>

    <script src="/bw-corp/js/form-validation.init.js"></script>
    <script src="/bw-corp/js/balworld_laravel.js"></script>
    <script src="/bw-corp/js/bw-datatable.js?v1.15"></script>

    <script src="https://cdn.tiny.cloud/1/txa69t2v0nnipgrayui3ibhspgbccbwkwt6okm1xrmw1d55d/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script>
    tinymce.init({
        selector: '#tinyeditor'
    });
    </script>


    <script>
    // On page load set the theme.
    (function() {
        let onpageLoad = localStorage.getItem("theme") || "";
        let element = document.body;
        element.classList.add(onpageLoad);
        document.getElementById("theme").textContent =
            localStorage.getItem("theme") || "light";
    })();

    function themeToggle() {
        let element = document.body;
        element.classList.toggle("dark-mode");

        let theme = localStorage.getItem("theme");
        if (theme && theme === "dark-mode") {
            localStorage.setItem("theme", "");
        } else {
            localStorage.setItem("theme", "dark-mode");
        }

        document.getElementById("theme").textContent = localStorage.getItem("theme");
    }
    </script>

    <script>
    $(window).on('load', function() {
        if ($('#preloader').length) {
            $('#preloader').delay(100).fadeOut('slow', function() {
                $(this).remove();
            });
        }
    });
    </script>

</body>

</html>
