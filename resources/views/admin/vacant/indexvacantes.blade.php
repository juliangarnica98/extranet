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
                'Error al importar archivo',
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
        <div class="row pl-3 pr-3 pt-3">
            
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Total vacantes
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$vacants_t}}</div>
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
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Vacantes abiertas
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$vacants_a}}</div>
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
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Vacantes cerradas
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$vacants_c}}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        
        </div>

        <div class="row pl-3 pr-3 pt-0 justify-content-center">
            {{-- <div class="col-md-4 grid-margin stretch-card">
                    <div class="card" style="background-color: #ebebeb;">
                        <div class="card-body">
                            <h1 class="card-title">Nuevas vacantes</h1>
                            <p class="card-description">
                                Especificación de vacantes
                            </p>

                            <table class="table table-responsive " style="background-color: #FFF; border-radius: 10px;">
                                <thead>
                                    <tr>
                                        <th class="col-1 text-center">Fecha</th>
                                        <th class="col-1 text-center">Titulo</th>
                                        <th class="col-1 text-center">Ciudad</th>
                                        <th class="col-1 text-center">Salario</th>
                                        <th class="col-1 text-center">Vacantes</th>
                                        <th class="col-1 text-center">Estado</th>
                                        <th class="col-1 text-center col-1">Accion</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($vacants as $vacant)
                                        <tr>
                                            <td class="text-center">{{ date('d-m-Y', strtotime($vacant->created_at)) }}</td>
                                            <td class="text-center">{{ $vacant->title }}</td>
                                            <td class="text-center">{{ $vacant->city }}</td>
                                            <td class="text-center">${{ $vacant->salary }}</td>
                                            <td class="text-center">{{ $vacant->num_vacants }}</td>
                                            @if ($vacant->state == 1)
                                                <td class="text-center"><label class="badge-success"
                                                        style="border-radius: 10px;padding:0.3rem">Abierta</label></td>
                                            @else
                                                <td class="text-center"><label class="badge-danger"
                                                        style="border-radius: 10px;padding:0.3rem">Cerrada</label></td>
                                            @endif
                                            <td class="text-center">
                                                <div style="display: flex" class="text-center justify-content-center">
                                                    <div class="pl-1">
                                                        <button class="btn btn-warning"
                                                            data-target="#Modalview{{ $vacant->id }}"
                                                            data-toggle="modal"><i class="fas fa-eye"></i></button>
                                                            @include('admin.vacant.showvacantes')
                                                    </div>
                                                    <div class="pl-1">
                                                        <button class="btn btn-info" data-target="#Modaledit{{ $vacant->id }}"
                                                            data-toggle="modal"><i class="fas fa-edit"></i></i></button>
                                                            @include('admin.vacant.editvacantes')
                                                    </div>
                                                    <div class="pl-1">
                                                        <form method="POST"
                                                            action="{{ route('cerrarvacante', $vacant->id) }}">
                                                            @csrf
                                                            <div class="form-group">
                                                                <button class="btn btn-danger"><i
                                                                        class="fas fa-window-close"></i></button>
                                                            </div>
                                                        </form>
                                                    </div>

                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div> --}}

            <div class="col-md-12 grid-margin stretch-card">
                <div class="card" style="background-color: #ebebeb;">
                    <div class="card-body">
                        <h1 class="card-title">Vacantes</h1>
                        <p class="card-description">
                            <button class="btn btn-success" data-target="#Modalstore"
                                data-toggle="modal"><i class="fas fa-plus"></i></button>
                                @include('admin.vacant.storevacantes')
                        </p>
                        
                        <table class="table table-responsive " style="background-color: #FFF; border-radius: 10px;">
                            <thead>
                                <tr>
                                    <th class="col-1 text-center">Fecha</th>
                                    <th class="col-1 text-center">Titulo</th>
                                    <th class="col-1 text-center">Ciudad</th>
                                    <th class="col-1 text-center">Salario</th>
                                    <th class="col-1 text-center">Vacantes</th>
                                    <th class="col-1 text-center">Estado</th>
                                    <th class="col-1 text-center col-1">Accion</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($vacants as $vacant)
                                    <tr>
                                        <td class="text-center">{{ date('d-m-Y', strtotime($vacant->created_at)) }}</td>
                                        <td class="text-center">{{ $vacant->title }}</td>
                                        <td class="text-center">{{ $vacant->city }}</td>
                                        <td class="text-center">${{ $vacant->salary }}</td>
                                        <td class="text-center">{{ $vacant->num_vacants }}</td>
                                        @if ($vacant->state == 1)
                                            <td class="text-center"><label class="badge-success"
                                                    style="border-radius: 10px;padding:0.3rem">Abierta</label></td>
                                        @else
                                            <td class="text-center"><label class="badge-danger"
                                                    style="border-radius: 10px;padding:0.3rem">Cerrada</label></td>
                                        @endif
                                        <td class="text-center">
                                            <div style="display: flex" class="text-center justify-content-center">
                                                <div class="pl-1">
                                                    <button class="btn btn-warning"
                                                        data-target="#Modalview{{ $vacant->id }}" data-toggle="modal"><i
                                                            class="fas fa-eye"></i></button>
                                                    @include('admin.vacant.showvacantes')
                                                </div>
                                                <div class="pl-1">
                                                    <button class="btn btn-info" data-target="#Modaledit{{ $vacant->id }}"
                                                        data-toggle="modal"><i class="fas fa-edit"></i></i></button>
                                                    @include('admin.vacant.editvacantes')
                                                </div>
                                                <div class="pl-1">
                                                    <form method="POST" action="{{ route('cerrarvacante', $vacant->id) }}">
                                                        @csrf
                                                        <div class="form-group">
                                                            <button class="btn btn-danger"><i
                                                                    class="fas fa-window-close"></i></button>
                                                        </div>
                                                    </form>
                                                </div>

                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="container pt-3">
                            <div class="row d-flex justify-content-center">
                                <div class="col-12 text-xs-center">
                                    {{ $vacants->links() }}
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </div>
@endsection
