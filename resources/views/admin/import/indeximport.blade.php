@extends('layouts.admin')
<style>
    input[type=file]::file-selector-button {
        margin-right: 20px;
        border: none;
        background: #ba639b;
        padding: 10px 20px;
        border-radius: 10px;
        color: #fff;
        cursor: pointer;
        transition: background .2s ease-in-out;
        display: none;
    }

    input[type=file]::file-selector-button:hover {
        background: #e85199;
        display: none;
    }

    .input_file {
        margin-right: 20px;
        border: none;
        padding: 10px 20px;
        border-radius: 8px;
        color: #fff;
        cursor: pointer;
        background: #e85199;
        transition: background .2s ease-in-out;
    }

    .input_file:hover {
        background: #ba639b;
    }
    .pt-50{
        padding-top: 20%;
    }
</style>

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


    <div class="container" style="padding-top: 10%">
        <div class="row justify-content-center">
            <div class="col-md-6 ">
                <h1 class="text-center"></h1>
                <div class="card border-info">
                    {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
                    {{-- <div class="card-header"></div> --}}
                    <div class="card-body">
                        <h2 class="card-title">Importa jefes</h2>
                        <form action="{{ route('admin.import.excel') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="file">
                                Selecciona un archivo
                                <input type="file" name="file" class="input_file"
                                    style="border-bottom: none;width:100%; color:#fff" multiple>
                            </div>
                            <hr class="sidebar-divider">
                            <button class="d-none d-sm-inline-block btn btn-block shadow-sm"
                                style="background-color: #269aa0;color:#fff">Importar jefes</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <h1 class="text-center"></h1>
                <div class="card border-info">
                    {{-- <div class="card-header">Seleccione un archivo excel</div> --}}

                    <div class="card-body">
                        <h2 class="card-title">Importa colaboradores</h2>

                        <form action="{{ route('admin.import.collaborator') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="file">
                                Selecciona un archivo
                                <input type="file" name="file" class="input_file"
                                    style="border-bottom: none;width:100%; color:#fff" multiple>
                            </div>
                            <hr class="sidebar-divider">
                            <button class="d-none d-sm-inline-block btn btn-block shadow-sm"
                                style="background-color: #269aa0;color:#fff">Importar colaboradores</button>
                        </form>
                    </div>
                </div>
            </div>
            

        </div>
    </div>
@endsection
