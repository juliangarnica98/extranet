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
        transition: margin-right 2s ease-in-out;
    }

    .vancants:hover {
        /* transform: translate(10px); */
    }

    .fondo {

        background: linear-gradient(rgba(4, 165, 155, 0.8), rgba(4, 165, 155, 0.8)), url('{{ asset('imgs/bg-masthead - copia.jpg') }}') fixed center center;
        background-size: cover;
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
        <h2 class="ml-5 pt-5 text-center text-black "> <b>ENTREVISTAS</b></h2>
        <h2 class="ml-5 pt-0 text-center text-black "> <b>VACANTE</b> {{ $name_vacant->title }}</h2>
        <div class="">

            <div class="row pt-3">
                <div class="col-md-12 ">
                    <div class="row ml-3 mr-3">

                        <div class="col-md-2 text-center text-black"> <b>HOJA DE VIDA</b></div>
                        <div class="col-md-2 text-center text-black"> <b>NOMBRE</b></div>
                        <div class="col-md-2 text-center text-black"> <b>EDAD</b></div>
                        <div class="col-md-2 text-center text-black"> <b>CIUDAD</b></div>
                        <div class="col-md-2 text-center text-black"> <b>REGISTRAR</b></div>
                        <div class="col-md-2 text-center text-black"> <b>VER ENTREVISTA</b></div>
                    </div>
                    @foreach ($mis_entrevistas as $entrevista)
                        <div class="card pl-0 pr-0 ml-0 mr-0 border-0 vancants mt-2">
                            <div class="col-md-12 stretch-card">

                                <div class="card-body">
                                    <div class="row">
                                        @foreach ($hojas_vida as $cv)
                                            @if ($cv->id == $entrevista->cv_id)
                                                <div class="col-sm-2 text-center text-black pt-2">
                                                    <a class="btn" href="{{ asset('storage/cvs/' . $cv->file_cv) }}"
                                                        download>
                                                        <h5><i class="fas fa-download text-black"></i></h5>
                                                    </a>
                                                </div>
                                                <div class="col-sm-2 text-center text-black pt-2">
                                                    <b>{{ $cv->name }}</b><img
                                                        style="width: 3rem;height: 3rem;border-radius: 50%"
                                                        class="img-fluid"
                                                        src="{{ asset('storage/avatars/' . $cv->photo_cv) }}" />
                                                </div>
                                                <div class="col-sm-2 text-center text-black pt-2">{{ $cv->age }}</div>
                                                <div class="col-sm-2 text-center text-black pt-2">{{ $cv->city_address }}
                                                </div>
                                                <div class="col-sm-2 text-center text-black pt-2">
                                                    @if ($entrevista->status == null)
                                                        <a class=""
                                                            href="{{ route('jefe.index.editentrevista', $entrevista->id) }}">
                                                            <h5><i class="fas fa-pencil-alt text-black"></i></h5>
                                                        </a>
                                                    @endif
                                                </div>
                                                <div class="col-sm-2 text-center text-black">
                                                    @if ($entrevista->status != null)
                                                        <a class=""
                                                            href="{{ route('jefe.index.entrevistaver', $entrevista->id) }}">
                                                            <h5><i class="fas fa-eye text-black"></i></h5>
                                                        </a>
                                                    @endif
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{-- {{$mis_entrevistas}} --}}
                </div>
            </div>
        </div>
    </div>
@endsection
