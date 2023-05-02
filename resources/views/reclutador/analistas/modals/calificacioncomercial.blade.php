<div class="modal fade" id="Modalcalificacion{{ $postulaciones->recruitment->id }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content text-dark">
            <div class="modal-header">
                {{-- <h5 class="modal-title text-dark" id="exampleModalLabel">Candidato
                    {{ $cv->title }}</h5> --}}
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('reclutador.analista.calificacion', $postulaciones->recruitment->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <select class="form-select form-control" aria-label="Default select example" name="visita_domiciliaria">
                            <option value="" selected>VISITA DOMICILIARIA</option>
                            <option value="APROBADO">APROBADO</option>
                            <option value="NO APROBADO">NO APROBADO</option>
                            
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-select form-control" aria-label="Default select example" name="poligrafo">
                            <option value="" selected>POLIGRAFO</option>
                            <option value="APROBADO">APROBADO</option>
                            <option value="NO APROBADO">NO APROBADO</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</div>
