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
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card box" style="background-color: #ffffff;height: 85vh">
                        <div class="card-body">
                            <h1 class="card-title">Candidatos asignados</h1>
                            <div class="row">
                                {{-- <div class="col-md-4"><p class="card-description">Selecciona una vacante </p></div> --}}
                                {{-- <div class="col-md-12">
                                    <form method="get" action="">
                                        <div class="form-row">
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" name="busqueda"
                                                    style="border-radius: 25px">
                                            </div>
                                            <div class="col-md-2">
                                                <input type="submit" class="btn btn-primary btn-block" value="buscar"
                                                    style="border-radius: 25px">
                                            </div>
                                        </div>
                                    </form>
                                </div> --}}
                            </div>


                            @foreach ($reclutamientos as $reclutamiento)
                                @foreach ($cvs as $cv)
                                <div class="" style="border-radius: 25px">
                                    @if ($cv->id == $reclutamiento->cvvacant->cv_id)
                                        <div class="card pl-0 pr-0 ml-0 mr-0 border-0 vancants">
                                            <a href="{{ route('jefe.candidatos.show', ['id' => $reclutamiento->cvvacant->cv_id,'vacant'=>$reclutamiento->cvvacant->vacant_id,'recruitment'=>$reclutamiento->id]) }}"
                                                {{-- <a href="" --}}
                                                class="card-block stretched-link text-decoration-none">
                                                <div class="card-body pt-1 pb-1 ml-0 mr-0 border-bottom border-top">

                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <h5 class="card-title text-center text-dark pt-3 ">
                                                                <strong>{{ $cv->name }}</strong><br>
                                                               
                                                            </h5>
                                                        </div>
                                                        <div class="col-md-4 text-dark">
                                                            <div class="d-flex justify-content-center">
                                                                <img src="{{ asset('imgs/profile-icon-9.png') }}" class="w-25"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 text-dark ">

                                                            <strong class="text-center">Correo: {{ $cv->email }}</strong><br>
                                                            <strong class="text-center">Ciudad de residencia:
                                                                {{ $cv->city_address }}</strong><br>
                                                            <strong class="text-center">Dirección:
                                                                {{ $cv->address }}</strong><br>
                                                            <strong class="text-center"> Edad:{{ $cv->age }}</strong><br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    @endif
                                </div>
                                @endforeach
                            @endforeach

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
