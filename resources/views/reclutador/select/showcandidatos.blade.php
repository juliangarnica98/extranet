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

            <div class="row pl-3 pr-3 pt-2 justify-content-center">
                @if (count($vacants) == 0)
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card box">
                            <div class="card-body">
                                <h5 class="text-center">No hay candidatos seleccionados para esta vacante</h5>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card box">
                            <div class="card-body">
                                <form method="get" action="">
                                    <div class="form-row">
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" name="busqueda"
                                                style=" border-radius: 25px;">
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="submit" class="btn btn-primary btn-block" value="buscar">
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                        <div class="card box mt-3" style="background-color: #ffffff;height: 85vh">
                            <div class="card-body">
                                <h1 class="card-title">Personas selecciondas</h1>
                                <div class="table-responsive">
                                    <table class="table " style="background-color: #FFF; border-radius: 10px;">
                                        <thead>
                                            <tr class="d-flex">
                                                <th class="col text-center">Correo:</th>
                                                <th class="col text-center">Ciudad de residencia:</th>
                                                <th class="col text-center">Dirección: </th>
                                                <th class="col text-center">Edad:</th>
                                                <th class="col text-center"></th>
                                                <th class="col text-center"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($vacants as $vacant)
                                                @foreach ($vacant->cvs as $cv)
                                                <tr class="d-flex">
                                                    <th class="col-2 text-center">{{ $cv->email }}</th>
                                                    <td class="col text-center">{{ $cv->city_address }}</td>
                                                    <td class="col text-center">{{ $cv->address }}</td>
                                                    <td class="col text-center">{{ $cv->age }}</td>
                                                    <td>
                                                        <button class="btn btn-info"
                                                            data-target="#Modalstore{{ $cv->id }}"
                                                            data-toggle="modal"><i class="fas fa-check"></i> Reclutar
                                                            candidato</button>
                                                        @include('reclutador.select.modals.actioncandidato')
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-danger"
                                                            data-target="#Modaldescartar{{ $cv->id }}"
                                                            data-toggle="modal"><i class="fas fa-times"></i> Descartar
                                                            candidato</button>
                                                        @include('reclutador.select.modals.descartarcandidato')
                                                    </td>
                                                </tr>
                                                @endforeach
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>

        </div>
    </div>
@endsection
