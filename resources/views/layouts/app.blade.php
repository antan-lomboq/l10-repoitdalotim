<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('/backend/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('backend/css/sb-admin-2.min.css') }}" rel="stylesheet">

    <!----- Custom styles untuk tampilan toastr -->    
    <link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet" >

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
               <!-- Sidebar -->
       <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        @if (Auth::user()->role=='1')
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.dashboard') }}">
            {{-- <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div> --}}
            <div class="sidebar-brand-text mx-3">Repository Itda Lotim</div>
        </a>
        @endif
        @if (Auth::user()->role=='0')
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('dashboard') }}">
            {{-- <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div> --}}
            <div class="sidebar-brand-text mx-3">Repository Itda Lotim</div>
        </a>
        @endif

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        @if (Auth::user()->role=='1')
        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('admin.dashboard') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>
        @endif
        
        @if (Auth::user()->role=='0')
        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="{{ url('dashboard') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>
        @endif

        @if (Auth::user()->role=='1')
        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            KELOLA USER
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-users"></i>
                <span>User</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">User:</h6>
                    <a class="collapse-item" href="{{ route('admin.user.index') }}">Daftar User</a>
                    {{-- <a class="collapse-item" href="">Cards</a> --}}
                </div>
            </div>
        </li>
        
        <hr class="sidebar-divider">
        @endif

        @if (Auth::user()->role=='1')
        <div class="sidebar-heading">
            KELOLA PROFIL INSTANSI
        </div>
        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-wrench"></i>
                <span>Profil Instansi</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Profil Instansi:</h6>
                    <a class="collapse-item" href="{{ route('admin.profil_instansi.index') }}">Info Profil Instansi</a>
                    {{-- <a class="collapse-item" href="">Borders</a> --}}
                </div>
            </div>
        </li>
        @endif
        
        @if (Auth::user()->role=='0')
        <hr class="sidebar-divider">
        <div class="sidebar-heading">
            PROFIL INSTANSI
        </div>
        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-wrench"></i>
                <span>Profil Instansi</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Profil Instansi:</h6>
                    <a class="collapse-item" href="{{ route('profil_instansi.index') }}">Info Profil Instansi</a>
                    {{-- <a class="collapse-item" href="">Borders</a> --}}
                </div>
            </div>
        </li>
        @endif

        <!-- Divider -->
        <hr class="sidebar-divider">

        @if (Auth::user()->role=='1')
        <!-- Heading -->
        <div class="sidebar-heading">
            Kelola Dokumen
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-fw fa-folder"></i>
                <span>Dokumen</span>
            </a>
            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <div class="collapse-divider"></div>
                    <h6 class="collapse-header">Dokumen:</h6>
                    <a class="collapse-item" href="{{ route('admin.dokumen.index') }}">Master Dokumen</a>
                    <a class="collapse-item" href="{{ route('admin.kategori.index') }}">Daftar Kategori</a>
                </div>
            </div>
        @endif
            
        @if (Auth::user()->role=='0')
        <!-- Heading -->
        <div class="sidebar-heading">
            Master Dokumen
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-fw fa-folder"></i>
                <span>Dokumen</span>
            </a>
            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <div class="collapse-divider"></div>
                    <h6 class="collapse-header">Dokumen:</h6>
                    <a class="collapse-item" href="{{ route('dokumen.index') }}">Lihat Dokumen</a>
                    
                </div>
            </div>
            @endif
        </li>

        <!-- Nav Item - Charts -->
        
        <!-- Nav Item - Tables -->
        {{-- <li class="nav-item">
            <a class="nav-link" href="">
                <i class="fas fa-fw fa-table"></i>
                <span>Tables</span></a>
        </li> --}}

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

        <!-- Sidebar Message -->

    </ul>
    <!-- End of Sidebar -->
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->

                        <!-- Nav Item - Alerts -->

                        <!-- Nav Item - Messages -->

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ auth()->user()->name }}</span>
                                <img class="img-profile rounded-circle"
                                    src="{{ asset('backend/img/undraw_profile.svg') }}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="{{ route('profile.edit') }}">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Ubah Kata Sandi
                                </a>
                                {{-- <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a> --}}
                                {{-- <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a> --}}
                                <div class="dropdown-divider"></div>
                                {{-- <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    {{ __('Log Out') }}
                                </a> --}}
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a class="dropdown-item" href="route('logout')" onclick="event.preventDefault();
                                    this.closest('form').submit();">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    {{ __('Log Out') }}
                                </a>
                                </form>
                                {{-- <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-responsive-nav-link> --}}
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->

                <!-- Awal Message -->
                {{-- @if(session()->has('success'))
                <div class="content-header mb-0 pb-0">
                    <div class="container-fluid">
                        <div class="mb-0 alert alert-{{ session()->get('alert-type') }} alert-dismissible fade show" role="alert">
                            <strong>{{ session()->get('success') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div> 
                    </div><!-- /.container-fluid -->
                </div>
                @endif --}}
                <!-- Akhir Message -->

                @if(session()->has('message'))
                    <div class="alert alert-{{ session()->get('alert-type') }} alert-dismissible fade show" role="alert" id="alert-message">
                        {{ session()->get('message') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                <div>
                    {{-- {{ $jumlah_user }} --}}
                </div>
                <!-- Begin Page Content -->
                @yield('content')
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Ariya Santana 2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    
    {{-- <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Siap untuk keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Pilih "Oke" untuk mengakhiri sesi ini.</div>
                <div class="modal-footer">
                    <form method="POST" action="{{ route('logout') }}" >
                        @csrf         
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" :href="route('logout')" onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ __('Oke') }}
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('backend/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('backend/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('backend/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('backend/vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('backend/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('backend/js/demo/chart-pie-demo.js') }}"></script>

    <!-- Halaman script tampilan toastr -->
    <script src="{{ asset('js/toastr.min.js') }}"></script>

    <script>
        //message with toastr
        @if(session()->has('success'))
        
            toastr.success('{{ session('success') }}');

        @elseif(session()->has('error'))

            toastr.error('{{ session('error') }}');
            
        @endif
    </script>

</body>
</html>
