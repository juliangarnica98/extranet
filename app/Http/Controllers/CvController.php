<?php

namespace App\Http\Controllers;

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
        // $validator = Validator::make($request->all(), [
        //     'name' => 'required|max:255',
        //     'type_id' => 'required|max:255',
        //     'num_id' => 'required|numeric|max:255',
        //     'num_cell' => 'required|numeric|max:255',
        //     'num_cell2' => 'required|numeric|max:255',
        //     'age' => 'required|max:255',
        //     'email' => 'required|max:255',
        //     'address' => 'required|max:255',
        //     'city_address' => 'required|max:255',
        //     'academic_profile' => 'required|max:255',
        //     'name_last_company' => 'required|max:255',
        //     'position_last_company' => 'required|max:255',
        //     'funtion_last_company' => 'required|max:255',
        //     'work_last_company' => 'required|max:255',
        //     'date_init_company' => 'required|max:255',
        //     'date_finally_company' => 'required|max:255',
        //     'name_last_company2' => 'required|max:255',
        //     'position_last_company2' => 'required|max:255',
        //     'funtion_last_company2' => 'required|max:255',
        //     'date_init_company2' => 'required|max:255',
        //     'date_finally_company2' => 'required|max:255',
        //     'previously_work' => 'required|max:255',
        //     'family' => 'required|max:255',
        //     'like_to_work' => 'required|max:255',
        //     'should_choose' => 'required|max:255',
        //     'shirt_size' => 'required|max:255',
        //     'shoes_size' => 'required|max:255',
        //     'pant_size' => 'required|max:255',
        //     'vacant_id' => 'required|max:255',
        //     'type' => 'required|max:255',
        // ]);
        // if($validator->fails()){
        //     return back()->with('error','¡Hay errores en los campos!');
        // }

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
        } else {
            # code...
        }
        

        

        return redirect('extranet/vacantes')->with('message','Estaremos en contacto contigo');
   
    }


    public function vacante($id,$type)
    {   
        return view('principal.cv',compact('id','type'));
    }
    
    
}
