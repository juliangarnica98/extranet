<div class="modal fade" id="Modaledit{{ $reclutado->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="exampleModalLabel"> Calificacion de pruebas </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>


            <div class="modal-body">
                <form method="POST" action="{{ route('reclutador.update', $reclutado->id) }}">
                    {{-- <form method="POST" action="{{ route('cerrarvacante', $vacant->id) }}"> --}}
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        {{-- <label for="exampleInputEmail1">Email address</label> --}}
                        <input type="number" class="form-control" aria-describedby="emailHelp" placeholder="ETHIKOS"
                            name="ethikos">
                        {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                    </div>
                    <div class="form-group">
                        {{-- <label for="exampleInputPassword1">Password</label> --}}
                        <input type="number" class="form-control" placeholder="TEN_DISC" name="ten_disc">
                    </div>
                    <div class="form-group">
                        {{-- <label for="exampleInputPassword1">Password</label> --}}
                        <input type="number" class="form-control" placeholder="Potencial Comercial" name="potencial_comercial">
                    </div>
                    <div class="form-group">
                        {{-- <label for="exampleInputPassword1">Password</label> --}}
                        <input type="number" class="form-control" placeholder="IQ factorial" name="iq_factorial">
                    </div>
                    <div class="form-group">
                        {{-- <label for="exampleInputPassword1">Password</label> --}}
                        <input type="number" class="form-control" placeholder="V&P test" name="vp_test">
                    </div>
                
                    
                    <button type="submit" class="btn btn-primary">Enviar resultados</button>
                </form>


            </div>
            {{-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div> --}}

        </div>
    </div>
</div>
