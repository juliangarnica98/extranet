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
</head>
<style>
    body {
        /* font-family: 'Open Sans', sans-serif; */
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

    #signUpForm {
        max-width: 90%;
        background-color: rgba(255, 255, 255, 0.9);
        margin: 40px auto;
        padding: 40px;
        box-shadow: 0px 6px 18px rgb(0 0 0 / 9%);
        border-radius: 12px;
    }

    #signUpForm .form-header {
        gap: 5px;
        text-align: center;
        font-size: .9em;
    }

    #signUpForm .form-header .stepIndicator {
        position: relative;
        flex: 1;
        padding-bottom: 30px;
    }

    #signUpForm .form-header .stepIndicator.active {
        font-weight: 600;
    }

    #signUpForm .form-header .stepIndicator.finish {
        font-weight: 600;
        color: #009688;
    }

    #signUpForm .form-header .stepIndicator::before {
        content: "";
        position: absolute;
        left: 50%;
        bottom: 0;
        transform: translateX(-50%);
        z-index: 9;
        width: 20px;
        height: 20px;
        background-color: #d5efed;
        border-radius: 50%;
        border: 3px solid #ecf5f4;
    }

    #signUpForm .form-header .stepIndicator.active::before {
        background-color: #a7ede8;
        border: 3px solid #d5f9f6;
    }

    #signUpForm .form-header .stepIndicator.finish::before {
        background-color: #009688;
        border: 3px solid #b7e1dd;
    }

    #signUpForm .form-header .stepIndicator::after {
        content: "";
        position: absolute;
        left: 50%;
        bottom: 8px;
        width: 100%;
        height: 3px;
        background-color: #f3f3f3;
    }

    #signUpForm .form-header .stepIndicator.active::after {
        background-color: #a7ede8;
    }

    #signUpForm .form-header .stepIndicator.finish::after {
        background-color: #009688;
    }

    #signUpForm .form-header .stepIndicator:last-child:after {
        display: none;
    }






    #signUpForm input {
        padding: 15px 20px;
        border: 2px solid #c2c2c2;
        /* border-bottom: 2px solid  #c2c2c2; */

        /* border-radius: 5px; */
        color: #b47676;
        border-radius: 25px;
    }

    #signUpForm textarea {
        border: 2px solid #c2c2c2;
        /* border-bottom: 2px solid  #c2c2c2; */
        border-radius: 5px;
        color: #646464;
        border-radius: 25px;
    }

    #signUpForm select {
        padding: 15px 20px;
        border: 2px solid #c2c2c2;
        /* border-bottom: 2px solid  #c2c2c2;   */
        /* border-radius: 5px; */
        color: #646464;
        border-radius: 25px;
    }

    #signUpForm input:focus {
        border: 3px solid #009688;
        outline: 0;
    }

    #signUpForm select:focus {
        border: 3px solid #009688;
        outline: 0;
    }

    #signUpForm textarea:focus {
        border: 3px solid #009688;
        outline: 0;
    }

    #signUpForm input.invalid {
        border: 1px solid #ffaba5;
    }

    #signUpForm select.invalid {
        border: 1px solid #ffaba5;
    }

    #signUpForm textarea.invalid {
        border: 1px solid #ffaba5;
    }





    #signUpForm .step {
        display: none;
    }

    #signUpForm .form-footer {
        overflow: auto;
        gap: 20px;
    }

    #signUpForm .form-footer button {
        background-color: #009688;
        border: 1px solid #009688 !important;
        color: #ffffff;
        border: none;
        padding: 13px 30px;
        font-size: 1em;
        cursor: pointer;
        border-radius: 5px;
        flex: 1;
        margin-top: 5px;
        border-radius: 25px;
    }

    #signUpForm .form-footer button:hover {
        opacity: 0.8;
    }

    #signUpForm .form-footer #prevBtn {
        background-color: #fff;
        color: #009688;
        border-radius: 25px;
    }


    .background-barnav2 {
        background: rgb(232, 81, 153);
        background: linear-gradient(90deg, rgba(232, 81, 153, 1) 47%, rgba(3, 168, 162, 1) 100%);
    }


    .imagen_portada {
        padding-top: 3rem;
        padding-bottom: calc(10rem - 4.5rem);
        background: linear-gradient(to bottom, rgba(92, 77, 66, 0.8) 0%, rgba(92, 77, 66, 0.8) 100%), url("{{ asset('imgs/work.jpg') }}");
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: scroll;
        background-size: cover;
    }

    .bg-main {
        background: linear-gradient(rgba(4, 165, 155, 0.9), rgba(235, 77, 151, 0.9)), url("{{ asset('imgs/bg-masthead - copia.jpg') }}") fixed center center;
    }

    ,
    .btn {
        border-radius: 20px;
    }

    #nextBtn {
        border-radius: 25px;
    }
</style>

<body id="page-top">
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
    <header id="header" class="fixed-top" style="background-color: #000000">
        <div class="container d-flex align-items-center">
            <h1 class="logo me-auto"><a href="{{ route('home.index') }}">Talentos Lili&Yoi</a></h1>
            <div class="text-center d-flex align-items-center justify-content-center">
                <nav id="navbar" class="navbar ">
                    <ul>
                        <li><a class="nav-link scrollto" href="{{ route('login') }}">Iniciar Sesión</a></li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav>
            </div>
        </div>
    </header>
    <main id="main" style="padding-top: 4%" class="bg-main pb-5">
        <div class="div">
            <div class="">

                <form id="signUpForm" action="{{ route('cv.store') }}">
                 


                    <div class="step">
                        <div class="d-flex justify-content-center mb-4">

                            <img style="width: 120vh" src="{{ asset('images/pasos.jpg') }}" alt="">

                        </div>
                    </div>
                    <div class="step">

                        <p class="text-center mb-4">HÁBEAS DATA: Dando cumplimiento a lo dispuesto en la Ley 1581 de
                            2012,
                            "Por el cual se dictan disposiciones generales para la protección de datos personales" y de
                            conformidad con lo señalado en el Decreto 1377 de 2013, manifiesto que he sido informado
                            informado(a) de manera clara, previa y expresa que los datos que se recolectan mediante el
                            diligenciamiento de formatos o con la entrega de documentos (hojas de vida, anexos) serán
                            tratados de manera leal y lícita para todo lo relacionado con cuestiones laborales de orden
                            legal o contractual. En virtud de lo anterior, autorizo de manera voluntaria, previa,
                            explícita,
                            informada e inequívoca a Fast Moda S.A.S para tratar mis datos personales de acuerdo con su
                            Política de Tratamiento de Datos Personales para los fines relacionados con su objeto y en
                            especial para fines legales, contractuales, misionales descritos en la Política de
                            Tratamiento
                            de Datos Personales, manifestando que la información obtenida para el Tratamiento de mis
                            datos
                            personales la he suministrado de forma voluntaria y es verídica. </p>

                        <div class="d-flex justify-content-center mb-4">
                            <input type="checkbox" name="habeas" value="" id="habeas" onclick="HabeasClic()"
                                class="">&nbsp;
                            Aceptar condiciones
                        </div>

                    </div>
                    <div class="step">
                        <h3 class="text-center mb-4">Ingresa tu información personal</h3>
                        <div class="mb-3 row">
                            <div class="col-md-4">
                                <input type="text" placeholder="Nombre completo del aspirante" name="name"
                                    class="col-12">
                            </div>
                            <div class="col-md-4">
                                {{-- <small class="text-center">Tipo de documento</small> --}}
                                <select class="col-12" name="type_id">
                                    <option selected value="">Tipo de documento</option>
                                    <option value="CC">C.C</option>
                                    <option value="Permiso especial de permanencia">Permiso especial de permanencia
                                    </option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <input type="number"  name="num_id" class="col-12" >
                            </div>




                        </div>
                        {{-- oninput="this.className = ''" --}}
                        <div class="mb-3 row">
                            <div class="col-md-4">
                                <input type="number" placeholder="número de celular" name="num_cell" class="col-12">
                            </div>
                            <div class="col-md-4">
                                <input type="numer" placeholder="Otro número de celular " name="num_cell2"
                                    class="col-12">
                            </div>
                            <div class="col-md-4">
                                <input type="number" placeholder="Edad" name="age" class="col-12">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-md-6">
                                <input type="email" placeholder="Correo" name="email" class="col-12">
                            </div>
                            <div class="col-md-6">
                                <input type="text" placeholder="Dirección" name="address" class=" col-12">
                            </div>

                        </div>
                        <div class="mb-3 row">
                            <div class="col-md-6">
                                <select class="form-select col-12 form_control" name="city_address">
                                    <option selected value="">Ciudad de residencia</option>
                                    <option value="Bogotá">Bogotá</option>
                                    <option value="Medellín">Medellín</option>
                                    <option value="Cali">Cali</option>
                                    <option value="Barranquilla">Barranquilla</option>
                                    <option value="Cartagena de Indias">Cartagena de Indias</option>
                                    <option value="Soacha">Soacha</option>
                                    <option value="Tunja">Tunja</option>
                                    <option value="Cúcuta">Cúcuta</option>
                                    <option value="Soledad">Soledad</option>
                                    <option value="Bucaramanga">Bucaramanga</option>
                                    <option value="Bello">Bello</option>
                                    <option value="Villavicencio">Villavicencio</option>
                                    <option value="Ibagué">Ibagué</option>
                                    <option value="Santa Marta">Santa Marta</option>
                                    <option value="Valledupar">Valledupar</option>
                                    <option value="Manizales">Manizales</option>
                                    <option value="Pereira">Pereira</option>
                                    <option value="Montería">Montería</option>
                                    <option value="Neiva">Neiva</option>
                                    <option value="Pasto">Pasto</option>
                                    <option value="Armenia">Armenia</option>
                                    <option value="Rioacha">Rioacha</option>
                                    <option value="Sincelejo">Sincelejo</option>
                                    <option value="Barrancabermeja">Barrancabermeja</option>
                                    <option value="Popayan">Popayan</option>
                                    <option value="Dos quebradas">Dos quebradas</option>
                                    <option value="Jamundi">Jamundi</option>
                                    <option value="Palmira">Palmira</option>
                                    <option value="Ipiales">Ipiales</option>
                                    <option value="Yumbo">Yumbo</option>
                                    <option value="Cartago">Cartago</option>
                                    <option value="Tulua">Tulua</option>
                                    <option value="Girardot">Girardot</option>
                                    <option value="Pitalito">Pitalito</option>
                                    <option value="Florencia">Florencia</option>
                                    <option value="Cajica">Cajica</option>
                                    <option value="Yopal">Yopal</option>
                                    <option value="Duitama">Duitama</option>
                                    <option value="Villeta">Villeta</option>
                                    <option value="Sogamoso">Sogamoso</option>
                                    <option value="Fusagasuga">Fusagasuga</option>
                                    <option value="Sopo">Sopo</option>
                                    <option value="Tocancipa">Tocancipa</option>
                                    <option value="Chia">Chia</option>
                                    <option value="Apartado">Apartado</option>
                                    <option value="Zipaquira">Zipaquira</option>
                                    <option value="Mosquera">Mosquera</option>
                                    <option value="Madrid">Madrid</option>
                                    <option value="Funza">Funza</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <select class="form-select col-12  form_control" name="academic_profile">
                                    <option selected value="">Perfil academico</option>
                                    <option value="Primaria">Primaria</option>
                                    <option value="Bachillerato">Bachillerato</option>
                                    <option value="Técnico">Técnico</option>
                                    <option value="Tecnólogo">Tecnólogo</option>
                                    <option value="Pregrado">Pregrado</option>
                                    <option value="Postgrado">Postgrado</option>
                                    <option value="Maestria">Maestria</option>
                                    <option value="Esta estudiando">Esta estudiando</option>
                                </select>
                            </div>



                        </div>
                    </div>
                    <div class="step">
                        <h3 class="text-center mb-4">Ingresa la información de la ultima empresa en la que
                            laboraste</h3>
                        {{-- <p class="text-center mb-4"><strong>  </strong></p> --}}
                        <div class="mb-3 row">
                            <div class="col-md-6">
                                <input type="text" placeholder="Nombre de la ultima empresa"
                                    name="name_last_company" class="col-12">
                            </div>
                            <div class="col-md-6">
                                <input type="text" placeholder="Cargo" name="position_last_company"
                                    class="col-12">
                            </div>


                        </div>
                        <div class="mb-3 row">
                            <div class="col-md-12">

                                <textarea name="funtion_last_company" id="" cols="30" rows="6" placeholder="Funciones"
                                    class="col-12"></textarea>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-md-4">
                                <select class="form-select col-12 form_control" name="work_last_company">
                                    <option selected value="">¿Trabajas aqui actualmente?</option>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <span class="ml-5">Fecha inicio de contrato</span>
                                <input type="date" placeholder="Fecha de inicio" name="date_init_company"
                                    class="col-12 ">
                            </div>
                            <div class="col-md-4">
                                <span class="pl-5">Fecha fin de contrato</span>
                                <input type="date" placeholder="fecha de fin" name="date_finally_company"
                                    class="col-12 ">
                            </div>
                        </div>
                    </div>

                    <input type="hidden" name="vacant_id" value="{{ $id }}">
                    <input type="hidden" name="type" value="{{ $type }}">
                    {{-- <input type="hidden" name="area" value="{{ $area }}"> --}}

                    <div class="step">
                        <div id="otra_empresa">
                            <h3 class="text-center mb-4"> Información de la penúltima empresa</h3>
                            <div class="mb-3 row">
                                <div class="col-md-6">
                                    <input type="text" placeholder="Nombre de la penultima empresa"
                                        name="name_last_company2" class="col-12">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" placeholder="Cargo" name="position_last_company2"
                                        class="col-12">
                                </div>
                            </div>
                           
                            <div class="mb-3 row">
                                <div class="col-md-12">
                                    <textarea name="funtion_last_company2" id="" cols="30" rows="6" placeholder="Funciones"
                                        class="col-12"></textarea>

                                </div>

                            </div>
                            <div class="mb-3 row">
                                <div class="col-md-6">
                                    <small class="ml-5">Fecha inicio contrato</small>
                                    <input type="date" placeholder="Fecha de inicio" name="date_init_company2"
                                        class="col-12" value="2000-01-01">
                                </div>
                                <div class="col-md-6">
                                    <small class="ml-5">Fecha fin contrato</small>
                                    <input type="date" placeholder="fecha de fin" name="date_finally_company2"
                                        class="col-12" value="2000-01-01">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="step">
                        <h3 class="text-center mb-4"> Cuentanos de ti</h3>
                        <div class="mb-3 row">
                            <div class="col-md-6">
                                <select class="form-select col-12 form_control" name="previously_work">
                                    <option selected value="">¿Trabajaste anteriormente con nosotros?</option>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <select class="form-select col-12 form_control" name="family">
                                    <option selected value="">¿Tienes algun familiar trabajando con nosotros?
                                    </option>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <div class="col-md-12">
                                <textarea name="like_to_work" id="" cols="20" rows="4"
                                    placeholder="¿Por que te gustaria trabajar con nosotros?" class="col-12"></textarea>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-md-12">
                                <textarea name="should_choose" id="" cols="20" rows="4"
                                    placeholder="¿Por que te deberiamos escoger?" class="col-12"></textarea>
                            </div>
                        </div>


                    </div>
                    <div class="step">
                        <h3 class="text-center mb-4"> Información adicional </h3>
                        <div class="mb-3 row">
                            <div class="col-md-4">
                                <select class="form-select col form_control" name="shirt_size">
                                    <option selected value="">Talla camisa</option>
                                    <option value="xs">XS</option>
                                    <option value="s">S</option>
                                    <option value="m">M</option>
                                    <option value="l">L</option>
                                    <option value="xl">XL</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <input type="number" placeholder="Talla de pantalon" name="pant_size"
                                    class="col-12">
                            </div>
                            <div class="col-md-4">
                                <select class="form-select col form_control " name="shoes_size">
                                    <option selected value="">Talla zapatos</option>
                                    <option value="34">34</option>
                                    <option value="35">35</option>
                                    <option value="36">36</option>
                                    <option value="37">37</option>
                                    <option value="38">38</option>
                                    <option value="39">39</option>
                                    <option value="40">40</option>
                                    <option value="41">41</option>
                                    <option value="42">42</option>
                                    <option value="43">43</option>
                                    <option value="44">44</option>

                                </select>
                            </div>
                        </div>


                    </div>




                    <div class="form-footer d-flex">
                        <button class="btn" type="button" id="prevBtn"
                            onclick="nextPrev(-1)">Anterior</button>
                        <button class="btn" type="button" id="nextBtn"
                            onclick="nextPrev(1)">Siguiente</button>
                    </div>

                </form>
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
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab

        function showTab(n) {
            // This function will display the specified tab of the form...
            var x = document.getElementsByClassName("step");
            x[n].style.display = "block";
            //... and fix the Previous/Next buttons:
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Enviar";
            } else {
                document.getElementById("nextBtn").innerHTML = "Siguiente";
            }
            //... and run a function that will display the correct step indicator:
            // fixStepIndicator(n)
        }

        function nextPrev(n) {
            // This function will figure out which tab to display
            var x = document.getElementsByClassName("step");
            // Exit the function if any field in the current tab is invalid:
            if (n == 1 && !validateForm()) return false;
            // Hide the current tab:
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            // if you have reached the end of the form...
            if (currentTab >= x.length) {
                // ... the form gets submitted:
                document.getElementById("signUpForm").submit();
                return false;
            }
            // Otherwise, display the correct tab:
            showTab(currentTab);
        }

        function validateForm() {
            // This function deals with validation of the form fields
            var x, y, i, valid = true;
            x = document.getElementsByClassName("step");
            y = x[currentTab].getElementsByTagName("input");
            z = x[currentTab].getElementsByTagName("select");
            t = x[currentTab].getElementsByTagName("textarea");
            // A loop that checks every input field in the current tab:
            for (i = 0; i < y.length; i++) {
                // If a field is empty...
                if (y[i].value == "") {
                    // add an "invalid" class to the field:
                    y[i].className += " invalid";
                    // and set the current valid status to false
                    valid = false;
                }

            }
            for (i = 0; i < z.length; i++) {
                // If a field is empty...
                if (z[i].value == "") {
                    // add an "invalid" class to the field:
                    z[i].className += " invalid";
                    // and set the current valid status to false
                    valid = false;
                }

            }
            for (i = 0; i < t.length; i++) {
                // If a field is empty...
                if (t[i].value == "") {
                    // add an "invalid" class to the field:
                    t[i].className += " invalid";
                    // and set the current valid status to false
                    valid = false;
                }

            }


            // If the valid status is true, mark the step as finished and valid:
            // if (valid) {
            //     document.getElementsByClassName("stepIndicator")[currentTab].className += " finish";
            // }
            return valid;
        }

        // function fixStepIndicator(n) {
        //     // This function removes the "active" class of all steps...
        //     var i, x = document.getElementsByClassName("stepIndicator");
        //     for (i = 0; i < x.length; i++) {
        //         x[i].className = x[i].className.replace(" active", "");
        //     }
        //     //... and adds the "active" class on the current step:
        //     x[n].className += " active";
        // }

        function HabeasClic() {
            var checkBox = document.getElementById("habeas");
            if (checkBox.checked == true) {
                checkBox.value = "1";
            } else {
                checkBox.value = "";
            }
        }
    </script>
    <script src="{{ asset('libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('libs/sbadmin/js/sb-admin-2.min.js') }}"></script>

</body>

</html>
