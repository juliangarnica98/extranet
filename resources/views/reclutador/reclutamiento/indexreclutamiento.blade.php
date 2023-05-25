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
        <h2 class="text-center text-dark pt-2 "></h2>


        <div class="row pl-3 pr-3 pt-3 justify-content-center">
            <div class="col-md-12 grid-margin stretch-card">
                <h4 class="text-center text-black"><b> ENVIADOS A PRUEBAS</b></h4>
                <h4 class="text-center text-black">VACANTE <b> {{ $name_vacant->title }}</b></h4>

                <div class="row justify-content-center" style="border-radius: 25px;background-color: #fff;font-size: 0.9rem">
                    <div class="col-md-2 sub-nav-link "><a class="nav-link text-center text-black"
                            href="{{ route('reclutador.aspirantes', ['id' => $name_vacant->id]) }}"><b><i
                                    class="fas fa-users"></i>
                                POSTULADOS</b><span class="sr-only">(current)</span></a></div>
                    <div class="col-md-2 sub-nav-link "> <a class="nav-link text-center text-black "
                            href="{{ route('reclutador.seleccionados.buscar', ['id' => $name_vacant->id]) }}"><b><i
                                    class="fas fa-user-friends"></i>
                                SELECCIONADOS</b><span class="sr-only">(current)</span></a></div>
                    <div class="col-md-2 sub-nav-link active"><a class="nav-link text-center text-black"
                            href="{{ route('reclutador.reclutamientos.buscar', ['id' => $name_vacant->id]) }}"><b><i
                                    class="fas fa-tasks"></i> PRUEBAS</b><span class="sr-only">(current)</span></a>
                    </div>
                    <div class="col-md-2 sub-nav-link"><a class="nav-link text-center text-black"
                            href="{{ route('reclutador.analista.index', ['id' => $name_vacant->id]) }}"><b><i class="fas fa-comment-alt"></i>
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
                    <div class="card box mt-5">
                        <div class="card-body">
                            <h5 class="text-center text-black">NO HAY CANDIDATOS ENVIADOS A PRUEBAS</h5>
                        </div>
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

                    <div class="row justify-content-center">

                        <div class="col-md-2">
                            <p class="text-center"> <small class="text-center text-black "><b>NOMBRE</b></small>
                            </p>
                        </div>
                        
                        <div class="col-md-2">
                            <p class="text-center"><small class="text-center text-black "><b>PRUEBAS
                                        ENVIADAS</b></small></p>
                        </div>
                        <div class="col-md-2">
                            <p class="text-center"><small class="text-center text-black "><b>CALIFICAR</b></small></p>
                        </div>
                        <div class="col-md-2">
                            <p class="text-center"><small class="text-center text-black "><b>VER
                                CALIFICACIONES</b></small></p>
                        </div>
                        <div class="col-md-2">
                            <p class="text-center"><small class="text-center text-black "><b>MOVER A ENTREVISTAS
                                </b></small></p>
                        </div>
                        <div class="col-md-2">
                            <p class="text-center"><small class="text-center text-black "><b>DESCARTAR</b></small></p>
                        </div>
                    </div>


                    @foreach ($postulaciones as $postulaciones)
                        @if ($postulaciones->recruitment != null)
                            <div class="" style="border-radius: 25px">
                                <div class="card pl-0 pr-0 ml-0 mr-0 border-0 vancants mt-1">

                                    <div class="card-body pt-0 pb-1 ml-0 mr-0 ">
                                        <div class="container-fluid">
                                            <div class="row justify-content-center aling-items-center">

                                                <div class="col-md-2 text-black text-center pt-3">
                                                    <strong><i>
                                                            @foreach ($cvs as $cv)
                                                                @if ($cv->id == $postulaciones->cv_id)
                                                                    {{ $cv->name }}
                                                                    <img style="width: 4rem;height: 4rem;border-radius: 50%" class="img-fluid" src="{{ asset("storage/avatars/".$cv->photo_cv)}}" />
                                                                @endif
                                                            @endforeach
                                                        </i></strong>
                                                      

                                                </div>
                                                
                                                <div class="col-md-2 text-black text-center pt-3">

                                                    <form
                                                        action="{{ route('reclutador.reclutamiento.pruebas',$postulaciones->recruitment->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('put')
                                                        @if ($postulaciones->recruitment->pruebas != '')
                                                        @else
                                                            <button class="btn text-black"><i
                                                                    class="fas fa-check-circle text-black"></i></button>
                                                        @endif

                                                    </form>

                                                </div>
                                                <div class="col-md-2 text-black text-center pt-3">
                                                    @if ($postulaciones->recruitment->ethikos == '')
                                                        <a
                                                            href="{{ route('reclutador.reclutamientos.calificar', [$postulaciones->recruitment->id, $name_vacant->id]) }}"><i
                                                                class="far fa-edit text-black"></i></a>
                                                    @else
                                                    @endif
                                                </div>
                                                <div class="col-md-2 text-black text-center pt-3">
                                                    <a
                                                        href="{{ route('reclutador.reclutamientos.vercalificar', [$postulaciones->recruitment->id, $name_vacant->id]) }}"><i
                                                            class="fas fa-eye text-black"></i></a>
                                                </div>
                                                <div class="col-md-2 text-black text-center pt-1">
                                                    <form
                                                        action="{{ route('reclutador.reclutamiento.entrevistas',  [$postulaciones->cv_id, $postulaciones->vacant_id]) }}"
                                                        method="post">
                                                        @csrf                                                 
                                                        @if ($postulaciones->recruitment->ethikos != '')
                                                        <button class="btn text-black"><i class="fas fa-arrows-alt-h"></i></button>
                                                        @else
                                                            
                                                        @endif

                                                    </form>
                                                </div>
                                                <div class="col-md-2 text-black text-center pt-3">
                                                    <button class="btn text-black"
                                                        data-target="#Modaldescartar{{ $postulaciones->recruitment->id }}"
                                                        data-toggle="modal"><i class="fas fa-times text-black"></i>
                                                    </button>
                                                    @include('reclutador.reclutamiento.modals.descartarcandidato')
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    
                                </div>
                            </div>
                        @endif
                    @endforeach

                </div>

            </div>
            @endif
        </div>
    </div>
   
@endsection
