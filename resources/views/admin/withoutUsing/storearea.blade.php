@extends('layouts.admin')

@section('content')
<div class="container">
    <h1 class="text-center">Áreas</h1>
    <div class="row justify-content-center">
        
        
        <div class="col-md-6  " >
            <div class="card scroll" style="height: 65vh;">
                <div class="card-header">Cargos registradas</div>
                <div class="card-body">
                    <input type="text" name="busqueda_cargo" class="form-control col-12" id="busqueda_cargo" placeholder="Buscar">
                    <hr class="sidebar-divider">
                    <table class="table table-responsible table-striped table-sm text-center">
                        <thead class="table-dark">
                            <tr class="tr">
                                <th scope="col">Descripcion</th>
                                {{-- <th scope="col">Acción</th> --}}
                                
                              </tr>
                        </thead>
                        @foreach ($areas as $area)
                        <tbody>
                            <tr class="tr">
                
                                <td>{{$area->description}}</td>    
                            </tr>
                        </tbody>
                        @endforeach
                      </table>
                </div>
            </div>
        </div>
        
        <div class="col-md-6" style="width: 18rem;">
            <div class="card" style="height: 35vh;">
                <div class="card-header">Registra un área nueva </div>
                <div class="card-body">
                    <form action="{{route('admin.creararea')}}" method="post">
                        @csrf
                        {{-- @if(Session::has('message'))
                            <p>{{Session::get('message')}}</p>
                        @endif --}}
                        
                        <div class="">
                            <label for="area" class="form-label">Nombre del area</label>
                            <input type="text" name="description" class="form-control col-12" id="area" placeholder="">
                            </div>
                        
                          <hr class="sidebar-divider">
                          <button class="d-none d-sm-inline-block btn btn-block shadow-sm" style="background-color: #269aa0;color:#fff"><i class="fas fa-plus"></i>&nbsp;
                            Registrar nueva área</button>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection