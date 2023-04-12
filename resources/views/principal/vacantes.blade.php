<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Talento Lili</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('libs/fontawesome/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <style>
        .bg-main {
            background: linear-gradient(rgba(4, 165, 155, 0.9), rgba(235, 77, 151, 0.9)), url("{{ asset('imgs/bg-masthead - copia.jpg') }}") fixed center center;
        }
    </style>

</head>

<body>


    <header id="header" class="fixed-top" style="background-color: #000000">
        <div class="container d-flex align-items-center">
            <h1 class="logo me-auto"><a href="{{ route('home.index') }}">Talentos Lili&Yoi</a></h1>
            <div class="text-center d-flex align-items-center justify-content-center">
                <nav id="navbar" class="navbar ">
                    <ul>
                        <li><a class="nav-link scrollto" href="{{ route('login') }}" target="_parent">Iniciar Sesión</a></li>
                        {{-- <li><a class="nav-link scrollto" href="/login" target="">Iniciar Sesión</a></li> --}}
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav>
            </div>
        </div>
    </header>


    <main id="main" style="padding-top: 4%" class="bg-main pb-5">



        @if (Session::has('error'))
            <script>
                Swal.fire(
                    'Error',
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
        @if (old('documento'))
            <script>
                Swal.fire({
                    title: "Ya existe el documento en nuestras bases",
                    showDenyButton: true,
                    showCancelButton: true,
                    confirmButtonText: 'Aplicar a vacante',
                    denyButtonText: `Editar información`,
                    cancelButtonText: 'Cancelar',
                }).then((result) => {
                    if (result.isConfirmed) {
                        let data = {
                            documento: {{ old('documento') }},
                            type: '2',
                            vacant_id: {{ old('vacant_id') }}
                        }
                        fetch('/extranet/aplicar-vacante', {
                                headers: {
                                    'Content-Type': 'application/json',
                                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                                        'content')
                                },
                                method: 'post',
                                body: JSON.stringify(data)
                            }).then(response => response.json())
                            .then(function(result) {
                                Swal.fire('', result.mensaje, 'success')                                
                            })
                            .catch(function(error) {});
                    } else if (result.isDenied) {
                        window.location.href = 'http://www.google.com';
                    }
                })
            </script>
        @endif



        <div class="div pt-5">
            <div class="imagen_portada">
                <div class="d-flex justify-content-center">
                    <div class="col-md-11">
                        <div class="row">
                            <div class="col-md-3" style="">
                                <div class="card"
                                    style="height: 85vh; background-color: rgba(255, 255, 255, 0.6);height: auto">
                                    <div class="card-body">
                                        <h2 class="card-title text-center"><strong> FILTROS<br>
                                            </strong>
                                        </h2>
                                        <form action="{{ route('filtrar.vacantes') }}" method="get">
                                            @csrf
                                            <span for="" class="text-center">Area</span>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="area"
                                                    id="flexRadioDisabled" value="cedi">
                                                <label class="form-check-label" for="flexRadioDisabled">
                                                    Cedi
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="area"
                                                    id="flexRadioCheckedDisabled" value="administrativo">
                                                <label class="form-check-label" for="flexRadioCheckedDisabled">
                                                    Administrativos
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="area"
                                                    id="flexRadioCheckedDisabled" value="comercial">
                                                <label class="form-check-label" for="flexRadioCheckedDisabled">
                                                    Comercial
                                                </label>
                                            </div>
                                            <span for="" class="text-center">Salario</span>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="salario"
                                                    id="flexRadioDisabled" value="1">
                                                <label class="form-check-label" for="flexRadioDisabled">
                                                    $0 - $1'000.000
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="salario"
                                                    id="flexRadioCheckedDisabled" value="2">
                                                <label class="form-check-label" for="flexRadioCheckedDisabled">
                                                    $1'000.001 - $3'000.000
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="salario"
                                                    id="flexRadioCheckedDisabled" value="3">
                                                <label class="form-check-label" for="flexRadioCheckedDisabled">
                                                    $3'000.001 - mas
                                                </label>
                                            </div>

                                            <button class="btn col-10 m-2 text-center"
                                                style="background-color: #e85199;border-radius: 25px;">Buscar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4" style="">
                                <div class="card" style="height: 85vh; background-color: rgba(255, 255, 255, 0.6)">
                                    <div class="card-body pt-2 pb-2 pl-0 pr-0">
                                        <div class="card mt-2 border-0"
                                            style=" background-color: rgba(255, 255, 255, 0.7)">
                                            <div class="d-flex justify-content-center">
                                                <a href="#"
                                                    class="card-block stretched-link text-decoration-none">
                                                    <div class="card-body pt-0 pb-0 ">
                                                        <h5 class="card-title text-dark pl-0"><strong>
                                                                Empleos encontrados <i class="fas fa-user-md"></i>
                                                            </strong> </h5>
                                                    </div>
                                                </a>
                                            </div>

                                        </div>
                                        @foreach ($vacants as $vacant)
                                            <div class="border-top border-bottom mt-1">
                                                <div class="card pl-0 pr-0 ml-0 mr-0 border-0"
                                                    style=" background-color: rgba(255, 255, 255, 0.7)">
                                                    {{-- border-right-0 border-left-0 --}}
                                                    <a href="{{ route('buscarvacante', ['id' => $vacant->id]) }}"
                                                        class="card-block stretched-link text-decoration-none">
                                                        <div class="card-body pt-1 pb-1 ml-0 mr-0">

                                                            <h5 class="card-title text-dark text-center">
                                                                <strong>{{ $vacant->title }}</strong>
                                                            </h5>
                                                            <h6 class="card-subtitle mb-1 text-dark">
                                                                {{ $vacant->city }} -
                                                                ${{ number_format($vacant->salary, 1, ',', '.') }} COP
                                                            </h6>
                                                            <p class="card-text text-dark">Educación requerida:
                                                                {{ $vacant->education }} </p>
                                                            <small id="ago"
                                                                class="card-subtitle mb-2 text-dark text-center pl-2 pr-2">
                                                                {{ date('d-m-Y', strtotime($vacant->created_at)) }}</small>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="card text-dark"
                                    style="height: auto;background-color: rgba(255, 255, 255, 0.6)">
                                    @if (isset($vacant_found))
                                        <div class="card-body">
                                            <h2 class="card-title text-center"><strong> {{ $vacant_found->title }}
                                                    <br>
                                                </strong>
                                            </h2>



                                            <div class="row">
                                                <div class="col-md-6">
                                                    <p class="text-center">
                                                        {{ $vacant_found->city }} <br>
                                                        <small id="ago"
                                                            class="card-subtitle mb-2 text-dark text-center pl-2 pr-2">
                                                            {{ date('d-m-Y', strtotime($vacant_found->created_at)) }}</small>
                                                        <br>

                                                    </p>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="d-flex justify-content-center">
                                                        {{-- <a href="{{ route('admin.vacante', $vacant->id) }}" --}}
                                                        {{-- <button type="button" class="btn btn-block" data-toggle="modal"
                                                                       data-target="#cedula_verificacion">
                                                                       Aplicar
                                                                   </button>
                                                                    --}}
                                                        <button class="btn btn-block" data-toggle="modal"
                                                            style="border-radius: 20px; background-color: #e85199;color:#fff"
                                                            data-target="#cedula_verificacion">
                                                            Aplicar
                                                        </button>

                                                        @include('principal.modals.verificarcedula')
                                                        {{-- <a href="{{ route('home.vacante', ['id' => $vacant_found->id, 'type' => '2', 'area' => $vacant_found->area_id]) }}"
                                                                       class="btn btn-block col-6"
                                                                       style="border-radius: 20px; background-color: #e85199;color:#fff">Aplicar</a> --}}
                                                    </div>
                                                </div>
                                            </div>



                                            <hr>
                                            <div class="row pb-3 mt-3">
                                                <div class="col-4">
                                                    <p class="card-text border text-center"
                                                        style="border-radius: 20px;">
                                                        ${{ number_format($vacant_found->salary, 1, ',', '.') }} COP
                                                    </p>
                                                </div>
                                                <div class="col-4">
                                                    <p class="card-text border text-center"
                                                        style="border-radius: 20px;">
                                                        {{ $vacant_found->city }}</p>
                                                </div>
                                                <div class="col-4">
                                                    <p class="card-text border text-center"
                                                        style="border-radius: 20px;">
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
                                                &#8226; <strong>Idioma necesario:</strong>
                                                {{ $vacant_found->language }}
                                                <br>
                                                &#8226; <strong>Nivel educativo requerido:</strong>
                                                {{ $vacant_found->education }} <br>
                                                &#8226; <strong>Experiencia:</strong> {{ $vacant_found->experience }}
                                            </p>
                                            <div class="d-flex justify-content-center">
                                                <button class="btn btn-block" data-toggle="modal"
                                                    style="border-radius: 20px; background-color: #e85199;color:#fff"
                                                    data-target="#cedula_verificacion">
                                                    Aplicar
                                                </button>

                                                @include('principal.modals.verificarcedula')
                                                {{-- 
                                                           <a href="{{ route('home.vacante', ['id' => $vacant_found->id, 'type' => '2', 'area' => $vacant_found->area_id]) }}"
                                                               class="btn btn-info btn-block col-12"
                                                               style="border-radius: 20px; ">Aplicar</a> --}}
                                            </div>

                                        </div>
                                    @else
                                        <h2 class="card-title text-center"><strong>Selecciona la vacante de tu interes
                                                <br>
                                            </strong>
                                        </h2>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <footer id="footer">
        <div class="footer-top" style="background-color: #000000">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-6 footer-links">
                        <h4 class="text-center" style="color: #fff">Nuestras redes sociales</h4>
                        <div class="social-links mt-3 text-center">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>lilipink.com</span></strong>. Todos los derechos reservados
            </div>
        </div>
    </footer>

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="{{ asset('libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.2/moment.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.2/locale/es.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="{{ asset('js/main.js') }}"></script>
    <script>
        $(document).ready(function() {
            moment.locale('es');
            var ago = document.querySelector("#ago");
            ago.textContent = moment(ago.innerHTML, "DDMMYYYY").fromNow();
        });
    </script>
</body>

</html>
