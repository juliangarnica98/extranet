<div class="modal fade" id="Modaldescartar{{ $cv->id }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content text-black" style="border-radius: 25px;" >
            {{-- <div class="modal-header">
                <h5 class="modal-title text-dark" id="exampleModalLabel">Candidato
                    {{ $cv->title }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div> --}}
            

                <form method="POST" action="{{ route('reclutador.candidato.rechazar', [$postulacion->cv_id,$postulacion->vacant_id])}}">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <div class="col-sm-12">
                                <label for="">COMENTARIOS</label>
                                <textarea name="comentarios" cols="40" rows="5" class="form-control" style="border-radius: 25px;"></textarea>
                            </div>
                        </div>
                        {{-- <input type="hidden" name="cv_id" value="{{ $cv->id }}" id=""> --}}
                        <button type="submit" class="btn btn-block text-black" style="background-color: #01b9b5"><b>DESCARTAR</b></button>
                    </div>
                    {{-- <div class="modal-footer"> --}}
                        {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button> --}}
                        {{-- <button type="submit" class="btn btn-block text-black" style=""><b>DESCARTAR</b></button> --}}
                    {{-- </div> --}}
                </form>
            
        </div>
    </div>
</div>
