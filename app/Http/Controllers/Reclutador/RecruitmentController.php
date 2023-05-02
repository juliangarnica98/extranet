<?php

namespace App\Http\Controllers\Reclutador;

use App\Http\Controllers\Controller;

use App\Models\Cv;
use App\Models\Cvvacant;
use App\Models\Recruitment;
use App\Models\Vacant;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Pagination\Paginator;

class RecruitmentController extends Controller
{
    public function index()
    {
        Paginator::useBootstrap();
        $vacants = Vacant::where('state',1)->where('job',0)->paginate();
        // dd($vacants);
        return view('reclutador.reclutamiento.indexreclutamientos',compact('vacants'));
    }
  
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'comentarios' => 'required|max:255',
        ]);
        if($validator->fails()){
            return back()->with('error','¡Hay errores en los campos!');
        }

        $reclutamiet = new Recruitment;
        $reclutamiet->comentarios = $request->comentarios;
        $postulacion = Cvvacant::where('cv_id',$request->cv_id)->where('vacant_id',$request->vacant_id)->first();
        $postulacion->recruitment()->save($reclutamiet);

        return redirect('reclutador/reclutamientos')->with('message','Reclutamiento exitoso');
    }


    public function show($id)
    {
        Paginator::useBootstrap();
        $postulaciones = Cvvacant::with('recruitment')->where('vacant_id',$id)->paginate(10);
        $pos_validacion = Cvvacant::with('recruitment')->where('vacant_id',$id)->first();
        $vacant = Vacant::where('id',$id)->first();
        $cvs = Cv::all();
        $reclutamiento= Recruitment::where('cvvacant_id',$pos_validacion->id)->get();
        // dd(count($postulaciones));
        return view('reclutador.reclutamiento.indexreclutamiento',compact('vacant','postulaciones','cvs','reclutamiento'));
    }

    public function send($id)
    {
        $now = new \DateTime();
        $reclutamiet = Recruitment::find($id);
        $reclutamiet->pruebas = 1;
        $reclutamiet->fecha = $now->format('d-m-Y H:i');
        $postulacion = Cvvacant::find($reclutamiet->cvvacant_id);
        $postulacion->pruebas = 1;
        $postulacion->state_id=3;
        $postulacion->save();
        $postulacion->recruitment()->save($reclutamiet);
        return back()->with('message','Calificación');
    }
  
    public function update(Request $request, $id)
    {
        
       
        $validator = Validator::make($request->all(), [
            'ethikos' => 'required|numeric|digits_between:2,3',
            'ten_disc' => 'required|numeric|min:2|digits_between:2,3',
            'potencial_comercial' => 'numeric|min:0|max:100|digits_between:1,3',
            'iq_factorial' => 'numeric|min:0|max:100|digits_between:1,3',
            'vp_test' => 'numeric|min:0|max:100|digits_between:1,3',
        ]);
        if($validator->fails()){
            return back()->with('error',$validator->errors()->first());
        }
        $reclutamiet = Recruitment::find($id);
      
        $reclutamiet->ethikos = $request->ethikos;
        $reclutamiet->ten_disc = $request->ten_disc;
        $reclutamiet->potencial_comercial = $request->potencial_comercial;
        $reclutamiet->iq_factorial = $request->iq_factorial;
        $reclutamiet->vp_test = $request->vp_test;
        $reclutamiet->save();
        return back()->with('message','Calificación');
    }


    public function destroy($id)
    {
        
    }
}
