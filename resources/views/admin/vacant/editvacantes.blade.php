<div class="modal fade" id="Modaledit{{ $vacant->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="exampleModalLabel">Editar
                    vacante</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="{{ route('admin.edit.vacant', $vacant->id) }}">
                @method('PUT')
                @csrf

                <div class="modal-body">

                    <div class="form-group">
                        <div class="row justify-content-center">
                            <div class="col-5">

                                <div class="form-outline">

                                    <input type="text" id="form8Example1" class="form-control" name="title"
                                        value="{{ $vacant->title }}" />
                                    <label class="form-label text-dark" for="form8Example1">Titulo</label>
                                </div>
                            </div>
                            <div class="col-5">

                                <div class="form-outline">
                                    <input type="text" id="form8Example2" class="form-control" name="city"
                                        value="{{ $vacant->city }}" />
                                    <label class="form-label text-dark" for="form8Example2">Ciudad</label>
                                </div>
                            </div>
                        </div>



                        <div class="row justify-content-center">

                            <div class="col-5">

                                <div class="form-outline">
                                    <input type="text" id="" class="form-control" name="salary"
                                        value="{{ $vacant->salary }}" />
                                    <label class="form-label text-dark" for="form8Example4">Salario</label>
                                </div>
                            </div>
                            <div class="col-5">

                                <div class="form-outline">
                                    <input type="text" id="" class="form-control" name="num_vacants"
                                        value="{{ $vacant->num_vacants }}" />
                                    <label class="form-label text-dark" for="form8Example4">Número
                                        de
                                        vacantes</label>
                                </div>
                            </div>

                        </div>




                        <div class="row justify-content-center">
                            <div class="col-5">
                                <div class="form-outline">
                                    <select class="form-select form-control" name="education">
                                        <option value="Primaria" {{$vacant->education == 'Primaria' ? 'selected' : ''}} >Primaria</option>
                                        <option value="Bachillerato" {{$vacant->education == 'Bachillerato' ? 'selected' : ''}} >Bachillerato</option>
                                        <option value="Técnico" {{$vacant->education == 'Técnico' ? 'selected' : ''}} >Técnico</option>
                                        <option value="Tecnólogo" {{$vacant->education == 'Tecnólogo' ? 'selected' : ''}} >Tecnólogo</option>
                                        <option value="Pregrado" {{$vacant->education == 'Pregrado' ? 'selected' : ''}} >Pregrado</option>
                                        <option value="Postgrado" {{$vacant->education == 'Postgrado' ? 'selected' : ''}} >Postgrado</option>
                                        <option value="Maestria" {{$vacant->education == 'Maestria' ? 'selected' : ''}}  >Maestria</option>
                                    </select>
                                    <label class="form-label text-dark" for="form8Example4">Educación minima</label>
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="form-outline">
                                    <input type="text" id="" class="form-control" name="language" value="{{ $vacant->language }}"  />
                                    <label class="form-label text-dark" for="form8Example4">Idiomas requeridos</label>
                                </div>
                            </div>
                        </div>


                        <div class="row justify-content-center">
                            <div class="col-5">
                                <div class="form-outline">
                                    
                                    <select class="form-select form-control" name="availability_travel">7
                                        <option value="no" {{$vacant->availability_travel == 'no' ? 'selected' : ''}} >No</option>
                                        <option value="si" {{$vacant->availability_travel == 'si' ? 'selected' : ''}} >Si</option>
                                       
                                    </select>
                                    <label class="form-label text-dark" for="form8Example4">Disponibilidad de viajar</label>
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="form-outline">
                                    <select class="form-select form-control" name="type_contract">7
                                        <option value="fijo" {{$vacant->type_contract == 'fijo' ? 'selected' : ''}}>Fijo</option>
                                        <option value="indefinido" {{$vacant->type_contract == 'indefinido' ? 'selected' : ''}}>Indefinido</option>
                                        <option value="obra o labor" {{$vacant->type_contract == 'obra o labo' ? 'selected' : ''}}>Obra o labor</option>
                                    </select>
                                    <label class="form-label text-dark" for="form8Example4">Tipo de contrato</label>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-10">

                                <div class="form-outline">
                                    {{-- <input type="text" id="" class="form-control" name="description" /> --}}
                                    <textarea id="" class="form-control" name="description"  cols="30" rows="3" value="{{ $vacant->description }}" ></textarea>
                                    <label class="form-label text-dark" for="form8Example3">Descripcion</label>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-10">

                                <div class="form-outline">

                                    <textarea class="form-control" name="experience" id="" cols="30" rows="3" value="{{ $vacant->experience }}"></textarea>
                                    <label class="form-label text-dark" for="form8Example3">Experiencia
                                        requerida</label>
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
