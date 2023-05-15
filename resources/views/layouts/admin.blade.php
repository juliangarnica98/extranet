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

    /* #content {
        background-color: #e7e7e7;
    } */

    .container {
        padding-top: 5%;
    }

    input {
        color: #000000;
        border: none;
        border-bottom: 3px solid rgb(232, 81, 153);
        border-radius: 25px;
    }

    .pt-50 {
        /* position: absolute; */
        /* top: 50%;
        left: 50%;
        height: 30%;
        width: 50%; */
        padding-top: 25vh
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

    .box {
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    }

    .btn {
        border-radius: 20px
    }

    .btn-primary {
        background-color: #18a0a0;
        border-color: #18a0a0
    }

    .btn-primary:hover {
        background-color: #e85099;
        border-color: #e85099
    }

    .page-container {
        margin-left: 10%;
        margin-right: 10%;
    }

    .bg-footer {
        background-color: #e7e7e7;
    }

    .text-light {
        color: #fffdfd;
    }

    .bg-black {
        color: #000;
    }

    .text-black {
        color: #000;
    }

    /* .nav-item{
        background-color: #18a0a0;
        border-radius: 25px;
    } */
    .active,
    .nav-item:hover {
        background-color: #54d1d1;
        border-radius: 25px;

    }

    .sub-nav-link {
        color: #000000;
    }

    .sub-nav-link:hover {
        background-color: #f5cce0;
        border-radius: 25px;
        color: #000000;

    }

    a:hover {
        color: #000000;
    }

    .navbar .nav-link {
        color: #000000;
    }

    .navbar .nav-link .active {
        color: rgb(255, 255, 255);
    }

    .navbar-dark {
        background: linear-gradient(to right, rgba(0, 45, 165, 0.97), rgba(10, 88, 157, 0.97), rgba(10, 88, 157, 0.97), rgba(0, 45, 165, 0.97));
    }

    .navbar-brand {
        margin-right: 20px;
    }



    .navbar-toggler:hover {
        cursor: pointer;
    }

    .navbar-toggler:hover {
        cursor: pointer;
    }

    .card {
        background-color: #fff;
        border-radius: 15px;
        border: 3px solid #e6e7ed;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    
    }
    .pad-top-50{
        padding-top: 20%
    }
    .not-active { 
            pointer-events: none; 
            cursor: default; 
        } 
</style>

<body id="page-top" style="background-color: #01b9b5">
    {{-- <body id="page-top" style="background-color: #02e0dd"> --}}

    <!-- Page Wrapper -->
    <div id="wrapper" style="background-color: #f5cce0">

        <!-- Sidebar -->

        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column" style="background-color: #01b9b5">

            <!-- Main Content -->
            <div id="content w-100 h-100">



                <nav class="navbar  navbar-expand-lg box " style="background-color: #ffffff">

                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse " id="navbarSupportedContent">
                        <div class="container-fluid justify-content-center">
                            <ul class="navbar-nav nav w-100 aling-items-center text-center justify-content-center">
                                <li class=" aling-items-center ">
                                    <img width="10%" class="justify-content-center aling-items-center "
                                        src="{{ asset('imgs/logo.png') }}" alt="">
                                </li>
                                <li class=" dropdown no-arrow nav-item " > 
                                    <a class="nav-link col-auto dropdown-toggle" href="#" id="userDropdown"
                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        @if (auth()->check()) 
                                        <b> <span class="d-none d-lg-inline"
                                            style="color: #18a0a0">{{ mb_strtoupper(Auth::user()->name) }} </span></b>
                                        @endif
                                    </a>

                                    <div class="dropdown-menu shadow animated--grow-in" aria-labelledby="userDropdown"
                                        style="background-color: #fff">
                                        <a class="dropdown-item" href="{{ route('admin.perfil') }}"
                                            style="color: rgb(124, 124, 124)">
                                            <i class="fas fa-user fa-sm fa-fw mr-2 "></i>
                                            Perfil
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#" data-toggle="modal"
                                            data-target="#logoutModal" style="color: rgb(124, 124, 124)">
                                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2"></i>

                                            Salir
                                        </a>

                                    </div>
                                </li>
                            </ul>
                            <ul class="navbar-nav d-flex justify-content-center w-75 "
                                style="background-color: #e52b7f; border-radius: 25px">
                                @can('admin.index')
                                    <li class="nav-item col-md-2" style="background-color: #18a0a0">
                                        <a class="nav-link text-center" href="#">Dashborad <span
                                                class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item col-md-2">
                                        <a class="nav-link text-center text-center"
                                            href="{{ route('admin.usuarios') }}">Usuarios <span
                                                class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item col-md-2">
                                        <a class="nav-link text-center" href="{{ route('admin.index.jefes') }}">Jefes <span
                                                class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item col-md-2">
                                        <a class="nav-link text-center" href="{{ route('admin.postulaciones') }}">Candidatos
                                            <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item col-md-2">
                                        {{-- <a class="nav-link text-center" href="{{ route('admin.index') }}">Vacantes <span
                                                class="sr-only">(current)</span></a> --}}
                                                <a class="nav-link text-center" href="#">Vacantes <span
                                                    class="sr-only">(current)</span></a>
                                    </li>
                                @endcan
                                @can('reclutador.index')
                                    <li class="nav-item col-md-4">
                                        <a class="nav-link text-center text-white"
                                            href="{{ route('reclutador.vacant.create') }}"><b><i class="fas fa-plus"></i>
                                                CREAR VACANTE</b> <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item col-md-4">
                                        <a class="nav-link text-white text-center"
                                            href="{{ route('reclutador.registros.index') }}"><b><i
                                                    class="fas fa-list"></i> REGISTROS</b> <span
                                                class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item col-md-4">
                                        <a class="nav-link text-white text-center" href="{{ route('reclutador.index') }}"><b><i
                                                    class="far fa-address-book"></i> VACANTES</b>
                                            <span class="sr-only">(current)</span></a>
                                    </li>
                                @endcan
                                @can('jefe.index')
                                    <li class="nav-item col-md-6">
                                        <a class="nav-link text-center col-auto"
                                            href="{{ route('jefe.candidatos.index') }}">Reportes <span
                                                class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item col-md-6">
                                        <a class="nav-link text-center col-auto" href="#">Reportes <span
                                                class="sr-only">(current)</span></a>
                                    </li>
                                @endcan



                            </ul>
                        </div>

                    </div>
                </nav>


                {{-- <nav class="navbar fixed-top navbar-dark navbar-expand-md">
                    <a class="navbar-brand" href="#">
                        <img src="//placehold.it/100x28" height=28 class="" />
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse flex-column" id="navbar">
                        <ul class="navbar-nav nav w-100">
                            <li class="nav-item">
                                <a class="nav-link " data-toggle="tab" href="#property-tab">PROPERTY</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#units-tab">UNITS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tenancies-tab">TENANCIES</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#pdfs-tab">PDFs</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#contacts-tab">CONTACTS</a>
                            </li>

                        </ul>
                        <ul class="navbar-nav nav w-100">
                            <li class="nav-item">
                                <a href="#" class="nav-link ">ALL</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">CURRENT</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">PAST</a>
                            </li>
                        </ul>
                    </div>
                </nav> --}}

                <main class="py-0 border-top h-100" style="">
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                </main>


                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer ">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        {{-- <span>Copyright &copy; Fast Moda 2023</span> --}}
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>

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


    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
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
