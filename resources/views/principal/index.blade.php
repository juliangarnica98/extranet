<!DOCTYPE>
<html>

<head>
    <title> Vertical Menu </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    {{-- <link href="{{ asset('css/style.css') }}" rel="stylesheet"> --}}

    <style>
        .sizecontailer {
            height: 100vh;
        }

        .init::-webkit-scrollbar {
            display: none;
        }

        .bg-black {
            background-color: #000000;
        }

        .hover-underline-animation {
            display: inline-block;
            position: relative;
            color:
                #cc0571;
        }

        .hover-underline-animation:after {
            content: '';
            position: absolute;
            width: 100%;
            transform: scaleX(0);
            height: 2px;
            bottom: 0;
            left: 0;
            background-color:
                #cc0571;
            transform-origin: bottom right;
            transition: transform 0.25s ease-out;
        }

        .hover-underline-animation:hover:after {
            transform: scaleX(1);
            transform-origin: bottom left;
        }


        @media (min-width: 750px) {

            .navbar,
            .navbar-collapse {
                flex-direction: column;
            }

            .navbar-expand-lg .navbar-nav {
                flex-direction: column;
            }

            .navbar {
                /* width: 28%; */
                height: 100vh;
                align-items: flex-start;
            }

            .navbar-brand {
                margin-left: 0.5em;
                padding-bottom: 0;
                border-bottom: 4px solid #464646;
            }

            .navbar-center {
                position: absolute;
                left: 50%;
                transform: translatex(-50%);
            }
        }

        .cta {
            background: linear-gradient(rgba(4, 165, 155, 0.9), rgba(235, 77, 151, 0.9)), url("../imgs/bg-masthead\ -\ copia.jpg") fixed center center;
            background-size: cover;
            padding: 60px 0;
        }

        .cta h3 {
            color: #fff;
            font-size: 28px;
            font-weight: 700;
        }

        .cta p {
            color: #fff;
        }

        .cta .cta-btn {
            font-family: "Jost", sans-serif;
            font-weight: 500;
            font-size: 16px;
            letter-spacing: 1px;
            display: inline-block;
            padding: 12px 40px;
            border-radius: 50px;
            transition: 0.5s;
            margin: 10px;
            border: 2px solid #fff;
            color: #fff;
        }

        .cta .cta-btn:hover {
            background: #04a59b;
            border: 2px solid #04a59b;
        }

        @media (max-width: 1024px) {
            .cta {
                background-attachment: scroll;
            }
        }

        @media (min-width: 769px) {
            .cta .cta-btn-container {
                display: flex;
                align-items: center;
                justify-content: flex-end;
            }
        }

        .contact .info {
            border-top: 3px solid #04a59b;
            border-bottom: 3px solid #04a59b;
            padding: 30px;
            background: #fff;
            width: 100%;
            box-shadow: 0 0 24px 0 rgba(0, 0, 0, 0.1);

            /* background-image: url("{{ asset('images/fondo.jpg') }}"); */
        }

        .contact .info i {
            font-size: 20px;
            color: #04a59b;
            float: left;
            width: 44px;
            height: 44px;
            background: #e7f5fb;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50px;
            transition: all 0.3s ease-in-out;
        }

        .contact .info h4 {
            padding: 0 0 0 60px;
            font-size: 22px;
            font-weight: 600;
            margin-bottom: 5px;
            color: #000000;
        }

        .contact .info p {
            padding: 0 0 10px 60px;
            margin-bottom: 20px;
            font-size: 14px;
            color: #6182ba;
        }

        .contact .info .email p {
            padding-top: 5px;
        }

        .contact .info .social-links {
            padding-left: 60px;
        }

        .contact .info .social-links a {
            font-size: 18px;
            display: inline-block;
            background: #333;
            color: #fff;
            line-height: 1;
            padding: 8px 0;
            border-radius: 50%;
            text-align: center;
            width: 36px;
            height: 36px;
            transition: 0.3s;
            margin-right: 10px;
        }

        .contact .info .social-links a:hover {
            background: #04a59b;
            color: #fff;
        }

        .contact .info .email:hover i,
        .contact .info .address:hover i,
        .contact .info .phone:hover i {
            background: #04a59b;
            color: #fff;
        }

        .contact .php-email-form {
            width: 100%;
            border-top: 3px solid #04a59b;
            border-bottom: 3px solid #04a59b;
            padding: 30px;
            background: #fff;
            box-shadow: 0 0 24px 0 rgba(0, 0, 0, 0.12);
        }

        .contact .php-email-form .form-group {
            padding-bottom: 8px;
        }

        .contact .php-email-form .validate {
            display: none;
            color: red;
            margin: 0 0 15px 0;
            font-weight: 400;
            font-size: 13px;
        }

        .contact .php-email-form .error-message {
            display: none;
            color: #fff;
            background: #ed3c0d;
            text-align: left;
            padding: 15px;
            font-weight: 600;
        }

        .contact .php-email-form .error-message br+br {
            margin-top: 25px;
        }

        .contact .php-email-form .sent-message {
            display: none;
            color: #fff;
            background: #18d26e;
            text-align: center;
            padding: 15px;
            font-weight: 600;
        }

        .contact .php-email-form .loading {
            display: none;
            background: #fff;
            text-align: center;
            padding: 15px;
        }

        .contact .php-email-form .loading:before {
            content: "";
            display: inline-block;
            border-radius: 50%;
            width: 24px;
            height: 24px;
            margin: 0 10px -6px 0;
            border: 3px solid #18d26e;
            border-top-color: #eee;
            animation: animate-loading 1s linear infinite;
        }

        .contact .php-email-form .form-group {
            margin-bottom: 20px;
        }

        .contact .php-email-form label {
            padding-bottom: 8px;
        }

        .contact .php-email-form input,
        .contact .php-email-form textarea {
            border-radius: 0;
            box-shadow: none;
            font-size: 14px;
            border-radius: 4px;
        }

        .contact .php-email-form input:focus,
        .contact .php-email-form textarea:focus {
            border-color: #04a59b;
        }

        .contact .php-email-form input {
            height: 44px;
        }

        .contact .php-email-form textarea {
            padding: 10px 12px;
        }

        .contact .php-email-form button[type=submit] {
            background: #04a59b;
            border: 0;
            padding: 12px 34px;
            color: #fff;
            transition: 0.4s;
            border-radius: 50px;
        }

        .contact .php-email-form button[type=submit]:hover {
            background: #eb4d97;
        }

        @keyframes animate-loading {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .marcas {
            align-items: center;
            /* background: #E3E3E3; */
            display: flex;
            height: 50vh;
            justify-content: center;
        }

        @-webkit-keyframes scroll {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(calc(-250px * 7));
            }
        }

        @keyframes scroll {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(calc(-250px * 7));
            }
        }

        .slider {
            /* background: white;
            box-shadow: 0 10px 20px -5px rgba(0, 0, 0, 0.125); */
            height: 100px;
            margin: auto;
            overflow: hidden;
            position: relative;
            width: 80%;
        }

        .slider::before,
        .slider::after {
            /* background: linear-gradient(to right, white 0%, rgba(255, 255, 255, 0) 100%); */
            content: "";
            height: 100px;
            position: absolute;
            width: 200px;
            z-index: 2;
        }

        .slider::after {
            right: 0;
            top: 0;
            transform: rotateZ(180deg);
        }

        .slider::before {
            left: 0;
            top: 0;
        }

        .slider .slide-track {
            -webkit-animation: scroll 40s linear infinite;
            animation: scroll 40s linear infinite;
            display: flex;
            width: calc(250px * 14);
        }

        .slider .slide {
            height: 100px;
            width: 250px;
        }

        .t-stroke {
            color: transparent;
            -moz-text-stroke-width: 2px;
            -webkit-text-stroke-width: 2px;
            -moz-text-stroke-color: #04a59b;
            -webkit-text-stroke-color: #eb4d97;
        }


        .t-shadow-halftone {
            position: relative;
        }

        .t-shadow-halftone::after {
            content: "HELLO WORLD";
            font-size: 10rem;
            letter-spacing: 0px;
            background: url('bg.jpg') 50% 47% repeat;
            background-size: 150%;
            -webkit-text-fill-color: transparent;
            -moz-text-fill-color: transparent;
            -webkit-background-clip: text;
            -moz-background-clip: text;
            -moz-text-stroke-width: 0;
            -webkit-text-stroke-width: 0;
            position: absolute;
            text-align: center;
            left: 8px;
            right: 0;
            top: 6px;
            z-index: -1;
            transition: all 0.5s ease;
        }

        #img-btn {
            transition: ease-in .2s;
        }

        #img-btn:hover {
            transform: scale(1.2);
        }
    </style>
</head>

<body>
    <div class="row" style="padding: 0; margin: 0;">
        <div class="col-md-2 text-center" style="margin: 0;padding: 0%;">



            <nav class="navbar sizenav navbar-expand-lg navbar-dark bg-black">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse col-12" id="navbarNav">
                    {{-- <div class="collapse navbar-collapse col-12 d-flex justify-content-center" id="navbarNav"> --}}

                    <ul class="navbar-nav d-flex justify-content-center">
                        <li class="nav-item ">
                            <a class="nav-link" href="#"><img class="img-fluid" src="{{ asset('imgs/logo.png') }}"
                                    alt=""></a>
                        </li>
                        <div class="divider bg-light mt-5" style=" border-top: 1px solid #fff;"></div>
                        <li class="nav-item pt-3 mt-5">
                            <strong> <a class="nav-link hover-underline-animation text-light" href="#home"
                                    style="font-weight: bold; font-size: 1.3rem">NOSOTROS</a></strong>
                        </li>
                        <li class="nav-item pt-3">
                            <strong> <a class="nav-link hover-underline-animation text-light" href="#marcas"
                                    style="font-weight: bold; font-size: 1.3rem">MARCAS</a></strong>
                        </li>
                        <li class="nav-item pt-3">
                            <strong><a class="nav-link hover-underline-animation text-light" href="#ofertas"
                                    style="font-weight: bold; font-size: 1.3rem">OFERTAS</a></strong>
                        </li>
                        <li class="nav-item pt-3">
                            <strong> <a class="nav-link hover-underline-animation text-light" href="#contacto"
                                    style="font-weight: bold; font-size: 1.3rem">CONTACTO</a></strong>
                        </li>
                        <div class="divider bg-light mt-5" style=" border-top: 1px solid #fff;"></div>
                        <li class="nav-item pt-5">
                            <h5 class="text-center text-light" style="font-weight: bold;">NUESTRAS REDES SOCIALES</h5>
                            <div class="social-links mt-3 text-center">
                                <div class="row pt-5">
                                    <div class="col-md-4">
                                        <a href="#" class="facebook" style="font-size: 2rem;color: #cc0571;"><i
                                                class="bx bxl-facebook"></i></a>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="#" class="instagram" style="font-size: 2rem;color: #62a59d;"><i
                                                class="bx bxl-instagram"></i></a>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="#" class="linkedin" style="font-size: 2rem;color: #cc0571;"><i
                                                class="bx bxl-linkedin"></i></a>
                                    </div>
                                </div>
                                <div class="row mt-1">
                                    <div class="col-md-4">
                                        <a href="#" class="facebook" style="font-size: 2rem;color: #62a59d;"><i
                                                class="bx bxl-facebook"></i></a>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="#" class="instagram" style="font-size: 2rem;color: #cc0571;"><i
                                                class="bx bxl-instagram"></i></a>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="#" class="linkedin" style="font-size: 2rem;color: #62a59d;"><i
                                                class="bx bxl-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="col-md-10" style="margin: 0;padding: 0%;">
            <div class=" overflow-auto sizecontailer init">
                <div id="home" id="home">
                    <video loop="true" muted autoplay width="100%" height="100%">
                        <source src="{{ asset('video/video.mp4') }}" type="video/mp4">
                    </video>
                </div>
                <div id="marcas">

                    <h1 class="text-center pt-5 t-stroke t-shadow-halftone2 " style="font-size: 3.5rem">
                        NUESTRAS MARCAS</h1>
                    <div class="marcas">

                        <div class="slider">
                            <div class="slide-track">
                                <div class="slide">
                                    <img src="{{ asset('images/lili.png') }}" height="100" width="250"
                                        alt="" />
                                </div>
                                <div class="slide">
                                    <img src="{{ asset('images/yoi.png') }}" height="100" width="250"
                                        alt="" />
                                </div>
                                <div class="slide">
                                    <img src="{{ asset('images/uniq.png') }}" height="100" width="250"
                                        alt="" />
                                </div>
                                <div class="slide">
                                    <img src="{{ asset('images/control-zone.png') }}" height="100" width="250"
                                        alt="" />
                                </div>
                                <div class="slide">
                                    <img src="{{ asset('images/max.png') }}" height="100" width="250"
                                        alt="" />
                                </div>
                                <div class="slide">
                                    <img src="{{ asset('images/lili.png') }}" height="100" width="250"
                                        alt="" />
                                </div>
                                <div class="slide">
                                    <img src="{{ asset('images/yoi.png') }}" height="100" width="250"
                                        alt="" />
                                </div>
                                <div class="slide">
                                    <img src="{{ asset('images/uniq.png') }}" height="100" width="250"
                                        alt="" />
                                </div>
                                <div class="slide">
                                    <img src="{{ asset('images/control-zone.png') }}" height="100" width="250"
                                        alt="" />
                                </div>
                                <div class="slide">
                                    <img src="{{ asset('images/max.png') }}" height="100" width="250"
                                        alt="" />
                                </div>
                                <div class="slide">
                                    <img src="{{ asset('images/lili.png') }}" height="100" width="250"
                                        alt="" />
                                </div>
                                <div class="slide">
                                    <img src="{{ asset('images/yoi.png') }}" height="100" width="250"
                                        alt="" />
                                </div>
                                <div class="slide">
                                    <img src="{{ asset('images/uniq.png') }}" height="100" width="250"
                                        alt="" />
                                </div>
                                <div class="slide">
                                    <img src="{{ asset('images/control-zone.png') }}" height="100" width="250"
                                        alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="ofertas">
                    <div class="row">
                        <div class="container" data-aos="fade-up">
                            <div class="pt-0">
                                <h1 class="text-center pt-3 t-stroke t-shadow-halftone2 " style="font-size: 3.5rem">
                                    OFERTAS DE
                                    EMPLEO</h1>
                                {{-- <h2 class="text-center pt-3" style="font-weight: bold; color :#cc0571"></h2> --}}
                            </div>
                            <div class="row pt-5">
                                <div class="col-xl-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in"
                                    data-aos-delay="100">
                                    <div class="icon-box">
                                        {{-- <h4 class="text-center"></h4> --}}
                                        <a href="{{ route('buscarvacante2', ['area' => 'cedi']) }}"><img
                                                src="{{ asset('imgs/cedi.png') }}" class="img-fluid" id="img-btn"
                                                alt=""></a>


                                        </p>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0"
                                    data-aos="zoom-in" data-aos-delay="300">
                                    <div class="icon-box">


                                        <a href="{{ route('buscarvacante2', ['area' => 'administrativo']) }}"><img
                                                id="img-btn" src="{{ asset('imgs/admin.png') }}" class="w-100"
                                                alt="tag"></a>

                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0"
                                    data-aos="zoom-in" data-aos-delay="500">
                                    <div class="icon-box">
                                        {{-- <h4 class="text-center"></h4> --}}
                                        <a href="{{ route('buscarvacante2', ['area' => 'comercial']) }}"><img
                                                id="img-btn" src="{{ asset('imgs/tienda.png') }}"
                                                class="img-fluid" alt="tag"></a>


                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row cta pt-5">
                        <div class="col-lg-12 text-center text-lg-start">
                            <h3 class="h2 mt-2">REGISTRA TU HOJA DE VIDA</h3>
                            <i>
                                <p class="h3">Si no has encontrado vacantes para ti registra tu hoja de vida</p>
                            </i>
                            <a class="cta-btn align-middle mt-5" href="{{ route('vacantes.index') }}">Ver
                                vacantes</a>
                        </div>
                        {{-- <div class="col-lg-3 cta-btn-container text-center">
                            
                        </div> --}}
                    </div>
                </div>
                <div class="contact pb-3 pt-3 mt-3 mb-3" id="contacto">
                    <div class="container" data-aos="fade-up">
                        <div class="section-title">
                            <h1 class="text-center pt-5 t-stroke t-shadow-halftone2 " style="font-size: 3.5rem">
                                CONTACTO</h1>

                        </div>
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-6 mt-5 mt-lg-0 d-flex align-items-stretch">
                                <form action="forms/contact.php" method="post" role="form"
                                    class="php-email-form">
                                    <div class="row">
                                        <div class="form-group col-md-6">

                                            <input type="text" name="name" class="form-control" id="name"
                                                required placeholder="NOMBRE" style="border-radius: 25px;">
                                        </div>
                                        <div class="form-group col-md-6">

                                            <input type="email" class="form-control" name="email" id="email"
                                                required placeholder="CORREO" style="border-radius: 25px;">
                                        </div>
                                    </div>
                                    <div class="form-group">

                                        <input type="text" class="form-control" name="subject" id="subject"
                                            required placeholder="TEMA" style="border-radius: 25px;">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" name="message" rows="7" required style="border-radius: 25px;">MENSAJE</textarea>
                                    </div>
                                    <div class="text-center"><button type="submit">ENVIAR</button></div>
                                </form>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script>
        // document.getElementById('id').scrollIntoView();
        // $("a[href^='#']").click(function(e) {
        //     e.preventDefault();

        //     var position = $($(this).attr("href")).offset().top;

        //     $("body, html").animate({
        //         scrollTop: position
        //     } );
        // });
    </script>
</body>

</html>
