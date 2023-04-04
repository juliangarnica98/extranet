<!-- Modal -->
<div class="modal fade" id="cedula_verificacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Documento del candidato</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('home.vacante', ['id' => $vacant_found->id, 'type' => '2']) }}" method="post">
                @csrf
                <div class="modal-body">
                    {{-- <label for="">Ingrese su cedula</label> --}}
                    <input type="nomber" placeholder="Ingrese su numero de documentos sin puntos " name="cedula" class="form-control" id="" style="border-radius:25px">  
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-block col-12" data-dismiss="modal"
                        style="border-radius: 20px; ">Cancelar</button>
                        <button type="submit" class="btn btn-secondary btn-block col-12" 
                        style="border-radius: 20px; background-color: #e85199;color:#fff">Aplicar</button>
                    {{-- <a href=""
                        class="btn btn-info btn-block col-12" style="border-radius: 20px; ">Aplicar</a> --}}
                </div>
            </form>
        </div>
    </div>
</div>
