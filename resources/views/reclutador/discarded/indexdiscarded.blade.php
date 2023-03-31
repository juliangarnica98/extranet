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
        <h2 class="text-center text-dark pt-2 ">
            CANDIDATOS DESCARTADOS
        </h2>
        <div class="">

            <div class="row pl-3 pr-3 pt-3 justify-content-center">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card" style="background-color: #ffffff;">
                        <div class="card-body">
                            <h1 class="card-title">Nuevos aspirantes descartados</h1>
                            <p class="card-description">
                                Especificación de descartados
                            </p>
                            <div class=" table-responsive">
                                <table class="table " style="background-color: #FFF; border-radius: 10px;">
                                    <thead>
                                        <tr class="d-flex">
                                            <th class="col text-center">Fecha</th>
                                            <th class="col text-center">Vacante</th>
                                            <th class="col text-center">Nombre del candidato</th>
                                            <th class="col text-center">Cometarios</th>

                                        </tr>
                                    </thead>
                                    {{-- {{var_dump($reclutamientos[0])}} --}}
                                    <tbody>
                                        @foreach ($discardeds as $discarded)
                                            {{-- @foreach ($reclutado->cv as $cv) --}}

                                            <tr class="d-flex">

                                                <td class="col text-center">
                                                    {{-- {{ date('d-m-Y', strtotime($reclutado->cv->created_at)) }} --}}
                                                    {{ date('d-m-Y', strtotime($discarded->created_at)) }}
                                                </td>

                                                <td class="col text-center">
                                                    @foreach ($vacantes as $vacant)
                                                        @if ($vacant->id == $discarded->cv->vacant_id)
                                                            {{ $vacant->title }}
                                                        @endif
                                                    @endforeach

                                                </td>


                                                <td class="col text-center">
                                                    {{ $discarded->cv->name }}
                                                </td>
                                                <td class="col text-center">{{ $discarded->comentarios }}</td>



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
    <div class="container pt-3">
        <div class="row d-flex justify-content-center">
            <div class="col-12 text-xs-center">
                {{ $discardeds->links() }}
            </div>
        </div>
    </div>
@endsection
