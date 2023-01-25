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
    {{-- <a href="{{ url('administrador/exporttable/')}}" class="d-none d-sm-inline-block btn btn-sm  shadow-sm" style="background-color:  #17a0a1; color:#fff"><i
                class="fas fa-download fa-sm "></i> Generar reporte</a> --}}
    {{-- <div class="container pt-4 pl-2 pr-2">
        <div class="row justify-content-center">
            <div class="col-md-12">


                

                <h1> Postulaciones</h1>
                <hr class="sidebar-divider">
                <div class="card mt-3">
                    <div class="row text-center">
                        <div class="col-md-12">
                            <div class="table-responsive" style="color: #fff">
                                <table class="table table-responsive stacktable" id="tablaretiros">
                                    <thead>
                                        <tr class="d-flex">
                                            <th class="col-1">Fecha de postulación</th>
                                            <th class="col-1">Nombre</th>
                                            <th class="col-1">Tipo de documento</th>
                                            <th class="col-1">Numero de documento</th>
                                            <th class="col-1">Número de celular</th>
                                            <th class="col-1">Número de celular opcional</th>
                                            <th class="col-1">Edad</th>
                                            <th class="col-1">Correo</th>
                                            <th class="col-1">Dirección</th>
                                            <th class="col-1">Ciudad de residencia</th>
                                            <th class="col-1">Perfil academico culminado</th>
                                            <th class="col-1">Nombre ultima empresa</th>
                                            <th class="col-1">Cargo</th>
                                            <th class="col-1">Funciones</th>
                                            <th class="col-1">Actualmente trabaja</th>
                                            <th class="col-1">Fecha inicio</th>
                                            <th class="col-1">Fecha fin</th>
                                            <th class="col-1">Nombre penultima empresa</th>
                                            <th class="col-1">Cargo</th>
                                            <th class="col-1">Funciones</th>
                                            <th class="col-1">Fecha inicio</th>
                                            <th class="col-1">Fecha fin</th>
                                            <th class="col-1">Tiene familia </th>
                                            <th class="col-1">Por que le gustaria trabajar</th>
                                            <th class="col-1">Anteiormente habia trabajado </th>
                                            <th class="col-1">Por que deberiamos escogerlo</th>
                                            <th class="col-1">Talla de camisa</th>
                                            <th class="col-1">Talla pantalón</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($cvs as $cv)
                                            <tr class="d-flex">
                                                <td class="col-1">{{ date('d-m-Y', strtotime($cv->created_at)) }}</td>
                                                <td class="col-1">{{ $cv->name }}</td>
                                                <td class="col-1">{{ $cv->type_id }}</td>
                                                <th class="col-1">{{ $cv->num_id }}</th>
                                                <td class="col-1">{{ $cv->num_cell }}</td>
                                                <td class="col-1">{{ $cv->num_cell2 }}</td>
                                                <td class="col-1">{{ $cv->age }}</td>
                                                <td class="col-1">{{ $cv->email }}</td>
                                                <th class="col-1">{{ $cv->address }}</th>
                                                <td class="col-1">{{ $cv->city_address }}</td>
                                                <td class="col-1">{{ $cv->academic_profile }}</td>

                                                <td class="col-1">{{ $cv->name_last_company }}</td>
                                                <td class="col-1">{{ $cv->position_last_company }}</td>
                                                <th class="col-1">{{ $cv->funtion_last_company }}</th>
                                                <td class="col-1">{{ $cv->work_last_company }}</td>
                                                <td class="col-1">{{ $cv->date_init_company }}</td>
                                                <td class="col-1">{{ $cv->date_finally_company }}</td>

                                                <td class="col-1">{{ $cv->name_last_company2 }}</td>
                                                <td class="col-1">{{ $cv->position_last_company2 }}</td>
                                                <th class="col-1">{{ $cv->funtion_last_company2 }}</th>
                                                <td class="col-1">{{ $cv->date_init_company2 }}</td>
                                                <td class="col-1">{{ $cv->date_finally_company2 }}</td>

                                                <td class="col-1">{{ $cv->family }}</td>
                                                <td class="col-1">{{ $cv->like_to_work }}</td>
                                                <td class="col-1">{{ $cv->previously_work }}</td>
                                                <td class="col-1">{{ $cv->should_choose }}</td>
                                                <td class="col-1">{{ $cv->shirt_size }}</td>
                                                <td class="col-1">{{ $cv->pant_size }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
                <hr class="sidebar-divider">

            </div>

        </div>
    </div> --}}

    <div class="page-content page-container" id="page-content">
        <div class="">
            {{-- <div class="row pl-3 pr-3 pt-3">

                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total vacantes
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Vacantes abiertas
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Vacantes cerradas
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div> --}}
            <div class="row pl-3 pr-3 pt-3 justify-content-center">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card" style="background-color: #ebebeb;">
                        <div class="card-body">
                            <h1 class="card-title">Nuevos Aspirantes</h1>
                            <p class="card-description">
                                Especificación de aspirantes
                            </p>

                            <table class="table table-responsive " style="background-color: #FFF; border-radius: 10px;">
                                <thead>
                                    <tr class="d-flex">
                                        <th class="col-1 text-center">Fecha</th>
                                        <th class="col-2 text-center">Vacante</th>
                                        <th class="col-1 text-center">Nombre</th>
                                        <th class="col-1 text-center">Tipo de documento</th>
                                        <th class="col-1 text-center">Documento</th>
                                        <th class="col-1 text-center">Celular</th>
                                        <th class="col-1 text-center ">Celular opcional</th>
                                        <th class="col-1 text-center">Edad</th>
                                        <th class="col-2 text-center">Correo</th>
                                        <th class="col-1 text-center">Ver</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($cvs as $cv)
                                        <tr class="d-flex">
                                            <td class="col-1 text-center">{{ date('d-m-Y', strtotime($cv->created_at)) }}
                                            </td>
                                            @foreach ($vacants as $vacant)
                                                @if ($cv->vacant_id === $vacant->id)
                                                    <th class="col-2 text-center">{{ $vacant->description }}</th>
                                                @endif
                                            @endforeach
                                            <td class="col-1 text-center">{{ $cv->name }}</td>
                                            <td class="col-1 text-center">{{ $cv->type_id }}</td>
                                            <th class="col-1 text-center">{{ $cv->num_id }}</th>
                                            <td class="col-1 text-center">{{ $cv->num_cell }}</td>
                                            <td class="col-1 text-center">{{ $cv->num_cell2 }}</td>
                                            <td class="col-1 text-center">{{ $cv->age }}</td>
                                            <td class="col-2 text-center">{{ $cv->email }}</td>
                                            <td class="col-1 text-center">
                                                <div style="display: flex" class="text-center justify-content-center">
                                                    <div class="pl-1">
                                                        <button class="btn btn-warning"
                                                            data-target="#Modalver{{ $cv->id }}" data-toggle="modal"><i
                                                                class="fas fa-eye"></i></button>
                                                        @include('admin.candidate.showcandidatos')
                                                    </div>
                                                </div>
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="container pt-3">
        <div class="row d-flex justify-content-center">
            <div class="col-12 text-xs-center">
                {{ $cvs->links() }}
            </div>
        </div>
    </div>
@endsection
