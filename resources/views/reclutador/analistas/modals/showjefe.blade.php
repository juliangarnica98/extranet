<div class="modal fade" id="Modaljefe{{ $postulaciones->recruitment->id }}" tabindex="-1" role="dialog"
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
            @if (count($bosses)==0)
            <div class="modal-body">
              <h3>NO SE HAN IMPORTADO JEFES</h3>
            </div>
            @else     
                <div class="modal-body">
                    <form method="POST" action="{{ route('reclutador.analista.jefe', $postulaciones->recruitment->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <select class="form-select form-control" aria-label="Default select example" name="boss_id">
                                <option value="" selected>SELECCIONE UN JEFE</option>
                                @foreach ( $bosses as $boss)
                                    <option value="{{$boss->id}}">{{$boss->name}}</option>
                                @endforeach                            
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">ASIGNAR JEFE</button>
                    </form>
                </div>
            @endif
        </div>
    </div>
</div>
