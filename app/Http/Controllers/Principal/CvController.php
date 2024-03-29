<?php

namespace App\Http\Controllers\Principal;

use App\Http\Controllers\Controller;

use App\Models\Cv;
use App\Models\Cvvacant;
use App\Models\Job;
use App\Models\State;
use App\Models\Vacant;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class CvController extends Controller
{
    public function index()
    {
        return view('principal.cv');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $rules = [
            'age' => 'numeric|max:255|min:18',
            'email' => 'required|email|unique:cvs',
        ];
        $messages = [
            'age.required' => 'La edad es requerida.',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()){
 
            return back()->with('error',$validator->errors()->first());
        }

        $cv = new  Cv();
        $ext_cv = $request->file('file_cv')->getClientOriginalExtension();
        $path_cv = $request->file('file_cv')->storeAs('public/cvs/',$request->num_id.'.'.$ext_cv);        
    
        $cv->file_cv = basename($path_cv);

        $cv->name = $request->name;
        $cv->type_id = $request->type_id;
        $cv->num_id = $request->num_id;
        $cv->num_cell = $request->num_cell;
        $cv->num_cell2 = $request->num_cell2;
        $cv->age = $request->age;
        $cv->email = $request->email;
        $cv->address = $request->address;
        $cv->city_address = $request->city_address;
        $cv->academic_profile = $request->academic_profile;
        $cv->previously_work = $request->previously_work;
        $cv->family = $request->family;
        $cv->like_to_work = $request->like_to_work;
        $cv->should_choose = $request->should_choose;
        $cv->children = $request->children;
        $cv->shirt_size = $request->shirt_size;
        $cv->shoes_size = $request->shoes_size;
        $cv->pant_size = $request->pant_size;
        $cv->save();

        $job = new Job();
        $job->experience = $request->experience== 'on'?'sin experiencia laboral':'con experiencia laboral';

        $job->currently = $request->currently== '-'?'No':'Si';
        $job->last_job_name = $request->last_job_name == '-'?'':$request->last_job_name;
        $job->last_job_position = $request->last_job_position == '-'?'':$request->last_job_position;
        $job->last_job_functions = $request->last_job_functions == '-'?'':$request->last_job_functions;
        $job->last_job_date_init = $request->last_job_date_init == '2000-01-01'?'':$request->last_job_date_init;
        $job->last_job_date_end = $request->last_job_date_end == '2000-01-01'?'':$request->last_job_date_end;

        $job->penultimate_job_name = $request->penultimate_job_name == '-'?'':$request->penultimate_job_name;
        $job->penultimate_job_position = $request->penultimate_job_position == '-'?'':$request->penultimate_job_position;
        $job->penultimate_job_functions = $request->penultimate_job_functions == '-'?'':$request->penultimate_job_functions;
        $job->penultimate_job_date_init = $request->penultimate_job_date_init == '2000-01-01'?'':$request->penultimate_job_date_init;
        $job->penultimate_job_date_end = $request->penultimate_job_date_end == '2000-01-01'?'':$request->penultimate_job_date_end;

        $job->antepenultimate_job_name = $request->antepenultimate_job_name == '-'?'':$request->antepenultimate_job_name;
        $job->antepenultimate_job_position = $request->antepenultimate_job_position == '-'?'':$request->antepenultimate_job_position;
        $job->antepenultimate_job_functions = $request->antepenultimate_job_functions == '-'?'':$request->antepenultimate_job_functions;
        $job->antepenultimate_job_date_init = $request->antepenultimate_job_date_init == '2000-01-01'?'':$request->antepenultimate_job_date_init;
        $job->antepenultimate_job_date_end = $request->antepenultimate_job_date_end == '2000-01-01'?'':$request->antepenultimate_job_date_end;
        
        $job->cv()->associate($cv);
        $job->save();


        $vacante = Vacant::where('id',$request->vacant_id)->first();
        $vacante->num_aplic += 1;
        $vacante->save();
    

        $cvvcante= new Cvvacant();
        $state = State::find(1);
        $cvvcante->cv_id=$cv->id;
        $cvvcante->vacant_id= $request->vacant_id;
        $state->cvvacant()->save($cvvcante); 


        return redirect('extranet/vacantes')->with('message','Estaremos en contacto contigo');
    }

    //funcion para validacion de aplicacion a una nueva vacante
    public function vacante($id,$type, Request $request)
    {   
        $rules = [
            'cedula' => 'required|max:255',
        ];
        $messages = [
            'cedula.required' => 'La cedula es requerida.',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()){
 
            return back()->with('error',$validator->errors()->first());
        }

        $cv=Cv::where('num_id',$request->cedula)->first();
        
        if ($cv) {
            $cv_vacant=Cvvacant::where('cv_id',$cv->id)->where('vacant_id',$id)->first();
            if($cv_vacant){
                return back()->with('error',"Ya has aplicado a la vacante anteriormente");
            }
        }
        $cv2=Cv::where('num_id',$request->cedula)->first();
        if($cv2){
            $cv_vacant2=Cvvacant::where('cv_id',$cv2->id)->where('vacant_id','!=',$id)->first();
            if($cv_vacant2){
                return back()->withInput(array('vacant_id' => $id, 'documento' => $request->cedula));
            }
        }
        $documento=$request->cedula;
        return view('principal.cv',compact('id','type','documento'));
    }
    public function vacante2($id,$type){
        
        return view('principal.cv2',compact('id','type'));
    }
    
    public function vacanteConCedula(Request $request)
    {   
        $cv_serach=Cv::where('num_id',$request->documento)->first();
        if ($request->type==2) {
            $vacante = Vacant::where('id',$request->vacant_id)->first();
            $vacante->num_aplic += 1;
            $vacante->save();
        }

        $cvvcante= new Cvvacant();
        $state = State::find(1);
        $cvvcante->cv_id=$cv_serach->id;
        $cvvcante->vacant_id= $request->vacant_id;
        $state->cvvacant()->save($cvvcante);   
        return ['mensaje' =>'Registro exitoso'];
        
    }
}
