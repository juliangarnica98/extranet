<?php

namespace App\Http\Controllers\Administrador;

use App\Http\Controllers\Controller;
use App\Models\Cv;
use App\Models\Interview;
use App\Models\Vacant;
use Illuminate\Http\Request;
use Validator;

class InterviewController extends Controller
{
    public function index()
    {
        $id = auth()->id();
        $mis_entrevistas =Interview::where('user_id',$id)->pluck('vacant_id')->toArray();
        $valores = array_count_values($mis_entrevistas);
        $mis_vacantes = Vacant::whereIn('id',$mis_entrevistas)->get();
        return view('admin.interview.indexinterview',compact('mis_entrevistas','mis_vacantes','valores'));       
    }
    public function show($id)
    {
        $usuario = auth()->id();
        $mis_entrevistas =Interview::where('user_id',$usuario)->where('vacant_id',$id)->get();
        $name_vacant=Vacant::where('id',$id)->first();
        $hojas_vida = Cv::all();
        return view('admin.interview.showinterview',compact('mis_entrevistas','name_vacant','hojas_vida'));
    }
    public function edit($id)
    {
        $mi_entrevista =Interview::where('id',$id)->first();
        $name_vacant=Vacant::where('id',$mi_entrevista->vacant_id)->first();
        $hoja_vida = Cv::where('id',$mi_entrevista->cv_id)->first();
        return view('admin.interview.editinterview',compact('mi_entrevista','name_vacant','hoja_vida'));
    }
    public function ver($id)
    {
        $mi_entrevista =Interview::where('id',$id)->first();
        $name_vacant=Vacant::where('id',$mi_entrevista->vacant_id)->first();
        $hoja_vida = Cv::where('id',$mi_entrevista->cv_id)->first();
        return view('admin.interview.viewinterview',compact('mi_entrevista','name_vacant','hoja_vida'));
    }
    public function update(Request $request, $id){
        // dd($request->all());
        $rules = [
            'status' => 'required',
            'description' => 'required',
        ];
        $messages = [
            'status.required' => 'El estado es requerido.',           
            'description.required' => 'El comentario es requerido.',    
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if($validator->fails()){
            return back()->with('error',$validator->errors()->first());
        }
        $mi_entrevista = Interview::find($id);
        $mi_entrevista->update($request->all());
        return redirect('/administrador/mis-entrevistas')->with('message','Se ha registrado tu entrevista');
    }
}
