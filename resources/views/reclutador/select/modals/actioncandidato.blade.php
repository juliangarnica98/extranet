<div class="modal fade" id="Modalstore{{ $cv->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content text-dark">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="exampleModalLabel">Candidato
                    {{ $cv->title }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form method="POST" action="{{route('reclutador.store')}}">
                @csrf
                <div class="modal-body">
                    {{-- <div class="form-group">
                        <label for="">REGIONAL</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="inputPassword" placeholder="" name="regional">
                        </div>
                    </div> --}}
                    <div class="form-group">
                        <div class="col-sm-12">
                            <label for="">COMENTARIOS</label>
                            <textarea name="comentarios" cols="40" rows="5" class="form-control"></textarea>
                        </div>
                    </div>
                    <input type="hidden" name="cv_id" value="{{ $cv->id }}" id="">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-success">Reclutar</button>
                </div>
            </form>
        </div>
    </div>
</div>
