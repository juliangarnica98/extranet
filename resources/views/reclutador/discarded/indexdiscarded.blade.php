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
        {{-- <h2 class="text-center text-dark pt-2 ">
            CANDIDATOS DESCARTADOS
        </h2> --}}
        <div class="">

            <div class="row pl-3 pr-3 pt-3 justify-content-center">
                <div class="col-md-12 grid-margin stretch-card">
                    <h4 class="text-center text-black"><b> DESCARTADO</b></h4>
                    <h4 class="text-center text-black">VACANTE <b> {{ $name_vacant->title }}</b></h4>

                    <div class="row justify-content-center"
                        style="border-radius: 25px;background-color: #fff;font-size: 0.9rem">
                        <div class="col-md-2 sub-nav-link "><a class="nav-link text-center text-black"
                                href="{{ route('reclutador.aspirantes', ['id' => $name_vacant->id]) }}"><b><i
                                        class="fas fa-users"></i>
                                    POSTULADOS</b><span class="sr-only">(current)</span></a></div>
                        <div class="col-md-2 sub-nav-link "> <a class="nav-link text-center text-black "
                                href="{{ route('reclutador.seleccionados.buscar', ['id' => $name_vacant->id]) }}"><b><i
                                        class="fas fa-user-friends"></i>
                                    SELECCIONADOS</b><span class="sr-only">(current)</span></a></div>
                        <div class="col-md-2 sub-nav-link"><a class="nav-link text-center text-black"
                                href="{{ route('reclutador.reclutamientos.buscar', ['id' => $name_vacant->id]) }}"><b><i
                                        class="fas fa-tasks"></i> PRUEBAS</b><span class="sr-only">(current)</span></a>
                        </div>
                        <div class="col-md-2 sub-nav-link"><a class="nav-link text-center text-black"
                                href="{{ route('reclutador.analista.index') }}"><b><i class="fas fa-comment-alt"></i>
                                    ENTREVISTAS</b>
                                <span class="sr-only">(current)</span></a></div>
                        <div class="col-md-2 sub-nav-link">

                            <a class="nav-link text-center text-black" href="#"><b><i class="fas fa-check-double"></i>
                                    FINALISTAS</b>
                                <span class="sr-only">(current)</span></a>
                        </div>
                        <div class="col-md-2 sub-nav-link active"><a class="nav-link text-center text-black"
                                href="{{ route('reclutador.discarded.index', ['id' => $name_vacant->id]) }}"><b><i
                                        class="far fa-times-circle"></i>
                                    DESCARTADOS</b>
                                <span class="sr-only">(current)</span></a></div>

                    </div>
                    @if (sizeof($descartados) == 0)
                        <div class="card box mt-3" style="background-color: #ffffff;height: auto">
                            <div class="card-body">

                                <p class="card-description text-center">
                                    <b>NO SE HAN DESCARTADO CANDIDATOS</b>
                                </p>
                            </div>
                        </div>
                    @else
                        <div class="row pt-4">
                            <div class="col-md-3">
                                <div class="card" style="background-color: #ffffff;height: auto">
                                    <div class="card-body">
                                        Filtros
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div>
                                    <div class="row ">
                                        <div class="col-md-4">
                                            <p class="text-center"> <small class="text-center text-black "><b>NOMBRE DEL
                                                        CANDIDATO</b></small></p>
                                        </div>
                                        <div class="col-md-4">
                                            <p class="text-center"> <small class=" text-black "><b>FECHA</b></small></p>
                                        </div>
                                        <div class="col-md-4">
                                            <p class="text-center"> <small
                                                    class="text-center text-black "><b>COMENTARIOS</b></small></p>
                                        </div>

                                    </div>
                                </div>
                                @foreach ($descartados as $descartado)
                                    {{-- @foreach ($descartado->descarded as $descarded) --}}
                                    <div class="" style="border-radius: 25px">
                                        {{-- @if ($cv->pivot->state_id != 11) --}}
                                        <div class="card pl-0 pr-0 ml-0 mr-0 border-0 vancants">

                                            <div class="card-body pt-1 pb-1 ml-0 mr-0 ">

                                                <div class="row ">

                                                    <div class="col-md-4 text-black pt-2">
                                                        <p class="text-center"><strong>
                                                                @foreach ($cvs as $cv)
                                                                    @if ($cv->id == $descartado->cv_id)
                                                                        {{ $cv->name }}
                                                                    @endif
                                                                @endforeach
                                                            </strong>
                                                        </p>
                                                    </div>
                                                    <div class="col-md-4 text-black pt-2">
                                                        <p class="text-center">
                                                            <strong>{{ date('d-m-Y', strtotime($descartado->discarded->created_at)) }}</strong><br>
                                                        </p>
                                                    </div>
                                                    <div class="col-md-4 text-black pt-2">
                                                        <p class="text-center">
                                                            <strong>{{ $descartado->discarded->comentarios }}</strong>
                                                        </p>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif

                </div>

            </div>
        </div>
    </div>
@endsection
