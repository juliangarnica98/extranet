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
    .fa-user {
        color: rgb(252, 0, 126)
    }

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
        background: #e85199;
    }

    *::-webkit-scrollbar-thumb {
        background-color: #0aa5a2;
        border-radius: 20px;
        border: 3px solid transparent;
    }

    #content {
        background-color: #fff;
    }


    table {
        table-layout: fixed;
        font-size: 1rem;
    }

    .miTablaPersonalizada th {
        width: 10vw;
        overflow: auto;
        font-size: 1rem;
    }

    .headt td {
        height: 2rem;
    }

    input {
        color: #000000;
        border: none;

        border-bottom: 3px solid rgb(232, 81, 153);
    }

    .imagen_portada {
        padding-top: 1rem;
        padding-bottom: calc(10rem - 4.5rem);
        background: linear-gradient(to bottom, rgba(92, 77, 66, 0.8) 0%, rgba(92, 77, 66, 0.8) 100%), url("{{ asset('imgs/work.jpg') }}");
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: scroll;
        background-size: cover;
    }

    .imagen_portada h1 {
        font-size: 2.25rem;
    }

    @media (min-width: 992px) {
        .imagen_portada {
            height: 100vh;
            min-height: 40rem;

            padding-bottom: 0;
        }

        .imagen_portada h1 {
            font-size: 3rem;
        }
    }

    @media (min-width: 1200px) {
        .imagen_portada h1 {
            font-size: 3.5rem;
        }
    }

    .quienes_somos {
        background-color: #0fa3a1
    }
</style>

<body id="page-top">
    <div class="navegacion">
        <nav class="navbar navbar-expand-lg navbar-light background-barnav2">
            <a class="navbar-brand text-light" href="/">
                <h1> Talentos Lili&Yoi</h1>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse mr-auto justify-content-end align-items-right"
                id="navbarSupportedContent">
                <ul class="navbar-nav">


                    <li class="nav-item"> <a class="navbar-brand  text-light nav-link" href="/login">Iniciar sesion</a>
                    </li>

                </ul>
            </div>
        </nav>
    </div>
    @if (Session::has('error'))
        <script>
            Swal.fire(
                'Error al importar archivo',
                "{{ Session::get('error') }}",
                'error'
            )
        </script>
    @endif
    @if (Session::has('message'))
        <script>
            Swal.fire(
                '¡Bien hecho!',
                "{{ Session::get('message') }}",
                'success'
            )
        </script>
    @endif
    <div class="div">
        <div class="imagen_portada">
            {{-- <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">Ingresa ciudad o vacante</span>
                </div>
                
              </div> --}}
            <div class="container">
                <div class="row justify-content-center pb-3">
                    <div class="col-md-5">
                        <input type="text" class="form-control" placeholder="Buscar..">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card" style="height: 85vh">
                            <div class="card-body pt-2 pb-2 pl-0 pr-0">
                                <div class="card mt-2 border-0">
                                    <a href="#" class="card-block stretched-link text-decoration-none">
                                        <div class="card-body pt-0 pb-0 ">
                                            <h5 class="card-title text-dark text-center"><strong>
                                                    {{ $num_vacants }} vacantes disponibles</strong> </h5>
                                        </div>
                                    </a>
                                </div>
                                @foreach ($vacants as $vacant)
                                    <div class="border-top border-bottom mt-1">
                                        <div class="card pl-0 pr-0 ml-0 mr-0 border-0">
                                            {{-- border-right-0 border-left-0 --}}
                                            <a href="{{ route('buscarvacante', ['id' => $vacant->id]) }}"
                                                class="card-block stretched-link text-decoration-none">
                                                <div class="card-body pt-1 pb-1 ml-0 mr-0">
                                                    <h5 class="card-title text-dark">
                                                        <strong>{{ $vacant->title }}</strong>
                                                    </h5>
                                                    <h6 class="card-subtitle mb-1 text-muted">{{ $vacant->city }} -
                                                        ${{ $vacant->salary }} </h6>
                                                    <p class="card-text text-dark">{{ $vacant->experience }}</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="card" style="height: 85vh">
                            @if (isset($vacant_found))
                                <div class="card-body">
                                    <h5 class="card-title text-center">{{ $vacant_found->title }}</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">{{ $vacant_found->created_at }}</h6>
                                    <p class="card-text">Ciudad: {{ $vacant_found->city }}</p>
                                    <p class="card-text">Salario: ${{ $vacant_found->salary }}</p>
                                    <p class="card-text">Experiencia: {{ $vacant_found->experience }}</p>
                                    <p class="card-text">Vacantes: {{ $vacant_found->num_vacants }}</p>
                                    <p class="card-text">Description: {{ $vacant_found->description }}</p>
                                    <button class="btn btn-info" data-target="#exampleModal"
                                        data-toggle="modal">Aplicar</button>
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title text-dark" id="exampleModalLabel">
                                                        Ingrese su número de documento</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form method="POST"
                                                    action="{{ route('admin.search.cv', $vacant->id) }}">
                                                    @csrf
                                                    <div class="modal-body">

                                                        <div class="form-group">
                                                            <div class="row justify-content-center">
                                                                <div class="col-10">

                                                                    <div class="form-outline">

                                                                        <input type="text" id="form8Example1"
                                                                            class="form-control" name="documento"
                                                                            value="" />
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>
                                                        <button class="btn btn-primary">Aplicar oferta</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            {{-- <div class="container">
                <div class="card mt-0">
                    <div class="row text-center">
                        <div class="col-md-12">
                            <div class="" style="color: #fff">
                                <table class="table table-responsive " id="">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Fecha de creación</th>
                                            <th class="text-center">Titulo</th>
                                            <th class="text-center">Ciudad</th>
                                            <th class="text-center">Descripción</th>
                                            <th class="text-center">Salario</th>
                                            <th class="text-center">Experiencia reqierida</th>
                                            <th class="text-center">Número de vacantes</th>
                                            <th class="text-center">Estado</th>
                                            <th class="text-center col-1">Accion</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($vacants as $vacant)
                                            <tr>
                                                <td class="">{{ date('d-m-Y', strtotime($vacant->created_at)) }}
                                                </td>
                                                <td class="">{{ $vacant->title }}</td>
                                                <td class="">{{ $vacant->city }}</td>
                                                <td class="">{{ $vacant->description }}</td>
                                                <td class="">${{ $vacant->salary }}</td>
                                                <th class="">{{ $vacant->experience }}</th>
                                                <td class="">{{ $vacant->num_vacants }}</td>
                                                @if ($vacant->state == 1)
                                                    <td class="">Abierta</td>
                                                @else
                                                    <td class="">Cerrada</td>
                                                @endif

                                                <td class="col-2">

                                                    <button class="btn btn-info" data-target="#exampleModal"
                                                        data-toggle="modal">Aplicar</button>

                                                </td>
                                            </tr>
                                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title text-dark" id="exampleModalLabel">
                                                                Ingrese su número de documento</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form method="POST"
                                                            action="{{ route('admin.search.cv', $vacant->id) }}">
                                                            @csrf
                                                            <div class="modal-body">

                                                                <div class="form-group">
                                                                    <div class="row justify-content-center">
                                                                        <div class="col-10">

                                                                            <div class="form-outline">

                                                                                <input type="text" id="form8Example1"
                                                                                    class="form-control"
                                                                                    name="documento" value="" />
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close</button>
                                                                <button class="btn btn-primary">Aplicar oferta</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>

    <div class="footer">
        <footer class="text-center text-white" style="background-color: #212529">
            <!-- Grid container -->
            <div class="container pt-4">
                <!-- Section: Social media -->
                <section class="mb-4">
                    <!-- Facebook -->
                    <a class="btn btn-link btn-floating btn-lg text-light m-1" href="#!" role="button"
                        data-mdb-ripple-color="dark"><i class="fab fa-facebook-f"></i></a>

                    <!-- Twitter -->
                    <a class="btn btn-link btn-floating btn-lg text-light m-1" href="#!" role="button"
                        data-mdb-ripple-color="dark"><i class="fab fa-twitter"></i></a>

                    <!-- Google -->
                    <a class="btn btn-link btn-floating btn-lg text-light m-1" href="#!" role="button"
                        data-mdb-ripple-color="dark"><i class="fab fa-google"></i></a>

                    <!-- Instagram -->
                    <a class="btn btn-link btn-floating btn-lg text-light m-1" href="#!" role="button"
                        data-mdb-ripple-color="dark"><i class="fab fa-instagram"></i></a>

                    <!-- Linkedin -->
                    <a class="btn btn-link btn-floating btn-lg text-light m-1" href="#!" role="button"
                        data-mdb-ripple-color="dark"><i class="fab fa-linkedin"></i></a>
                    <!-- Github -->
                    <a class="btn btn-link btn-floating btn-lg text-light m-1" href="#!" role="button"
                        data-mdb-ripple-color="dark"><i class="fab fa-github"></i></a>
                </section>
                <!-- Section: Social media -->
            </div>
            <!-- Grid container -->

            <!-- Copyright -->
            <div class="text-center text-light p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2022 Copyright:
                <a class="text-light" href="https://www.lilipink.com/">lilipink.com</a>
            </div>
            <!-- Copyright -->
        </footer>
    </div>


    <script src="{{ asset('libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('libs/sbadmin/js/sb-admin-2.min.js') }}"></script>

</body>

</html>
