<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Midterm</title>

    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">
</head>
<body>
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="assets/img/logo.png" alt="">
                <span class="d-none d-lg-block">Acuna Company</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="post" action="{{ url('search') }}">
            @csrf
                <input type="search" name="query" placeholder="Search" title="Enter search keyword">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div><!-- End Search Bar -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                <a class="nav-link nav-icon search-bar-toggle " href="#">
                    <i class="bi bi-search"></i>
                </a>
                </li><!-- End Search Icon-->

                <a class="nav-item dropdown pe-3 nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                    <img src="{{ asset('assets/img/profile-img.jpg')}}" alt="Profile" class="rounded-circle">
                    <span class="d-none d-md-block dropdown-toggle ps-2">Admin</span>
                </a><!-- End Profile Iamge Icon -->
            </ul>
        </nav><!-- End Icons Navigation -->
    </header><!-- End Header -->


    <aside id="sidebar" class="sidebar">
        <ul class="sidebar-nav" id="sidebar-nav">
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#tables-nav" href="{{ url('/') }}">
                    <i class="bi bi-layout-text-window-reverse"></i><span>Employee List</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#forms-nav" href="{{ url('add_form') }}">
                    <i class="bi bi-person-add"></i><span>Add Empolyee</span>
                </a>
            </li>
        </ul>
    </aside><!-- End Sidebar-->
    <div >
        @yield('content')
   
    </div>
  
</body>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js}}"></script>
    <script src="assets/js/main.js"></script>
</html>