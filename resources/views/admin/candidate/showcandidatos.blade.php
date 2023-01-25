<div class="modal fade" id="Modalver{{ $cv->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="exampleModalLabel">Candidatos
                    {{ $cv->title }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <div class="modal-body">

                <span>Fecha:</span>
                <label class="text-center">{{ date('d-m-Y', strtotime($cv->created_at)) }}</label><br>
                <span>Vacante:</span>
                <label class="text-center"> @foreach ($vacants as $vacant)
                    @if ($cv->vacant_id === $vacant->id)
                        {{ $vacant->description }}
                    @endif
                @endforeach</label><br>
                <span>Nombre:</span>
                <label class="text-center">{{ $cv->name }}</label><br>
                <span>Estado del candidato:</span>
                <label class="text-center badge-success">
                @foreach ($states as $state)
                    @if ($cv->state_id==$state->id)
                        {{$state->description}}
                    @endif 
                @endforeach
                </label><br>
                <span>Tipo de documento:</span>
                <label class="text-center">${{ $cv->type_id }}</label><br>
                <span>Numero de documento:</span>
                <label class="text-center">{{ $cv->num_id }}</label><br>
                </label><br>
                <span>Número de celular:</span>
                <label class="text-center">{{ $cv->num_cell}}</label><br>
                <span>Número de celular opcional:</span>
                <label class="text-center">{{$cv->num_cell2}}</label><br>
                <span>Edad:</span>
                <label class="text-center">{{ $cv->age}}</label><br>
                <span>Correo:</span>
                <label class="text-center">{{ $cv->email }}</label><br>
                <span>Dirección:</span>
                <label class="text-center">{{ $cv->address }}</label><br>
                <span>Ciudad de residencia:</span>
                <label class="text-center">{{ $cv->city_address }}</label><br>
                <span>Perfil academico culminado:</span>
                <label class="text-center">{{ $cv->academic_profile}}</label><br>
                <span>Nombre ultima empresa:</span>
                <label class="text-center">{{ $cv->name_last_company  }}</label><br>
                <span>Cargo:</span>
                <label class="text-center">{{  $cv->position_last_company }}</label><br>
                <span>Funciones:</span>
                <label class="text-center">{{ $cv->funtion_last_company }}</label><br>
                <span>Actualmente trabaja:</span>
                <label class="text-center">{{  $cv->work_last_company }}</label><br>
                <span>Fecha inicio:</span>
                <label class="text-center">{{  $cv->date_init_company}}</label><br>
                <span>Fecha fin:</span>
                <label class="text-center">{{ $cv->date_finally_company }}</label><br>
                <span>Nombre penultima empresa:</span>
                <label class="text-center">{{ $cv->name_last_company2}}</label><br>
                <span>Cargo:</span>
                <label class="text-center">{{ $cv->position_last_company2 }}</label><br>
                <span>Funciones :</span>
                <label class="text-center">{{ $cv->funtion_last_company2}}</label><br>
                

                <span>Fecha inicio :</span>
                <label class="text-center">{{ $cv->date_init_company2 }}</label><br>
                <span>Fecha fin :</span>
                <label class="text-center">{{$cv->date_finally_company2 }}</label><br>
                <span>Tiene familia  :</span>
                <label class="text-center">{{ $cv->family  }}</label><br>
                <span> Por que le gustaria trabajar :</span>
                <label class="text-center">{{$cv->like_to_work }}</label><br>
                <span> Anteiormente habia trabajado  :</span>
                <label class="text-center">{{$cv->previously_work}}</label><br>
                <span>Por que deberiamos escogerlo :</span>
                <label class="text-center">{{  $cv->should_choose }}</label><br>
                <span> Talla de camisa :</span>
                <label class="text-center">{{ $cv->shirt_size}}</label><br>
                <span> Talla pantalón :</span>
                <label class="text-center">{{ $cv->pant_size}}</label><br>
                
                
                
               
               
                 

               
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>
