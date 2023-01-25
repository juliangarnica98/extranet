@extends('layouts.admin')
@section('content')
<div class="container">
    <h1 class="text-center">Cargos</h1>
    <div class="row justify-content-center">
        
        
        <div class="col-md-6  " >
            <div class="card scroll" style="height: 65vh;">
                <div class="card-header">Cargos registradas</div>
                <div class="card-body">
                    <input type="text" name="busqueda_cargo" class="form-control col-12" id="busqueda_cargo" placeholder="Buscar">
                    <hr class="sidebar-divider">
                    <table class="table table-responsible text-center">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">Área</th>
                                <th scope="col">Cargo</th>
                                
                              </tr>
                        </thead>
                        @foreach ($cargos as $cargo)
                        <tbody>
                          
                            <tr>
                                @foreach ($areas as $area)
                                  @if ($area->id == $cargo->area_id )
                                    <th>{{$area->description}}</th>
                                  @endif
                                @endforeach 
                                <td>{{$cargo->description}}</td>    
                            </tr>
                           
                        </tbody>
                          @endforeach
                      </table>
                </div>
            </div>
        </div>
        
        <div class="col-md-6" >
            <div class="card" style="height: 45vh;">
                <div class="card-header">Registra un cargo nuevo </div>
                <div class="card-body">
                    <form action="{{route('admin.crearcargo')}}" method="post">
                        @csrf
                        {{-- @if(Session::has('message'))
                            <p>{{Session::get('message')}}</p>
                        @endif --}}
                        <div class="form-group">
                            
                            <select class="form-control form-select" aria-label="Default select example" name="area_id">
                              <option selected>Seleccione un área</option>
                                @foreach ($areas as $area)
                                  <option value="{{$area->id}}">{{$area->description}}</option>
                                @endforeach
                              </select>
                            
                        </div>
                        
                        <div class="">
                            <label for="description" class="form-label">Nombre del cargo</label>
                            <input type="text" name="description" class="form-control col-12" id="description" placeholder="">
                            </div>
                        
                          <hr class="sidebar-divider">
                          <button class="d-none d-sm-inline-block btn btn-block shadow-sm" style="background-color: #269aa0;color:#fff"><i class="fas fa-plus"></i>&nbsp;
                            Registrar nuevo cargo</button>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection