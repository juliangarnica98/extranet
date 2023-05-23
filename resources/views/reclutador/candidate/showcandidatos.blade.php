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
        transition-property: box-shadow, transform;
        transition-duration: 350ms;
        transition-timing-function: ease;
    }

    .vancants:hover {
        transform: translateY(-8px);
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
                    <h4 class="text-center text-black"><b> POSTULADOS</b></h4>
                    <h4 class="text-center text-black">VACANTE <b> {{ $name_vacant->title }}</b></h4>

                    <div class="row justify-content-center" style="border-radius: 25px;background-color: #fff;font-size: 0.9rem">
                        <div class="col-md-2 sub-nav-link active"><a class="nav-link text-center text-black"
                                href="{{ route('reclutador.aspirantes', ['id' => $name_vacant->id]) }}"><b><i
                                        class="fas fa-users"></i>
                                    POSTULADOS</b><span class="sr-only">(current)</span></a></div>
                        <div class="col-md-2 sub-nav-link "> <a class="nav-link text-center text-black "
                                href="{{ route('reclutador.seleccionados.buscar', ['id' => $name_vacant->id]) }}"><b><i class="fas fa-user-friends"></i>
                                    SELECCIONADOS</b><span class="sr-only">(current)</span></a></div>
                        <div class="col-md-2 sub-nav-link"><a class="nav-link text-center text-black"
                                href="{{ route('reclutador.reclutamientos.buscar', ['id' => $name_vacant->id]) }}"><b><i class="fas fa-tasks"></i> PRUEBAS</b><span
                                    class="sr-only"></span></a></div>
                        <div class="col-md-2 sub-nav-link"><a class="nav-link text-center text-black"
                                href="{{ route('reclutador.analista.index') }}"><b><i class="fas fa-comment-alt"></i>
                                    ENTREVISTAS</b>
                                <span class="sr-only">(current)</span></a></div>
                        <div class="col-md-2 sub-nav-link">
                            
                            <a class="nav-link text-center text-black"
                                href="#"><b><i class="fas fa-check-double"></i> FINALISTAS</b>
                                <span class="sr-only">(current)</span></a></div>
                        <div class="col-md-2 sub-nav-link"><a class="nav-link text-center text-black"
                                href="{{ route('reclutador.discarded.index', ['id' => $name_vacant->id]) }}"><b><i class="far fa-times-circle"></i>
                                    DESCARTADOS</b>
                                <span class="sr-only">(current)</span></a></div>

                    </div>
                    @if (sizeof($cvvacant) == 0)
                        <div class="card box mt-5" style="background-color: #ffffff;height: auto">
                            <div class="card-body">
                                <h5 class="text-center text-black">NO SE HAN REGISTRADO NUEVOS CANDIDATOS</h5>
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
                                        <div class="col-md-2">
                                            <p class="text-center"> <small class=" text-black "><b>ESTUDIOS</b></small></p>
                                        </div>
                                        <div class="col-md-2">
                                            <p class="text-center"> <small
                                                    class="text-center text-black "><b>CIUDAD</b></small></p>
                                        </div>
                                        <div class="col-md-2">
                                            <p class="text-center"> <small
                                                    class="text-center text-black "><b>DIRECCION</b></small></p>
                                        </div>
                                        <div class="col-md-2">
                                            <p class="text-center"><small
                                                    class="text-center text-black "><b>EDAD</b></small></p>
                                        </div>
                                    </div>
                                </div>
                                @foreach ($vacants as $vacant)
                                    @foreach ($vacant->cvs as $cv)
                                        <div class="" style="border-radius: 25px">
                                            @if ($cv->pivot->state_id == 1)
                                                <div class="card pl-0 pr-0 ml-0 mr-0 border-0 vancants mt-1">
                                                    <a href="{{ route('vercandidato', ['id' => $cv->id, 'vacant' => $vacant->id]) }}"
                                                        class="card-block stretched-link text-decoration-none">
                                                        <div class="card-body pt-1 pb-1 ml-0 mr-0 ">

                                                            <div class="row ">
                                                                <div class="col-md-4 text-dark pt-2">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div
                                                                                class=" d-flex justify-content-end aling-items-end">
                                                                                {{-- <img src="{{ asset('imgs/profile-icon-9.png') }}"
                                                                                    class="w-50" alt=""> --}}
                                                                                    <img style="width: 4rem;height: 4rem;border-radius: 50%" class="img-fluid" src="{{ asset("storage/avatars/".$cv->photo_cv)}}" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div
                                                                                class="d-flex justify-content-start align-items-center">
                                                                                <p class=" text-center text-black ">
                                                                                    <strong>{{ $cv->name }}</strong><br>
                                                                                    @if ($cv->pivot->revision == 0)
                                                                                        <strong
                                                                                            style="color: rgba(235, 77, 151, 0.9)">No
                                                                                            revisado</strong>
                                                                                        @elseif($cv->pivot->revision == 1)
                                                                                        <strong
                                                                                            style="color:rgba(4, 165, 155, 0.9">Revisado</strong>
                                                                                    @endif
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2 text-black pt-2">
                                                                    <p class="text-center"><strong><i>
                                                                                {{ $cv->academic_profile }}</i></strong>
                                                                    </p>
                                                                </div>
                                                                <div class="col-md-2 text-black pt-2">
                                                                    <p class="text-center">
                                                                        <strong>{{ $cv->city_address }}</strong><br>
                                                                    </p>
                                                                </div>
                                                                <div class="col-md-2 text-black pt-2">
                                                                    <p class="text-center">
                                                                        <strong>{{ $cv->address }}</strong>
                                                                    </p>
                                                                </div>
                                                                <div class="col-md-2 text-black pt-2">
                                                                    <p class="text-center text-black">
                                                                        <strong>{{ $cv->age }}</strong>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            @endif
                                        </div>
                                    @endforeach
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
