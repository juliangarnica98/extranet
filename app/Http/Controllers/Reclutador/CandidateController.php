<?php

namespace App\Http\Controllers\Reclutador;

use App\Http\Controllers\Controller;

use App\Models\Cv;
use App\Models\Discarded;
use App\Models\Recruitment;
use App\Models\State;
use App\Models\Vacant;
use DB;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;


class CandidateController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    //     $this->middleware('can:admin.index');    
    // }
    
    public function index()
    {
        Paginator::useBootstrap();
        $vacants = Vacant::where('state',1)->paginate();
        return view('reclutador.candidate.indexcandidato',compact('vacants'));
    }
    public function vercandidato($id)
    {
        Paginator::useBootstrap();
        $cv = Cv::where('type',2)->where('id',$id)->first();
        $vacants = Vacant::paginate();
        $states = State::paginate();
        return view('reclutador.candidate.showcandidate',compact('cv','vacants','states'));
    }
    public function buscar($id)
    {    
        $cvs = Cv::where('vacant_id',$id)->where('state_id','!=',11)->paginate();
        $vacants = Vacant::paginate();
        $states = State::paginate();
        return view('reclutador.candidate.showcandidatos',compact('vacants','cvs','states'));
    }
    public function descartar($id,Request $request){
        $cv = Cv::where('id',$id)->first();
        $state = State::find(11);
        $discarded= new Discarded();
        $discarded->comentarios=$request->comentarios;
        $cv->discarded()->save($discarded);
        $state->cv()->save($cv);  
        $vacant = Vacant::where('id',$cv->vacant_id)->first();
        $vacant->num_aplic=$vacant->num_aplic-1;
        return redirect('reclutador/candidatos')->with('message','Se ha descartado el candidato');
    }
    public function seleccionar($id){
        $cv = Cv::where('id',$id)->first();
        $state = State::find(2);
        $state->cv()->save($cv);  
        return redirect('reclutador/candidatos')->with('message','Se ha seleccionado el candidato');
    }

    
}
