


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

    .btn-formulario {
        background-color: #fcb2d7;
        color: #000000;
    }

    .btn-formulario:hover {
        background-color: #d2d2dc;
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

        <h2 class="text-center  pt-5 text-black" style="color: #000000">CALIFICAR CANDIDATO</h2>
        <div class="">

            <form method="POST" action="{{ route('reclutador.update', $id) }}">
                @csrf
                @method('PUT')
                <div class="card box mt-3">
                    <div class="card-header card-header-warning" style="border-radius: 15px;">
                        <h5 class="card-title text-center"><b>PRUEBAS REQUERIDAS</b></h5>
                    </div>
                    <div class="card-body text-black">
                        <div class="row text-black">
                            <div class="col-md-4 ">
                                <div class="form-outline text-right pt-1">
                                    <label class="form-label text-black " for="form8Example1">ETHIKOS</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-outline">
                                    <input type="number" class="form-control" aria-describedby="emailHelp" placeholder=""
                                        value="0" name="ethikos"  style="border-radius: 25px">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-outline text-right pt-1">
                                    <label class="form-label text-black" for="form8Example1">TEN DISC</label>
                                </div>
                            </div>
                            <div class="col-md-6 pt-1">
                                <div class="form-outline">
                                    <input type="number" class="form-control" placeholder="" name="ten_disc"
                                        value="0"  style="border-radius: 25px">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card box mt-3">
                    <div class="card-header card-header-warning" style="border-radius: 15px;">
                        <h5 class="card-title text-center"><b>PRUEBAS COMERCIAL</b></h5>
                    </div>
                    <div class="card-body text-black">
                        <div class="row text-black">
                            <div class="col-md-4 ">
                                <div class="form-outline text-right pt-1">
                                    <label class="form-label text-black " for="form8Example1">POTENCIAL COMERCIAL</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-outline">
                                    <input type="number" class="form-control" placeholder="" name="potencial_comercial"
                                        value="0"  style="border-radius: 25px">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-outline text-right pt-1">
                                    <label class="form-label text-black" for="form8Example1">IQ FACTORIAL</label>
                                </div>
                            </div>
                            <div class="col-md-6 pt-1">
                                <div class="form-outline">
                                    <input type="number" class="form-control" placeholder="" name="iq_factorial"
                                        value="0"  style="border-radius: 25px">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-outline text-right">
                                    <label class="form-label text-black" for="form8Example3">V&P TEST</label>
                                </div>
                            </div>
                            <div class="col-md-6 pt-1">
                                <div class="form-outline">
                                    <input type="number" class="form-control" placeholder="" name="vp_test"
                                        value="0"  style="border-radius: 25px">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="card box mt-3">
                    <div class="card-header card-header-warning" style="border-radius: 15px;">
                        <h5 class="card-title text-center"><b>PRUEBAS DE LA VACANTE</b></h5>
                    </div>
                    <div class="card-body text-black">
                        @if ($vacante->ventas == 'aplica')       
                            <div class="row text-black pt-1">
                                <div class="col-md-4 text-right">
                                    <label class="form-label text-black" for="form8Example3">CLINICA DE VENTAS</label>
                                </div>
                                <div class="col-md-6">
                                    <select class="form-select form-control" name="ventas"
                                            style="border-radius: 25px">
                                            <option value="no aprobo">NO APROBO</option>
                                            <option value="aprobo">APROBO</option>
                                        </select>
                                
                                </div>
                            </div>
                        @endif    
                        @if ($vacante->riesgos == 'aplica')       
                            <div class="row text-black pt-1">
                                <div class="col-md-4 text-right">
                                    <label class="form-label text-black" for="form8Example3">CENTRAL DE RIESGOS</label>
                                </div>
                                <div class="col-md-6">
                                    <select class="form-select form-control" name="riesgos"
                                            style="border-radius: 25px">
                                            <option value="no aprobo">NO APROBO</option>
                                            <option value="aprobo">APROBO</option>
                                        </select>
                                
                                </div>
                            </div>
                        @endif    
                        @if ($vacante->tecnica=='aplica')    
                            <div class="row text-black pt-1">
                                <div class="col-md-4 text-right">
                                    <label class="form-label text-black" for="form8Example3">PRUEBA TECNICA</label>
                                </div>
                                <div class="col-md-6">
                                    <select class="form-select form-control" name="tecnica"
                                            style="border-radius: 25px">
                                            <option value="no aprobo">NO APROBO</option>
                                            <option value="aprobo">APROBO</option>
                                        </select>
                                
                                </div>
                            </div>
                        @endif
                        @if ($vacante->visita=='aplica')    
                            <div class="row text-black pt-1">
                                <div class="col-md-4 text-right">
                                    <label class="form-label text-black" for="form8Example3">VISITA DOMICILIARIA</label>
                                </div>
                                <div class="col-md-6">
                                    <select class="form-select form-control" name="visita"
                                            style="border-radius: 25px">
                                            <option value="no aprobo">NO APROBO</option>
                                            <option value="aprobo">APROBO</option>
                                        </select>
                                
                                </div>
                            </div>
                        @endif
                        @if ($vacante->poligrafo=='aplica') 
                            <div class="row text-black pt-1">
                                <div class="col-md-4 text-right">
                                    <label class="form-label text-black" for="form8Example3">POLIGRAFO</label>
                                </div>
                                <div class="col-md-6">
                                    <select class="form-select form-control" name="poligrafo"
                                            style="border-radius: 25px">
                                            <option value="no aprobo">NO APROBO</option>
                                            <option value="aprobo">APROBO</option>
                                        </select>
                                
                                </div>
                            </div>
                        @endif
                    </div>
                    <div>
                        <button class="box btn-formulario text-white text-center btn btn-block mt-3 mb-3"
                            style="background-color: #e52b7f"><b>GUARDAR</b> </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
