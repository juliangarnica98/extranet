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
    <div class="container pt-4">
        
        <div class="row pl-3 pr-3 pt-0 justify-content-center">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card" style="background-color: #ebebeb;">
                    
                    <div class="card-body">
                        <h1 class="card-title">Colaboradores activos</h1>

                        <form action="{{route('boss.busqueda')}}" method="get">
                            <div class="form-row">
                                <div class="col-sm-4">
                                    <input class="form-control" type="text" name="busqueda">
                                </div>
                                <div class="col-auto">
                                    <input type="submit" class="btn btn-primary" value="buscar">
                                </div>
                            </div>
                        </form>
                        
                        <table class="table table-responsive " style="background-color: #FFF; border-radius: 10px;">
                            <thead>
                                <tr>
                                    <th class="col-1 text-center">Nombre</th>
                                    <th class="col-1 text-center">Documento</th>
                                    <th class="col-1 text-center">Cargo</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($collaborators as $collaborator)
                                    <tr>
                                        <td class="col-1 text-center">{{ $collaborator->name }}</td>
                                        <td class="col-1 text-center">{{ $collaborator->document }}</td>
                                        <td class="col-1 text-center">
                                            @foreach ($positions as $position)
                                                @if ($collaborator->position_id == $position->id)
                                                    {{ $position->description }}
                                                @endif
                                            @endforeach
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="container pt-3 d-flex justify-content-center">
                            <div class="row  aling-items-center">
                                <div class="col-12 text-xs-center">
                                    {{ $collaborators->links() }}
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>
    
@endsection
