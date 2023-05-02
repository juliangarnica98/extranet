<div class="modal fade" id="Modaledit{{ $postulaciones->recruitment->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark text-center" id="exampleModalLabel"> Calificacion de pruebas </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>


            <div class="modal-body">
                <form method="POST" action="{{ route('reclutador.update', $postulaciones->recruitment->id ) }}">
                    {{-- <form method="POST" action="{{ route('cerrarvacante', $vacant->id) }}"> --}}
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                
                                <input type="number" class="form-control border-0" aria-describedby="emailHelp" placeholder="ETHIKOS" readonly
                                    name="ethikos">
                                {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                            </div>
                            <div class="form-group">
                                {{-- <label for="exampleInputPassword1">Password</label> --}}
                                <input type="number" class="form-control border-0" placeholder="TEN_DISC" name="ten_disc" readonly >
                            </div>
                            <div class="form-group">
                                {{-- <label for="exampleInputPassword1">Password</label> --}}
                                <input type="number" class="form-control border-0" placeholder="Potencial Comercial" name="potencial_comercial" readonly>
                            </div>
                            <div class="form-group">
                                {{-- <label for="exampleInputPassword1">Password</label> --}}
                                <input type="number" class="form-control border-0" placeholder="IQ factorial" name="iq_factorial" readonly>
                            </div>
                            <div class="form-group">
                                {{-- <label for="exampleInputPassword1">Password</label> --}}
                                <input type="number" class="form-control border-0" placeholder="V&P test" name="vp_test" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                
                                <input type="number" class="form-control" aria-describedby="emailHelp" placeholder="ETHIKOS" value="0"
                                    name="ethikos">
                                {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                            </div>
                            <div class="form-group">
                                {{-- <label for="exampleInputPassword1">Password</label> --}}
                                <input type="number" class="form-control" placeholder="TEN_DISC" name="ten_disc" value="0">
                            </div>
                            <div class="form-group">
                                {{-- <label for="exampleInputPassword1">Password</label> --}}
                                <input type="number" class="form-control" placeholder="Potencial Comercial" name="potencial_comercial" value="0">
                            </div>
                            <div class="form-group">
                                {{-- <label for="exampleInputPassword1">Password</label> --}}
                                <input type="number" class="form-control" placeholder="IQ factorial" name="iq_factorial" value="0">
                            </div>
                            <div class="form-group">
                                {{-- <label for="exampleInputPassword1">Password</label> --}}
                                <input type="number" class="form-control" placeholder="V&P test" name="vp_test" value="0">
                            </div>
                        </div>
                    </div>
                    
                
                    
                    <button type="submit" class="btn btn-primary">Enviar resultados</button>
                </form>


            </div>

        </div>
    </div>
</div>
