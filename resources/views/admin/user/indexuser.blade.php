@extends('layouts.admin')
<style>
    body {
        background-color: #ebebeb;
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

    <div class="page-content page-container " id="page-content" style="background-color: ">
        <h2 class="text-center text-dark pt-2 ">USUARIOS</h2>
        {{-- <hr class="border border-dark border-1"> --}}
        <div class="row pl-3 pr-3 pt-3 text-dark">
            <div class="col-sm-4">
                <div class="card box" style="background-color: #fff;">
                    {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
                    <div class="card-body">
                        <h5 class="card-title">Nuevos usuarios</h5>
                        <form method="POST" action="{{ route('admin.crear.usuarios') }}">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nombre</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="" name="name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Apellido</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="" name="last_name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Correo electronico</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="" name="email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Contraseña</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder=""
                                    name="password">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Rol</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="rol">
                                    <option>Reclutador</option>
                                    <option>Analista</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary btn-block">Crear</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="card box" style="background-color: #fff;">
                    <div class="card-body">
                        <h5 class="card-title">Reclutadores creados</h5>

                        <div class="table-responsive">
                            <table class="table " style="background-color: #FFF; border-radius: 10px;">
                                <thead>
                                    <tr class="d-flex">
                                        <th class="col text-center">Nombre</th>
                                        <th class="col text-center">Apellido</th>
                                        <th class="col text-center">Correo</th>
                                        <th class="col text-center">Estado</th>
                                        <th class="col text-center">Cambiar estado</th>

                                    </tr>
                                </thead>

                                <tbody>
                                    @if (count($reclutadores) == 0)
                                        No se le han creado nuevos usuarios
                                    @else
                                        @foreach ($reclutadores as $reclutador)
                                            <tr class="d-flex ">
                                                <td class="col text-center">{{ $reclutador->name }}</td>
                                                <td class="col text-center">{{ $reclutador->last_name }}</td>
                                                <th class="col text-center">{{ $reclutador->email }}</th>
                                                {{-- <th class="col text-center">{{ $reclutador->rol }}</th> --}}
                                                <th class="col text-center">
                                                    @if ($reclutador->status == 1)
                                                        Activo
                                                    @else
                                                        Inactivo
                                                    @endif
                                                </th>
                                                <th class="col text-center">
                                                    <button class="btn btn-danger"><i class="fas fa-exchange-alt"></i></button>
                                                </th>


                                                {{-- <td class="col text-center">
                                                <div style="display: flex"
                                                    class="text-center justify-content-center">
                                                    <div class="pl-1">
                                                        <button class="btn btn-warning"
                                                            data-target="#Modalver{{ $cv->id }}"
                                                            data-toggle="modal"><i class="fas fa-eye"></i></button>
                                                        @include('admin.candidate.showcandidatos')
                                                    </div>
                                                </div>
                                            </td> --}}

                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>

                            </table>
                        </div>
                        <div class="container pt-3">
                            <div class="row d-flex justify-content-center">
                                <div class="col-12 text-xs-center">
                                    {{ $reclutadores->links() }}
                                </div>
                            </div>
                        </div>

                        {{-- {{$users}} --}}
                    </div>
                </div>

                <div class="card box mt-5" style="background-color: #fff;">
                    {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
                    <div class="card-body">
                        <h5 class="card-title">Analistas creados</h5>

                        <div class="table-responsive">
                            <table class="table " style="background-color: #FFF; border-radius: 10px;">
                                <thead>
                                    <tr class="d-flex">
                                        <th class="col text-center">Nombre</th>
                                        <th class="col text-center">Apellido</th>
                                        <th class="col text-center">Correo</th>

                                        <th class="col text-center">Estado</th>
                                        <th class="col text-center">Cambiar estado</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($analistas) == 0)
                                        No se le han creado nuevos usuarios
                                    @else
                                        @foreach ($analistas as $analista)
                                            <tr class="d-flex">
                                                <td class="col text-center">{{ $analista->name }}</td>
                                                <td class="col text-center">{{ $analista->last_name }}</td>
                                                <th class="col text-center">{{ $analista->email }}</th>

                                                <th class="col text-center">
                                                    @if ($analista->status == 1)
                                                        Activo
                                                    @else
                                                        Inactivo
                                                    @endif
                                                </th>
                                                <th class="col text-center">
                                                    <button class="btn btn-danger"><i class="fas fa-exchange-alt"></i>
                                                    </button>
                                                </th>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>

                            </table>
                        </div>
                        <div class="container pt-3">
                            <div class="row d-flex justify-content-center">
                                <div class="col-12 text-xs-center">
                                    {{ $analistas->links() }}
                                </div>
                            </div>
                        </div>

                        {{-- {{$users}} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
