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
        <h2 class="text-center text-dark pt-2 ">RECLUTAMIENTOS</h2>
        <div class="">

            <div class="row pl-3 pr-3 pt-3 justify-content-center">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card box" style="background-color: #ffffff;">
                        <div class="card-body">
                            <h1 class="card-title">Nuevos Aspirantes</h1>
                            <p class="card-description">
                                Especificación de aspirantes
                            </p>
                            <div class=" table-responsive">
                                <table class="table " style="background-color: #FFF; border-radius: 10px;">
                                    <thead>
                                        <tr class="d-flex">
                                            <th class="col text-center">Fecha</th>
                                            <th class="col text-center">Vacante</th>
                                            <th class="col text-center">Nombre</th>
                                            <th class="col text-center">Comentarios</th>
                                            <th class="col text-center">Envio Pruebas</th>
                                            <th class="col text-center">Calificar</th>
                                            <th class="col text-center">Ver calificaciones</th>
                                            <th class="col text-center">Descartar cantidato</th>
                                        </tr>
                                    </thead>
                                    {{-- {{var_dump($reclutamientos[0])}} --}}
                                    <tbody>
                                        @foreach ($reclutamientos as $reclutado)
                                            {{-- @foreach ($reclutado->cv as $cv) --}}

                                            <tr class="d-flex">

                                                <td class="col text-center">
                                                    {{-- {{$reclutado['cv']}} --}}
                                                    {{ date('d-m-Y', strtotime($reclutado->cv->created_at)) }}
                                                </td>
                                                <td class="col text-center">
                                                    {{ $reclutado->cv->vacant_id }}
                                                </td>
                                                <td class="col text-center">
                                                    {{ $reclutado->cv->name }}
                                                </td>
                                                
                                                <th class="col text-center">{{ $reclutado->comentarios }}</th>
                                                {{-- <td class="col text-center">{{ $reclutado->fecha }}</td> --}}
                                                <td class="col text-center">
                                                    <div style="display: flex" class="text-center justify-content-center">
                                                        <div class="pl">
                                                            <form action="{{route('reclutador.reclutamiento.pruebas',$reclutado->id)}}" method="post">
                                                                @csrf
                                                                @method('put')
                                                                {{-- <input type="text" value="{{$reclutado->id}}" name="id" hidden> --}}
                                                                <button class="btn btn-warning"><i class="fas fa-tasks"></i></i></button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="col text-center">
                                                    <div style="display: flex" class="text-center justify-content-center">
                                                        <div class="pl">
                                                            <button class="btn btn-success"
                                                                data-target="#Modaledit{{ $reclutado->id }}"
                                                                data-toggle="modal" 
                                                                @if ($reclutado->ethikos != "") disabled='disabled' @endif >
                                                                <i class="far fa-edit"></i></button>
                                                            @include('reclutador.reclutamiento.editreclutamiento')
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="col text-center">
                                                    <div style="display: flex" class="text-center justify-content-center">
                                                        <div class="pl-1">
                                                            <button class="btn btn-warning"
                                                                data-target="#Modalverreclutado{{ $reclutado->id }}"
                                                                data-toggle="modal" 
                                                                {{-- @if ($reclutado->ethikos != "") disabled='disabled' @endif  --}}
                                                                >
                                                                <i class="fas fa-eye"></i>
                                                            </button>
                                                            @include('reclutador.reclutamiento.showreclutamiento')
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="col text-center">
                                                    <div style="display: flex" class="text-center justify-content-center">
                                                        <div class="pl-1">
                                                            <button class="btn btn-danger" data-target="#Modaldescartar{{ $reclutado->cv->id }}"
                                                                data-toggle="modal"><i class="fas fa-times"></i> </button>
                                                                    @include('reclutador.reclutamiento.modals.descartarcandidato')
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            {{-- @endforeach --}}
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    {{-- <div class="container pt-3">
        <div class="row d-flex justify-content-center">
            <div class="col-12 text-xs-center">
                {{ $cvs->links() }}
            </div>
        </div>
    </div> --}}
@endsection
