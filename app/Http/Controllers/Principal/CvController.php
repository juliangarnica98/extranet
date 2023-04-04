<?php

namespace App\Http\Controllers\Principal;

use App\Http\Controllers\Controller;

use App\Models\Cv;
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
        $cv = new  Cv();
        $state = State::find(1);
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
        $cv->name_last_company = $request->name_last_company;
        $cv->position_last_company = $request->position_last_company;
        $cv->funtion_last_company = $request->funtion_last_company;
        $cv->work_last_company = $request->work_last_company;
        $cv->date_init_company = $request->date_init_company;
        $cv->date_finally_company = $request->date_finally_company;
        $cv->name_last_company2 = $request->name_last_company2;
        $cv->position_last_company2 = $request->position_last_company2;
        $cv->funtion_last_company2 = $request->funtion_last_company2;
        $cv->date_init_company2 = $request->date_init_company2;
        $cv->date_finally_company2 = $request->date_finally_company2;
        $cv->previously_work = $request->previously_work;
        $cv->family = $request->family;
        $cv->like_to_work = $request->like_to_work;
        $cv->should_choose = $request->should_choose;
        $cv->shirt_size = $request->shirt_size;

        $cv->area=$request->area;
        $cv->shoes_size = $request->shoes_size;
        $cv->pant_size = $request->pant_size;
        $cv->vacant_id = $request->vacant_id;
        $cv->type = $request->type;
        $cv->state_job_vacante=1;
        $state->cv()->save($cv);  

        if ($request->type==2) {
            $vacante = Vacant::where('id',$cv->vacant_id)->first();
            $vacante->num_aplic += 1;
            $vacante->save();
        }        
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
        $cv=Cv::where('vacant_id',$id)->where('num_id',$request->cedula)->first();
        if($cv){
            return back()->with('error',"Ya has aplicado a la vacante anteriormente");
        }
        $cv2=Cv::where('vacant_id',"!=",$id)->where('num_id',$request->cedula)->first();
        if($cv2){
            return back()->withInput(array('vacant_id' => $id, 'documento' => $request->cedula));
        }
        $documento=$request->cedula;
        return view('principal.cv',compact('id','type','documento'));
    }

    //funcion para aplicacion de vacantes que ya habian creado su hoja de vida
    public function vacanteConCedula(Request $request)
    {   
        $cv_serach=Cv::where('num_id',$request->documento)->first();
             
        $cv = new  Cv();
        $state = State::find(1);
        $cv->name = $cv_serach->name;
        $cv->type_id = $cv_serach->type_id;
        $cv->num_id = $cv_serach->num_id;
        $cv->num_cell = $cv_serach->num_cell;
        $cv->num_cell2 = $cv_serach->num_cell2;
        $cv->age = $cv_serach->age;
        $cv->email = $cv_serach->email;
        $cv->address = $cv_serach->address;
        $cv->city_address = $cv_serach->city_address;
        $cv->academic_profile = $cv_serach->academic_profile;
        $cv->name_last_company = $cv_serach->name_last_company;
        $cv->position_last_company = $cv_serach->position_last_company;
        $cv->funtion_last_company = $cv_serach->funtion_last_company;
        $cv->work_last_company = $cv_serach->work_last_company;
        $cv->date_init_company = $cv_serach->date_init_company;
        $cv->date_finally_company = $cv_serach->date_finally_company;
        $cv->name_last_company2 = $cv_serach->name_last_company2;
        $cv->position_last_company2 = $cv_serach->position_last_company2;
        $cv->funtion_last_company2 = $cv_serach->funtion_last_company2;
        $cv->date_init_company2 = $cv_serach->date_init_company2;
        $cv->date_finally_company2 = $cv_serach->date_finally_company2;
        $cv->previously_work = $cv_serach->previously_work;
        $cv->family = $cv_serach->family;
        $cv->like_to_work = $cv_serach->like_to_work;
        $cv->should_choose = $cv_serach->should_choose;
        $cv->shirt_size = $cv_serach->shirt_size;
        $cv->area=$cv_serach->area;
        $cv->shoes_size = $cv_serach->shoes_size;
        $cv->pant_size = $cv_serach->pant_size;

        $cv->vacant_id = $request->vacant_id;
        $cv->type = $request->type;

        $cv->state_job_vacante=1;
        $state->cv()->save($cv);  
        if ($request->type==2) {
            $vacante = Vacant::where('id',$cv->vacant_id)->first();
            $vacante->num_aplic += 1;
            $vacante->save();
        }        
        return ['mensaje' =>'Registro exitoso'];
        
    }
}
