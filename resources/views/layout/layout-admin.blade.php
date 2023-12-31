<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>S H O E - E A S E</title>
    
    <link rel="icon" type="image/png" href="{{ asset('assets/image/logo.jpeg') }}" />

    <link href="{{ asset('assets/admin-page/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet"
        type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <link href="{{ asset('assets/admin-page/css/sb-admin-2.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin-page/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

    {{-- <!--Slick CSS-->
    <link rel="stylesheet" href="./assets/vendor/slick/slick.css" />
    <link rel="stylesheet" href="./assets/vendor/slick/slick-theme.css" />

    <!--App Css-->
    <link rel="stylesheet" href="./assets/css/app.css" />

    <!--Main CSS-->
    <link rel="stylesheet" href="./assets/css/main.css" /> --}}

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color:#88C8BC">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon">
                    <img src="{{ asset('assets/image/logo.jpeg') }}" alt="" width="30px" height="30px">
                </div>
                <div class="sidebar-brand-text mx-3">Admin Panel</div>
            </a>

            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Utama
            </div>

            <hr class="sidebar-divider d-none d-md-block">

            <li
                class="nav-item {{ request()->routeIs('produk.list') || request()->routeIs('produk.create') || request()->routeIs('produk.show') || request()->routeIs('produk.edit') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('produk.list') }}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Produk</span></a>
            </li>

            <li
                class="nav-item {{ request()->routeIs('kategori.list') || request()->routeIs('kategori.create') || request()->routeIs('kategori.edit') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('kategori.list') }}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Kategori</span></a>
            </li>

         

            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>

        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item dropdown no-arrow">
                            <a href="{{ route('produk.etalase') }}" class="btn btn-outline-dark mt-3">Etalase</a>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span
                                    class="mr-2 d-none d-lg-inline text-gray-600 small">{{ auth()->user()->name }}</span>
                                <img class="img-profile rounded-circle" src="{{ asset('assets/image/rizal.png') }}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; me 2023</span>
                    </div>
                </div>
            </footer>

        </div>
    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Logout?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Apakah anda yakin ingin keluar ?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <form action="{{ route('user.logout') }}" method="POST">
                        @csrf
                        <button class="btn btn-primary" type="submit">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/admin-page/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/admin-page/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/admin-page/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/admin-page/js/sb-admin-2.min.js') }}"></script>

    <script src="{{ asset('assets/admin-page/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/admin-page/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/admin-page/js/demo/datatables-demo.js') }}"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/35.3.2/classic/ckeditor.js"></script>

    @stack('additional-js')
</body>

</html>
