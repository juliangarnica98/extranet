<div class="modal fade" id="Modalve{{ $retiro->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="exampleModalLabel">Vacante
                    {{ $retiro->title }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <div class="modal-body">

                <span>Fecha:</span>
                <label class="text-center">{{ date('d-m-Y', strtotime($retiro->created_at)) }}</label><br>
                <span>Nombre:</span>
                <label class="text-center">{{ $retiro->name_collaborator  }}</label><br>
             
                <span>Documento:</span>
                <label class="text-center">{{  $retiro->document_collaborator }}</label><br>
                <span>Tipo de retiro:</span>
                <label class="text-center">
                    @foreach ($tipo_retiro as $typo)
                        @if ($retiro->type_retirement_id == $typo->id)
                            {{ $typo->description }}
                        @endif
                    @endforeach
                </label><br>
                <span>Ultimo dia:</span>
                <label class="text-center">{{ $retiro->last_day }}</label><br>
                <span>Desempeño:</span>
                <label class="text-center">{{ $retiro->performance }}</label><br>
                <span>Dinero pendiente:</span>
                <label class="text-center">{{ $retiro->money_pend }}</label><br>
                <span>Cantidad dinero pendiente:</span>
                <label class="text-center">{{ $retiro->money_amou }}</label><br>
                <span>Concepto de dinero pendiente:</span>
                <label class="text-center">{{ $retiro->money_conc }}</label><br>
                <span>Fecha novedad 1:</span>
                <label class="text-center">{{ $retiro->date_1 }}</label><br>
                <span>Fecha novedad 2:</span>
                <label class="text-center">{{ $retiro->date_2 }}</label><br>
                <span>Fecha novedad 3:</span>
                <label class="text-center">{{ $retiro->date_3 }}</label><br>
                <span>Fecha novedad 4:</span>
                <label class="text-center">{{ $retiro->date_4 }}</label><br>
                <span>Fecha novedad 5:</span>
                <label class="text-center">{{ $retiro->date_5 }}</label><br>
                <span>Fecha dominical 1:</span>
                <label class="text-center">{{ $retiro->date_d_1 }}</label><br>
                <span>Fecha dominical 2:</span>
                <label class="text-center">{{ $retiro->date_d_2 }}</label><br>
                <span>Fecha dominical 3:</span>
                <label class="text-center">{{ $retiro->date_d_3 }}</label><br>
                <span>Fecha dominical 4:</span>
                <label class="text-center">{{ $retiro->date_d_4 }}</label><br>
                <span>Fecha dominical 5:</span>
                <label class="text-center">{{ $retiro->date_d_5 }}</label><br>
                <span>Entrega <strong>Perfil de tienda</strong>:</span>
                <label class="text-center">{{ $retiro->store_ent }}</label><br>
                <span>Entrega <strong>Administrador</strong>:</span>
                <label class="text-center">{{ $retiro->admin_ent }}</label><br>
                <span>Entrega <strong>Cedi</strong>:</span>
                <label class="text-center">{{ $retiro->cedi_ent }}</label><br>
                <span>Equipo celular:</span>
                <label class="text-center">{{ $retiro->cell }}</label><br>
                <span>Acta de entrega:</span>
                <label class="text-center">{{ $retiro->delivery_certificate }}</label><br>
                <span>Carta de renuncia:</span>
                <label class="text-center">{{ $retiro->letter }}</label><br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>
