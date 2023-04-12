
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

        <h2 class="ml-5 text-dark pt-2 ">DUPLICAR VACANTE</h2>
        <div class="container">
            <div class="card box">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-7">
                            <form method="POST" action="{{ route('reclutador.crearvacante') }}">
                                @csrf
                                <div class="form-group">
                                    <div class="row justify-content-center">
                                        <div class="col-12">

                                            <div class="form-outline">
                                                <label class="form-label text-dark" for="form8Example1">Área</label>
                                                <select class="form-select form-control" name="area"
                                                    style="border-radius: 25px">
                                                    <option value="cedi" {{ $vacant->area == "cedi" ? 'selected' : '' }}>CEDI</option>
                                                    <option value="administrativo" {{ $vacant->area == "administrativo" ? 'selected' : '' }}>ADMINISTRATIVO</option>
                                                    <option value="comercial" {{ $vacant->area == "comercial" ? 'selected' : '' }}>COMERCIAL</option>
                                                </select>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-6">

                                            <div class="form-outline">
                                                <label class="form-label text-dark" for="form8Example1">Titulo</label>
                                                <input type="text" id="form8Example1" class="form-control" name="title"
                                                    style="border-radius: 25px" value="{{$vacant->title}}"/>

                                            </div>
                                        </div>
                                        <div class="col-6">

                                            <div class="form-outline">
                                                <label class="form-label text-dark" for="form8Example2">Ciudad</label>
                                                <select class="form-select form-control" name="city"
                                                    style="border-radius: 25px">
                                                   
                                                    <option value="Bogotá" {{ $vacant->city == "Bogotá" ? 'selected' : '' }}>Bogotá</option>
                                                    <option value="Medellín" {{ $vacant->city == "Medellín" ? 'selected' : '' }}>Medellín</option>
                                                    <option value="Cali" {{ $vacant->city == "Cali" ? 'selected' : '' }}>Cali</option>
                                                    <option value="Barranquilla" {{ $vacant->city == "Barranquilla" ? 'selected' : '' }}>Barranquilla</option>
                                                    <option value="Cartagena de Indias" {{ $vacant->city == "Cartagena de Indias" ? 'selected' : '' }}>Cartagena de Indias</option>
                                                    <option value="Soacha" {{ $vacant->city == "Soacha" ? 'selected' : '' }}>Soacha</option>
                                                    <option value="Tunja" {{ $vacant->city == "Tunja" ? 'selected' : '' }}>Tunja</option>
                                                    <option value="Cúcuta" {{ $vacant->city == "Cúcuta" ? 'selected' : '' }}>Cúcuta</option>
                                                    <option value="Soledad" {{ $vacant->city == "Soledad" ? 'selected' : '' }}>Soledad</option>
                                                    <option value="Bucaramanga" {{ $vacant->city == "Bucaramanga" ? 'selected' : '' }}>Bucaramanga</option>
                                                    <option value="Bello" {{ $vacant->city == "Bello" ? 'selected' : '' }}>Bello</option>
                                                    <option value="Villavicencio" {{ $vacant->city == "Villavicencio" ? 'selected' : '' }}>Villavicencio</option>
                                                    <option value="Ibagué" {{ $vacant->city == "Ibagué" ? 'selected' : '' }}>Ibagué</option>
                                                    <option value="Santa Marta" {{ $vacant->city == "Santa Marta" ? 'selected' : '' }}>Santa Marta</option>
                                                    <option value="Valledupar" {{ $vacant->city == "Valledupar" ? 'selected' : '' }}>Valledupar</option>
                                                    <option value="Manizales" {{ $vacant->city == "Manizales" ? 'selected' : '' }}>Manizales</option>
                                                    <option value="Pereira" {{ $vacant->city == "Pereira" ? 'selected' : '' }}>Pereira</option>
                                                    <option value="Montería" {{ $vacant->city == "Montería" ? 'selected' : '' }}>Montería</option>
                                                    <option value="Neiva" {{ $vacant->city == "Neiva" ? 'selected' : '' }}>Neiva</option>
                                                    <option value="Pasto" {{ $vacant->city == "Pasto" ? 'selected' : '' }}>Pasto</option>
                                                    <option value="Armenia" {{ $vacant->city == "Armenia" ? 'selected' : '' }}>Armenia</option>
                                                    <option value="Rioacha" {{ $vacant->city == "Rioacha" ? 'selected' : '' }}>Rioacha</option>
                                                    <option value="Sincelejo" {{ $vacant->city == "Sincelejo" ? 'selected' : '' }}>Sincelejo</option>
                                                    <option value="Barrancabermeja" {{ $vacant->city == "Barrancabermeja" ? 'selected' : '' }}>Barrancabermeja</option>
                                                    <option value="Popayan" {{ $vacant->city == "Popayan" ? 'selected' : '' }}>Popayan</option>
                                                    <option value="Dos quebradas" {{ $vacant->city == "Dos quebradas" ? 'selected' : '' }}>Dos quebradas</option>
                                                    <option value="Jamundi" {{ $vacant->city == "Jamundi" ? 'selected' : '' }}>Jamundi</option>
                                                    <option value="Palmira" {{ $vacant->city == "Palmira" ? 'selected' : '' }}>Palmira</option>
                                                    <option value="Ipiales" {{ $vacant->city == "Ipiales" ? 'selected' : '' }}>Ipiales</option>
                                                    <option value="Yumbo" {{ $vacant->city == "Yumbo" ? 'selected' : '' }}>Yumbo</option>
                                                    <option value="Cartago" {{ $vacant->city == "Cartago" ? 'selected' : '' }}>Cartago</option>
                                                    <option value="Tulua" {{ $vacant->city == "Tulua" ? 'selected' : '' }}>Tulua</option>
                                                    <option value="Girardot" {{ $vacant->city == "Girardot" ? 'selected' : '' }}>Girardot</option>
                                                    <option value="Pitalito" {{ $vacant->city == "Pitalito" ? 'selected' : '' }}>Pitalito</option>
                                                    <option value="Florencia" {{ $vacant->city == "Florencia" ? 'selected' : '' }}>Florencia</option>
                                                    <option value="Cajica" {{ $vacant->city == "Cajica" ? 'selected' : '' }}>Cajica</option>
                                                    <option value="Yopal" {{ $vacant->city == "Yopal" ? 'selected' : '' }}>Yopal</option>
                                                    <option value="Duitama" {{ $vacant->city == "Duitama" ? 'selected' : '' }}>Duitama</option>
                                                    <option value="Villeta" {{ $vacant->city == "Villeta" ? 'selected' : '' }}>Villeta</option>
                                                    <option value="Sogamoso" {{ $vacant->city == "Sogamoso" ? 'selected' : '' }}>Sogamoso</option>
                                                    <option value="Fusagasuga" {{ $vacant->city == "Fusagasuga" ? 'selected' : '' }}>Fusagasuga</option>
                                                    <option value="Sopo" {{ $vacant->city == "Sopo" ? 'selected' : '' }}>Sopo</option>
                                                    <option value="Tocancipa" {{ $vacant->city == "Tocancipa" ? 'selected' : '' }}>Tocancipa</option>
                                                    <option value="Chia"{{ $vacant->city == "Chia" ? 'selected' : '' }}>Chia</option>
                                                    <option value="Apartado" {{ $vacant->city == "Apartado" ? 'selected' : '' }}>Apartado</option>
                                                    <option value="Zipaquira" {{ $vacant->city == "Zipaquira" ? 'selected' : '' }}>Zipaquira</option>
                                                    <option value="Mosquera" {{ $vacant->city == "Mosquera" ? 'selected' : '' }}>Mosquera</option>
                                                    <option value="Madrid" {{ $vacant->city == "Madrid" ? 'selected' : '' }}>Madrid</option>
                                                    <option value="Funza" {{ $vacant->city == "Funza" ? 'selected' : '' }}>Funza</option>
                                                </select>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-6">
                                            <div class="form-outline">
                                                <label class="form-label text-dark" for="form8Example4">Salario</label>
                                                <input type="number" id="salary" class="form-control" name="salary"
                                                    style="border-radius: 25px" value="{{$vacant->salary}}"/>
                                            </div>
                                        </div>
                                        <div class="col-6">

                                            <div class="form-outline">
                                                <label class="form-label text-dark" for="form8Example4">Número
                                                    de
                                                    vacantes</label>
                                                <input type="number" id="" class="form-control"
                                                    name="num_vacants" style="border-radius: 25px" id="vacantes" value="{{$vacant->num_vacants}}"/>

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
                                                    <option value="Primaria" {{ $vacant->education == "Primaria" ? 'selected' : '' }}>Primaria</option>
                                                    <option value="Bachillerato" {{ $vacant->education == "Bachillerato" ? 'selected' : '' }}>Bachillerato</option>
                                                    <option value="Técnico" {{ $vacant->education == "Técnico" ? 'selected' : '' }}>Técnico</option>
                                                    <option value="Tecnólogo" {{ $vacant->education == "Tecnólogo" ? 'selected' : '' }}>Tecnólogo</option>
                                                    <option value="Pregrado" {{ $vacant->education == "Pregrado" ? 'selected' : '' }}>Pregrado</option>
                                                    <option value="Postgrado" {{ $vacant->education == "Postgrado" ? 'selected' : '' }}>Postgrado</option>
                                                    <option value="Maestria" {{ $vacant->education == "Maestria" ? 'selected' : '' }}>Maestria</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-outline">
                                                <label class="form-label text-dark" for="form8Example4">Idiomas
                                                    requeridos</label>
                                                <select class="form-select form-control" name="language"
                                                    style="border-radius: 25px">
                                                    <option value="Ninguno" {{ $vacant->language == "Ninguno" ? 'selected' : '' }}>Ninguno</option>
                                                    <option value="Ingles" {{ $vacant->language == "Ingles" ? 'selected' : '' }}>Ingles</option>
                                                    <option value="Otro" {{ $vacant->language == "Otro" ? 'selected' : '' }}>Otro</option>
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
                                                    <option value="no" {{ $vacant->availability_travel == "no" ? 'selected' : '' }}>No</option>
                                                    <option value="si" {{ $vacant->availability_travel == "si" ? 'selected' : '' }}>Si</option>

                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-outline">
                                                <label class="form-label text-dark" for="form8Example4">Tipo de
                                                    contrato</label>
                                                <select class="form-select form-control" name="type_contract"
                                                    style="border-radius: 25px">
                                                    <option value="fijo" {{ $vacant->type_contract == "fijo" ? 'selected' : '' }}>Fijo</option>
                                                    <option value="indefinido" {{ $vacant->type_contract == "indefinido" ? 'selected' : '' }}>Indefinido</option>
                                                    <option value="obra o labor" {{ $vacant->type_contract == "obra o labor" ? 'selected' : '' }}>Obra o labor</option>
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
                                                    style="border-radius: 25px">{{$vacant->description}}</textarea>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="row justify-content-center">
                                        <div class="col-12">

                                            <div class="form-outline">
                                                <label class="form-label text-dark" for="form8Example3">Experiencia
                                                    requerida</label>
                                                <textarea class="form-control" name="experience" id="" cols="30" rows="2"
                                                    style="border-radius: 25px">{{$vacant->experience}}</textarea>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <button class="text-center btn btn-primary btn-block">Duplicar vacante</button>
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
