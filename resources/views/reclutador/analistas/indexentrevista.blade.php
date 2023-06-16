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

        <h4 class="text-center text-black pt-5"><b>ASIGNACION DE ENTREVISTAS</b></h4>
        <h4 class="text-center text-black">VACANTE <b> {{ $name_vacant->title }}</b></h4>

        {{-- <div class="row justify-content-center" style="border-radius: 25px;background-color: #fff;font-size: 0.9rem">
            <div class="col-md-2 sub-nav-link "><a class="nav-link text-center text-black"
                    href="{{ route('reclutador.aspirantes', ['id' => $name_vacant->id]) }}"><b><i class="fas fa-users"></i>
                        POSTULADOS</b><span class="sr-only">(current)</span></a></div>
            <div class="col-md-2 sub-nav-link "> <a class="nav-link text-center text-black "
                    href="{{ route('reclutador.seleccionados.buscar', ['id' => $name_vacant->id]) }}"><b><i
                            class="fas fa-user-friends"></i>
                        SELECCIONADOS</b><span class="sr-only">(current)</span></a></div>
            <div class="col-md-2 sub-nav-link "><a class="nav-link text-center text-black"
                    href="{{ route('reclutador.reclutamientos.buscar', ['id' => $name_vacant->id]) }}"><b><i
                            class="fas fa-tasks"></i> PRUEBAS</b><span class="sr-only">(current)</span></a>
            </div>
            <div class="col-md-2 sub-nav-link active"><a class="nav-link text-center text-black"
                    href="{{ route('reclutador.analista.index', ['id' => $name_vacant->id]) }}"><b><i
                            class="fas fa-comment-alt"></i>
                        ENTREVISTAS</b>
                    <span class="sr-only">(current)</span></a></div>
            <div class="col-md-2 sub-nav-link">

                <a class="nav-link text-center text-black" href="#"><b><i class="fas fa-check-double"></i>
                        FINALISTAS</b>
                    <span class="sr-only">(current)</span></a>
            </div>
            <div class="col-md-2 sub-nav-link"><a class="nav-link text-center text-black"
                    href="{{ route('reclutador.discarded.index', ['id' => $name_vacant->id]) }}"><b><i
                            class="far fa-times-circle"></i>
                        DESCARTADOS</b>
                    <span class="sr-only">(current)</span></a></div>

        </div> --}}
        @include('layouts.menu')
        <div class="">


            @if ($name_vacant->entrevista_analista == 'aplica')
                <form method="POST" action="{{ route('reclutador.analista.registrarentrevistas', $id) }}">
                    @csrf
                    <div class="card box mt-3">
                        <div class="card-header card-header-warning" style=" border-radius: 15px;">
                            <h5 class="card-title text-center"><b>ENTREVISTA ANALISTA</b></h5>
                        </div>
                        <div class="card-body text-black">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row text-black justify-content-center">
                                        <div class="col-md-10 text-center">
                                            <div class="form-outline ">
                                                <select class="form-select form-control text-black" name="usuario_analista"
                                                    style="border-radius: 25px">
                                                    <option value="" class="text-black">SELECCIONE UN ANALISTA
                                                    </option>
                                                    @foreach ($users_reclutador as $reclutador)
                                                        <option value="{{ $reclutador->id }}" class="text-black">
                                                            {{ $reclutador->name }} {{ $reclutador->last_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-10 text-center pt-2">
                                            <div class="form-outline ">
                                              <input class="col-12" type="datetime-local" name="fecha" id="">
                                            </div>
                                        </div>
                                        <div class="col-md-10 text-center pt-2">
                                            <button class="btn text-white btn-block"
                                                style="background-color: #e52b7f">ASIGNAR</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h6 class="text-black"><b> ANALISTAS ASIGNADOS</b></h6>
                                    @foreach ($entrevistas as $entrevista)
                                        @if ($entrevista->cargo == 'analista')
                                            <h5>{{$entrevista->user->name}}</h5>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            @endif
            @if ($name_vacant->entrevista_coordinador == 'aplica')
                <form method="POST" action="{{ route('reclutador.analista.registrarentrevistas', $id) }}">
                    @csrf
                    <div class="card box mt-3">
                        <div class="card-header card-header-warning" style=" border-radius: 15px;">
                            <h5 class="card-title text-center"><b>ENTREVISTA COORDINADOR</b></h5>
                        </div>
                        <div class="card-body text-black">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row text-black justify-content-center">
                                        
                                        <div class="col-md-10 text-center">
                                            <div class="form-outline ">
                                               
                                                <select class="form-select form-control text-black"
                                                    name="usuario_coordinador" style="border-radius: 25px">
                                                    <option value="" class="text-black">SELECCIONE UN COORDINADOR
                                                    </option>
                                                    @foreach ($users_admin as $admin)
                                                        <option value="{{ $admin->id }}" class="text-black">
                                                            {{ $admin->name }} {{ $admin->lats_name }}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-10 text-center pt-2">
                                            <div class="form-outline ">
                                              <input class="col-12" type="datetime-local" name="fecha" id="">
                                            </div>
                                        </div>
                                        <div class="col-md-10 text-center pt-2">
                                            <button class="btn text-white btn-block"
                                                style="background-color: #e52b7f">ASIGNAR</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h6 class="text-black"><b> COORDINADORES ASIGNADOS</b></h6>
                                    @foreach ($entrevistas as $entrevista)
                                        @if ($entrevista->cargo == 'coordinador')
                                            <h5>{{$entrevista->user->name}}</h5>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            @endif
            @if ($name_vacant->entrevista_jefe == 'aplica')
                <form method="POST" action="{{ route('reclutador.analista.registrarentrevistas', $id) }}">
                    @csrf
                    <div class="card box mt-3">
                        <div class="card-header card-header-warning" style=" border-radius: 15px;">
                            <h5 class="card-title text-center"><b>ENTREVISTA JEFE</b></h5>
                        </div>
                        <div class="card-body text-black">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row text-black justify-content-center">
                                        <div class="col-md-10 text-center">
                                            <div class="form-outline ">
                                                <select class="form-select form-control text-black" name="usuario_jefe"
                                                    style="border-radius: 25px">
                                                    <option value="" class="text-black">SELECCIONE UN JEFE
                                                    </option>
                                                    @foreach ($users_jefe as $jefe)
                                                        <option value="{{ $jefe->id }}" class="text-black">
                                                            {{ $jefe->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-10 text-center pt-2">
                                            <div class="form-outline ">
                                              <input class="col-12" type="datetime-local" name="fecha" id="">
                                            </div>
                                        </div>
                                        <div class="col-md-10 text-center pt-2">
                                            <button class="btn text-white btn-block"
                                                style="background-color: #e52b7f">ASIGNAR</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h6 class="text-black"><b> JEFES ASIGNADOS</b></h6>
                                    @foreach ($entrevistas as $entrevista)
                                        @if ($entrevista->cargo == 'jefe')
                                            <h5>{{$entrevista->user->name}}</h5>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            @endif
            @if ($name_vacant->entrevista_gerente == 'aplica')
                <form method="POST" action="{{ route('reclutador.analista.registrarentrevistas', $id) }}">
                    @csrf
                    <div class="card box mt-3">
                        <div class="card-header card-header-warning" style=" border-radius: 15px;">
                            <h5 class="card-title text-center"><b>ENTREVISTA GERENTE</b></h5>
                        </div>
                        <div class="card-body text-black">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row text-black justify-content-center">
                                        <div class="col-md-10 text-center">
                                            <div class="form-outline ">
                                                <select class="form-select form-control text-black" name="usuario_gerente"
                                                    style="border-radius: 25px">
                                                    <option value="" class="text-black">SELECCIONE UN GERENTE
                                                    </option>
                                                    @foreach ($users_jefe as $jefe)
                                                        <option value="{{ $jefe->id }}" class="text-black">
                                                            {{ $jefe->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-10 text-center pt-2">
                                            <div class="form-outline ">
                                              <input class="col-12" type="datetime-local" name="fecha" id="">
                                            </div>
                                        </div>
                                        <div class="col-md-10 text-center pt-2">
                                            <button class="btn text-white btn-block"
                                                style="background-color: #e52b7f">ASIGNAR</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h6 class="text-black"><b> GERENTES ASIGNADOS</b></h6>
                                        @foreach ($entrevistas as $entrevista)
                                            @if ($entrevista->cargo == 'gerente')
                                                <h5>{{$entrevista->user->name}}</h5>
                                            @endif
                                        @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            @endif


        </div>
    </div>
@endsection
