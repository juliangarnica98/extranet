{{-- <!DOCTYPE html>
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
        background-color: #818181;
        border-radius: 20px;
        border: 3px solid transparent;
    }

    #content {
        background-color: #fff;
    }

    .container {
        padding-top: 5%;
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
        padding-top: 30rem;
        padding-bottom: calc(10rem - 4.5rem);
        background: url("{{ asset('imgs/bg-masthead.jpg') }}");
       
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
            padding-top: 15rem;
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
        background-color: #ffffff
    }
    #img_btn{
        transition: all 0.8s ease;
        transform: scale(1);
    }
    #img_btn:hover{
        transform: scale(1.5,1.5);
    }
    .box{
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    }
</style>

<body id="page-top">
    <div class="navegacion">

        <nav class="navbar navbar-expand-lg navbar-light fixed-top box" style="background-color: #ffffff">
            <a class="navbar-brand" href="/" style="color: #f06fb9">
                <h1> Talentos Lili&Yoi</h1>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse mr-auto justify-content-end align-items-right"
                id="navbarSupportedContent">
                <ul class="navbar-nav">

                    <li class="nav-item "><a class="navbar-brand nav-link" style="color: #f06fb9" href="#quienes_somos">¿Quienes
                            somos?</a></li>
                    <li class="nav-item "><a class="navbar-brand nav-link" style="color: #f06fb9" href="{{route('vacantes.index')}}">Ofertas</a></li>
                    <li class="nav-item "><a class="navbar-brand nav-link" style="color: #f06fb9" href="#porque">¿Por
                            qué trabajar
                            con nosotros?</a></li>
                    <li class="nav-item"> <a class="navbar-brand  nav-link" style="color: #f06fb9"
                            href="#contactanos">Contactanos</a></li >

                </ul>
            </div>
        </nav>
    </div>
    <div class="div">
        <div class="imagen_portada"></div>
    </div>
    <div class="quienes_somos" id="quienes_somos">
        <div class="container">
            <div class="row pb-4">
                <div class="col-md-5">
                    <img src="{{ asset('imgs/icono-who.png') }}" alt="tag" style="height: 50vh;">
                </div>
                <div class="col-md-7 text-light pt-3">
                    <h2 class="text-center text-dark">¿Quiénes somos?</h2>
                    <p class="pt-5 h4 text-cente text-dark">Somos una marca JOVEN, CREATIVA, FRESCA y DIVERTIDA, pensada en
                        mujeres con estas mismas características. El color, la comodidad y la tecnología son nuestras
                        principales cualidades por las que nuestras consumidoras nos refieren...</p>
                </div>

            </div>
        </div>

    </div>
    <div class="ofertas pb-5" id="ofertas" style="background-color: #212529">
        <h1 class="text-center text-light pt-5">¿Quieres ser parte de nuestro equipo?</h1>
        <p class="text-center text-light h3">Registra tu hoja de vida</p>
        
        <div class="row w-100">
            <div class="col">
                <a href="{{ route('buscarvacante2', ['id' => 2]) }}"> <img id="img_btn" src="{{ asset('imgs/admin.png') }}" class="img-fluid" alt="tag"></a>
            </div>
            <div class="col">
                <a href="{{ route('buscarvacante2', ['id' => 1]) }}"><img id="img_btn" src="{{ asset('imgs/cedi.png') }}" class="img-fluid" alt="tag"></a>
            </div>
            <div class="col">
                <a href="{{ route('buscarvacante2', ['id' => 3]) }}"><img id="img_btn" src="{{ asset('imgs/tienda.png') }}" class="img-fluid" alt="tag"></a>
            </div>
        </div>
        <p class="text-center text-light h3">...o revisa las vacantes disponibles que tenemos para ti...</p>
        <div class="d-flex justify-content-center">
            <a class="btn btn-light btn-block mt-5 col-4"
                style="border-radius: 30px; border-color: #e85199; color: #e85199" href="{{route('vacantes.index')}}">Información</a>
        </div>
    </div>
    <div class="porque" id="porque">
        <h1 class="text-center mt-5">¿Por qué trabajar con nosotros?</h1>
        <div class="row w-100">
            <div class="col-4">
                <img src="{{ asset('imgs/comunicacion.jpg') }}" class="img-fluid" alt="tag">
            </div>
            <div class="col-4">
                <img src="{{ asset('imgs/equipo.jpg') }}" class="img-fluid" alt="tag">
            </div>
            <div class="col-4">
                <img src="{{ asset('imgs/pasion.jpg') }}" class="img-fluid" alt="tag">
            </div>
        </div>
    </div>
    <div class="contactanos" id="contactanos">
        <div class="form_contactanos pt-5 pb-5" id="form_contactanos">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-8">
                        <form action="">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1"
                                    placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Correo</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1"
                                    placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Mensaje</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div class="d-flex justify-content-center pt-4">
                                <button class="btn btn-light col-4"
                                    style="border-radius: 30px; border-color: #e85199; color: #e85199">Enviar</button>
                            </div>

                        </form>

                    </div>

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

</body>

</html> --}}

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


    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>

<body>
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

    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">
            <h1 class="logo me-auto"><a href="{{ route('home.index') }}">Talentos Lili&Yoi</a></h1>
            <div class="text-center d-flex align-items-center justify-content-center">
                <nav id="navbar" class="navbar">
                    <ul>
                        <li><a class="nav-link scrollto active" href="#about">¿Quienes somos?</a></li>
                        <li><a class="nav-link scrollto" href="#services">Ofertas</a></li>
                        <li><a class="nav-link scrollto" href="#pricing">¿Por qúe trabajar?</a></li>
                        <li><a class="nav-link scrollto" href="#contact">Contacto</a></li>
                        {{-- <li><a class="nav-link scrollto" href="">Iniciar Sesión</a></li> --}}
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav>
            </div>
        </div>
    </header>



    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1 class="h1 text-center pb-3">Talentos Lili&Yoi</h1>
                    <h2 class="h1 text-center">Conoce nuestras vacantes disponibles o registra tu hoja de vida</h2>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img text-center" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{ asset('imgs/principal.png') }}" class="img-fluid animated w-100" alt=""
                        id="img-hero">
                </div>
            </div>
        </div>
    </section>

    <main id="main">



        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>¿Quiénes somos?</h2>
                </div>
                <div class="row content ">
                    <div class="col-lg-6 text-center">
                        <img src="{{ asset('imgs/icono-who.png') }}" alt="tag" class="img-fluid w-75 img-who"
                            style="border-radius: 30%">
                    </div>
                    <div class="col-lg-6  text-who">
                        <p class="h4 text-center ">
                            Somos una marca JOVEN, CREATIVA, FRESCA y DIVERTIDA, pensada en mujeres con estas mismas
                            características. El color, la comodidad y la tecnología son nuestras principales cualidades
                            por las que nuestras consumidoras nos refieren...
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Registra tu hoja de vida en alguna de nuestras áreas</h2>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            {{-- <h4 class="text-center"></h4> --}}
                            <a href="{{ route('buscarvacante2', ['id' => 1]) }}"><img
                                    src="{{ asset('imgs/cedi.png') }}" class="img-fluid" alt=""></a>

                            <p class="h5 text-center">Registra tu hoja de vida y se parte de los centros de distribución
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box">

                            {{-- <h4 class="text-center">Administrativos</a></h4> --}}
                            <a href="{{ route('buscarvacante2', ['id' => 2]) }}"><img id="img_btn"
                                    src="{{ asset('imgs/admin.png') }}" class="w-100" alt="tag"></a>
                            <p class="h5 text-center">Registra tu hoja de vida y trabaja en el área administrativa</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                        data-aos-delay="500">
                        <div class="icon-box">
                            {{-- <h4 class="text-center"></h4> --}}
                            <a href="{{ route('buscarvacante2', ['id' => 3]) }}"><img id="img_btn"
                                    src="{{ asset('imgs/tienda.png') }}" class="img-fluid" alt="tag"></a>

                            <p class="h5 text-center">Registra tu hoja de vida y se parte del área comercial</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>



        <section id="cta" class="cta">
            <div class="container" data-aos="zoom-in">
                <div class="row">
                    <div class="col-lg-9 text-center text-lg-start">
                        <h3 class="h2">Vacantes</h3>
                        <p class="h3">Tenemos alguna vacantes disponibles para ti, echales un vistazo ...</p>
                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle" href="{{ route('vacantes.index') }}">Ver vacantes</a>
                    </div>
                </div>

            </div>
        </section>




        <section id="pricing" class="pricing">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>¿Por qué trabajar con nosotros?</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{ asset('imgs/comunicacion.jpg') }}" class="img-fluid" alt="tag">
                    </div>
                    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
                        <img src="{{ asset('imgs/equipo.jpg') }}" class="img-fluid" alt="tag">
                    </div>
                    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="700">
                        <img src="{{ asset('imgs/pasion.jpg') }}" class="img-fluid" alt="tag">
                    </div>



                </div>

            </div>
        </section>



        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Contactanos</h2>
                    <p>Si tienes alguna duda no olvides contactarte con nosotros</p>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name">Nombre</label>
                                    <input type="text" name="name" class="form-control" id="name"
                                        required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name">Correo</label>
                                    <input type="email" class="form-control" name="email" id="email"
                                        required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name">Tema</label>
                                <input type="text" class="form-control" name="subject" id="subject" required>
                            </div>
                            <div class="form-group">
                                <label for="name">Mensaje</label>
                                <textarea class="form-control" name="message" rows="10" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Enviar mensaje</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section>
    </main>


    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-6 footer-links">
                        <h4 class="text-center">Nuestras redes sociales</h4>
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

    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
