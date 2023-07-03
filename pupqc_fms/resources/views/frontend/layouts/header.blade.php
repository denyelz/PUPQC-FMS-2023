
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Title with PUP logo -->
        <link rel="icon" href="../asset/img/pup.png" />
        <title>FARMS</title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">


        <!-- Font Awesome -->
        <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">

        <!-- Tempusdominus Bootstrap 4 -->
        <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

        <!-- iCheck -->
        <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">

        <!-- JQVMap -->
        <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">

        <!-- Theme style -->
        <link rel="stylesheet" href="../asset/css/farms.min.css">

        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

        <!-- Daterange picker -->
        <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">

        <!-- summernote -->
        <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">

        <!-- Flowbite Framework -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css"  rel="stylesheet" />

        <!-- Pallete style -->
        <link rel="stylesheet" href="../asset/css/farms.pallete.css">

		<!-- Dependencies for date picker -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css">
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    </head>

    <body class="hold-transition sidebar-mini layout-fixed">

        <div class="wrapper">

            <!-- Preloader -->
            <div class="preloader flex-column justify-content-center align-items-center">
                <img class="animation__shake" src="../asset/img/pup.png" height="60" width="60">
            </div>

            <!-- Top Nav Container -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- Left -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                    </li>
                </ul>

                <!-- Right -->
                <ul class="navbar-nav ml-auto">

                    <!-- Notifications Dropdown Menu -->
                    <li class="nav-item dropdown">
                        <a class="nav-link mt-2" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">3</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">3 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> ...
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> ....
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> ...
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                        </div>
                    </li>
                    <!-- User Panel -->
                    <div id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="click" class="user-panel d-flex" style="cursor: pointer;">
                        <div class="image mt-2">
                            <img src="https://lh3.googleusercontent.com/a-/ACB-R5SPNI6x5R3YO5R7LcdJlXMQGtn6kMwaDgvvu2S6=s40-c" class="img-circle elevation-2" alt="User Image">
                        </div>
                        <div class="info m-auto">
                            <a href="#" class="d-block text-maroon text-bold">Demelyn Monzon</a>
                            <span class="d-block text-maroon text-regular" style="font-size: .8rem;">Academic Head</span>
                        </div>
                    </div>
                    <!-- Profile Dropdown -->
                    <div id="dropdownHover" class="z-10 hidden pal-1 divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton">
                            <a href="/acadhead/acadhead_profile" class="block px-4 py-2 text-white">Profile</a>
                        </li>
                        <li>
                            <a id="show-modal" class="block px-4 py-2 text-white" style="cursor: pointer;" >Log out</a>
                        </li>
                        </ul>
                    </div>
                </ul>
            </nav>
