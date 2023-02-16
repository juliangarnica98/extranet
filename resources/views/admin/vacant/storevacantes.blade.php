{{-- @extends('layouts.admin')

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
    @endif --}}

<div class="modal fade" id="Modalstore" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="exampleModalLabel">Crear
                    vacante</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="{{ route('admin.crearvacante') }}">

                @csrf

                <div class="modal-body">

                    <div class="form-group">
                        <div class="row justify-content-center">
                            <div class="col-5">

                                <div class="form-outline">
                                    <label class="form-label text-dark" for="form8Example1">Titulo</label>
                                    <input type="text" id="form8Example1" class="form-control" name="title" />
                                    
                                </div>
                            </div>
                            <div class="col-5">

                                <div class="form-outline">
                                    <label class="form-label text-dark" for="form8Example2">Ciudad</label>
                                    <select class="form-select form-control" name="city">7
                                        <option selected value=""></option>
                                        <option value="Bogotá">Bogotá</option>
                                        <option value="Medellín">Medellín</option>
                                        <option value="Cali">Cali</option>
                                        <option value="Barranquilla">Barranquilla</option>
                                        <option value="Cartagena de Indias">Cartagena de Indias</option>
                                        <option value="Soacha">Soacha</option>
                                        <option value="Tunja">Tunja</option>
                                        <option value="Cúcuta">Cúcuta</option>
                                        <option value="Soledad">Soledad</option>
                                        <option value="Bucaramanga">Bucaramanga</option>
                                        <option value="Bello">Bello</option>
                                        <option value="Villavicencio">Villavicencio</option>
                                        <option value="Ibagué">Ibagué</option>
                                        <option value="Santa Marta">Santa Marta</option>
                                        <option value="Valledupar">Valledupar</option>
                                        <option value="Manizales">Manizales</option>
                                        <option value="Pereira">Pereira</option>
                                        <option value="Montería">Montería</option>
                                        <option value="Neiva">Neiva</option>
                                        <option value="Pasto">Pasto</option>
                                        <option value="Armenia">Armenia</option>
                                        <option value="Rioacha">Rioacha</option>
                                        <option value="Sincelejo">Sincelejo</option>
                                        <option value="Barrancabermeja">Barrancabermeja</option>
                                        <option value="Popayan">Popayan</option>
                                        <option value="Dos quebradas">Dos quebradas</option>
                                        <option value="Jamundi">Jamundi</option>
                                        <option value="Palmira">Palmira</option>
                                        <option value="Ipiales">Ipiales</option>
                                        <option value="Yumbo">Yumbo</option>
                                        <option value="Cartago">Cartago</option>
                                        <option value="Tulua">Tulua</option>
                                        <option value="Girardot">Girardot</option>
                                        <option value="Pitalito">Pitalito</option>
                                        <option value="Florencia">Florencia</option>
                                        <option value="Cajica">Cajica</option>
                                        <option value="Yopal">Yopal</option>
                                        <option value="Duitama">Duitama</option>
                                        <option value="Villeta">Villeta</option>
                                        <option value="Sogamoso">Sogamoso</option>
                                        <option value="Fusagasuga">Fusagasuga</option>
                                        <option value="Sopo">Sopo</option>
                                        <option value="Tocancipa">Tocancipa</option>
                                        <option value="Chia">Chia</option>
                                        <option value="Apartado">Apartado</option>
                                        <option value="Zipaquira">Zipaquira</option>
                                        <option value="Mosquera">Mosquera</option>
                                        <option value="Madrid">Madrid</option>
                                        <option value="Funza">Funza</option>
                                    </select>
                                   
                                </div>
                            </div>
                        </div>



                        <div class="row justify-content-center">

                            <div class="col-5">

                                <div class="form-outline">
                                    <label class="form-label text-dark" for="form8Example4">Salario</label>
                                    <input type="number" id="" class="form-control" name="salary" />
                                    
                                </div>
                            </div>
                            <div class="col-5">

                                <div class="form-outline">
                                    <label class="form-label text-dark" for="form8Example4">Número
                                        de
                                        vacantes</label>
                                    <input type="number" id="" class="form-control" name="num_vacants" />
                                    
                                </div>
                            </div>

                        </div>
                        <div class="row justify-content-center">
                            <div class="col-5">
                                <div class="form-outline">
                                    <label class="form-label text-dark" for="form8Example4">Educación minima</label>
                                    <select class="form-select form-control" name="education">
                                        <option value="Primaria">Primaria</option>
                                        <option value="Bachillerato">Bachillerato</option>
                                        <option value="Técnico">Técnico</option>
                                        <option value="Tecnólogo">Tecnólogo</option>
                                        <option value="Pregrado">Pregrado</option>
                                        <option value="Postgrado">Postgrado</option>
                                        <option value="Maestria">Maestria</option>
                                    </select>
                                    
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="form-outline">
                                    <label class="form-label text-dark" for="form8Example4">Idiomas requeridos</label>
                                    <input type="text" id="" class="form-control" name="language" />
                                </div>
                            </div>
                        </div>


                        <div class="row justify-content-center">
                            <div class="col-5">
                                <div class="form-outline">
                                    <label class="form-label text-dark" for="form8Example4">Disponibilidad de viajar</label>
                                    <select class="form-select form-control" name="availability_travel">7
                                        <option value="no">No</option>
                                        <option value="si">Si</option>
                                       
                                    </select>
                                    
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="form-outline">
                                    <label class="form-label text-dark" for="form8Example4">Tipo de contrato</label>
                                    <select class="form-select form-control" name="type_contract">7
                                        <option value="fijo">Fijo</option>
                                        <option value="indefinido">Indefinido</option>
                                        <option value="obra o labor">Obra o labor</option>
                                    </select>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-10">

                                <div class="form-outline">
                                    {{-- <input type="text" id="" class="form-control" name="description" /> --}}
                                    <label class="form-label text-dark" for="form8Example3">Descripcion</label>
                                    <textarea id="" class="form-control" name="description"  cols="30" rows="3"></textarea>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-10">

                                <div class="form-outline">
                                    <label class="form-label text-dark" for="form8Example3">Experiencia
                                        requerida</label>
                                    <textarea class="form-control" name="experience" id="" cols="30" rows="3"></textarea>
                                    
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary">Guardar
                        cambios</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- <div class="container pt-4 pl-2 pr-2">
        <div class="row justify-content-center">
            <div class="col-md-9">


                <h1 class="text-center"> Crear vancate</h1>
                <div class="container">
                    <div class="card" style="background-color: #e6e6e6;border-radius: 10px;">

                        <div class="card-body" >
                            <form method="post" action="{{ route('admin.crearvacante') }}">
                                @csrf
                                <div class="form-group">
                                    <div class="row justify-content-center pt-3">
                                        <div class="col-5">
                                            <!-- Name input -->
                                            <div class="form-outline">
                                                <input type="text" id="form8Example1" class="form-control"
                                                    name="title" />
                                                <label class="form-label" for="form8Example1">Titulo</label>
                                            </div>
                                        </div>
                                        <div class="col-5">
                                            <!-- Email input -->
                                            <div class="form-outline">
                                                <input type="text" id="form8Example2" class="form-control"
                                                    name="city" />
                                                <label class="form-label" for="form8Example2">Ciudad</label>
                                            </div>
                                        </div>
                                    </div>

                            

                                    <div class="row justify-content-center">
                                      
                                        <div class="col-5">
                                            <!-- Name input -->
                                            <div class="form-outline">
                                                <input type="number" id="" class="form-control" name="salary" />
                                                <label class="form-label" for="form8Example4">Salario</label>
                                            </div>
                                        </div>
                                        <div class="col-5">
                                            <!-- Name input -->
                                            <div class="form-outline">
                                                <input type="number" id="" class="form-control"
                                                    name="num_vacants" />
                                                <label class="form-label" for="form8Example4">Número de vacantes</label>
                                            </div>
                                        </div>
                                        { <div class="col-4">
                                            <!-- Email input -->
                                            <div class="form-outline">
                                                <input type="email" id="form8Example5" class="form-control" />
                                                <label class="form-label" for="form8Example5">Email address</label>
                                            </div>
                                        </div> -
                                    </div>

                                    <div class="row justify-content-center">
                                        <div class="col-10">
                                          
                                            <div class="form-outline">
                                                <textarea class="form-control" name="description" id="" cols="20" rows="3"></textarea>
                                                <label class="form-label" for="form8Example3">Descripción</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-10">
                                            <!-- Name input -->
                                            <div class="form-outline">
                                                <textarea class="form-control" name="experience" id="" cols="20" rows="3"></textarea>
                                                <label class="form-label" for="form8Example3">Experiencia requerida</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="justify-content-center aling-items-center text-center">
                                    <button class="btn" style="background-color: #e85199;color:#fff;">Crear
                                        vacante</button>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>



            </div>

        </div>
    </div>
@endsection --}}
