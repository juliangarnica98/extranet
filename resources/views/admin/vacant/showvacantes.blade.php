<div class="modal fade" id="Modalview{{ $vacant->id }}"
    tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark"
                    id="exampleModalLabel">Vacante
                    {{ $vacant->title }}</h5>
                <button type="button" class="close"
                    data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <div class="modal-body">

                <span>Fecha:</span>
                <label
                    class="text-center">{{ date('d-m-Y', strtotime($vacant->created_at)) }}</label><br>
                <span>Ciudad:</span>
                <label
                    class="text-center">{{ $vacant->city }}</label><br>
                <span>Descripción:</span>
                <label
                    class="text-center">{{ $vacant->description }}</label><br>
                <span>Salario:</span>
                <label
                    class="text-center">${{ $vacant->salary }}</label><br>
                <span>Experiencia:</span>
                <label
                    class="text-center">{{ $vacant->experience }}</label><br>
                <span>Vacantes:</span>
                <label
                    class="text-center">{{ $vacant->num_vacants }}</label><br>
                <span>Postulaciones:</span>
                <label
                    class="text-center">{{ $vacant->num_aplic }}</label><br>
                <span>Estado:</span>
                @if ($vacant->state == 1)
                    <label class="badge-success"
                        style="border-radius: 10px;padding:0.3rem">Abierta</label>
                @else
                    <label class="badge-danger"
                        style="border-radius: 10px;padding:0.3rem">Cerrada</label>
                @endif




            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"
                    data-dismiss="modal">Close</button>

            </div>

        </div>
    </div>
</div>