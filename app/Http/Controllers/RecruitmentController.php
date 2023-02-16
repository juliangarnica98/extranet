<?php

namespace App\Http\Controllers;

use App\Models\Cv;
use App\Models\Recruitment;
use Illuminate\Http\Request;
use Validator;

class RecruitmentController extends Controller
{
    
    public function index()
    {
      $reclutamientos = Recruitment::with('cv')->get();
    //   return($reclutamientos);
      return view('reclutador.reclutamiento.indexreclutamiento',compact('reclutamientos'));
    }

  
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'regional' => 'required|max:255',
            'comentarios' => 'required|max:255',
        ]);
        if($validator->fails()){
            return back()->with('error','¡Hay errores en los campos!');
        }

        $reclutamiet = new Recruitment;
        $now = new \DateTime();
        $reclutamiet->regional = $request->regional;
        $reclutamiet->comentarios = $request->comentarios;
        $reclutamiet->pruebas = 1;
        $reclutamiet->fecha = $now->format('d-m-Y H:i');
        $cv = Cv::find($request->cv_id);
        $cv->pruebas = 1;
        $cv->save();
        $cv->recruitment()->save($reclutamiet);
        return redirect('reclutador/index')->with('message','Registro exitoso');
    }


    public function show($id)
    {
        
    }

  
    public function update(Request $request, $id)
    {
        
       
        $validator = Validator::make($request->all(), [
            'ethikos' => 'required|numeric|digits_between:2,3',
            'ten_disc' => 'required|numeric|min:2|digits_between:2,3',
        ]);
        if($validator->fails()){
            return back()->with('error','¡Hay errores en los campos!');
        }
        $reclutamiet = Recruitment::find($id);
      
        $reclutamiet->ethikos = $request->ethikos;
        $reclutamiet->ten_disc = $request->ten_disc;
        $reclutamiet->save();
        return redirect('reclutador/reclutamientos')->with('message','Calificación');
    }


    public function destroy($id)
    {
        
    }
}
