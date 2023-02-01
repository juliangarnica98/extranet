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
        background: #aaaaaa;
    }

    *::-webkit-scrollbar-thumb {
        background-color: #0fa3a1;
        border-radius: 20px;
        border: 3px solid transparent;
    }

    #content {
        background-color: #fff;
    }

    .scroll {
        max-height: 100px;
        overflow-y: auto;
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
        /* background-color: #acacac; */
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

            <div class="container">
                <div class="row justify-content-center pb-3">
                    <div class="col-md-5">
                        <input type="text" class="form-control" placeholder="Buscar..">
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-md-7 ">
                        <div class="card " style="height: 85vh">
                            <div class="card-body pt-2 pb-2 pl-0 pr-0 mb-2 overflow-auto">
                                <div class="card mt-2 border-0 mb-5">
                                    <div class="d-flex justify-content-center">
                                        <a href="#" class="card-block stretched-link text-decoration-none">
                                            <div class="card-body pt-0 pb-0 ">
                                                <h5 class="card-title pl-0" style="color: #e85099"><strong>
                                                        Empleos <i class="fas fa-user-md"></i>
                                                        @if ($type == 1)
                                                            Centro de distribución
                                                        @elseif ($type == 2)
                                                            Administrativo
                                                        @else
                                                            Tiendas
                                                        @endif
                                                    </strong> </h5>
                                            </div>
                                        </a>
                                    </div>

                                </div>
                                @foreach ($jobs as $job)
                                    <div class="border-top border-bottom mt-1">
                                        <div class="card pl-0 pr-0 ml-0 mr-0 border-0 ">
                                            {{-- <a href="#" class="card-block stretched-link text-decoration-none"> --}}
                                                {{-- <a href="{{ route('buscarvacante', ['id' => $vacant->id]) }}"
                                                class="card-block stretched-link text-decoration-none"> --}}
                                            <a href="{{ route('admin.vacante', ['id' => $job->id, 'type' => '1']) }}"
                                                    class="card-block stretched-link text-decoration-none">
                                                    <div class="card-body pt-1 pb-1 ml-0 mr-0 ">
                                                        <h5 class="card-title text-dark text-center">
                                                            <strong>{{ $job->description }}</strong>
                                                        </h5>
                                                        <p class="card-text text-dark">Ubicación:
                                                            {{ $job->location }} </p>
                                                    </div>
                                                </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-md-6 pt-5 mt-5">
                        <h1 class="h1 text-center" style="color: #e85099"><strong>
                        
                            @if ($type == 1)
                                EMPLEOS CENTROS DE DISTRIBUCIÓN
                            @elseif ($type == 2)
                                EMPLEOS ADMINISTRATIVOS
                            @else
                                EMPLEOS TIENDAS
                            @endif
                        </strong></h1>
                    </div> --}}
                    {{-- <div class="col-md-6 ">
                        <div class="card text-dark" style="height: auto">
                            @if (isset($vacant_found))
                                <div class="card-body">
                                    <h2 class="card-title text-center"><strong> {{ $vacant_found->title }} <br>
                                        </strong>
                                    </h2>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="text-center">
                                                {{$vacant_found->city}} <br>
                                                <small id="ago"
                                                    class="card-subtitle mb-2 text-dark text-center pl-2 pr-2"
                                                   >
                                                    {{ date('d-m-Y', strtotime($vacant_found->created_at)) }}</small> <br>
                                                    
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="d-flex justify-content-center">
                                                <a href="{{ route('admin.vacante', $vacant->id) }}"
                                                    class="btn btn-block"
                                                    style="border-radius: 20px; background-color: #e85199;color:#fff">Aplicar</a>
                                            </div>
                                        </div>
                                    </div>



                                    <hr>
                                    <div class="row pb-3 mt-3">
                                        <div class="col-4">
                                            <p class="card-text border text-center" style="border-radius: 20px;">
                                                ${{ number_format($vacant_found->salary, 1, ',', '.') }} COP</p>
                                        </div>
                                        <div class="col-4">
                                            <p class="card-text border text-center" style="border-radius: 20px;">
                                                {{ $vacant_found->city }}</p>
                                        </div>
                                        <div class="col-4">
                                            <p class="card-text border text-center" style="border-radius: 20px;">
                                                Contrato {{ $vacant_found->type_contract }}</p>
                                        </div>
                                    </div>

                                    <p class="card-text text-dark">
                                    <h4><strong>Descripción:</strong> </h4>
                                    {{ $vacant_found->description }}
                                    <br>
                                    <strong>Vacantes:</strong> {{ $vacant_found->num_vacants }}

                                    </p>
                                    <h4><strong>Requisitos:</strong> </h4>
                                    <p class="text-dark">
                                        &#8226; <strong>Disponibilidad para viajar:</strong>
                                        {{ $vacant_found->availability_travel }} <br>
                                        &#8226; <strong>Idioma necesario:</strong> {{ $vacant_found->language }} <br>
                                        &#8226; <strong>Nivel educativo requerido:</strong>
                                        {{ $vacant_found->education }} <br>
                                        &#8226; <strong>Experiencia:</strong> {{ $vacant_found->experience }}
                                    </p>
                                    <div class="d-flex justify-content-center">
                                        <a href="{{ route('admin.vacante', $vacant->id) }}"
                                            class="btn btn-info btn-block" style="border-radius: 20px; ">Aplicar</a>
                                    </div>

                                </div>
                            @endif
                        </div>
                    </div> --}}
                </div>
            </div>


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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.2/moment.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.2/locale/es.js"></script>

    <script>
        $(document).ready(function() {
            moment.locale('es');
            var ago = document.querySelector("#ago");
            ago.textContent = moment(ago.innerHTML, "DDMMYYYY").fromNow();
        });
    </script>
</body>

</html>
