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
    .btn-formulario{
        background-color: #fcb2d7;
        color: #000000;
    }
    .btn-formulario:hover{
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

        <h4 class="text-center text-black pt-5"><b>ASIGNACION DE ENTREVISTAS</b></h4>
                <h4 class="text-center text-black">VACANTE <b> {{ $name_vacant->title }}</b></h4>

                <div class="row justify-content-center" style="border-radius: 25px;background-color: #fff;font-size: 0.9rem">
                    <div class="col-md-2 sub-nav-link "><a class="nav-link text-center text-black"
                            href="{{ route('reclutador.aspirantes', ['id' => $name_vacant->id]) }}"><b><i
                                    class="fas fa-users"></i>
                                POSTULADOS</b><span class="sr-only">(current)</span></a></div>
                    <div class="col-md-2 sub-nav-link "> <a class="nav-link text-center text-black "
                            href="{{ route('reclutador.seleccionados.buscar', ['id' => $name_vacant->id]) }}"><b><i
                                    class="fas fa-user-friends"></i>
                                SELECCIONADOS</b><span class="sr-only">(current)</span></a></div>
                    <div class="col-md-2 sub-nav-link "><a class="nav-link text-center text-black"
                            href="{{ route('reclutador.reclutamientos.buscar', ['id' => $name_vacant->id]) }}"><b><i
                                    class="fas fa-tasks"></i> PRUEBAS</b><span class="sr-only">(current)</span></a>
                    </div>
                    <div class="col-md-2 sub-nav-link active"><a class="nav-link text-center text-black"
                        href="{{ route('reclutador.analista.index', ['id' => $name_vacant->id]) }}"><b><i class="fas fa-comment-alt"></i>
                            ENTREVISTAS</b>
                        <span class="sr-only">(current)</span></a></div>
                    <div class="col-md-2 sub-nav-link">

                        <a class="nav-link text-center text-black" href="#"><b><i class="fas fa-check-double"></i>
                                FINALISTAS</b>
                            <span class="sr-only">(current)</span></a>
                    </div>
                    <div class="col-md-2 sub-nav-link"><a class="nav-link text-center text-black"
                            href="{{ route('reclutador.discarded.index', ['id' => $name_vacant->id]) }}"><b><i
                                    class="far fa-times-circle"></i>
                                DESCARTADOS</b>
                            <span class="sr-only">(current)</span></a></div>

                </div>
        <div class="">

            <form method="POST" action="#">
                {{-- <form method="POST" action="{{ route('reclutador.crearvacante') }}"> --}}
                @csrf
               
                <div class="card box mt-3" >
                    <div class="card-header card-header-warning" style=" border-radius: 15px;">
                        <h5 class="card-title text-center" ><b>ENTREVISTA ANALISTA</b></h5>
                   </div>
                   <div class="card-body text-black">
                    <div class="row text-black">
                        <div class="col-md-12 text-right">
                            <button id="" class="btn btn-block text-white" style="background-color: #e52b7f"><b> ASIGNAR</b></button>
                        </div>
                    </div>              
                </div>
                </div>
        
                <div class="card box mt-3" >
                    <div class="card-header card-header-warning" style=" border-radius: 15px;">
                        <h5 class="card-title text-center" ><b>ENTREVISTA COORDINADOR</b></h5>
                   </div>
                   <div class="card-body text-black">
                    <div class="row text-black">
                        <div class="col-md-12 text-right">
                            <button id="" class="btn btn-block text-white" style="background-color: #e52b7f"><b> ASIGNAR</b></button>
                        </div>
                    </div>              
                </div>
                </div>
        
                <div class="card box mt-3" >
                    <div class="card-header card-header-warning" style=" border-radius: 15px;">
                        <h5 class="card-title text-center" ><b>ENTREVISTA JEFE</b></h5>
                   </div>
                   <div class="card-body text-black">
                    <div class="row text-black">
                        <div class="col-md-12 text-right">
                            <button id="" class="btn btn-block text-white" style="background-color: #e52b7f"><b> ASIGNAR</b></button>
                        </div>
                    </div>              
                </div>
                </div>
        
                <div class="card box mt-3" >
                    <div class="card-header card-header-warning" style=" border-radius: 15px;">
                        <h5 class="card-title text-center" ><b>ENTREVISTA GERENTE</b></h5>
                   </div>
                    <div class="card-body text-black">
                        <div class="row text-black">
                            <div class="col-md-12 text-right">
                                <button id="" class="btn btn-block text-white" style="background-color: #e52b7f"><b> ASIGNAR</b></button>
                            </div>
                        </div>              
                    </div>
                </div>
        
            
            </form>
        </div>
    </div>
@endsection
