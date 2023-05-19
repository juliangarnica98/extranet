<?php

namespace App\Http\Controllers\Principal;

use App\Http\Controllers\Controller;

use App\Models\Cv;
use App\Models\Cvvacant;
use App\Models\State;
use App\Models\Vacant;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class CvController extends Controller
{
    // funcion para retornar vista de hoja de vida
    public function index()
    {
        return view('principal.cv');
    }
    // funcion para guardar informacion de la hoja de vida
    public function store(Request $request)
    {
        
        // $request->file('photo_cv')->store('avatars');
        // return $request->file();
        $cv = new  Cv();
        
        $request->file('photo_cv')->store('avatars');
        $request->file('file_cv')->store('cvs');
        $cv->photo_cv = $request->file('photo_cv')->store('avatars');
        $cv->file_cv = $request->file('file_cv')->store('cvs');

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
        $cv->shoes_size = $request->shoes_size;
        $cv->pant_size = $request->pant_size;
        $cv->save();

        
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
