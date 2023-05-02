

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
                            <a href="{{ route('buscarvacante2', ['area' => 'cedi']) }}"><img
                                    src="{{ asset('imgs/cedi.png') }}" class="img-fluid" alt=""></a>

                            <p class="h5 text-center">Registra tu hoja de vida y se parte de los centros de distribución
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box">

                            {{-- <h4 class="text-center">Administrativos</a></h4> --}}
                            <a href="{{ route('buscarvacante2', ['area' => 'administrativo']) }}"><img id="img_btn"
                                    src="{{ asset('imgs/admin.png') }}" class="w-100" alt="tag"></a>
                            <p class="h5 text-center">Registra tu hoja de vida y trabaja en el área administrativa</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                        data-aos-delay="500">
                        <div class="icon-box">
                            {{-- <h4 class="text-center"></h4> --}}
                            <a href="{{ route('buscarvacante2', ['area' => 'comercial']) }}"><img id="img_btn"
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
