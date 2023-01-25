@extends('layouts.admin')

@section('content')
    @if (Session::has('error'))
        <script>
            Swal.fire(
                'Error al importar archivo',
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
    <div class="container">
        <h1 class="text-center">Áreas</h1>
        <div class="row justify-content-center">
            <div class="col-md-6  ">
                <div class="card scroll" style="height: 65vh;">
                    <div class="card-header">Tipo de retiros registradas</div>
                    <div class="card-body">
                        <input type="text" name="busqueda_cargo" class="form-control col-12" id="busqueda_cargo"
                            placeholder="Buscar">
                        <hr class="sidebar-divider">
                        <table class="table table-responsible table-striped table-sm text-center">
                            <thead class="table-dark">
                                <tr class="tr">
                                    <th scope="col">Descripcion</th>
                                </tr>
                            </thead>
                            @foreach ($tiporetiros as $tiporetiro)
                                <tbody>
                                    <tr class="tr">

                                        <td>{{ $tiporetiro->description }}</td>
                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-md-6" style="width: 18rem;">
                <div class="card" style="height: 35vh;">
                    <div class="card-header">Registra un tipo de retiro </div>
                    <div class="card-body">
                        <form action="{{ route('admin.creartiporetiro') }}" method="post">
                            @csrf
                            <div class="">
                                <label for="description" class="form-label">Nombre del tipo de retiros</label>
                                <input type="text" name="description" class="form-control col-12" id="description"
                                    placeholder="">
                            </div>

                            <hr class="sidebar-divider">
                            <button class="d-none d-sm-inline-block btn btn-block shadow-sm"
                                style="background-color: #269aa0;color:#fff"><i class="fas fa-plus"></i>&nbsp;
                                Registrar nuevo tipo retiro</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
