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
        <div class="">

            <div class="row pl-3 pr-3 pt-3 justify-content-center">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card" style="background-color: #ffffff;">
                        <div class="card-body">
                            <h1 class="card-title">Hoja de vida </h1>
                            {{-- <p class="card-description">
                                
                            </p> --}}
                            <hr>
                            <div class="row d-flex justify-content-center aling-items-center text-center">
                                <div class="col-sm-4">
                                    {{-- <button class="btn btn-warning mr-5" @if ($cv->pruebas == 1) disabled='disabled' @endif> --}}
                                        <button class="btn btn-warning mr-5" >
                                        <i class="fas fa-file-download"></i> Descargar hoja de vida</button>
                                </div>
                                <div class="col-sm-4">
                                    <form action="{{route('reclutador.candidate.index',[$postulacion->cv_id,$postulacion->vacant_id])}}" method="POST">
                                        @csrf
                                        <button class="btn btn-success" @if ($postulacion->state_id >= 2) disabled='disabled' @endif><i
                                                class="fas fa-check"></i> Seleccionar candidato</button>
                                </form>
                                        
                                </div>
                                <div class="col-sm-4">
                                    <button class="btn btn-danger" data-target="#Modaldescartar{{ $cv->id }}"
                                        data-toggle="modal"><i class="fas fa-times"></i> Descartar candidato</button>
                                            @include('reclutador.candidate.modals.descartarcandidato')
                                </div>

                            </div>
                            <hr>
                            <div class="row pt-4">
                                <div class="col-md-5">
                                    <div class="card box">
                                        <div class="card-body">
                                            <h2 class="text-center text-dark">Información personal</h2>

                                            <div class="d-flex justify-content-center">
                                                <img src="{{ asset('imgs/profile-icon-9.png') }}" class="w-50"
                                                    alt="">
                                            </div>
                                            <hr>
                                            <h2 class="text-dark mt-3"><strong>{{ $cv->name }}</strong> </h2>
                                            <cite></cite>
                                            <div class="row">

                                                <div class="col-md-6 text-dark">
                                                    <span class="h6">Correo:</span><br>
                                                    <span class="h6">Ciudad de residencia:</span><br>
                                                    <span class="h6">Dirección:</span><br>
                                                    <span class="h6">Edad:</span><br>
                                                    
                                                    
                                                    <span class="h6">Tipo de documento:</span><br>
                                                    <span class="h6">Numero de documento:</span><br>
                                                    <span class="h6">Número de celular:</span><br>
                                                    <span class="h6">Número de celular opcional:</span><br>
                                                    
                                                    
                                                    
                                                    <span class="h6">Perfil academico culminado:</span>
                                                </div>
                                                <div class="col-md-6 text-dark">
                                                
                                                    <span class="text-center h6">{{ $cv->email }}</span><br>
                                                    <span class="text-center h6">{{ $cv->city_address }}</span><br>
                                                    <span class="text-center h6">{{ $cv->address }}</span><br>
                                                    <span class="text-center h6">{{ $cv->age }}</span><br>
                                                    <span class="text-center h6">{{ $cv->type_id }}</span><br>
                                                    <span class="text-center h6">{{ $cv->num_id }}</span><br>
                                                    <span class="text-center h6">{{ $cv->num_cell }}</span><br>
                                                    <span class="text-center h6">{{ $cv->num_cell2 }}</span><br>
                                                    <span class="text-center h6">{{ $cv->academic_profile }}</span><br>

                                                </div>
                                            </div>
                                            
                                            
                                        </div>

                                    </div>

                                </div>
                                <div class="col-md-7">

                                   
                                    <div class="card box">
                                        <div class="card-body">
                                            <h2 class="text-center text-dark ">Información laboral</h2>
                                            <hr>
                                            <div class="row">

                                                <div class="col-md-6 text-dark">
                                                    <span class="h6">Nombre ultima empresa:</span><br>
                                                    <span class="h6">Cargo:</span><br>
                                                    <span class="h6">Funciones:</span><br>
                                                    <span class="h6">Actualmente trabaja:</span><br>
                                                    <span class="h6">Fecha inicio:</span><br>
                                                    <span class="h6">Fecha fin:</span><br>
                                                    <span class="h6">Nombre penultima empresa:</span><br>
                                                    <span class="h6">Cargo:</span><br>
                                                    <span class="h6">Funciones :</span><br>
                                                    <span class="h6">Fecha inicio :</span> <br>
                                                    <span class="h6">Fecha fin :</span>
                                                </div>
                                                <div class="col-md-6 text-dark">
                                                    <span class="text-center h6">{{ $cv->name_last_company }}</span><br>
                                                    <span
                                                        class="text-center h6">{{ $cv->position_last_company }}</span><br>
                                                    <span class="text-center h6">{{ $cv->funtion_last_company }}</span><br>
                                                    <span class="text-center h6">{{ $cv->work_last_company }}</span><br>
                                                    <span class="text-center h6">{{ $cv->date_init_company }}</span><br>
                                                    <span class="text-center h6">{{ $cv->date_finally_company }}</span><br>
                                                    <span class="text-center h6">{{ $cv->name_last_company2 }}</span><br>
                                                    <span
                                                        class="text-center h6">{{ $cv->position_last_company2 }}</span><br>
                                                    <span
                                                        class="text-center h6">{{ $cv->funtion_last_company2 }}</span><br>
                                                    <span class="text-center h6">{{ $cv->date_init_company2 }}</span><br>
                                                    <span
                                                        class="text-center h6">{{ $cv->date_finally_company2 }}</span><br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card box mt-4">
                                        <div class="card-body">
                                            <h2 class="text-center text-dark ">Información adicional</h2>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-6 text-dark">
                                                    <span class="h6">Tiene familiares trabajamdo con nosotros
                                                        :</span><br>
                                                    <span class="h6">Por que le gustaria trabajar :</span><br>
                                                    <span class="h6">Anteormente habia trabajado con
                                                        nosotros:</span><br>
                                                    <span class="h6">Por que deberiamos escogerlo :</span><br>
                                                    <span class="h6">Talla de camisa :</span><br>
                                                    <span class="h6">Talla pantalón :</span> <br>
                                                    <span class="h6">Talla zapatos :</span> <br>
                                                </div>
                                                <div class="col-md-6 text-dark">
                                                    <span class="text-center h6">{{ $cv->family }}</span><br>
                                                    <span class="text-center h6">{{ $cv->like_to_work }}</span><br>
                                                    <span class="text-center h6">{{ $cv->previously_work }}</span><br>
                                                    <span class="text-center h6">{{ $cv->should_choose }}</span><br>
                                                    <span class="text-center h6">{{ $cv->shirt_size }}</span><br>
                                                    <span class="text-center h6">{{ $cv->pant_size }}</span><br>
                                                    <span class="text-center h6">{{ $cv->shoes_size }}</span><br>
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
