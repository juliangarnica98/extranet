
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

    .card {
        box-shadow: none;
        -webkit-box-shadow: none;
        -moz-box-shadow: none;
        -ms-box-shadow: none
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



    .table,
    .jsgrid .jsgrid-table {
        width: 100%;
        max-width: 100%;
        margin-bottom: 1rem;
        background-color: transparent;
    }

    .table thead th,
    .jsgrid .jsgrid-table thead th {
        border-top: 0;
        border-bottom-width: 1.5px;
        font-weight: 500;
        font-size: 0.8rem;
        text-transform: uppercase;
    }

    .table td,
    .jsgrid .jsgrid-table td {
        font-size: 0.9rem;

    }

    .badge {
        border-radius: 0;
        font-size: 1rem;
        line-height: 1;
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

        <h2 class="ml-5 text-dark pt-2 ">CREAR VACANTE</h2>
        <div class="container">
            <div class="card box">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-7">
                            <form method="POST" action="{{ route('reclutador.crearvacante') }}">
                                @csrf
                                <div class="form-group">
                                    <div class="row justify-content-center">
                                        <div class="col-6">

                                            <div class="form-outline">
                                                <label class="form-label text-dark" for="form8Example1">Área</label>
                                                <select class="form-select form-control" name="area"
                                                    style="border-radius: 25px">
                                                    <option value="cedi">CEDI</option>
                                                    <option value="administrativo">ADMINISTRATIVO</option>
                                                    <option value="comercial">COMERCIAL</option>
                                                </select>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-6">

                                            <div class="form-outline">
                                                <label class="form-label text-dark" for="form8Example1">Titulo</label>
                                                <input type="text" id="form8Example1" class="form-control" name="title"
                                                    style="border-radius: 25px" />

                                            </div>
                                        </div>
                                        <div class="col-6">

                                            <div class="form-outline">
                                                <label class="form-label text-dark" for="form8Example2">Ciudad</label>
                                                <select class="form-select form-control" name="city"
                                                    style="border-radius: 25px">
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
                                    <div class="row justify-content-center">
                                        <div class="col-6">
                                            <div class="form-outline">
                                                <label class="form-label text-dark" for="form8Example4">Salario</label>
                                                <input type="number" id="salary" class="form-control" name="salary"
                                                    style="border-radius: 25px" />
                                            </div>
                                        </div>
                                        <div class="col-6">

                                            <div class="form-outline">
                                                <label class="form-label text-dark" for="form8Example4">Número
                                                    de
                                                    vacantes</label>
                                                <input type="number" id="" class="form-control"
                                                    name="num_vacants" style="border-radius: 25px" id="vacantes"/>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-6">
                                            <div class="form-outline">
                                                <label class="form-label text-dark" for="form8Example4">Educación
                                                    minima</label>
                                                <select class="form-select form-control" name="education"
                                                    style="border-radius: 25px">
                                                    <option value="Primaria">Primaria</option>
                                                    <option value="Bachillerato">Bachillerato</option>
                                                    <option value="Técnico">Técnico</option>
                                                    <option value="Tecnólogo">Tecnólogo</option>
                                                    <option value="Pregrado">Pregrado</option>
                                                    <option value="Postgrado">Postgrado</option>
                                                    <option value="Maestria">Maestria</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-outline">
                                                <label class="form-label text-dark" for="form8Example4">Idiomas
                                                    requeridos</label>
                                                <select class="form-select form-control" name="language"
                                                    style="border-radius: 25px">
                                                    <option value="Ninguno">Ninguno</option>
                                                    <option value="Ingles">Ingles</option>
                                                    <option value="Otro">Otro</option>
                                                </select>
                                                {{-- <input type="text" id="" class="form-control"
                                                    name="language" style="border-radius: 25px" /> --}}
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row justify-content-center">
                                        <div class="col-6">
                                            <div class="form-outline">
                                                <label class="form-label text-dark" for="form8Example4">Disponibilidad de
                                                    viajar</label>
                                                <select class="form-select form-control" name="availability_travel"
                                                    style="border-radius: 25px">
                                                    <option value="no">No</option>
                                                    <option value="si">Si</option>

                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-outline">
                                                <label class="form-label text-dark" for="form8Example4">Tipo de
                                                    contrato</label>
                                                <select class="form-select form-control" name="type_contract"
                                                    style="border-radius: 25px">
                                                    <option value="fijo">Fijo</option>
                                                    <option value="indefinido">Indefinido</option>
                                                    <option value="obra o labor">Obra o labor</option>
                                                </select>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="row justify-content-center">
                                        <div class="col-12">

                                            <div class="form-outline">

                                                <label class="form-label text-dark"
                                                    for="form8Example3">Descripcion</label>
                                                <textarea id="" class="form-control" name="description" cols="30" rows="2"
                                                    style="border-radius: 25px"></textarea>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="row justify-content-center">
                                        <div class="col-12">

                                            <div class="form-outline">
                                                <label class="form-label text-dark" for="form8Example3">Experiencia
                                                    requerida</label>
                                                <textarea class="form-control" name="experience" id="" cols="30" rows="2"
                                                    style="border-radius: 25px"></textarea>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <button class="text-center btn btn-primary btn-block">Crear vacante</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-5 aling-items-center d-flex justify-content-center">

                            <img src="{{asset('images/vacant.png')}}" class="img-fluid" alt="">
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
