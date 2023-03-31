<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Talento Lili</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

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
            <h1 class="logo me-auto"><a href="{{route('home.index')}}">Talentos Lili&Yoi</a></h1>
            <div class="text-center d-flex align-items-center justify-content-center">
                <nav id="navbar" class="navbar ">
                    <ul>
                        <li><a class="nav-link scrollto" href="{{route('login')}}">Iniciar Sesión</a></li>
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
        <div class="div pt-5">
            <div class="imagen_portada">

                <div class="container">
                    <div class="row justify-content-center pb-3">
                        <div class="col-md-5">
                            <input type="text" class="form-control" placeholder="Buscar..">
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-7 ">
                            <div class="card " style="height: 85vh;background-color: rgba(255, 255, 255, 0.6)">
                                <div class="card-body pt-2 pb-2 pl-0 pr-0 mb-2 overflow-auto">
                                    <div class="card mt-2 border-0 mb-3" style="background-color: rgba(255, 255, 255, 0)">
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
                                            <div class="card pl-0 pr-0 ml-0 mr-0 border-0 "  style="background-color: rgba(255, 255, 255, 0.5)">

                                                <a href="{{ route('home.vacante', ['id' => $job->id, 'type' => '1', 'area' => $type]) }}"
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


    <script src="{{ asset('vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('libs/jquery/jquery.min.js') }}"></script>
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
