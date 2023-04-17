<div class="modal fade" id="Modalverreclutado{{ $reclutado->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="exampleModalLabel">Calificacion {{$reclutado->cv->name}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <div class="modal-body">

                <span>ETHIKOS:</span>
                <label class="text-center">{{ $reclutado->ethikos}}</label><br>
                
                <span>TEN_DISC:</span>
                <label class="text-center">{{ $reclutado->ten_disc }}</label><br>

                <span>POTENCIAL COMERCIAL:</span>
                <label class="text-center">{{ $reclutado->potencial_comercial }}</label><br>

                <span>IQ FACTORIAL:</span>
                <label class="text-center">{{ $reclutado->iq_factorial }}</label><br>
                
                <span>V&P TEST:</span>
                <label class="text-center">{{ $reclutado->vp_test }}</label><br>
                
              
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>
