@extends('layouts.admin')
<style>
  

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
        {{-- <h2 class="text-center text-dark pt-2 ">VACANTES</h2> --}}
        <h2 class="text-black pt-5 text-center">USUARIOS</h2>
            {{-- <hr class="border border-dark border-1"> --}}
            <div class="row pl-3 pr-3 pt-3 text-dark">
                <div class="col-sm-4">
                    <div class="card" >
                        {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
                        <div class="card-body text-black">
                            <h5 class="card-title">CREAR USUARIO</h5>
                            <form method="POST" action="{{ route('admin.crear.usuarios') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nombre</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" value="{{old('name')}}"
                                        aria-describedby="emailHelp" placeholder="" name="name" style="border-radius: 25px;">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Apellido</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" value="{{old('last_name')}}"
                                        aria-describedby="emailHelp" placeholder="" name="last_name"
                                        style="border-radius: 25px;">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Correo electronico</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" value="{{old('email')}}"
                                        aria-describedby="emailHelp" placeholder="" name="email" style="border-radius: 25px;">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Contraseña</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder=""
                                        name="password" style="border-radius: 25px;">
                                </div>
                                {{-- @if ($id == 1)
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Rol</label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="rol"
                                            style="border-radius: 25px;">
                                            <option>Reclutador</option>
                                            <option>Analista</option>
                                        </select>
                                    </div>
                                @endif --}}
    
    
                                <button type="submit" class="btn btn-primary btn-block">Crear</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    {{-- @if ($id == 1) --}}
                        <div class="card box" style="background-color: #fff;">
                            <div class="card-body">
                                <h5 class="card-title">Reclutadores creados</h5>
    
                                <div class="table-responsive text-black">
                                    <table class="table text-black" style="background-color: #FFF; border-radius: 10px;">
                                        <thead>
                                            <tr class="d-flex">
                                                <th class="col text-center">Nombre</th>
                                                <th class="col text-center">Apellido</th>
                                                <th class="col text-center">Correo</th>
                                                <th class="col text-center">Estado</th>
                                                <th class="col text-center">Cambiar estado</th>
    
                                            </tr>
                                        </thead>
    
                                        <tbody>
                                            @if (count($reclutadores) == 0)
                                                No se le han creado nuevos usuarios
                                            @else
                                                @foreach ($reclutadores as $reclutador)
                                                    <tr class="d-flex ">
                                                        <td class="col text-center">{{ $reclutador->name }}</td>
                                                        <td class="col text-center">{{ $reclutador->last_name }}</td>
                                                        <th class="col text-center">{{ $reclutador->email }}</th>
                                                        {{-- <th class="col text-center">{{ $reclutador->rol }}</th> --}}
                                                        <th class="col text-center">
                                                            @if ($reclutador->status == 1)
                                                                Activo
                                                            @endif
                                                            @if ($reclutador->status == 0)
                                                                Inactivo
                                                            @endif
    
                                                        </th>
                                                        <th class="col text-center">
                                                            <form method="POST"
                                                                action="{{ route('admin.crear.update', $reclutador->id) }}">
                                                                @csrf
                                                                <div class="form-group">
                                                                    <button class="btn btn-danger"><i
                                                                            class="fas fa-exchange-alt"></i>
                                                                    </button>
                                                                </div>
                                                            </form>
                                                        </th>
                                                    </tr>
                                                @endforeach
                                            @endif
                                        </tbody>
    
                                    </table>
                                </div>
                                <div class="container pt-3">
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-12 text-xs-center">
                                            {{ $reclutadores->links() }}
                                        </div>
                                    </div>
                                </div>
    
    
                            </div>
                        </div>
    
                        {{-- <div class="card box mt-5" style="background-color: #fff;">
                            
                            <div class="card-body">
                                <h5 class="card-title">Analistas creados</h5>
    
                                <div class="table-responsive">
                                    <table class="table " style="background-color: #FFF; border-radius: 10px;">
                                        <thead>
                                            <tr class="d-flex">
                                                <th class="col text-center">Nombre</th>
                                                <th class="col text-center">Apellido</th>
                                                <th class="col text-center">Correo</th>
    
                                                <th class="col text-center">Estado</th>
                                                <th class="col text-center">Cambiar estado</th>
    
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if (count($analistas) == 0)
                                                No se le han creado nuevos usuarios
                                            @else
                                                @foreach ($analistas as $analista)
                                                    <tr class="d-flex">
                                                        <td class="col text-center">{{ $analista->name }}</td>
                                                        <td class="col text-center">{{ $analista->last_name }}</td>
                                                        <th class="col text-center">{{ $analista->email }}</th>
    
                                                        <th class="col text-center">
                                                            @if ($analista->status == 1)
                                                                Activo
                                                            @endif
                                                            @if ($analista->status == 0)
                                                                Inactivo
                                                            @endif
                                                        </th>
                                                        <th class="col text-center">
                                                            <form method="POST"
                                                                action="{{ route('admin.crear.update', $analista->id) }}">
                                                                @csrf
                                                                <div class="form-group">
                                                                    <button class="btn btn-danger"><i
                                                                            class="fas fa-exchange-alt"></i>
                                                                    </button>
                                                                </div>
                                                            </form>
    
                                                        </th>
                                                    </tr>
                                                @endforeach
                                            @endif
                                        </tbody>
    
                                    </table>
                                </div>
                                <div class="container pt-3">
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-12 text-xs-center">
                                            {{ $analistas->links() }}
                                        </div>
                                    </div>
                                </div>
    
                         
                            </div>
                        </div> --}}
                    {{-- @else
                        <div class="card box" style="background-color: #fff;">
                            <div class="card-body">
                                <h5 class="card-title">Usuarios creados</h5>
    
                                <div class="table-responsive">
                                    <table class="table " style="background-color: #FFF; border-radius: 10px;">
                                        <thead>
                                            <tr class="d-flex">
                                                <th class="col text-center">Nombre</th>
                                                <th class="col text-center">Apellido</th>
                                                <th class="col text-center">Correo</th>
                                                <th class="col text-center">Estado</th>
                                                <th class="col text-center">Cambiar estado</th>
    
                                            </tr>
                                        </thead>
    
                                        <tbody>
                                            @if (count($Analista_Reclutador) == 0)
                                                No se le han creado nuevos usuarios
                                            @else
                                                @foreach ($Analista_Reclutador as $Analista_Reclutad)
                                                    <tr class="d-flex ">
                                                        <td class="col text-center">{{ $Analista_Reclutad->name }}</td>
                                                        <td class="col text-center">{{ $Analista_Reclutad->last_name }}</td>
                                                        <th class="col text-center">{{ $Analista_Reclutad->email }}</th>
                                                        
                                                        <th class="col text-center">
                                                            @if ($Analista_Reclutad->status == 1)
                                                                Activo
                                                            @endif
                                                            @if ($Analista_Reclutad->status == 0)
                                                                Inactivo
                                                            @endif
    
                                                        </th>
                                                        <th class="col text-center">
                                                            <form method="POST"
                                                                action="{{ route('admin.crear.update', $Analista_Reclutad->id) }}">
                                                                @csrf
                                                                <div class="form-group">
                                                                    <button class="btn btn-danger"><i
                                                                            class="fas fa-exchange-alt"></i>
                                                                    </button>
                                                                </div>
                                                            </form>
                                                        </th>
                                                    </tr>
                                                @endforeach
                                            @endif
                                        </tbody>
    
                                    </table>
                                </div>
                                <div class="container pt-3">
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-12 text-xs-center">
                                            {{ $Analista_Reclutador->links() }}
                                        </div>
                                    </div>
                                </div>
    
    
                            </div>
                        </div>
                    @endif --}}
    
                </div>
            </div>
        </div>
    
@endsection
