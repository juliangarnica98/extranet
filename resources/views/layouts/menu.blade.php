<div class="row justify-content-center" style="border-radius: 25px;background-color: #fff;font-size: 0.9rem">


    <div class="col-md-6">
        <div class="row">
            @if (isset($active_postulados))
                <div class="col-md-3 sub-nav-link active ">
                    <a class="nav-link text-center text-black"
                        href="{{ route('reclutador.aspirantes', ['id' => $name_vacant->id]) }}">
                        <b><i class="fas fa-users"></i> <br>POSTULADOS</b>
                    </a>
                </div>
            @else
                <div class="col-md-3 sub-nav-link ">
                    <a class="nav-link text-center text-black"
                        href="{{ route('reclutador.aspirantes', ['id' => $name_vacant->id]) }}">
                        <b><i class="fas fa-users"></i> <br>POSTULADOS</b>
                    </a>
                </div>
            @endif
            @if (isset($active_seleccionados))    
                <div class="col-md-3 sub-nav-link active"> <a class="nav-link text-center text-black "
                href="{{ route('reclutador.seleccionados.buscar', ['id' => $name_vacant->id]) }}"><b><i
                    class="fas fa-user-friends"></i><br>SELECCIONADOS</b></a></div>
            @else
            <div class="col-md-3 sub-nav-link "> <a class="nav-link text-center text-black "
                href="{{ route('reclutador.seleccionados.buscar', ['id' => $name_vacant->id]) }}"><b><i
                    class="fas fa-user-friends"></i>
                <br> SELECCIONADOS</b></a></div>
                
                
            @endif
            @if (isset($active_pruebas)) 
            <div class="col-md-3 sub-nav-link active">
                <a class="nav-link text-center text-black"
                    href="{{ route('reclutador.reclutamientos.buscar', ['id' => $name_vacant->id]) }}">
                    <b><i class="fas fa-tasks"></i> <br> PRUEBAS</b>
                </a>
            </div>
            @else
            <div class="col-md-3 sub-nav-link">
                <a class="nav-link text-center text-black"
                    href="{{ route('reclutador.reclutamientos.buscar', ['id' => $name_vacant->id]) }}">
                    <b><i class="fas fa-tasks"></i> <br> PRUEBAS</b>
                </a>
            </div>
            @endif
            @if (isset($active_entrevistas))   
                <div class="col-md-3 sub-nav-link active"><a class="nav-link text-center text-black"
                        href="{{ route('reclutador.analista.index', ['id' => $name_vacant->id]) }}"><b><i
                                class="fas fa-comment-alt"></i>
                                <br> ENTREVISTAS</b>
                        <span class="sr-only">(current)</span></a>
                </div>
            @else   
                <div class="col-md-3 sub-nav-link"><a class="nav-link text-center text-black"
                    href="{{ route('reclutador.analista.index', ['id' => $name_vacant->id]) }}"><b><i
                            class="fas fa-comment-alt"></i>
                            <br> ENTREVISTAS</b>
                    <span class="sr-only">(current)</span></a>
            </div>
            @endif
        </div>
    </div>
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-3 sub-nav-link">

                <a class="nav-link text-center text-black" href="#"><b><i class="fas fa-lock"></i>
                    <br> SEGURIDAD</b>
                    <span class="sr-only">(current)</span></a>
            </div>

            <div class="col-md-3 sub-nav-link">

                <a class="nav-link text-center text-black" href="#"><b><i class="fas fa-check-double"></i>
                    <br> CONTRATACIÓN</b>
                    <span class="sr-only">(current)</span></a>
            </div>
            <div class="col-md-3 sub-nav-link"><a class="nav-link text-center text-black"
                    href=""><b>
                        <i class="fas fa-undo"></i>
                            <br>  BACKUP</b>
                    <span class="sr-only">(current)</span></a>
            </div>

            

            @if (isset($descartados))
                <div class="col-md-3 sub-nav-link active"><a class="nav-link text-center text-black "
                    href="{{ route('reclutador.discarded.index', ['id' => $name_vacant->id]) }}"><b><i
                            class="far fa-times-circle "></i>
                            <br> DESCARTADOS</b>
                    <span class="sr-only">(current)</span></a>
                </div>    
            @else
                
                <div class="col-md-3 sub-nav-link"><a class="nav-link text-center text-black"
                        href="{{ route('reclutador.discarded.index', ['id' => $name_vacant->id]) }}"><b><i
                                class="far fa-times-circle "></i>
                                <br> DESCARTADOS</b>
                        <span class="sr-only">(current)</span></a>
                </div>
            @endif

            
        </div>
    </div>








</div>