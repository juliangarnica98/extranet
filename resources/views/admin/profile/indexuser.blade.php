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
    .inp{
        border-radius: 25px;
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
    
    <div class="page-content page-container " id="page-content" style="">
        {{-- <div class="navegacion text-center border-white">
            / <a href="{{route('admin.perfil')}}" class="text-decoration-none text-dark ">MI PERFIL</a>
       </div> --}}
        
        <h2 class="ml-5 text-dark pt-2 ">MI PERFIL</h2>

        <div class="row pl-3 pr-3 pt-3 text-dark">
            <div class="col-sm-4">
                
                <div class="card mb-0 box " style="background-color: #fff;">
                    <div class="card-header h4 text-center" style="background-color: #fff;">Imagen de perfil</div>
                    <div class="card-body text-center">
                        <img class="img-account-profile rounded-circle mb-2 w-100" src="{{asset('imgs/profile-icon-9.png')}}" alt="">
                        <div class="small font-italic text-muted mb-4">JPG o PNG de no más de 5 MB</div>
                        <button class="btn btn-primary" type="button">Subir imagen</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="card mb-4 box" style="background-color: #fff;">
                    <div class="card-header h4 text-center" style="background-color: #fff;">Detalles</div>
                    <div class="card-body">
                        <form method="POST" action="{{route('reclutador.editarperfil')}}"> 
                            @method('PUT')
                            @csrf                    
                            <div class="row gx-3 mb-3">
                                <div class="col-md-12">
                                    <label class="" for="inputFirstName">Nombre</label>
                                    <input class="form-control inp" id="inputFirstName" type="text" placeholder="" value="{{$usuario->name}}" name="name" style=" border-radius: 25px;">
                                </div>
                            </div>
                            <div class="row gx-3 mb-3">
                                <div class="col-md-12">
                                    <label class="" for="inputFirstName">Apellido</label>
                                    <input class="form-control inp" id="inputFirstName" type="text" placeholder="" value="{{$usuario->last_name}}" name="last_name" style=" border-radius: 25px;">
                                </div>
                            </div>
                            <div class="row gx-3 mb-3">
                                <div class="col-md-12">
                                    <label class="" for="inputLocation">Correo</label>
                                    <input class="form-control inp" id="inputLocation" type="text" value="{{$usuario->email}}" name="email" style=" border-radius: 25px;">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="" for="inputEmailAddress">Rol</label>
                                <input class="form-control inp" id="inputEmailAddress" type="email" placeholder="" value="{{$usuario->roles->first()->name}}" readonly style=" border-radius: 25px;">
                            </div>
                          
                            <button class="btn btn-primary btn-block" type="submit">Guardar cambios</button>
                        </form>
                    </div>
                </div>
            </div>
    </div>
@endsection
