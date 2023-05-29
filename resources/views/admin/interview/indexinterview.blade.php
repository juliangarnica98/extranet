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

        <h2 class="ml-5 pt-5 text-center text-black ">MIS ENTREVISTAS</h2>
        <div class="container">
            <div class="row">
                
                    <div class="col-md-3 text-center text-black">VACANTE</div>
                    <div class="col-md-3 text-center text-black">CANDIDATO</div>
                    <div class="col-md-3 text-center text-black">HOJA DE VIDA</div>
                    <div class="col-md-3 text-center text-black">REGISTRAR</div>
               
            </div>
            <div class="row pt-3">
                <div class="col-md-12">
                    @foreach ($mis_entrevistas as $entrevista)
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3 text-center text-black">1</div>
                                    <div class="col-sm-3 text-center text-black">1</div>
                                    <div class="col-sm-3 text-center text-black">1</div>
                                    <div class="col-sm-3 text-center text-black"><a href="" class="btn"><i class="fas fa-user-edit text-black"></i></a></div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
