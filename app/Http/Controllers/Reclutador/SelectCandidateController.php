<?php

namespace App\Http\Controllers\Reclutador;


use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Models\Cv;
use App\Models\Cvvacant;
use App\Models\Discarded;
use App\Models\Recruitment;
use App\Models\State;
use App\Models\Type_cv;
use App\Models\Vacant;
use DB;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;

class SelectCandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Paginator::useBootstrap();
        $vacants = Vacant::where('state',1)->where('job',0)->paginate();
        // dd($vacants);
        return view('reclutador.select.indexselect',compact('vacants'));
    }
    public function buscar($id)
    {
        Paginator::useBootstrap();
        $postulaciones=Cvvacant::where('vacant_id',$id)->whereIn('state_id',['2'])->paginate(10);
        $vacants=Vacant::paginate();      
        $cvs=Cv::paginate();      
        $name_vacant = Vacant::where('id',$id)->first();
        $active_seleccionados=1;
        return view('reclutador.select.showcandidatos',compact('vacants','postulaciones','cvs','name_vacant','active_seleccionados'));
    }
    public function vercandidato($id,$vacant)
    {
        Paginator::useBootstrap();
        $postulacion = Cvvacant::where('cv_id',$id)->where('vacant_id',$vacant)->first();
        $cv = Cv::with('jobs')->where('id',$id)->first();
        $vacants = Vacant::paginate();       
        $reclutamiento = Recruitment::where('cvvacant_id',$postulacion->id)->first();
        $name_vacant=Vacant::where('id',$vacant)->first();
        $active_seleccionados=1;
        return view('reclutador.select.showcandidate',compact('cv','vacants','postulacion','reclutamiento','name_vacant'));
    }
    public function pruebas($id)
    {
        
        $postulacion = Cvvacant::where('id',$id)->first();
        $postulacion->state_id=3;
        $postulacion->save();
        return \Redirect::route('reclutador.reclutamientos.buscar', $postulacion->vacant_id)->with('message', 'Se ha cambiado de estado correctamente');
        // return back()->with('message','Se ha cambiado de estado correctamente');
    }
}
