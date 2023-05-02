<div class="modal fade" id="Modalentrevista{{ $postulaciones->recruitment->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content text-dark">
            <div class="modal-header">
                {{-- <h5 class="modal-title text-dark" id="exampleModalLabel">Candidato
                    {{ $cv->title }}</h5> --}}
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form method="POST" action="{{route('reclutador.analista.entrevista',$postulaciones->recruitment->id )}}">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="form-group">
                        <div class="col-sm-12">
                            <label for="">ENTREVISTA</label>
                            <textarea name="entrevista_analista" cols="50" rows="15" class="form-control"></textarea>
                        </div>
                    </div>
                    {{-- <input type="hidden" name="cv_id" value="{{ $postulacion->cv_id }}" id="">
                    <input type="hidden" name="vacant_id" value="{{ $postulacion->vacant_id }}" id=""> --}}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
                    <button type="submit" class="btn btn-success">ENVIAR</button>
                </div>
            </form>
        </div>
    </div>
</div>
