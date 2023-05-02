<?php

namespace App\Http\Controllers\Reclutador;

use App\Http\Controllers\Controller;
use App\Models\Boss;
use App\Models\Cv;
use App\Models\Cvvacant;
use App\Models\Recruitment;
use App\Models\Vacant;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Validator;

class AnalystController extends Controller
{
    
    public function index()
    {
        Paginator::useBootstrap();
        $vacants = Vacant::where('state',1)->where('job',0)->paginate();
        return view('reclutador.analistas.indexpostulados',compact('vacants'));
    }


    public function show($id)
    {
        Paginator::useBootstrap();
        $postulaciones = Cvvacant::with('recruitment')->where('vacant_id',$id)->paginate(10);
        $pos_validacion = Cvvacant::with('recruitment')->where('vacant_id',$id)->first();
        $vacant = Vacant::where('id',$id)->first();
        $cvs = Cv::all();
        $reclutamiento= Recruitment::where('cvvacant_id',$pos_validacion->id)->get();
        $bosses = Boss::orderBy('name', 'ASC')->get();
        return view('reclutador.analistas.indexpostulado',compact('vacant','postulaciones','cvs','reclutamiento','bosses'));
    }

    public function entrevista(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'entrevista_analista' => 'required',
        ]);
        if($validator->fails()){
            return back()->with('error','¡Hay errores en los campos!');
        }
        $reclutamiento = Recruitment::where('id',$id)->first();
        $reclutamiento->entrevista_analista=$request->entrevista_analista;
        $reclutamiento->save();
        return back()->with('message','Se ha regsitrado la entrevista');
     
    }
    public function calificacion(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'poligrafo' => 'required',
            'visita_domiciliaria' => 'required',
        ]);
        if($validator->fails()){
            return back()->with('error','¡Hay errores en los campos!');
        }
        $reclutamiento = Recruitment::where('id',$id)->first();
        $reclutamiento->poligrafo=$request->poligrafo;
        $reclutamiento->visita_domiciliaria=$request->visita_domiciliaria;
        $reclutamiento->save();
        return back()->with('message','Se ha regsitrado las calificaciones');
    }
    public function jefe(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'boss_id' => 'required',
        ]);
        if($validator->fails()){
            return back()->with('error','¡Hay errores en los campos!');
        }
        $reclutamiento = Recruitment::where('id',$id)->first();
        $reclutamiento->boss_id=$request->boss_id;
        $reclutamiento->save();
        return back()->with('message','Se ha asignado el jefe correctamente');
        
    }


    
}
