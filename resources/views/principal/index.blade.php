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
        /* background: linear-gradient(to bottom, rgba(92, 77, 66, 0.8) 0%, rgba(92, 77, 66, 0.8) 100%), url("../../../../public/imgs/bg-masthead.jpg"); */
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

                    <li class="nav-item "><a class="navbar-brand  text-light nav-link" href="#quienes_somos">¿Quienes
                            somos?</a></li>
                    <li class="nav-item "><a class="navbar-brand  text-light nav-link" href="#ofertas">Ofertas</a></li>
                    <li class="nav-item "><a class="navbar-brand  text-light nav-link" href="#porque">¿Por
                            qué trabajar
                            con nosotros?</a></li>
                    <li class="nav-item"> <a class="navbar-brand  text-light nav-link"
                            href="#contactanos">Contactanos</a></li>

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
                    <h2 class="text-center">¿Quiénes somos?</h2>
                    <p class="pt-5 h4 text-center">Somos una marca JOVEN, CREATIVA, FRESCA y DIVERTIDA, pensada en
                        mujeres con estas mismas características. El color, la comodidad y la tecnología son nuestras
                        principales cualidades por las que nuestras consumidoras nos refieren...</p>
                </div>

            </div>
        </div>

    </div>
    <div class="ofertas pb-5" id="ofertas" style="background-color: #212529">
        <h1 class="text-center text-light pt-5">¿Quieres ser parte de nuestro equipo?</h1>
        <p class="text-center text-light h3">Tenemos vacantes dispopnibles para ti...</p>
        <div class="row w-100">
            <div class="col">
                <img src="{{ asset('imgs/admin.png') }}" class="img-fluid" alt="tag">
            </div>
            <div class="col">
                <img src="{{ asset('imgs/cedi.png') }}" class="img-fluid" alt="tag">
            </div>
            <div class="col">
                <img src="{{ asset('imgs/tienda.png') }}" class="img-fluid" alt="tag">
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <a class="btn btn-light btn-block mt-5 col-4"
                style="border-radius: 30px; border-color: #e85199; color: #e85199" href="/vacantes">Información</a>
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

</html>
