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


    <div class="page-content page-container" id="page-content">
        <div class="">
           
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