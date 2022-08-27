
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Dashboard | {{ getenv('APP_NAME') }} - Minimal Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="{{ getenv('APP_NAME') }} Project" name="description" />
    <meta content="{{ getenv('NAME') }}" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.ico') }}">

    <!-- DataTables -->
    <link href="{{ asset('backend/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="{{ asset('backend/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- plugin css -->
    <link href="{{ asset('backend/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css"') }} rel="stylesheet" type="text/css" />

    <!-- preloader css -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/preloader.min.css') }}" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="{{ asset('backend/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('backend/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
</head>

<body>

<!-- <body data-layout="horizontal"> -->

<!-- Begin page -->
<div id="layout-wrapper">


    <header id="page-topbar">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{ asset('backend/assets/images/logo-sm.svg') }}" alt="" height="24">
                                </span>
                        <span class="logo-lg">
                                    <img src="{{ asset('backend/assets/images/logo-sm.svg') }}" alt="" height="24"> <span class="logo-txt">{{ getenv('APP_NAME') }}</span>
                                </span>
                    </a>

                    <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{ asset('backend/assets/images/logo-sm.svg') }}" alt="" height="24">
                                </span>
                        <span class="logo-lg">
                                    <img src="{{ asset('backend/assets/images/logo-sm.svg') }}" alt="" height="24"> <span class="logo-txt">{{ getenv('APP_NAME') }}</span>
                                </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 font-size-16 header-item" id="vertical-menu-btn">
                    <i class="fa fa-fw fa-bars"></i>
                </button>

                <!-- App Search-->
                <form class="app-search d-none d-lg-block">
                    <div class="position-relative">
                        <input type="text" class="form-control" placeholder="Search...">
                        <button class="btn btn-primary" type="button">
                            <i class="bx bx-search-alt align-middle"></i>
                        </button>
                    </div>
                </form>
            </div>

            <div class="d-flex">

                <div class="dropdown d-inline-block d-lg-none ms-2">
                    <button type="button" class="btn header-item" id="page-header-search-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i data-feather="search" class="icon-lg"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                         aria-labelledby="page-header-search-dropdown">

                        <form class="p-3">
                            <div class="form-group m-0">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search ..." aria-label="Search Result">

                                    <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="dropdown d-none d-sm-inline-block">
                    <button type="button" class="btn header-item" id="mode-setting-btn">
                        <i data-feather="moon" class="icon-lg layout-mode-dark"></i>
                        <i data-feather="sun" class="icon-lg layout-mode-light"></i>
                    </button>
                </div>

                <div class="dropdown d-none d-lg-inline-block ms-1">
                    <button type="button" class="btn header-item"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i data-feather="grid" class="icon-lg"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                        <div class="p-2">
                            <div class="row g-0">
                                <div class="col">
                                    <a class="dropdown-icon-item" href="#">
                                        <img src="{{ asset('backend/assets/images/brands/github.png') }}" alt="Github">
                                        <span>GitHub</span>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="dropdown-icon-item" href="#">
                                        <img src="{{ asset('backend/assets/images/brands/bitbucket.png') }}" alt="bitbucket">
                                        <span>Bitbucket</span>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="dropdown-icon-item" href="#">
                                        <img src="{{ asset('backend/assets/images/brands/dribbble.png') }}" alt="dribbble">
                                        <span>Dribbble</span>
                                    </a>
                                </div>
                            </div>

                            <div class="row g-0">
                                <div class="col">
                                    <a class="dropdown-icon-item" href="#">
                                        <img src="{{ asset('backend/assets/images/brands/dropbox.png') }}" alt="dropbox">
                                        <span>Dropbox</span>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="dropdown-icon-item" href="#">
                                        <img src="{{ asset('backend/assets/images/brands/mail_chimp.png') }}" alt="mail_chimp">
                                        <span>Mail Chimp</span>
                                    </a>
                                </div>
                                <div class="col">
                                    <a class="dropdown-icon-item" href="#">
                                        <img src="{{ asset('backend/assets/images/brands/slack.png') }}" alt="slack">
                                        <span>Slack</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item noti-icon position-relative" id="page-header-notifications-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i data-feather="bell" class="icon-lg"></i>
                        <span class="badge bg-danger rounded-pill">5</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                         aria-labelledby="page-header-notifications-dropdown">
                        <div class="p-3">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h6 class="m-0"> Notifications </h6>
                                </div>
                                <div class="col-auto">
                                    <a href="#!" class="small text-reset text-decoration-underline"> Unread (3)</a>
                                </div>
                            </div>
                        </div>
                        <div data-simplebar style="max-height: 230px;">
                            <a href="#!" class="text-reset notification-item">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 me-3">
                                        <img src="{{ asset('backend/assets/images/users/avatar-3.jpg') }}" class="rounded-circle avatar-sm" alt="user-pic">
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-1">James Lemire</h6>
                                        <div class="font-size-13 text-muted">
                                            <p class="mb-1">It will seem like simplified English.</p>
                                            <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span>1 hour ago</span></p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="#!" class="text-reset notification-item">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 avatar-sm me-3">
                                                <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                    <i class="bx bx-cart"></i>
                                                </span>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-1">Your order is placed</h6>
                                        <div class="font-size-13 text-muted">
                                            <p class="mb-1">If several languages coalesce the grammar</p>
                                            <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span>3 min ago</span></p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="#!" class="text-reset notification-item">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 avatar-sm me-3">
                                                <span class="avatar-title bg-success rounded-circle font-size-16">
                                                    <i class="bx bx-badge-check"></i>
                                                </span>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-1">Your item is shipped</h6>
                                        <div class="font-size-13 text-muted">
                                            <p class="mb-1">If several languages coalesce the grammar</p>
                                            <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span>3 min ago</span></p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="#!" class="text-reset notification-item">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 me-3">
                                        <img src="{{ asset('backend/assets/images/users/avatar-6.jpg') }}" class="rounded-circle avatar-sm" alt="user-pic">
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-1">Salena Layfield</h6>
                                        <div class="font-size-13 text-muted">
                                            <p class="mb-1">As a skeptical Cambridge friend of mine occidental.</p>
                                            <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span>1 hour ago</span></p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="p-2 border-top d-grid">
                            <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                                <i class="mdi mdi-arrow-right-circle me-1"></i> <span>View More..</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item right-bar-toggle me-2">
                        <i data-feather="settings" class="icon-lg"></i>
                    </button>
                </div>
                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item bg-soft-light border-start border-end" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="rounded-circle header-profile-user" src="{{ asset('backend/assets/images/users/avatar-1.jpg') }}"
                             alt="Header Avatar">
                        <span class="d-none d-xl-inline-block ms-1 fw-medium">{{ auth()->user()->name }}</span>
                        <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <a class="dropdown-item" href="apps-contacts-profile.html"><i class="mdi bx bx-user mdi-face-profile font-size-16 align-middle me-1"></i> Profile</a>
                        <a class="dropdown-item" href="auth-lock-screen.html"><i class="mdi mdi-lock font-size-16 align-middle me-1"></i> Lock Screen</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="mdi mdi-logout font-size-16 align-middle me-1"></i> Logout</a>

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
        <div data-simplebar class="h-100">

            <!--- Sidemenu -->
            <div id="sidebar-menu">
                <!-- Left Menu Start -->
                <ul class="metismenu list-unstyled" id="side-menu">
                    <li class="menu-title" data-key="t-menu">Menu</li>

                    <li>
                        <a href="{{ route('home') }}">
                            <i data-feather="home"></i>
                            <span data-key="t-dashboard">Dashboard</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('roles.index') }}">
                            <i data-feather="home"></i>
                            <span data-key="t-dashboard">Roles</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('roles.index') }}">
                            <i data-feather="home"></i>
                            <span data-key="t-dashboard">Manage Staffs</span>
                        </a>
                    </li>

                    <li class="menu-title" data-key="t-menu">Transaction</li>

                    <li>
                        <a href="{{ route('home') }}">
                            <i class="bx bx-mobile-landscape"> </i>
                            <span data-key="t-dashboard"> Bill Payments</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('home') }}">
                            <i class="bx bx-paper-plane"></i>
                            <span data-key="t-dashboard">Interac e-Transfer</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('home') }}">
                            <i class="bx bx-transfer-alt"></i>
                            <span data-key="t-dashboard">Transfer Funds</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('home') }}">
                            <i class="bx bx-box"></i>
                            <span data-key="t-dashboard">Manage Transactions</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('home') }}">
                            <i class="bx bx-camera"></i>
                            <span data-key="t-dashboard">e-Deposit</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('home') }}">
                            <i class="bx bx-money"></i>
                            <span data-key="t-dashboard">Refer and Earn</span>
                        </a>
                    </li>

                    <li class="menu-title" data-key="t-menu">{{ getenv('APP_NAME') }} Services</li>

                    <li>
                        <a href="{{ route('home') }}">
                            <i class="bx bx-map"></i>
                            <span data-key="t-dashboard">Find Us</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('home') }}">
                            <i class="bx bxs-phone"></i>
                            <span data-key="t-dashboard">Customer Services</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('home') }}">
                            <i class="bx bx-credit-card-alt"></i>
                            <span data-key="t-dashboard">Activate Card</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('home') }}">
                            <i class="bx bxs-chat"></i>
                            <span data-key="t-dashboard">Chat With Us</span>
                        </a>
                    </li>

                    <li class="menu-title" data-key="t-menu">{{ getenv('APP_NAME') }} Configuration</li>

                    <li>
                        <a href="{{ route('home') }}">
                            <span data-key="t-dashboard">Settings and Security</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('home') }}">
                            <span data-key="t-dashboard">Privacy and Legal</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('home') }}">
                            <span data-key="t-dashboard">FAQ</span>
                        </a>
                    </li>


                    {{--                    <li>--}}
                    {{--                        <a href="javascript: void(0);" class="has-arrow">--}}
                    {{--                            <i data-feather="grid"></i>--}}
                    {{--                            <span data-key="t-apps">Apps</span>--}}
                    {{--                        </a>--}}
                    {{--                        <ul class="sub-menu" aria-expanded="false">--}}

                    {{--                            <li>--}}
                    {{--                                <a href="apps-chat.html">--}}
                    {{--                                    <span data-key="t-chat">Chat</span>--}}
                    {{--                                </a>--}}
                    {{--                            </li>--}}

                    {{--                            <li>--}}
                    {{--                                <a href="javascript: void(0);" class="has-arrow">--}}
                    {{--                                    <span data-key="t-email">Email</span>--}}
                    {{--                                </a>--}}
                    {{--                                <ul class="sub-menu" aria-expanded="false">--}}
                    {{--                                    <li><a href="apps-email-inbox.html" data-key="t-inbox">Inbox</a></li>--}}
                    {{--                                    <li><a href="apps-email-read.html" data-key="t-read-email">Read Email</a></li>--}}
                    {{--                                </ul>--}}
                    {{--                            </li>--}}
                    {{--                        </ul>--}}
                    {{--                    </li>--}}

                </ul>

                @if(!auth()->user()->mobile)
                    <div class="card sidebar-alert border-0 text-center mx-4 mb-0 mt-5">
                        <div class="card-body">
                            <img src="{{ asset('backend/assets/images/giftbox.png') }}" alt="">
                            <div class="mt-4">
                                <h5 class="alertcard-title font-size-16">Unlimited Access</h5>
                                <p class="font-size-13">Upgrade your account by verifying your phone number.</p>
                                <a href="{{ route('verify.phone') }}" class="btn btn-primary mt-2">Verify Phone Number</a>
                                {{--                            <a href="{{ route('verify.phone') }}" class="btn btn-primary mt-2" onclick="event.preventDefault();--}}
                                {{--                                                     document.getElementById('verify-phone').submit();">Verify Phone Number</a>--}}
                                {{--                            <form id="verify-phone" action="{{ route('verify.phone') }}" method="POST" class="d-none">--}}
                                {{--                                @csrf--}}
                                {{--                            </form>--}}

                            </div>
                        </div>
                    </div>
                @endif
            </div>
            <!-- Sidebar -->
        </div>
    </div>
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        @yield('content')

        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>document.write(new Date().getFullYear())</script> © {{ getenv('NAME') }}.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Design & Develop by <a href="#!" class="text-decoration-underline">{{ getenv('NAME') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->


<!-- Right Sidebar -->
<div class="right-bar">
    <div data-simplebar class="h-100">
        <div class="rightbar-title d-flex align-items-center p-3">

            <h5 class="m-0 me-2">Theme Customizer</h5>

            <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                <i class="mdi mdi-close noti-icon"></i>
            </a>
        </div>

        <!-- Settings -->
        <hr class="m-0" />

        <div class="p-4">
            <h6 class="mb-3">Layout</h6>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="layout"
                       id="layout-vertical" value="vertical">
                <label class="form-check-label" for="layout-vertical">Vertical</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="layout"
                       id="layout-horizontal" value="horizontal">
                <label class="form-check-label" for="layout-horizontal">Horizontal</label>
            </div>

            <h6 class="mt-4 mb-3 pt-2">Layout Mode</h6>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="layout-mode"
                       id="layout-mode-light" value="light">
                <label class="form-check-label" for="layout-mode-light">Light</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="layout-mode"
                       id="layout-mode-dark" value="dark">
                <label class="form-check-label" for="layout-mode-dark">Dark</label>
            </div>

            <h6 class="mt-4 mb-3 pt-2">Layout Width</h6>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="layout-width"
                       id="layout-width-fuild" value="fuild" onchange="document.body.setAttribute('data-layout-size', 'fluid')">
                <label class="form-check-label" for="layout-width-fuild">Fluid</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="layout-width"
                       id="layout-width-boxed" value="boxed" onchange="document.body.setAttribute('data-layout-size', 'boxed')">
                <label class="form-check-label" for="layout-width-boxed">Boxed</label>
            </div>

            <h6 class="mt-4 mb-3 pt-2">Layout Position</h6>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="layout-position"
                       id="layout-position-fixed" value="fixed" onchange="document.body.setAttribute('data-layout-scrollable', 'false')">
                <label class="form-check-label" for="layout-position-fixed">Fixed</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="layout-position"
                       id="layout-position-scrollable" value="scrollable" onchange="document.body.setAttribute('data-layout-scrollable', 'true')">
                <label class="form-check-label" for="layout-position-scrollable">Scrollable</label>
            </div>

            <h6 class="mt-4 mb-3 pt-2">Topbar Color</h6>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="topbar-color"
                       id="topbar-color-light" value="light" onchange="document.body.setAttribute('data-topbar', 'light')">
                <label class="form-check-label" for="topbar-color-light">Light</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="topbar-color"
                       id="topbar-color-dark" value="dark" onchange="document.body.setAttribute('data-topbar', 'dark')">
                <label class="form-check-label" for="topbar-color-dark">Dark</label>
            </div>

            <h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Size</h6>

            <div class="form-check sidebar-setting">
                <input class="form-check-input" type="radio" name="sidebar-size"
                       id="sidebar-size-default" value="default" onchange="document.body.setAttribute('data-sidebar-size', 'lg')">
                <label class="form-check-label" for="sidebar-size-default">Default</label>
            </div>
            <div class="form-check sidebar-setting">
                <input class="form-check-input" type="radio" name="sidebar-size"
                       id="sidebar-size-compact" value="compact" onchange="document.body.setAttribute('data-sidebar-size', 'md')">
                <label class="form-check-label" for="sidebar-size-compact">Compact</label>
            </div>
            <div class="form-check sidebar-setting">
                <input class="form-check-input" type="radio" name="sidebar-size"
                       id="sidebar-size-small" value="small" onchange="document.body.setAttribute('data-sidebar-size', 'sm')">
                <label class="form-check-label" for="sidebar-size-small">Small (Icon View)</label>
            </div>

            <h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Color</h6>

            <div class="form-check sidebar-setting">
                <input class="form-check-input" type="radio" name="sidebar-color"
                       id="sidebar-color-light" value="light" onchange="document.body.setAttribute('data-sidebar', 'light')">
                <label class="form-check-label" for="sidebar-color-light">Light</label>
            </div>
            <div class="form-check sidebar-setting">
                <input class="form-check-input" type="radio" name="sidebar-color"
                       id="sidebar-color-dark" value="dark" onchange="document.body.setAttribute('data-sidebar', 'dark')">
                <label class="form-check-label" for="sidebar-color-dark">Dark</label>
            </div>
            <div class="form-check sidebar-setting">
                <input class="form-check-input" type="radio" name="sidebar-color"
                       id="sidebar-color-brand" value="brand" onchange="document.body.setAttribute('data-sidebar', 'brand')">
                <label class="form-check-label" for="sidebar-color-brand">Brand</label>
            </div>

            <h6 class="mt-4 mb-3 pt-2">Direction</h6>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="layout-direction"
                       id="layout-direction-ltr" value="ltr">
                <label class="form-check-label" for="layout-direction-ltr">LTR</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="layout-direction"
                       id="layout-direction-rtl" value="rtl">
                <label class="form-check-label" for="layout-direction-rtl">RTL</label>
            </div>

        </div>

    </div> <!-- end slimscroll-menu-->
</div>
<!-- /Right-bar -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- JAVASCRIPT -->
<script src="{{ asset('backend/assets/libs/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('backend/assets/libs/metismenu/metisMenu.min.js') }}"></script>
<script src="{{ asset('backend/assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('backend/assets/libs/node-waves/waves.min.js') }}"></script>
<script src="{{ asset('backend/assets/libs/feather-icons/feather.min.js') }}"></script>
<!-- pace js -->
<script src="{{ asset('backend/assets/libs/pace-js/pace.min.js') }}"></script>

<!-- apexcharts -->
<script src="{{ asset('backend/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

<!-- Plugins js-->
<script src="{{ asset('backend/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('backend/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- Required datatable js -->
<script src="{{ asset('backend/assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>

<!-- Datatable init js -->
<script src="{{ asset('backend/assets/js/pages/datatables.init.js') }}"></script>

<!-- dashboard init -->
<script src="{{ asset('backend/assets/js/pages/dashboard.init.js') }}"></script>

<script src="{{ asset('backend/assets/js/app.js') }}"></script>

</body>

</html>
