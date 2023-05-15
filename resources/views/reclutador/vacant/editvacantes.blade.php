


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

        <h2 class="text-center  pt-5 text-black" style="color: #000000">EDITAR VACANTE</h2>
        <div class="">

            <form method="POST" action="{{ route('reclutador.edit.vacant', $vacant->id) }}">
                @method('PUT')
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
                                        <option value="cedi" {{ $vacant->area == 'cedi' ? 'selected' : '' }}>
                                            CEDI</option>
                                        <option value="administrativo"
                                            {{ $vacant->area == 'administrativo' ? 'selected' : '' }}>
                                            ADMINISTRATIVO</option>
                                        <option value="comercial" {{ $vacant->area == 'comercial' ? 'selected' : '' }}>
                                            COMERCIAL</option>
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
                                        value="{{ $vacant->title }}" style="border-radius: 25px" />
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

                                    <textarea id="" class="form-control" name="description" cols="30" rows="2"
                                        style="border-radius: 25px">{{ $vacant->description }}</textarea>
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
                                        <option value="Bogotá" {{ $vacant->city == 'Bogotá' ? 'selected' : '' }}>Bogotá
                                        </option>
                                        <option value="Medellín" {{ $vacant->city == 'Medellín' ? 'selected' : '' }}>
                                            Medellín</option>
                                        <option value="Cali" {{ $vacant->city == 'Cali' ? 'selected' : '' }}>Cali
                                        </option>
                                        <option value="Barranquilla"
                                            {{ $vacant->city == 'Barranquilla' ? 'selected' : '' }}>Barranquilla</option>
                                        <option value="Cartagena de Indias"
                                            {{ $vacant->city == 'Cartagena de Indias' ? 'selected' : '' }}>Cartagena de
                                            Indias</option>
                                        <option value="Soacha" {{ $vacant->city == 'Soacha' ? 'selected' : '' }}>Soacha
                                        </option>
                                        <option value="Tunja" {{ $vacant->city == 'Tunja' ? 'selected' : '' }}>Tunja
                                        </option>
                                        <option value="Cúcuta" {{ $vacant->city == 'Cúcuta' ? 'selected' : '' }}>Cúcuta
                                        </option>
                                        <option value="Soledad" {{ $vacant->city == 'Soledad' ? 'selected' : '' }}>Soledad
                                        </option>
                                        <option value="Bucaramanga" {{ $vacant->city == 'Bucaramanga' ? 'selected' : '' }}>
                                            Bucaramanga</option>
                                        <option value="Bello" {{ $vacant->city == 'Bello' ? 'selected' : '' }}>Bello
                                        </option>
                                        <option value="Villavicencio"
                                            {{ $vacant->city == 'Villavicencio' ? 'selected' : '' }}>Villavicencio</option>
                                        <option value="Ibagué" {{ $vacant->city == 'Ibagué' ? 'selected' : '' }}>Ibagué
                                        </option>
                                        <option value="Santa Marta" {{ $vacant->city == 'Santa Marta' ? 'selected' : '' }}>
                                            Santa Marta</option>
                                        <option value="Valledupar" {{ $vacant->city == 'Valledupar' ? 'selected' : '' }}>
                                            Valledupar</option>
                                        <option value="Manizales" {{ $vacant->city == 'Manizales' ? 'selected' : '' }}>
                                            Manizales</option>
                                        <option value="Pereira" {{ $vacant->city == 'Pereira' ? 'selected' : '' }}>Pereira
                                        </option>
                                        <option value="Montería" {{ $vacant->city == 'Montería' ? 'selected' : '' }}>
                                            Montería</option>
                                        <option value="Neiva" {{ $vacant->city == 'Neiva' ? 'selected' : '' }}>Neiva
                                        </option>
                                        <option value="Pasto" {{ $vacant->city == 'Pasto' ? 'selected' : '' }}>Pasto
                                        </option>
                                        <option value="Armenia" {{ $vacant->city == 'Armenia' ? 'selected' : '' }}>Armenia
                                        </option>
                                        <option value="Rioacha" {{ $vacant->city == 'Rioacha' ? 'selected' : '' }}>Rioacha
                                        </option>
                                        <option value="Sincelejo" {{ $vacant->city == 'Sincelejo' ? 'selected' : '' }}>
                                            Sincelejo</option>
                                        <option value="Barrancabermeja"
                                            {{ $vacant->city == 'Barrancabermeja' ? 'selected' : '' }}>Barrancabermeja
                                        </option>
                                        <option value="Popayan" {{ $vacant->city == 'Popayan' ? 'selected' : '' }}>Popayan
                                        </option>
                                        <option value="Dos quebradas"
                                            {{ $vacant->city == 'Dos quebradas' ? 'selected' : '' }}>Dos quebradas</option>
                                        <option value="Jamundi" {{ $vacant->city == 'Jamundi' ? 'selected' : '' }}>Jamundi
                                        </option>
                                        <option value="Palmira" {{ $vacant->city == 'Palmira' ? 'selected' : '' }}>Palmira
                                        </option>
                                        <option value="Ipiales" {{ $vacant->city == 'Ipiales' ? 'selected' : '' }}>Ipiales
                                        </option>
                                        <option value="Yumbo" {{ $vacant->city == 'Yumbo' ? 'selected' : '' }}>Yumbo
                                        </option>
                                        <option value="Cartago" {{ $vacant->city == 'Cartago' ? 'selected' : '' }}>Cartago
                                        </option>
                                        <option value="Tulua" {{ $vacant->city == 'Tulua' ? 'selected' : '' }}>Tulua
                                        </option>
                                        <option value="Girardot" {{ $vacant->city == 'Girardot' ? 'selected' : '' }}>
                                            Girardot</option>
                                        <option value="Pitalito" {{ $vacant->city == 'Pitalito' ? 'selected' : '' }}>
                                            Pitalito</option>
                                        <option value="Florencia" {{ $vacant->city == 'Florencia' ? 'selected' : '' }}>
                                            Florencia</option>
                                        <option value="Cajica" {{ $vacant->city == 'Cajica' ? 'selected' : '' }}>Cajica
                                        </option>
                                        <option value="Yopal" {{ $vacant->city == 'Yopal' ? 'selected' : '' }}>Yopal
                                        </option>
                                        <option value="Duitama" {{ $vacant->city == 'Duitama' ? 'selected' : '' }}>Duitama
                                        </option>
                                        <option value="Villeta" {{ $vacant->city == 'Villeta' ? 'selected' : '' }}>Villeta
                                        </option>
                                        <option value="Sogamoso" {{ $vacant->city == 'Sogamoso' ? 'selected' : '' }}>
                                            Sogamoso</option>
                                        <option value="Fusagasuga" {{ $vacant->city == 'Fusagasuga' ? 'selected' : '' }}>
                                            Fusagasuga</option>
                                        <option value="Sopo" {{ $vacant->city == 'Sopo' ? 'selected' : '' }}>Sopo
                                        </option>
                                        <option value="Tocancipa" {{ $vacant->city == 'Tocancipa' ? 'selected' : '' }}>
                                            Tocancipa</option>
                                        <option value="Chia"{{ $vacant->city == 'Chia' ? 'selected' : '' }}>Chia
                                        </option>
                                        <option value="Apartado" {{ $vacant->city == 'Apartado' ? 'selected' : '' }}>
                                            Apartado</option>
                                        <option value="Zipaquira" {{ $vacant->city == 'Zipaquira' ? 'selected' : '' }}>
                                            Zipaquira</option>
                                        <option value="Mosquera" {{ $vacant->city == 'Mosquera' ? 'selected' : '' }}>
                                            Mosquera</option>
                                        <option value="Madrid" {{ $vacant->city == 'Madrid' ? 'selected' : '' }}>Madrid
                                        </option>
                                        <option value="Funza" {{ $vacant->city == 'Funza' ? 'selected' : '' }}>Funza
                                        </option>
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
                                    <input type="number" id="salary" class="form-control" name="salary"
                                        style="border-radius: 25px" value="{{ $vacant->salary }}" />
                                </div>
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
                                    <input type="number" id="" class="form-control"
                                        value="{{ $vacant->num_vacants }}" name="num_vacants"
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
                                        <option value="fijo" {{ $vacant->type_contract == 'fijo' ? 'selected' : '' }}>
                                            Fijo</option>
                                        <option value="indefinido"
                                            {{ $vacant->type_contract == 'indefinido' ? 'selected' : '' }}>Indefinido
                                        </option>
                                        <option value="obra o labor"
                                            {{ $vacant->type_contract == 'obra o labor' ? 'selected' : '' }}>Obra o labor
                                        </option>
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
                        <div class="row text-black">
                            <div class="col-md-4 text-right">
                                <label class="form-label text-black" for="form8Example3">EXPERIENCIA REQUERIDA</label>
                            </div>
                            <div class="col-md-6">
                                <select class="form-select form-control" name="experience" style="border-radius: 25px">
                                    <option value="sin experiencia"
                                        {{ $vacant->experience == 'sin experiencia' ? 'selected' : '' }}>
                                        SIN EXPERIENCIA</option>
                                    <option value="1 año" {{ $vacant->experience == '1 año' ? 'selected' : '' }}>
                                        1 AÑO</option>
                                    <option value="2 años" {{ $vacant->experience == '2 años' ? 'selected' : '' }}>
                                        2 AÑOS</option>
                                    <option value="mas de 2 años"
                                        {{ $vacant->experience == 'mas de 2 años' ? 'selected' : '' }}>
                                        MAS DE 2 AÑOS</option>
                                </select>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-outline text-right  ">
                                    <label class="form-label text-black" for="form8Example4">EDUCACIÓN MINIMA</label>

                                </div>
                            </div>
                            <div class="col-md-6 pt-1">
                                <div class="form-outline">
                                    <select class="form-select form-control" name="education"
                                        style="border-radius: 25px">
                                        <option value="Primaria" {{ $vacant->education == 'Primaria' ? 'selected' : '' }}>
                                            PRIMARIA</option>
                                        <option value="Bachillerato"
                                            {{ $vacant->education == 'Bachillerato' ? 'selected' : '' }}>BACHILLERATO
                                        </option>
                                        <option value="Técnico" {{ $vacant->education == 'Técnico' ? 'selected' : '' }}>
                                            TÉCNICO</option>
                                        <option value="Tecnólogo"
                                            {{ $vacant->education == 'Tecnólogo' ? 'selected' : '' }}>TECNÓLOGO</option>
                                        <option value="Pregrado" {{ $vacant->education == 'Pregrado' ? 'selected' : '' }}>
                                            PROFESIONAL</option>
                                        <option value="Postgrado"
                                            {{ $vacant->education == 'Postgrado' ? 'selected' : '' }}>POSTGRADO</option>
                                        <option value="Maestria" {{ $vacant->education == 'Maestria' ? 'selected' : '' }}>
                                            MAESTRIA</option>
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
                                    <option value="Ninguno" {{ $vacant->language == 'Ninguno' ? 'selected' : '' }}>NINGUNO
                                    </option>
                                    <option value="Ingles" {{ $vacant->language == 'Ingles' ? 'selected' : '' }}>INGLES
                                    </option>
                                    <option value="Otro" {{ $vacant->language == 'Otro' ? 'selected' : '' }}>OTRO
                                    </option>
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
                                        <option value="no"
                                            {{ $vacant->availability_travel == 'no' ? 'selected' : '' }}>No</option>
                                        <option value="si"
                                            {{ $vacant->availability_travel == 'si' ? 'selected' : '' }}>Si</option>
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
                                        <option value="no"
                                            {{ $vacant->residence_change == 'no' ? 'selected' : '' }}>NO</option>
                                        <option value="si"
                                            {{ $vacant->residence_change == 'si' ? 'selected' : '' }}>SI</option>
                                    </select>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
                <div class="card box mt-3">
                    <div class="card-header card-header-warning" style=" border-radius: 15px;">
                        <h5 class="card-title text-center"><b>PRUEBAS DE LA VACANTE</b></h5>
                    </div>
                    <div class="card-body text-black">
                        <div class="row text-black">
                            <div class="col-md-4 text-right">
                                <label class="form-label text-black" for="form8Example3">CLINICA DE VENTAS</label>
                            </div>
                            <div class="col-md-6">
                                

                                <select class="form-select form-control" name="ventas"
                                        style="border-radius: 25px">
                                        <option value="no aplica"
                                            {{ $vacant->ventas == 'no aplica' ? 'selected' : '' }}>NO APLICA</option>
                                        <option value="aplica"
                                            {{ $vacant->ventas == 'aplica' ? 'selected' : '' }}>APLICA</option>
                                    </select>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-outline text-right  ">
                                    <label class="form-label text-black" for="form8Example4">CENTRAR DE RIESGOS</label>

                                </div>
                            </div>
                            <div class="col-md-6 pt-1">
                                <div class="form-outline">
                                   

                                    <select class="form-select form-control" name="riesgos"
                                        style="border-radius: 25px">
                                        <option value="no aplica"
                                            {{ $vacant->riesgos == 'no aplica' ? 'selected' : '' }}>NO APLICA</option>
                                        <option value="aplica"
                                            {{ $vacant->riesgos == 'aplica' ? 'selected' : '' }}>APLICA</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row text-black">
                            <div class="col-md-4 text-right pt-1">
                                <label class="form-label text-black " for="form8Example4">PRUEBA TECNICA</label>
                            </div>
                            <div class="col-md-6 pt-1">
                      

                                <select class="form-select form-control" name="tecnica"
                                style="border-radius: 25px">
                                <option value="no aplica"
                                    {{ $vacant->tecnica == 'no aplica' ? 'selected' : '' }}>NO APLICA</option>
                                <option value="aplica"
                                    {{ $vacant->tecnica == 'aplica' ? 'selected' : '' }}>APLICA</option>
                            </select>
                            </div>
                        </div>
                        <div class="row text-black">
                            <div class="col-md-4 text-right pt-1">
                                <label class="form-label text-black " for="form8Example4">POLIGRAFO</label>
                            </div>
                            <div class="col-md-6 pt-1">
                            
                                <select class="form-select form-control" name="poligrafo"
                                    style="border-radius: 25px">
                                    <option value="no aplica"
                                        {{ $vacant->poligrafo == 'no aplica' ? 'selected' : '' }}>NO APLICA</option>
                                    <option value="aplica"
                                        {{ $vacant->poligrafo == 'aplica' ? 'selected' : '' }}>APLICA</option>
                                </select>
                            </div>
                        </div>
                        <div class="row text-black">
                            <div class="col-md-4 text-right pt-1">
                                <label class="form-label text-black " for="form8Example4">VISITA DOMICILIARIA</label>
                            </div>
                            <div class="col-md-6 pt-1">
       

                                <select class="form-select form-control" name="visita"
                                style="border-radius: 25px">
                                <option value="no aplica"
                                    {{ $vacant->visita == 'no aplica' ? 'selected' : '' }}>NO APLICA</option>
                                <option value="aplica"
                                    {{ $vacant->visita == 'aplica' ? 'selected' : '' }}>APLICA</option>
                            </select>
                            </div>
                        </div>




                    </div>
                </div>

                <div class="card box mt-3" >
                    <div class="card-header card-header-warning" style=" border-radius: 15px;">
                        <h5 class="card-title text-center" ><b>ENTREVISTAS DE LA VACANTE</b></h5>
                   </div>
                    <div class="card-body text-black">
                        <div class="row text-black">
                            <div class="col-md-4 text-right">
                                <label class="form-label text-black" for="form8Example3">ANALISTA</label>
                            </div>
                            <div class="col-md-6">
                                <select class="form-select form-control" name="entrevista_analista"
                                        style="border-radius: 25px">
                                        <option value="no aplica"
                                    {{ $vacant->entrevista_analista == 'no aplica' ? 'selected' : '' }}>NO APLICA</option>
                                <option value="aplica"
                                    {{ $vacant->entrevista_analista == 'aplica' ? 'selected' : '' }}>APLICA</option>
                                    </select>
                               
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-outline text-right  ">
                                        <label class="form-label text-black" for="form8Example4">COORDINADOR DE SELECCIÓN</label>
                                    
                                </div>
                            </div>
                            <div class="col-md-6 pt-1">
                                <div class="form-outline">
                                    <select class="form-select form-control" name="entrevista_coordinador"
                                        style="border-radius: 25px">
                                        <option value="no aplica"
                                        {{ $vacant->entrevista_coordinador == 'no aplica' ? 'selected' : '' }}>NO APLICA</option>
                                    <option value="aplica"
                                        {{ $vacant->entrevista_coordinador == 'aplica' ? 'selected' : '' }}>APLICA</option>
                                        </select>
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
                                        <option value="no aplica"
                                        {{ $vacant->entrevista_jefe == 'no aplica' ? 'selected' : '' }}>NO APLICA</option>
                                    <option value="aplica"
                                        {{ $vacant->entrevista_jefe == 'aplica' ? 'selected' : '' }}>APLICA</option>
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
                                        <option value="no aplica"
                                        {{ $vacant->entrevista_gerente == 'no aplica' ? 'selected' : '' }}>NO APLICA</option>
                                    <option value="aplica"
                                        {{ $vacant->entrevista_gerente == 'aplica' ? 'selected' : '' }}>APLICA</option>
                                    </select>
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
                            {{-- <div class="col-md-6">
                                <select class="form-select form-control" name="ventas"
                                        style="border-radius: 25px">
                                        <option value="no aplica">NO APLICA</option>
                                        <option value="aplica">APLICA</option>
                                    </select>
                               
                            </div> --}}
                        </div>

                    </div>
                    <div>
                        <button class="box btn-formulario text-white text-center btn btn-block mt-3 mb-3"
                            style="background-color: #e52b7f"><b>GUARDAR</b> </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
