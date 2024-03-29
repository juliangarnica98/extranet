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
        transform: scale(0.9);
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

            <div class="row  pt-3 justify-content-center">
                <div class="col-md-12 grid-margin stretch-card">
                    <h4 class="text-center text-black"><b> POSTULADO</b></h4>
                    <h4 class="text-center text-black">VACANTE <b> {{ $name_vacant->title }}</b></h4>
                    @include('layouts.menu')
                    <div class=" mt-3">
                        <h6 class=" text-center text-black "></h6>

                    </div>
                    <div class="card mt-3" style="background-color: #ffffff;">
                        <div class="card-body">
                            <div class="row  d-flex justify-content-center aling-items-center text-center">
                                <div class="col-md-2  justify-content-center"
                                    style="border-radius: 12px; background-color: #e85199">
                                    <button class="btn  text-white btn-block" data-toggle="modal"><i
                                            class="fas fa-arrow-right" style="font-size: 1rem"></i> Esta en: <br><b>
                                            POSTULADOS</b> </button>

                                </div>
                                <div class="col-md-2 ml-1 justify-content-center "
                                    style="border-radius: 12px; background-color: #777b9e">
                                    <form
                                        action="{{ route('reclutador.candidate.index', [$postulacion->cv_id, $postulacion->vacant_id]) }}"
                                        method="POST">
                                        @csrf
                                        <button class="btn  text-white btn-block"
                                            @if ($postulacion->state_id >= 2) disabled='disabled' @endif><i
                                                class="fas fa-check"></i> Mover a:<b> SELECCIONADOS</b> </button>
                                    </form>
                                </div>
                                <div class="col-md-2 ml-1 justify-content-center "
                                    style="border-radius: 12px;background-color: #03a8a2">
                                    <div class="row">


                                        <button class="btn  text-white btn-block"
                                            data-target="#Modaldescartar{{ $cv->id }}" data-toggle="modal"><i
                                                class="fas fa-times"></i> <span>Mover a:</span> <b> DESCARTADOS
                                            </b></button>
                                        @include('reclutador.candidate.modals.descartarcandidato')

                                    </div>
                                </div>

                            </div>
                            <div class="row pt-4">
                                <div class="col-md-5">
                                    <div class="card box">
                                        <div class="card-body">
                                            <h2 class="text-center text-black">Información personal</h2>

                                            <div class="d-flex justify-content-center">
                                                {{-- <img src="{{ asset('imgs/profile-icon-9.png') }}" class="w-50"
                                                    alt=""> --}}

                                                {{-- <img style="width: 20rem;height: 20rem; ;border-radius: 50%; " class="img-fluid" src="{{ asset("storage/avatars/".$cv->photo_cv)}}" /> --}}
                                            </div>
                                            <hr>
                                            <h2 class="text-black mt-3"><strong>{{ $cv->name }}</strong> </h2>
                                            <cite></cite>
                                            <div class="row">
                                                <div class="col-md-6 text-black">
                                                    <span class="h6">Correo:</span><br>
                                                </div>
                                                <div class="col-md-6 text-black">
                                                    <span class="text-center h6">{{ $cv->email }}</span><br>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 text-black">
                                                    <span class="h6">Ciudad de residencia:</span><br>
                                                </div>
                                                <div class="col-md-6 text-black">
                                                    <span class="text-center h6">{{ $cv->city_address }}</span><br>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 text-black">
                                                    <span class="h6">Dirección:</span><br>
                                                </div>
                                                <div class="col-md-6 text-black">
                                                    <span class="text-center h6">{{ $cv->address }}</span><br>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 text-black">
                                                    <span class="h6">Edad:</span><br>
                                                </div>
                                                <div class="col-md-6 text-black">
                                                    <span class="text-center h6">{{ $cv->age }}</span><br>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 text-black">
                                                    <span class="h6">Tipo de documento:</span><br>
                                                </div>
                                                <div class="col-md-6 text-black">
                                                    <span class="text-center h6">{{ $cv->type_id }}</span><br>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 text-black">
                                                    <span class="h6">Numero de documento:</span><br>
                                                </div>
                                                <div class="col-md-6 text-black">
                                                    <span class="text-center h6">{{ $cv->num_id }}</span><br>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 text-black">
                                                    <span class="h6">Número de celular:</span><br>
                                                </div>
                                                <div class="col-md-6 text-black">
                                                    <span class="text-center h6">{{ $cv->num_cell }}</span><br>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 text-black">
                                                    <span class="h6">Número de celular opcional:</span><br>
                                                </div>
                                                <div class="col-md-6 text-black">
                                                    <span class="text-center h6">{{ $cv->num_cell2 }}</span><br>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 text-black">
                                                    <span class="h6">Perfil academico culminado:</span>
                                                </div>
                                                <div class="col-md-6 text-black">
                                                    <span class="text-center h6">{{ $cv->academic_profile }}</span><br>
                                                </div>
                                            </div>
                                            <div class="row mt-1">
                                                <a class="btn btn-warning btn-block"
                                                    href="{{ asset('storage/cvs/' . $cv->file_cv) }}" download><i
                                                        class="fas fa-file-download"></i> DESCARGAR CV</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="card box">
                                        <div class="card-body">
                                            <h2 class="text-center text-black ">Información laboral</h2>
                                            <hr>
                                            @if ($cv->jobs->experience == 'sin experiencia laboral')
                                                <div class="col-md-12 text-black text-center">
                                                    <span class="h6"><b>SIN EXPERIENCIA LABORAL</b></span><br>
                                                </div>
                                            @else
                                                @if ($cv->jobs->last_job_name)
                                                    <div class="row">
                                                        <div class="col-md-12 text-black text-center">
                                                            <span class="h6"><b>Ultima empresa</b></span><br>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 text-black">
                                                            <span class="h6">Nombre:</span><br>
                                                        </div>
                                                        <div class="col-md-6 text-black">
                                                            <span class="text-center h6"> {{ $cv->jobs->last_job_name }}</span><br>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 text-black">
                                                            <span class="h6">Cargo:</span><br>
                                                        </div>
                                                        <div class="col-md-6 text-black">
                                                            <span class="text-center h6">{{ $cv->jobs->last_job_position }}</span><br>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 text-black">
                                                            <span class="h6">Actualmente trabaja:</span><br>
                                                        </div>
                                                        <div class="col-md-6 text-black">
                                                            <span class="text-center h6">{{ $cv->jobs->currently }}</span><br>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 text-black">
                                                            <span class="h6">Funciones:</span><br>
                                                        </div>
                                                        <div class="col-md-6 text-black">
                                                            <span class="text-center h6">{{ $cv->jobs->last_job_functions }}</span><br>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 text-black">
                                                            <span class="h6">Fecha inicio:</span><br>
                                                        </div>
                                                        <div class="col-md-6 text-black">
                                                            <span class="text-center h6"> {{ $cv->jobs->last_job_date_init }}</span><br>

                                                        </div>
                                                    </div>
                                                    <div class="row border-bottom">
                                                        <div class="col-md-6 text-black">
                                                            <span class="h6">Fecha fin:</span><br>
                                                        </div>
                                                        <div class="col-md-6 text-black">
                                                            <span class="text-center h6">{{ $cv->jobs->last_job_date_end }}</span><br>
                                                        </div>
                                                    </div>
                                                @endif
                                                @if ($cv->jobs->penultimate_job_name)
                                                    <div class="row">
                                                        <div class="col-md-12 text-black text-center">
                                                            <span class="h6"><b>Penultima empresa</b></span><br>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 text-black">
                                                            <span class="h6"> Nombre:</span><br>
                                                        </div>
                                                        <div class="col-md-6 text-black">
                                                            <span class="text-center h6"> {{ $cv->jobs->penultimate_job_name }}</span><br>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 text-black">
                                                            <span class="h6">Cargo:</span><br>
                                                        </div>
                                                        <div class="col-md-6 text-black">
                                                            <span class="text-center h6">{{ $cv->jobs->penultimate_job_position }}</span><br>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 text-black">
                                                            <span class="h6">Funciones:</span><br>
                                                        </div>
                                                        <div class="col-md-6 text-black">
                                                            <span class="text-center h6"> {{ $cv->jobs->penultimate_job_functions }}</span><br>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 text-black">
                                                            <span class="h6"> Fecha inicio:</span><br>
                                                        </div>
                                                        <div class="col-md-6 text-black">
                                                            <span class="text-center h6">{{ $cv->jobs->penultimate_job_date_init }}</span><br>
                                                        </div>
                                                    </div>
                                                    <div class="row border-bottom">
                                                        <div class="col-md-6 text-black">
                                                            <span class="h6">Fecha fin:</span><br>
                                                        </div>
                                                        <div class="col-md-6 text-black">
                                                            <span class="text-center h6">{{ $cv->jobs->penultimate_job_date_end }}</span><br>
                                                        </div>
                                                    </div>
                                                @endif
                                                @if ($cv->jobs->antepenultimate_job_name)
                                                    <div class="row">
                                                        <div class="col-md-12 text-black text-center">
                                                            <span class="h6"><b>Antepenultima empresa</b></span><br>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 text-black">
                                                            <span class="h6">Nombre:</span><br>
                                                        </div>
                                                        <div class="col-md-6 text-black">
                                                            <span class="text-center h6"> {{ $cv->jobs->antepenultimate_job_name }}</span><br>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 text-black">
                                                            <span class="h6"> Cargo:</span><br>
                                                        </div>
                                                        <div class="col-md-6 text-black">
                                                            <span class="text-center h6">{{ $cv->jobs->antepenultimate_job_position }}</span><br>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 text-black">
                                                            <span class="h6">Funciones:</span><br>
                                                        </div>
                                                        <div class="col-md-6 text-black">
                                                            <span class="text-center h6">{{ $cv->jobs->antepenultimate_job_functions }}</span><br>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 text-black">
                                                            <span class="h6"> Fecha inicio:</span><br>
                                                        </div>
                                                        <div class="col-md-6 text-black">
                                                            <span class="text-center h6">{{ $cv->jobs->antepenultimate_job_date_init }}</span><br>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6 text-black">
                                                            <span class="h6"> Fecha fin:</span><br>
                                                        </div>
                                                        <div class="col-md-6 text-black">
                                                            <span class="text-center h6">{{ $cv->jobs->antepenultimate_job_date_end }}</span><br>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endif
                                        </div>
                                    </div>

                                    <div class="card box mt-4">
                                        <div class="card-body">
                                            <h2 class="text-center text-black ">Información adicional</h2>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-6 text-black">
                                                    <span class="h6">Tiene familiares trabajando con nosotros
                                                        :</span><br>
                                                </div>
                                                <div class="col-md-6 text-black">
                                                    <span class="text-center h6">{{ $cv->family }}</span><br>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 text-black">
                                                    <span class="h6">Por que le gustaria trabajar :</span><br>
                                                </div>
                                                <div class="col-md-6 text-black">
                                                    <span class="text-center h6">{{ $cv->like_to_work }}</span><br>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 text-black">
                                                    <span class="h6">Anteormente habia trabajado con
                                                        nosotros:</span><br>
                                                </div>
                                                <div class="col-md-6 text-black">
                                                    <span class="text-center h6">{{ $cv->previously_work }}</span><br>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 text-black">
                                                    <span class="h6">Por que deberiamos escogerlo :</span><br>
                                                </div>
                                                <div class="col-md-6 text-black">
                                                    <span class="text-center h6">{{ $cv->should_choose }}</span><br>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 text-black">
                                                    <span class="h6">Talla de camisa :</span><br>
                                                </div>
                                                <div class="col-md-6 text-black">
                                                    <span class="text-center h6">{{ $cv->shirt_size }}</span><br>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 text-black">
                                                    <span class="h6">Talla pantalón :</span> <br>
                                                </div>
                                                <div class="col-md-6 text-black">
                                                    <span class="text-center h6">{{ $cv->pant_size }}</span><br>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 text-black">
                                                    <span class="h6">Talla zapatos :</span> <br>
                                                </div>
                                                <div class="col-md-6 text-black">
                                                    <span class="text-center h6">{{ $cv->shoes_size }}</span><br>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 text-black">
                                                    <span class="h6">Número de hijos :</span> <br>
                                                </div>
                                                <div class="col-md-6 text-black">
                                                    <span class="text-center h6">{{ $cv->children }}</span><br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
    </div>
    </div>
@endsection
