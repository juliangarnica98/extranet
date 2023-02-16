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
    .vancants{
        transition: width 2s;
    }
    .vancants:hover{
        box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 2px, rgba(0, 0, 0, 0.07) 0px 2px 4px, rgba(0, 0, 0, 0.07) 0px 4px 8px, rgba(0, 0, 0, 0.07) 0px 8px 16px, rgba(0, 0, 0, 0.07) 0px 16px 32px, rgba(0, 0, 0, 0.07) 0px 32px 64px;
    }
</style>

@section('content')
    <div class="page-content page-container" id="page-content">
        <div class="">
            {{-- <div class="row pl-3 pr-3 pt-3 justify-content-center">
                <div class="col-md-12">
                    <div class="card " style="background-color: #ebebeb;">
                        <div class="text-center">
                            o
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="row pl-3 pr-3 pt-2 justify-content-center">
                <div class="col-md-4 grid-margin stretch-card">
                    <div class="card box" style="background-color: #ebebeb;height: 85vh">
                        <div class="card-body">
                            <h1 class="card-title">Vacantes creadas</h1>
                            <p class="card-description">
                                Especificación de aspirantes
                            </p>
                            {{-- <div class=" table-responsive">
                                <table class="table " style="background-color: #FFF; border-radius: 10px;">
                                    <thead>
                                        <tr class="d-flex">
                                            <th class="col text-center">Fecha</th>
                                            <th class="col text-center">titulo</th>
                                            <th class="col text-center">Descripción</th>
                                            <th class="col text-center">Tipo de contrato</th>
                                            <th class="col text-center">Celular</th>
                                            <th class="col text-center">Pruebas</th>
                                            <th class="col text-center">Reclutar</th>
                                            <th class="col text-center">Ver</th>
                                        </tr>
                                    </thead>
                                    <tbody> --}}

                            {{-- @foreach ($cvs as $cv)
                                            <tr class="d-flex">
                                                <td class="col text-center">{{ date('d-m-Y', strtotime($cv->created_at)) }}
                                                </td>
                                                @foreach ($vacants as $vacant)
                                                    @if ($cv->vacant_id === $vacant->id)
                                                        <th class="col text-center">{{ $vacant->title }}</th>
                                                    @endif
                                                @endforeach
                                                <td class="col text-center">{{ $cv->name }}</td>
                                                <th class="col text-center">{{ $cv->num_id }}</th>
                                                <td class="col text-center">{{ $cv->num_cell }}</td>

                                        
                                                <td class="col text-center">
                                                    @if ($cv->pruebas == 1)
                                                        <i class="fas fa-check"></i>
                                                    @else
                                                        <i class="fas fa-times"></i>
                                                    @endif
                                                    
                                                        
                                                                                                   
                                                </td>
                                                <td class="col text-center">
                                                    <div style="display: flex" class="text-center justify-content-center">
                                                        <div class="pl-1">
                                                            <button class="btn btn-success"
                                                                data-target="#Modalstore{{ $cv->id }}" data-toggle="modal"
                                                                @if ($cv->pruebas == 1) disabled='disabled' @endif 
                                                                ><i class="far fa-edit"></i></button>
                                                            @include('reclutador.candidate.actioncandidato')
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="col text-center">
                                                    <div style="display: flex" class="text-center justify-content-center">
                                                        <div class="pl-1">
                                                            <button class="btn btn-warning"
                                                                data-target="#Modalver{{ $cv->id }}" data-toggle="modal"><i
                                                                    class="fas fa-eye"></i></button>
                                                            @include('reclutador.candidate.showcandidatos')
                                                        </div>
                                                    </div>
                                                </td>
    
                                            </tr>
                                        @endforeach --}}
                            {{-- </tbody>
                                </table>

                            </div> --}}

                        </div>
                    </div>
                </div>
                <div class="col-md-8 grid-margin stretch-card">
                    <div class="card box" style="background-color: #ebebeb;height: 85vh">
                        <div class="card-body">
                            <h1 class="card-title">Vacantes creadas</h1>
                            <div class="row">
                                {{-- <div class="col-md-4"><p class="card-description">Selecciona una vacante </p></div> --}}
                                <div class="col-md-12">
                                    <form method="get" action="">
                                        <div class="form-row">
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" name="busqueda">
                                            </div>
                                            <div class="col-md-2">
                                                <input type="submit" class="btn btn-primary btn-block" value="buscar" style="border-radius: 25px">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            
                            
                            @foreach ($vacants as $vacant)
                                <div class="border-top border-bottom mt-1">
                                    <div class="card pl-0 pr-0 ml-0 mr-0 border-0 vancants">
                                        {{-- border-right-0 border-left-0 --}}
                                        <a href="{{ route('reclutador.aspirantes', ['id' => $vacant->id]) }}"
                                            class="card-block stretched-link text-decoration-none">
                                            <div class="card-body pt-1 pb-1 ml-0 mr-0">

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h5 class="card-title text-dark text-center border-bottom">
                                                            <strong>{{ $vacant->title }}</strong>
                                                        </h5>
                                                        <div class=" text-center">
                                                            <small class="h6 text-dark">Personas que han aplicado: {{ $vacant->num_aplic }}</small>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 border-left text-center">
                                                        <h5 class=" text-dark">
                                                            <small class="card-subtitle mb-1 text-dark">
                                                                Descripción: {{ $vacant->description }}
                                                            </small><br>
                                                            <small class="card-subtitle mb-1 text-dark">{{ $vacant->city }} -
                                                                ${{ number_format($vacant->salary, 1, ',', '.') }} COP
                                                            </small><br>
                                                            <small class="card-text text-dark">Educación requerida:
                                                                {{ $vacant->education }} 
                                                            </small> <br>
                                                            {{-- <small id=""
                                                                class="text-dark">{{ date('d-m-Y', strtotime($vacant->created_at)) }}
                                                            </small> --}}
                                                        </h5>
                                                    </div>
                                                </div>

                                                
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach

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
