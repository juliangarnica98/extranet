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
    body {
        font-family: 'Open Sans', sans-serif;
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
        background-color: #ffffff;
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

        border: 1px solid #e3e3e3;
        border-radius: 5px;
        color: #646464;
    }

    #signUpForm textarea {
        border: 1px solid #e3e3e3;
        border-radius: 5px;
        color: #646464;
    }

    #signUpForm select {
        padding: 15px 20px;
        border: 1px solid #e3e3e3;
        border-radius: 5px;
        color: #646464;
    }

    #signUpForm input:focus {
        border: 1px solid #009688;
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
    }

    #signUpForm .form-footer button:hover {
        opacity: 0.8;
    }

    #signUpForm .form-footer #prevBtn {
        background-color: #fff;
        color: #009688;
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
                '??Bien hecho!',
                "{{ Session::get('message') }}",
                'success'
            )
        </script>
    @endif
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
    <div class="div">
        <div class="imagen_portada">

            <form id="signUpForm" action="{{ route('cv.store') }}">
                <!-- start step indicators -->
                <div class="form-header d-flex mb-4">
                    <span class="stepIndicator">Bienvenida</span>
                    <span class="stepIndicator">H??BEAS DATA</span>
                    <span class="stepIndicator">Informaci??n personal</span>
                    <span class="stepIndicator">Informaci??n laboral 1</span>
                    <span class="stepIndicator">Informaci??n laboral 2</span>
                    <span class="stepIndicator">Cuentanos de ti</span>
                    <span class="stepIndicator">Informaci??n adicional</span>
                </div>
                <!-- end step indicators -->



                <div class="step">
                    <div class="d-flex justify-content-center mb-4">

                        <img style="width: 120vh" src="{{ asset('images/pasos.jpg') }}" alt="">

                    </div>
                </div>
                <div class="step">
                    <p class="text-center mb-4">H??BEAS DATA: Dando cumplimiento a lo dispuesto en la Ley 1581 de 2012,
                        "Por el cual se dictan disposiciones generales para la protecci??n de datos personales" y de
                        conformidad con lo se??alado en el Decreto 1377 de 2013, manifiesto que he sido informado
                        informado(a) de manera clara, previa y expresa que los datos que se recolectan mediante el
                        diligenciamiento de formatos o con la entrega de documentos (hojas de vida, anexos) ser??n
                        tratados de manera leal y l??cita para todo lo relacionado con cuestiones laborales de orden
                        legal o contractual. En virtud de lo anterior, autorizo de manera voluntaria, previa, expl??cita,
                        informada e inequ??voca a Fast Moda S.A.S para tratar mis datos personales de acuerdo con su
                        Pol??tica de Tratamiento de Datos Personales para los fines relacionados con su objeto y en
                        especial para fines legales, contractuales, misionales descritos en la Pol??tica de Tratamiento
                        de Datos Personales, manifestando que la informaci??n obtenida para el Tratamiento de mis datos
                        personales la he suministrado de forma voluntaria y es ver??dica. </p>

                    <div class="d-flex justify-content-center mb-4">
                        <input type="checkbox" name="habeas" value="" id="habeas" onclick="HabeasClic()"
                            class="">&nbsp;
                        Aceptar condiciones
                    </div>

                </div>
                <div class="step">
                    <p class="text-center mb-4">Ingresa tu informaci??n personal</p>
                    <div class="mb-3 row">
                        {{-- <small>nombre(*)</small> --}}
                        <input type="text" placeholder="Nombre completo del aspirante" name="name" class="col-6">
                        <select class="form-select col-3 ml-2 form_control" name="type_id">
                            <option selected value="">Tipo de documento</option>
                            <option value="CC">C.C</option>
                            <option value="Permiso especial de permanencia">Permiso especial de permanencia</option>
                        </select>
                        {{-- <input type="text" placeholder="Tipo de documento" name="type_id" class="col-3 ml-2"> --}}
                        <input type="number" placeholder="n??mero de documento" name="num_id" class="col ml-2">
                    </div>
                    {{-- oninput="this.className = ''" --}}
                    <div class="mb-3 row">
                        <input type="number" placeholder="n??mero de celular" name="num_cell" class="col">
                        <input type="numer" placeholder="Otro n??mero de celular " name="num_cell2" class="col ml-2">
                        <input type="number" placeholder="Edad" name="age" class="col-3 ml-2">
                    </div>
                    <div class="mb-3 row">
                        <input type="email" placeholder="Correo" name="email" class="col">
                        <input type="text" placeholder="Direcci??n" name="address" class="ml-2 col-5">
                    </div>
                    <div class="mb-3 row">
                        <select class="form-select col form_control" name="city_address">
                            <option selected value="">Ciudad de residencia</option>
                            <option value="Bogot??">Bogot??</option>
                            <option value="Medell??n">Medell??n</option>
                            <option value="Cali">Cali</option>
                            <option value="Barranquilla">Barranquilla</option>
                            <option value="Cartagena de Indias">Cartagena de Indias</option>
                            <option value="Soacha">Soacha</option>
                            <option value="Tunja">Tunja</option>
                            <option value="C??cuta">C??cuta</option>
                            <option value="Soledad">Soledad</option>
                            <option value="Bucaramanga">Bucaramanga</option>
                            <option value="Bello">Bello</option>
                            <option value="Villavicencio">Villavicencio</option>
                            <option value="Ibagu??">Ibagu??</option>
                            <option value="Santa Marta">Santa Marta</option>
                            <option value="Valledupar">Valledupar</option>
                            <option value="Manizales">Manizales</option>
                            <option value="Pereira">Pereira</option>
                            <option value="Monter??a">Monter??a</option>
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
                        {{-- <input type="email" placeholder="Ciudad de residencia" name="" class="col"> --}}
                        {{-- <input type="email" placeholder="Perfil academico culminado" name="academic_profile"
                            class="ml-2 col-5"> --}}
                        <select class="form-select col-5 ml-2 form_control" name="academic_profile">
                            <option selected value="">Perfil academico</option>
                            <option value="Primaria">Primaria</option>
                            <option value="Bachillerato">Bachillerato</option>
                            <option value="T??cnico">T??cnico</option>
                            <option value="Tecn??logo">Tecn??logo</option>
                            <option value="Pregrado">Pregrado</option>
                            <option value="Postgrado">Postgrado</option>
                            <option value="Maestria">Maestria</option>
                            <option value="Esta estudiando">Esta estudiando</option>
                        </select>
                    </div>
                </div>
                <div class="step">
                    <p class="text-center mb-4"><strong> Ingresa la informaci??n de la ultima empresa en la que
                            laboraste </strong></p>
                    <div class="mb-3 row">
                        <input type="text" placeholder="Nombre de la ultima empresa" name="name_last_company"
                            class="col">
                        <input type="text" placeholder="Cargo" name="position_last_company" class="col ml-2">
                    </div>
                    <div class="mb-3 row">
                        <textarea name="funtion_last_company" id="" cols="30" rows="6" placeholder="Funciones"
                            class="col"></textarea>
                    </div>
                    <div class="mb-3 row">
                        <select class="form-select col-3 form_control" name="work_last_company">
                            <option selected value="">??Trabajas aqui actualmente?</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                        <span class="ml-5">Fecha inicio de contrato</span>
                        <input type="date" placeholder="Fecha de inicio" name="date_init_company"
                            class="col ml-2">
                        <span class="pl-5">Fecha fin de contrato</span>
                        <input type="date" placeholder="fecha de fin" name="date_finally_company"
                            class="col ml-2">
                    </div>
                </div>
                <input type="hidden" name="vacant_id" value="{{ $id }}">
                <input type="hidden" name="type" value="{{ $type }}">
                <div class="step">

                    {{-- <div class="row d-flex justify-content-center">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="full_name_id" class="control-label">??Has trabajado en otra
                                    empresa?</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="" id="otra_si"
                                        value="si">
                                    <label class="form-check-label" for="dinero_si">
                                        si
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="" id="otra_no"
                                        value="no" checked>
                                    <label class="form-check-label" for="dinero_no">
                                        no
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div> --}}


                    <div id="otra_empresa">

                        <p class="text-center mb-4"><strong> Informaci??n de la pen??ltima empresa </strong> <br></p>


                        <div class="mb-3 row">

                            <input type="text" placeholder="Nombre de la penultima empresa"
                                name="name_last_company2" class="col">

                            <input type="text" placeholder="Cargo" name="position_last_company2"
                                class="col ml-2">
                        </div>
                        {{-- <div class="mb-3">
                        
                    </div> --}}
                        <div class="mb-3 row">

                            <textarea name="funtion_last_company2" id="" cols="30" rows="6" placeholder="Funciones"
                                class="col"></textarea>
                            {{-- <input type="text"  name=""> --}}
                        </div>
                        <div class="mb-3 row">
                            <small>Fecha inicio contrato</small>
                            <input type="date" placeholder="Fecha de inicio" name="date_init_company2"
                                class="col ml-2" value="2000-01-01">
                            <small class="ml-1">Fecha fin contrato</small>
                            <input type="date" placeholder="fecha de fin" name="date_finally_company2"
                                class="col ml-2" value="2000-01-01">
                        </div>
                    </div>

                    {{-- <div class="mb-3">
                        
                    </div>
                    <div class="mb-3">
                       
                    </div> --}}
                </div>
                <div class="step">
                    <p class="text-center mb-4"> <strong> Cuentanos de ti </strong></p>
                    <div class="mb-3 row">
                        <select class="form-select col form_control" name="previously_work">
                            <option selected value="">??Trabajaste anteriormente con nosotros?</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                        <select class="form-select col ml-2 form_control" name="family">
                            <option selected value="">??Tienes algun familiar trabajando con nosotros?</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>

                    <div class="mb-3 row">
                        <textarea name="like_to_work" id="" cols="20" rows="4"
                            placeholder="??Por que te gustaria trabajar con nosotros?" class="col"></textarea>
                    </div>
                    <div class="mb-3 row">
                        <textarea name="should_choose" id="" cols="20" rows="4"
                            placeholder="??Por que te deberiamos escoger?" class="col"></textarea>
                    </div>


                </div>

                <div class="step">
                    <p class="text-center mb-4"> <strong> Informaci??n adicional </strong></p>
                    <div class="mb-3 row">
                        <select class="form-select col form_control" name="shirt_size">
                            <option selected value="">Talla camisa</option>
                            <option value="xs">XS</option>
                            <option value="s">S</option>
                            <option value="m">M</option>
                            <option value="l">L</option>
                            <option value="xl">XL</option>
                        </select>
                        <input type="number" placeholder="Talla de pantalon" name="pant_size" class="col ml-2">
                        <select class="form-select col form_control ml-2" name="shoes_size">
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


                <!-- start previous / next buttons -->
                <div class="form-footer d-flex">
                    <button type="button" id="prevBtn" onclick="nextPrev(-1)">Anterior</button>
                    <button type="button" id="nextBtn" onclick="nextPrev(1)">Siguiente</button>
                </div>
                <!-- end previous / next buttons -->
            </form>
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
                ?? 2022 Copyright:
                <a class="text-light" href="https://www.lilipink.com/">lilipink.com</a>
            </div>
            <!-- Copyright -->
        </footer>
    </div>

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
            fixStepIndicator(n)
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
            if (valid) {
                document.getElementsByClassName("stepIndicator")[currentTab].className += " finish";
            }
            return valid; // return the valid status
        }

        function fixStepIndicator(n) {
            // This function removes the "active" class of all steps...
            var i, x = document.getElementsByClassName("stepIndicator");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            //... and adds the "active" class on the current step:
            x[n].className += " active";
        }

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
