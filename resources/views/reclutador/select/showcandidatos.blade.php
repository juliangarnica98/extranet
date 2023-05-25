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

    .vancants {
        transition: width 2s;
    }

    .vancants:hover {
        box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 2px, rgba(0, 0, 0, 0.07) 0px 2px 4px, rgba(0, 0, 0, 0.07) 0px 4px 8px, rgba(0, 0, 0, 0.07) 0px 8px 16px, rgba(0, 0, 0, 0.07) 0px 16px 32px, rgba(0, 0, 0, 0.07) 0px 32px 64px;
    }

    .link-a {
        transition: width 2s;
        transition-property: box-shadow, transform;
        transition-duration: 350ms;
        transition-timing-function: ease;
    }

    .link-a:hover {
        transform: translateY(-5px);
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
        <div class="">

            <div class="row pl-3 pr-3 pt-3 justify-content-center">


                <div class="col-md-12 grid-margin stretch-card">
                    <h4 class="text-center text-black"><b> SELECCIONADOS</b></h4>
                    <h4 class="text-center text-black">VACANTE <b> {{ $name_vacant->title }}</b></h4>
                    <div class="row justify-content-center"
                        style="border-radius: 25px;background-color: #fff;font-size: 0.9rem">
                        <div class="col-md-2 sub-nav-link"><a class="nav-link text-center text-black"
                                href="{{ route('reclutador.aspirantes', ['id' => $name_vacant->id]) }}"><b><i
                                        class="fas fa-users"></i>
                                    POSTULADOS</b><span class="sr-only">(current)</span></a></div>
                        <div class="col-md-2 sub-nav-link active"> <a class="nav-link text-center text-black "
                                href="{{ route('reclutador.seleccionados.buscar', ['id' => $name_vacant->id]) }}"><b><i
                                        class="fas fa-user-friends"></i>
                                    SELECCIONADOS</b><span class="sr-only">(current)</span></a></div>
                        <div class="col-md-2 sub-nav-link"><a class="nav-link text-center text-black"
                                href="{{ route('reclutador.reclutamientos.buscar', ['id' => $name_vacant->id]) }}"><b><i
                                        class="fas fa-tasks"></i> PRUEBAS</b><span class="sr-only">(current)</span></a>
                        </div>
                        <div class="col-md-2 sub-nav-link"><a class="nav-link text-center text-black"
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

                    </div>
                    @if (count($postulaciones) == 0)
                        <div class="col-md-12 grid-margin stretch-card pt-5">
                            <div class="card box">
                                <div class="card-body">
                                    <h5 class="text-center text-black">NO HAY CANDIDATOS SELECCIONADOS</h5>
                                </div>
                            </div>
                        </div>
                    @else
                        <form action="{{route('descargar.excel',$name_vacant->id)}}" method="get">
                        @csrf
                            <div class="row pt-4 justify-content-end">
                                <button class="btn text-white" style="background-color: #E52B7F"><i
                                        class="fas fa-download"></i></button>
                            </div>
                            <div class="row pt-4">

                                <div class="col-md-3">
                                    <div class="card" style="background-color: #ffffff;height: auto">
                                        <div class="card-body">
                                            Filtros
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9">

                                    <div class="row ">

                                        <div class="col-md-3">
                                            <p class="text-center"> <small
                                                    class="text-center text-black "><b>NOMBRE</b></small>
                                            </p>
                                        </div>
                                        <div class="col-md-3">
                                            <p class="text-center"> <small
                                                    class="text-center text-black "><b>ESTIUDIOS</b></small></p>
                                        </div>
                                        <div class="col-md-2">
                                            <p class="text-center"><small
                                                    class="text-center text-black "><b>RECLUTAR</b></small></p>
                                        </div>
                                        <div class="col-md-2">
                                            <p class="text-center"><small
                                                    class="text-center text-black "><b>DESCARTAR</b></small></p>
                                        </div>
                                        <div class="col-md-2">
                                            <p class="text-center"><small
                                                    class="text-center text-black "><b>SELECCIONAR</b></small></p>
                                        </div>
                                    </div>


                                    @foreach ($postulaciones as $postulacion)
                                        @foreach ($cvs as $cv)
                                            @if ($postulacion->cv_id == $cv->id)
                                                <div class="pt-2" style="border-radius: 25px">
                                                    <div class="card pl-0 pr-0 ml-0 mr-0 border-0 vancants">

                                                        <div class="card-body pt-0 pb-1 ml-0 mr-0 ">
                                                            <div class="row">
                                                                <div class="col-md-3 text-black pt-1 text-center">
                                                                    <strong><i>
                                                                            {{ $cv->name }}</i></strong>
                                                                    <img style="width: 4rem;height: 4rem;border-radius: 50%"
                                                                        class="img-fluid"
                                                                        src="{{ asset('storage/avatars/' . $cv->photo_cv) }}" />

                                                                </div>
                                                                <div class="col-md-3 text-black pt-1 text-center">
                                                                    {{ $cv->academic_profile }}
                                                                </div>
                                                                <div class="col-md-2 text-black pt-1 text-center">
                                                                    <a
                                                                        href="{{ route('vercandidatoseleccionado', ['id' => $cv->id, $postulacion->vacant_id]) }}"class="btn "><i
                                                                            class="fas fa-check link-a text-black"></i></a>
                                                                </div>
                                                                <div class="col-md-2 text-black pt-1 text-center link-a">
                                                                    <a class="btn  text-black"
                                                                        data-target="#Modaldescartar{{ $cv->id }}"
                                                                        data-toggle="modal"><i class="fas fa-times"></i>
                                                                    </a>
                                                                    @include('reclutador.select.modals.descartarcandidato')
                                                                </div>
                                                                <div class="col-md-2 text-black pt-1 text-center link-a">
                                                                    <input type="checkbox" id="cbox2" value="{{ $cv->id }}" name="seleccionados[]">
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    @endforeach
                                </div>

                            </div>
                        </form>
                    @endif
                </div>

            </div>

        </div>
    </div>
@endsection
