<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Retiros LiliY&oi- @yield('title')</title>

    <!-- Custom fonts for this template-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="{{ asset('libs/fontawesome/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('libs/sbadmin/css/sb-admin-2.min.css') }}" rel="stylesheet">

    <!-- <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script> -->

</head>
<style>
    /* .fa-user {
        color: rgb(252, 0, 126)
    } */

    .background-barnav {
        background-color: #000000;
    }

    .background-barnav2 {
        background: rgb(232, 81, 153);
        background: linear-gradient(90deg, rgba(232, 81, 153, 1) 47%, rgba(3, 168, 162, 1) 100%);
    }

    .pad-50 {
        padding-top: 20%;
    }

    .scroll {
        max-height: 60vh;
        overflow-y: auto;
    }

    *::-webkit-scrollbar {
        width: 6px;
        height: 6px;
    }

    *::-webkit-scrollbar-track {
        background: #646464;
    }

    *::-webkit-scrollbar-thumb {
        background-color: #e75199;
        border-radius: 20px;
        border: 3px solid transparent;
    }

    #content {
        background-color: #fff;
    }

    /* .container {
        padding-top: 5%;
    } */

    input {
        color: #000000;
        border: none;
        border-bottom: 3px solid rgb(232, 81, 153);
    }

    .active {
        background-color: rgb(27,159,161);
    }
    .pt-50{
        padding-top: 50%;
    }
    
    .pagination li {
        margin-left: .25rem;
        margin-right: .25rem;
    }

    .pagination li .page-link {
        border-radius: .25rem;
        border: none;
        min-width: 2.25rem;
        text-align: center;
        color: #4f5464;
    }

    .pagination li.active .page-link,
    .pagination li .page-link:hover {
        background-color: #e85199;
        color: #fff;
        font-weight: bold;
        box-shadow: none;
        
      
    }
</style>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav  sidebar sidebar-dark accordion background-barnav" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/home">
                <div class="sidebar-brand-icon rotate-n-15">
                    {{-- <i class="fas fa-laugh-wink"></i> --}}
                </div>
                <div class="sidebar-brand-text mx-3"><img src="{{ asset('imgs/logo.png') }}" alt="Logo"
                        class="img-fluid"><sup></sup></div>
            </a>
            
            <!-- Divider -->
            @can('admin.index')
                <div class="pt-50">
                   
                    
                    <li class="nav-item">
                        <a class="nav-link text-center" href="{{ route('admin.index') }}">
                            <i class="fas fa-external-link-alt"></i>
                            <span>Retiros</span></a>
                    </li>
                    <hr class="sidebar-divider">
                    <li class="nav-item">
                        <a class="nav-link text-center" href="{{ route('admin.postulaciones') }}">
                            <i class="fa fa-id-card" aria-hidden="true"></i>
                            <span>Aspirantes</span></a>
                    </li>
                    <hr class="sidebar-divider">
                    <li class="nav-item">
                        <a class="nav-link text-center" href="{{ route('admin.vacantes2') }}">
                            <i class="fa fa-id-card" aria-hidden="true"></i>
                            <span>Vacantes</span></a>
                    </li>
                    
                    <hr class="sidebar-divider">
                    <li class="nav-item">
                        <a class="nav-link text-center" href="{{ route('admin.importar') }}">
                            <i class="fa fa-id-card" aria-hidden="true"></i>
                            <span>Importar</span></a>
                    </li>

                </div>
            @endcan
            @can('boss.index')
                <div class="pt-50">
                    <li class="nav-item">
                        <a class="nav-link text-center" href="{{ route('boss.index') }}">

                            <i class="fas fa-external-link-alt"></i>
                            <span>Retiros</span></a>
                    </li>
                    <!-- Divider -->
                    <hr class="sidebar-divider">
                    <li class="nav-item">
                        <a class="nav-link text-center" href="{{ route('retirement.index') }}">
                            {{-- <i class="fas fa-fw fa-tachometer-alt"></i> --}}
                            <i class="fas fa-solid fa-user"></i>
                            <span>Retiro directo</span></a>
                    </li>
                    <hr class="sidebar-divider">
                    <li class="nav-item">
                        <a class="nav-link text-center" href="{{ route('boss.show') }}">
                            {{-- <i class="fas fa-fw fa-tachometer-alt"></i> --}}
                            <i class="fas fa-layer-group"></i>
                            <span>Colaboradores</span></a>
                    </li>

                </div>
            @endcan



        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light mb-0 static-top shadow background-barnav2">
                    

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars" style="color: #fff"></i>
                    </button>

               

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">

                        </li>

                  



                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{-- <span class="mr-5 d-none d-lg-inline" >{{ Auth::user()->name[0] }} </span> --}}
                                <span class="mr-5 pr-5 text-light">{{ Auth::user()->name }}</span>
                                {{-- {{ Auth::user()->name }} --}}
                                {{-- <img class="img-profile rounded-circle"
                                    src="">  --}}
                                {{-- <div class="topbar-divider d-none d-sm-block"></div>
                                    <i class="fas fa-ellipsis-h"></i> --}}
                            </a>

                            <div class="dropdown-menu shadow animated--grow-in" aria-labelledby="userDropdown"
                                style="background-color: #fff">
                                <a class="dropdown-item" href="#" style="color: rgb(124, 124, 124)">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 "></i>
                                    Perfil
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal"
                                    data-target="#logoutModal" style="color: rgb(124, 124, 124)">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2"></i>
                                    {{-- <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> --}}
                                    Salir
                                </a>

                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->

                <main class="py-0" style="">
                    @yield('content')
                </main>
               

                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Fast Moda 2022</span>
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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">¿Listo para salir?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Seleccione "Cerrar sesión" a continuación si está listo para finalizar su
                    sesión actual.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        Salir</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('libs/sbadmin/js/sb-admin-2.min.js') }}"></script>
    <script src="{{ asset('libs/stacktable.js/stacktable.js') }}"></script>


    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script> -->
    

</body>
{{-- <script>
    
    $(".nav .nav-link").on("click", function(){
        console.log("hola");
        $(".nav").find(".active").removeClass("active");
        $(this).addClass("active");
    });
</script> --}}

</html>
