<div class="modal fade" id="Modaledit{{ $vacant->id }}" tabindex="-1"
    role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark"
                    id="exampleModalLabel">Editar
                    vacante</h5>
                <button type="button" class="close"
                    data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST"
                action="{{ route('admin.edit.vacant', $vacant->id) }}">
                @method('PUT')
                @csrf

                <div class="modal-body">

                    <div class="form-group">
                        <div class="row justify-content-center">
                            <div class="col-5">

                                <div class="form-outline">

                                    <input type="text"
                                        id="form8Example1"
                                        class="form-control"
                                        name="title"
                                        value="{{ $vacant->title }}" />
                                    <label
                                        class="form-label text-dark"
                                        for="form8Example1">Titulo</label>
                                </div>
                            </div>
                            <div class="col-5">

                                <div class="form-outline">
                                    <input type="text"
                                        id="form8Example2"
                                        class="form-control"
                                        name="city"
                                        value="{{ $vacant->city }}" />
                                    <label
                                        class="form-label text-dark"
                                        for="form8Example2">Ciudad</label>
                                </div>
                            </div>
                        </div>



                        <div class="row justify-content-center">

                            <div class="col-5">

                                <div class="form-outline">
                                    <input type="text"
                                        id=""
                                        class="form-control"
                                        name="salary"
                                        value="{{ $vacant->salary }}" />
                                    <label
                                        class="form-label text-dark"
                                        for="form8Example4">Salario</label>
                                </div>
                            </div>
                            <div class="col-5">

                                <div class="form-outline">
                                    <input type="text"
                                        id=""
                                        class="form-control"
                                        name="num_vacants"
                                        value="{{ $vacant->num_vacants }}" />
                                    <label
                                        class="form-label text-dark"
                                        for="form8Example4">Número
                                        de
                                        vacantes</label>
                                </div>
                            </div>

                        </div>
                        <div class="row justify-content-center">
                            <div class="col-10">

                                <div class="form-outline">
                                    <input type="text"
                                        id=""
                                        class="form-control"
                                        name="description"
                                        value="{{ $vacant->description }}" />
                                    <label
                                        class="form-label text-dark"
                                        for="form8Example3">Descripcion</label>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-10">

                                <div class="form-outline">
                                    <input type="text"
                                        class="form-control"
                                        name="experience"
                                        id=""
                                        cols="30"
                                        rows="5"
                                        value="{{ $vacant->experience }}">
                                    <label
                                        class="form-label text-dark"
                                        for="form8Example3">Experiencia
                                        requerida</label>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button"
                        class="btn btn-secondary"
                        data-dismiss="modal">Close</button>
                    <button class="btn btn-primary">Guardar
                        cambios</button>
                </div>
            </form>
        </div>
    </div>
</div>