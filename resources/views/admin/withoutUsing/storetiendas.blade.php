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
        <div class="row justify-content-center">
            <div class="col-md-7">
                @if (empty($jefe))
                    <p class="text-center h5" style="color: #e85199">Primero debes importar los jefes</p>
                @else
                    <h1 class="text-center">Asignar tiendas </h1>
                    <div class="card">
                        <div class="card-header">Jefes</div>

                        <div class="card-body">
                            <form action="{{ route('admin.asignar') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <select class="form-select form-select-lg form-control" aria-label=".form-select-lg example"
                                    name="jefe" id="jefe">
                                    <option value="">SELECCIONA UN JEFE ...</option>
                                    @foreach ($jefes as $jefe)
                                        <option value="{{ $jefe->id }}">{{ $jefe->name }}</option>
                                    @endforeach
                                </select>

                                <hr class="sidebar-divider">
                                <div>
                                    <p id="search"></p>

                                </div>
                                <hr class="sidebar-divider">
                                <button class="d-none d-sm-inline-block btn btn-block shadow-sm"
                                    style="background-color: #269aa0;color:#fff">Guardar</button>
                            </form>
                        </div>
                    </div>
                @endif

            </div>

        </div>
    </div>
    <script>
        let selectElement = document.querySelector('#jefe');
        let search = document.querySelector('#search');
        if (selectElement) {
            selectElement.addEventListener("change", function() {
                let tiendas = [];
                console.log(tiendas);
                let data = {
                    'jefe': document.querySelector('#jefe').value,
                }
                fetch('busqueda-cdc', {
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                                'content')
                        },
                        method: 'POST',
                        body: JSON.stringify(data)
                    })
                    .then(response => response.json())
                    .then(function(result) {
                        // console.log(result);
                        // let claves = Object.keys(result);
                        let claves = result;
                        for (let i = 0; i < claves.length; i++) {
                            let clave = claves[i];

                            if (clave.boss_id != "") {
                                tiendas[i] =
                                    '<input checked="checked" class="mycheck2" type="checkbox" name="options[]" value=' +
                                    clave.id + ' />' + clave.description + '<br/>';
                            } else {
                                tiendas[i] = '<input class="mycheck2" type="checkbox" name="options[]" value=' +
                                    clave.id + ' />' + clave.description + '<br/>';
                            }

                            // checked ='+ clave.boss_id != null ? +'checked'+:+''
                            //'+clave.boss_id != null ?+'checked=checked'
                        }
                        // console.log(result);
                        if (result == 1) {
                            search.innerHTML = "";
                        } else {
                            search.innerHTML = tiendas.join('');
                        }



                        if (name.value == "") {
                            Swal.fire({
                                title: 'Error!',
                                text: 'No se ha encontrado el documento en nuestras bases',
                                icon: 'warning',
                                confirmButtonText: 'Continuar'
                            })
                        }
                        if (result.position == 1) {
                            fecha1.style.display = 'none';
                            fechas1.style.display = 'none';
                            fecha2.style.display = 'none';
                            fechas2.style.display = 'none';
                        }
                    })
                    .catch(function(error) {
                        name.value = "";
                        //   id_co.value = ""; 
                    });

            });
        }
    </script>
@endsection
