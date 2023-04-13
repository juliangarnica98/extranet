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
        {{-- <div class="navegacion text-center border-white">
            / <a href="{{route('admin.postulaciones')}}" class="text-decoration-none text-dark ">CANDIDATOS</a>
       </div> --}}
        {{-- <h2 class="text-center text-dark pt-2 ">CANDIDATOS</h2> --}}
        <h2 class="ml-5 text-dark pt-2 ">CANDIDATOS</h2>
        <div class="">

            <div class="row pl-3 pr-3 pt-3 justify-content-center">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card box" style="background-color: #fff;">

                        <div class="card-body">
                            <h1 class="card-title">CANDIDATOS DE VACANTES</h1>
                            {{-- <p class="card-description">
                                Especificación de aspirantes
                            </p> --}}
                            @if (count($candidatos_vacantes) == 0)
                                No se le han registrado candidatos
                            @else
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
                                <div class="table-responsive">
                                    <table class="table " style="background-color: #FFF; border-radius: 10px;">
                                        <thead>
                                            <tr class="d-flex">
                                                {{-- <th class="col text-center">Fecha</th> --}}
                                                <th class="col text-center">Vacante</th>
                                                <th class="col text-center">Nombre</th>
                                                <th class="col text-center">Documento</th>
                                                <th class="col text-center">Celular</th>
                                                <th class="col text-center">Edad</th>
                                                <th class="col text-center">Ver</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($candidatos_vacantes as $vacant)
                                                @foreach ($vacant->cvs as $cv)
                                                    <tr class="d-flex">
                                                        <th class="col-2 text-center">{{ $vacant->title }}</th>

                                                        <td class="col text-center">{{ $cv->name }}</td>
                                                        <th class="col text-center">{{ $cv->num_id }}</th>
                                                        <td class="col text-center">{{ $cv->num_cell }}</td>
                                                        <td class="col text-center">{{ $cv->age }}</td>
                                                        <td class="col text-center">
                                                            <div style="display: flex"
                                                                class="text-center justify-content-center">
                                                                <div class="pl-1">
                                                                    <button class="btn btn-warning"
                                                                        data-target="#Modalver{{ $cv->id }}"
                                                                        data-toggle="modal"><i
                                                                            class="fas fa-eye"></i></button>
                                                                    @include('admin.candidate.showcandidatos')
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @endif
                        </div>
                        <div class="container pt-3">
                            <div class="row d-flex justify-content-center">
                                <div class="col-12 text-xs-center">
                                    {{ $candidatos_vacantes->links() }}
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row pl-3 pr-3 pt-3 justify-content-center">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card box" style="background-color: #fff;">

                        <div class="card-body">
                            <h1 class="card-title">TRABAJA CON NOSOTROS</h1>
                            @if (count($trabaja_con_nosotros) == 0)
                                No se le han registrado candidatos
                            @else
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
                                <div class="table-responsive">
                                    <table class="table " style="background-color: #FFF; border-radius: 10px;">
                                        <thead>
                                            <tr class="d-flex">
                                                <th class="col text-center">Vacante</th>
                                                <th class="col text-center">Nombre</th>
                                                <th class="col text-center">Documento</th>
                                                <th class="col text-center">Celular</th>
                                                <th class="col text-center">Edad</th>
                                                <th class="col text-center">Ver</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($trabaja_con_nosotros as $vacant)
                                                @foreach ($vacant->cvs as $cv)
                                                    <tr class="d-flex">
                                                        <th class="col-2 text-center">{{ $vacant->title }}</th>

                                                        <td class="col text-center">{{ $cv->name }}</td>
                                                        <th class="col text-center">{{ $cv->num_id }}</th>
                                                        <td class="col text-center">{{ $cv->num_cell }}</td>
                                                        <td class="col text-center">{{ $cv->age }}</td>
                                                        <td class="col text-center">
                                                            <div style="display: flex"
                                                                class="text-center justify-content-center">
                                                                <div class="pl-1">
                                                                    <button class="btn btn-warning"
                                                                        data-target="#Modalver{{ $cv->id }}"
                                                                        data-toggle="modal"><i
                                                                            class="fas fa-eye"></i></button>
                                                                    @include('admin.candidate.showcandidatos')
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @endif
                        </div>
                        <div class="container pt-3">
                            <div class="row d-flex justify-content-center">
                                <div class="col-12 text-xs-center">
                                    {{ $trabaja_con_nosotros->links() }}
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
