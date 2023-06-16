@extends('layouts.admin')
<style>
    body {
        background-color: #f9f9fa
    }

    .flex {
        -webkit-box-flex: 1;
        -ms-flex: 1 1 auto;
        flex: 1 1 auto
    }

    @media (max-width:991.98px) {
        .padding {
            padding: 1.2rem
        }
    }

    @media (max-width:767.98px) {
        .padding {
            padding: 1.2rem
        }
    }

    .padding {
        padding: 1.2rem
    }



    .pl-3,
    .px-3 {
        padding-left: 1rem !important
    }

    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid #d2d2dc;
        border-radius: 0
    }

    .card .card-title {
        color: #000000;
        margin-bottom: 0.625rem;
        text-transform: capitalize;
        font-size: 1.5rem;
        font-weight: 500;
    }

    .card .card-description {
        margin-bottom: 1rem;
        font-weight: 400;
        color: #000000;
    }

    p {
        font-size: 1rem;
        margin-bottom: .5rem;
        line-height: 1.5rem;
    }

    .btn-formulario {
        background-color: #fcb2d7;
        color: #000000;
    }

    .btn-formulario:hover {
        background-color: #d2d2dc;
    }
</style>
@section('content')
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

    <div class="page-content page-container" id="page-content">

        <h2 class="text-center  pt-5 text-black" style="color: #000000">NUEVA VACANTE</h2>
        <div class="">

            <form method="POST" action="{{ route('reclutador.crearvacante') }}">
                @csrf
                <div class="card box mt-3">
                    <div class="card-header card-header-warning" style="border-radius: 15px;">
                        <h5 class="card-title text-center"><b> DATOS DE LA VACANTE</b></h5>
                    </div>
                    <div class="card-body text-black">
                        <div class="row text-black">
                            <div class="col-md-4 ">
                                <div class="form-outline text-right pt-1">
                                    <label class="form-label text-black " for="form8Example1">ÁREA</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-outline">
                                    <select class="form-select form-control" name="area" style="border-radius: 25px">
                                        <option value="cedi">CEDI</option>
                                        <option value="administrativo">ADMINISTRATIVO</option>
                                        <option value="comercial">COMERCIAL</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-outline text-right pt-1">
                                    <label class="form-label text-black" for="form8Example1">TITULO</label>
                                </div>
                            </div>
                            <div class="col-md-6 pt-1">
                                <div class="form-outline">
                                    <input type="text" id="form8Example1" class="form-control" name="title"
                                        style="border-radius: 25px" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-outline text-right">
                                    <label class="form-label text-black" for="form8Example3">DESCRIPCIÓN</label>
                                </div>
                            </div>
                            <div class="col-md-6 pt-1">
                                <div class="form-outline">
                                    <textarea id="" class="form-control" name="description" cols="30" rows="10"
                                        style="border-radius: 25px"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-outline text-right">
                                    <label class="form-label text-black" for="form8Example2">CIUDAD</label>
                                </div>
                            </div>
                            <div class="col-md-6 pt-1">
                                <div class="form-outline">
                                    <select class="form-select form-control" name="city" style="border-radius: 25px">
                                        <option selected value=""></option>
                                        <option value="Bogotá" style="border-radius: 25px">Bogotá</option>
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
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-outline text-right">
                                    <label class="form-label text-black" for="form8Example4">SALARIO</label>
                                </div>
                            </div>
                            <div class="col-md-6 pt-1">
                                <div class="form-outline">
                                    <input type="text" id="salary" class="form-control" name="salary"
                                        style="border-radius: 25px" />
                                </div>
                            </div>

                        </div>
                        <div class="row ">
                            <div class="col-md-8">
                                <div class="form-check text-right">
                                    <input type="checkbox" class="form-check-input" id="salary_c" name="salary_c">
                                    <label class="form-check-label" for="exampleCheck1">SALARIO CONFIDENCIAL</label>
                                </div>
                            </div>
                            <div class="col-md-4 pt-1">

                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-outline text-right">
                                    <label class="form-label text-black" for="form8Example4">NÚMERO DE VACANTES</label>
                                </div>
                            </div>
                            <div class="col-md-6 pt-1">
                                <div class="form-outline text-right">
                                    <input type="number" id="" class="form-control" name="num_vacants"
                                        style="border-radius: 25px" id="vacantes" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-outline text-right">
                                    <label class="form-label text-black" for="form8Example4">TIPO DE CONTRATO</label>
                                </div>
                            </div>
                            <div class="col-md-6 pt-1">
                                <div class="form-outline">
                                    <select class="form-select form-control" name="type_contract"
                                        style="border-radius: 25px">
                                        <option value="indefinido">INDEFINIDO</option>
                                        <option value="obra o labor">OBRA O LABOR</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card box mt-3">
                    <div class="card-header card-header-warning" style=" border-radius: 15px;">
                        <h5 class="card-title text-center"><b>REQUERIMIENTOS DE LA OFERTA</b></h5>
                    </div>
                    <div class="card-body text-black">

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-outline text-right  ">
                                    <label class="form-label text-black" for="form8Example4">FORMACIÓN ACADEMICA</label>

                                </div>
                            </div>
                            <div class="col-md-6 pt-1">
                                <div class="form-outline">
                                    <select class="form-select form-control" name="education"
                                        style="border-radius: 25px">
                                        <option value="Primaria">PRIMARIA</option>
                                        <option value="Bachillerato">BACHILLERATO</option>
                                        <option value="Técnico">TÉCNICO</option>
                                        <option value="Tecnólogo">TECNÓLOGO</option>
                                        <option value="Pregrado">PROFESIONAL</option>
                                        <option value="Postgrado">POSTGRADO</option>
                                        <option value="Maestria">MAESTRIA</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row text-black">
                            <div class="col-md-4 text-right pt-1">
                                <label class="form-label text-black " for="form8Example4">IDIOMA</label>
                            </div>
                            <div class="col-md-6 pt-1">
                                <select class="form-select form-control" name="language" style="border-radius: 25px">
                                    <option value="Ninguno">NINGUNO</option>
                                    <option value="Ingles">INGLES</option>
                                    <option value="Otro">OTRO</option>
                                </select>
                            </div>
                        </div>
                        <div class="row text-black">
                            <div class="col-md-4 text-right pt-1">
                                <label class="form-label text-black" for="form8Example4">DISPONIBILIDAD DE VIAJAR</label>
                            </div>
                            <div class="col-md-6 pt-1">
                                <div class="form-outline">
                                    <select class="form-select form-control" name="availability_travel"
                                        style="border-radius: 25px">
                                        <option value="no">NO</option>
                                        <option value="si">SI</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row text-black">
                            <div class="col-md-4 text-right pt-1">
                                <label class="form-label text-black text-right" for="form8Example4">CAMBIO DE
                                    RESIDENCIA</label>
                            </div>
                            <div class="col-md-6 pt-1">
                                <div class="form-outline">
                                    <select class="form-select form-control" name="residence_change"
                                        style="border-radius: 25px">
                                        <option value="no">NO</option>
                                        <option value="si">SI</option>
                                    </select>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
                <div class="card box mt-3">
                    <div class="card-header card-header-warning" style=" border-radius: 15px;">
                        <h5 class="card-title text-center"><b>PRUEBAS DE SELECCIÓN</b></h5>
                    </div>
                    <div class="card-body text-black">
                       
                        <div class="row text-black">
                            <div class="col-md-4 text-right pt-1">
                                <label class="form-label text-black " for="form8Example4">PRUEBA TÉCNICA</label>
                            </div>
                            <div class="col-md-6 pt-1">
                                <select class="form-select form-control" name="tecnica" style="border-radius: 25px">
                                    <option value="no aplica">NO APLICA</option>
                                    <option value="aplica">APLICA</option>
                                </select>
                            </div>
                        </div>
                        <div class="row text-black">
                            <div class="col-md-4 text-right pt-1">
                                <label class="form-label text-black " for="form8Example4">CLINICA DE VENTAS</label>
                            </div>
                            <div class="col-md-6 pt-1">
                                <select class="form-select form-control" name="ventas" style="border-radius: 25px">
                                    <option value="no aplica">NO APLICA</option>
                                    <option value="aplica">APLICA</option>
                                </select>
                            </div>
                        </div>
                        <div class="row text-black">
                            <div class="col-md-4 text-right pt-1">
                                <label class="form-label text-black " for="form8Example4">PRUEBA COMERCIAL</label>
                            </div>
                            <div class="col-md-6 pt-1">
                                <select class="form-select form-control" name="comercial" style="border-radius: 25px">
                                    <option value="no aplica">NO APLICA</option>
                                    <option value="aplica">APLICA</option>
                                </select>
                            </div>
                        </div>




                    </div>
                </div>
                <div class="card box mt-3">
                    <div class="card-header card-header-warning" style=" border-radius: 15px;">
                        <h5 class="card-title text-center"><b>PRUEBAS DE SEGURIDAD</b></h5>
                    </div>
                    <div class="card-body text-black">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-outline text-right  ">
                                    <label class="form-label text-black" for="form8Example4">CENTRALES DE RIESGO</label>

                                </div>
                            </div>
                            <div class="col-md-6 pt-1">
                                <div class="form-outline">
                                    <select class="form-select form-control" name="riesgos" style="border-radius: 25px">
                                        <option value="no aplica">NO APLICA</option>
                                        <option value="aplica">APLICA</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row text-black">
                            <div class="col-md-4 text-right pt-1">
                                <label class="form-label text-black " for="form8Example4">POLIGRAFÍA</label>
                            </div>
                            <div class="col-md-6 pt-1">
                                <select class="form-select form-control" name="poligrafo" style="border-radius: 25px">
                                    <option value="no aplica">NO APLICA</option>
                                    <option value="aplica">APLICA</option>
                                </select>
                            </div>
                        </div>
                        <div class="row text-black">
                            <div class="col-md-4 text-right pt-1">
                                <label class="form-label text-black " for="form8Example4">VISITA DOMICILIARIA</label>
                            </div>
                            <div class="col-md-6 pt-1">
                                <select class="form-select form-control" name="visita" style="border-radius: 25px">
                                    <option value="no aplica">NO APLICA</option>
                                    <option value="aplica">APLICA</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card box mt-3">
                    <div class="card-header card-header-warning" style=" border-radius: 15px;">
                        <h5 class="card-title text-center"><b>ENTREVISTAS DE LA VACANTE</b></h5>
                    </div>
                    <div class="card-body text-black">
                        <div class="row text-black">
                            <div class="col-md-4 text-right">
                                <label class="form-label text-black" for="form8Example3">ANALISTA</label>
                            </div>
                            <div class="col-md-6">
                                <select class="form-select form-control" name="entrevista_analista"
                                    style="border-radius: 25px">
                                    <option value="no aplica">NO APLICA</option>
                                    <option value="aplica">APLICA</option>
                                </select>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-outline text-right  ">
                                    <label class="form-label text-black" for="form8Example4">COORDINADOR DE
                                        SELECCIÓN</label>

                                </div>
                            </div>
                            <div class="col-md-6 pt-1">
                                <div class="form-outline">
                                    <select class="form-select form-control" name="entrevista_coordinador"
                                        style="border-radius: 25px">
                                        <option value="no aplica">NO APLICA</option>
                                        <option value="aplica">APLICA</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row text-black">
                            <div class="col-md-4 text-right pt-1">
                                <label class="form-label text-black " for="form8Example4">JEFE DIRECTO</label>
                            </div>
                            <div class="col-md-6 pt-1">
                                <select class="form-select form-control" name="entrevista_jefe"
                                    style="border-radius: 25px">
                                    <option value="no aplica">NO APLICA</option>
                                    <option value="aplica">APLICA</option>
                                </select>
                            </div>
                        </div>
                        <div class="row text-black">
                            <div class="col-md-4 text-right pt-1">
                                <label class="form-label text-black " for="form8Example4">GENERENTE</label>
                            </div>
                            <div class="col-md-6 pt-1">
                                <select class="form-select form-control" name="entrevista_gerente"
                                    style="border-radius: 25px">
                                    <option value="no aplica">NO APLICA</option>
                                    <option value="aplica">APLICA</option>
                                </select>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card box mt-3">
                    <div class="card-header card-header-warning" style="border-radius: 15px;">
                        <h5 class="card-title text-center"><b>PREGUNTAS FILTRO</b></h5>
                    </div>
                    <div class="card-body text-black">
                        <div class="row text-black justify-content-center">
                            <div class="col-md-4 text-right">
                                <button class="btn btn btn-block text-black"><i class="fas fa-plus"></i> NUEVA
                                    PREGUNTA</button>
                        </div>

                    </div>
                    <div>
                        <button class="box btn-formulario text-white text-center btn btn-block mt-3 mb-3"
                            style="background-color: #e52b7f"><b>CREAR</b> </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>
        var salary_c = document.querySelector("#salary_c");
        var salary = document.querySelector("#salary");

        salary_c.addEventListener("change", (event) => {
            if (salary_c.checked) {
                salary.disabled  = true;
                salary.value = "";
            } else {
                salary.disabled  = false;
            }
        });
        salary.addEventListener("focus", (event) => {
            numero = salary.value;
            salary.value = numero.replace(/[^0-9]+/g, "");
        });
        salary.addEventListener("change", (event) => {
            numero = new Intl.NumberFormat('es-CO',{
                style: 'currency',
                currency: 'COP',
                minimumFractionDigits: 0
            });
            salary.value=numero.format(salary.value);
        });

    </script>
@endsection
