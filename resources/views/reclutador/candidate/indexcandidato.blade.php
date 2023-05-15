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

    .link-a {
        transition: width 2s;
        transition-property: box-shadow, transform;
        transition-duration: 350ms;
        transition-timing-function: ease;
    }

    .link-a:hover {
        transform: translateY(-5px);
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
        <h2 class="text-center  pt-5 text-black" style="color: #000000">VACANTES</h2>

        
        @if (count($vacants) == 0)
        <div class="card box" style="background-color: #ffffff;height: auto">
            <div class="card-body">

                <p class="card-description text-center">
                    <b>NO SE HAN CANDIDATOS</b>
                </p>
            </div>
        </div>
        @else    
        <div class="">
            <div class="row  pt-2 justify-content-center">
                <div class="col-md-3 grid-margin stretch-card">
                    <div class="card box" style="background-color: #ffffff;height: auto">
                        <div class="card-body">

                            <p class="card-description">
                                Filtros
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 grid-margin stretch-card">


                    <div class="row ml-1 mr-1">
                        <div class="col-md-3">
                            <p class="text-center"> <small class="text-center text-black "><b>DESCRIPCIÓN</b></small></p>
                        </div>
                        <div class="col-md-3 text-center">
                            <small class=" text-black "><b>FECHA</b></small>
                        </div>
                        <div class="col-md-6 text-center" >
                            <div class="row">
                                <div class="col-md-3">
                                    <p class="text-center"> <small class="text-center text-black "><b>EDITAR</b></small></p>
                                </div>
                                <div class="col-md-3">
                                    <p class="text-center"> <small class="text-center text-black "><b>DUPLICAR</b></small></p>
                                </div>
                                <div class="col-md-3">
                                    <p class="text-center"><small class="text-center text-black "><b>CANDIDATOS</b></small></p>
                                </div>
                                <div class="col-md-3">
                                    <p class="text-center"> <small class="text-center text-black "><b>ARCHIVAR</b></small></p>
                                </div>
                            </div>
                        </div>
                        
                    </div>



                    @foreach ($vacants as $vacant)
                        <div class="mt-1">
                            <div class="card pl-0 pr-0 ml-0 mr-0 border-0" style="background-color: #fff">
                                {{-- border-right-0 border-left-0 --}}

                                <div class="card-body pt-1 pb-1 ml-0 mr-0">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h5 class="text-black text-center">
                                                <strong>{{ $vacant->title }}</strong><br>
                                                <small class="card-subtitle mb-1 text-black">{{ $vacant->city }} <br>
                                                    ${{ number_format($vacant->salary, 1, ',', '.') }} COP <br>
                                                    @if ($vacant->state == 1)
                                                        <b class="text-info">ACTIVA</b>
                                                    @else
                                                        <b class="text-danger">ARCHIVADA</b>
                                                    @endif
                                                </small><br>
                                            </h5>
                                        </div>
                                        <div class="col-md-3  text-center">
                                            <h6 class="text-black">
                                                <div class="text-black text-center pt-4">
                                                    {{ date_format($vacant->created_at, 'Y/m/d') }}
                                                </div>
                                            </h6>
                                        </div>
                                        <div class="col-md-6 text-center" >
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <h5 class="text-black">
                                                        <div class="text-black text-center pt-4 link-a">
                                                            <a href="{{ route('reclutador.vacant.edit', ['id' => $vacant->id]) }}"
                                                                {{-- <a href="#"editar-vacante --}}
                                                                class="card-block stretched-link text-decoration-none text-black">
                                                                <i class="fas fa-pen"></i>
                                                            </a>
                                                        </div>
                                                    </h5>
                                                </div>
                                                <div class="col-md-3">
                                                    <h5 class="text-black">
                                                        <div class="text-black text-center pt-4 link-a">
                                                            <a href="{{ route('reclutador.vacant.duplicar', ['id' => $vacant->id]) }}"
                                                                class="card-block stretched-link text-decoration-none text-black">
                                                                <i class="fas fa-clone"></i>
                                                            </a>
                                                        </div>
                                                    </h5>
                                                </div>
                                                <div class="col-md-3">
                                                    <h5 class="text-black">
                                                        <div class="text-black text-center pt-4 link-a">
                                                            <a href="{{ route('reclutador.aspirantes', ['id' => $vacant->id]) }}"
                                                                class="card-block stretched-link text-decoration-none text-black">
                                                                {{ $vacant->num_aplic }} <i class="fas fa-user-friends"></i>
                                                            </a>
                                                        </div>
                                                    </h5>
                                                </div>
                                                <div class="col-md-3">
                                                    <h5 class="text-black">
                                                        <div class="text-black text-center pt-4 link-a">
                                                            @if ( $vacant->state==1)
                                                            <a onclick="archivar_vacante({{ $vacant->id }})" 
                                                                class="card-block stretched-link text-decoration-none text-black" >
                                                                <i class="fas fa-archive"></i>
                                                            </a>
                                                            @else
                                                                <i class="fas fa-archive text-danger"></i>       
                                                            @endif
                                                        </div>
                                                    </h5>
                                                </div>
                                                
                                            </div>
                                        </div>
                            
                                    </div>


                                </div>

                            </div>
                        </div>
                    @endforeach


                </div>

            </div>
        </div>
        @endif
    </div>
    <script>
        // window.CSRF_TOKEN = '{{ csrf_token() }}';
        function archivar_vacante(id) {
            Swal.fire({
                title: '¿Estas seguro de archivar la vacante?',
                
                showCancelButton: true,
                confirmButtonText: 'Seguro',
                cancelButtonText: 'Cancelar',
             
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    fetch('/reclutador/archivar-vacante/' + id, {
                    method: "POST",
                    headers: {
                        "Content-type": "application/json;charset=UTF-8",
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                })
                .then((response) => {
                    window.location.reload()
                })
                .then(json => console.log(json));
                } else if (result.isDenied) {
                    
                }
            })
            

        }
    </script>
@endsection
