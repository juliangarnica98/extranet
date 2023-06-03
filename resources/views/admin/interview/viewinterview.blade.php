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
        <h2 class="ml-5 pt-5 text-center text-black "> <b>REALIZAR ENTREVISTA</b></h2>
        <h2 class="ml-5 pt-0 text-center text-black "> <b>CANDIDATO</b> {{ $hoja_vida->name }}</h2>
        <div class="">

            <form method="POST" action="{{ route('admin.index.updateentrevista',$mi_entrevista->id) }}">
                @csrf
                <div class="card box mt-3">
                    <div class="card-header card-header-warning" style="border-radius: 15px;">
                        <h5 class="card-title text-center"><b> DATOS DE LA ENTREVISTA</b></h5>
                    </div>
                    <div class="card-body text-black">

                        <div class="row text-black">
                            <div class="col-md-4 ">
                                <div class="form-outline text-right pt-1">
                                    <label class="form-label text-black " for="form8Example1">COMENTARIOS</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-outline">
                                    <textarea id="story" class="form-control" name="description" rows="12" style="border-radius: 25px;">
                                    </textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row text-black pt-3">
                            <div class="col-md-4 ">
                                <div class="form-outline text-right ">
                                    <label class="form-label text-black " for="form8Example1">ESTADO</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-outline">
                                    <select class="form-select form-control" name="status" style="border-radius: 25px">
                                        <option value="">SELECCIONE ...</option>
                                        <option value="no asistio">NO ASISTIO</option>
                                        <option value="no aprobo">NO APROBO</option>
                                        <option value="aprobo">APROBO</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
