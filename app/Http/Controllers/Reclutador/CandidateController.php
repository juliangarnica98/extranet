<?php

namespace App\Http\Controllers\Reclutador;

use App\Http\Controllers\Controller;

use App\Models\Cv;
use App\Models\Cvvacant;
use App\Models\Discarded;
use App\Models\Recruitment;
use App\Models\State;
use App\Models\Vacant;
use DB;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;


class CandidateController extends Controller
{
   
    public function index()
    {
        Paginator::useBootstrap();
        $vacants = Vacant::where('state',1)->where('job',0)->paginate();
        return view('reclutador.candidate.indexcandidato',compact('vacants'));
    }
    public function vercandidato($id,$vacant)
    {
        $postulacion = Cvvacant::where('cv_id',$id)->where('vacant_id',$vacant)->first();
        $postulacion->revision=1;
        $postulacion->save();
        Paginator::useBootstrap();
        $cv = Cv::where('id',$id)->first();
        // return $pivot;
        return view('reclutador.candidate.showcandidate',compact('cv','postulacion'));
    }
    public function buscar($id)
    {    
        Paginator::useBootstrap();
        $states = State::paginate();
        $vacants=Vacant::with('cvs')->where('id',$id)->paginate();
        // return $vacants;
        return view('reclutador.candidate.showcandidatos',compact('vacants','states'));
    }
    public function descartar($id,$vacant,Request $request){
        $postulacion = Cvvacant::where('cv_id',$id)->where('vacant_id',$vacant)->first();
        $state = State::find(11);
        $discarded= new Discarded();
        if($request->comentarios){
            $discarded->comentarios=$request->comentarios;
        }else{ 
            $discarded->comentarios="Sin comentarios";
        }
        $postulacion->discarded()->save($discarded);
        $state->cvvacant()->save($postulacion);  
        $vacant = Vacant::where('id',$vacant)->first();
        $vacant->num_aplic=$vacant->num_aplic-1;
        $vacant->save();
        return redirect('reclutador/candidatos')->with('message','Se ha descartado el candidato');
    }
    public function seleccionar($id,$vacant){
        $postulacion = Cvvacant::where('cv_id',$id)->where('vacant_id',$vacant)->first();
        $state = State::find(2);
        $state->cvvacant()->save($postulacion);  
        return redirect('reclutador/candidatos')->with('message','Se ha seleccionado el candidato');
    }

    
}
