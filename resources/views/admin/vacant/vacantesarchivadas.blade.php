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
        {{-- <h2 class="text-center text-dark pt-2 ">VACANTES</h2> --}}
        <h2 class="ml-5 text-dark pt-2 ">VACANTES ARCHIVADAS</h2>
        <div class="row pl-3 pr-3 pt-3">

            
            <div class="col-xl-12 col-md-6 mb-4">
                <div class="card box" style="background-color: #fff;">
                    <div class="card-body">
                        <h1 class="card-title">Vacantes</h1>
                        

                        <form method="get" action="{{ route('admin.search') }}">
                            <div class="form-row">
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="busqueda" style="border-radius: 25px">
                                </div>
                                <div class="col-sm-2">
                                    <input type="submit" class="btn btn-primary btn-block" value="buscar">
                                </div>
                            </div>
                        </form>
                        @if (count($vacants) == 0)
                            No se le han encontrado vacantes archivadas
                        @else
                            <div class="table-responsive">

                                <table class="table  " style="background-color: #FFF; border-radius: 10px;">
                                    <thead>
                                        <tr>
                                            <th class="col-1 text-center">Creador</th>
                                            <th class="col-1 text-center">Fecha creacion</th>
                                            <th class="col-1 text-center">Fecha archvio</th>
                                            <th class="col-1 text-center">Titulo</th>
                                            <th class="col-1 text-center">Ciudad</th>
                                            <th class="col-1 text-center">Salario</th>
                                            <th class="col-1 text-center">Vacantes</th>

                                            <th class="col-1 text-center col-1">Duplicar</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($vacants as $vacant)
                                            <tr>
                                                <td class="text-center">{{ $vacant->author }}</td>
                                                <td class="text-center">{{ date('d-m-Y', strtotime($vacant->created_at)) }}
                                                </td>
                                                <td class="text-center">{{ date('d-m-Y', strtotime($vacant->archivate_date)) }}
                                                </td>
                                                <td class="text-center">{{ $vacant->title }}</td>
                                                <td class="text-center">{{ $vacant->city }}</td>
                                                <td class="text-center">${{ $vacant->salary }}</td>
                                                <td class="text-center">{{ $vacant->num_vacants }}</td>

                                                <td class="text-center">
                                                    <div style="display: flex" class="text-center justify-content-center">
                                                        <div class="pl-1">
                                                            <form method="GET"
                                                                action="{{ route('admin.vacant.duplicar', $vacant->id) }}">
                                                                @csrf
                                                                <div class="form-group">
                                                                    <button class="btn btn-info"><i class="fas fa-clone"></i></button>
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
                            <div class="container pt-3">
                                <div class="row d-flex justify-content-center">
                                    <div class="col-12 text-xs-center">
                                        {{ $vacants->links() }}
                                    </div>
                                </div>
                            </div>
                        @endif


                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
