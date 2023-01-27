<?php

namespace App\Http\Controllers;

use App\Models\Cv;
use App\Models\Type_cv;
use App\Models\Vacant;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class VacantController extends Controller
{
   
    public function index(){
        Paginator::useBootstrap();
        $vacants = Vacant::paginate(4);
        $vacants_t = Vacant::all()->count();
        $vacants_c = Vacant::where('state',0)->count();
        $vacants_a = Vacant::where('state',1)->count();
        $cvs = Cv::all();
        return view('admin.vacant.indexvacantes',compact('vacants','cvs','vacants_t','vacants_c','vacants_a'));
    }
    
    public function vacantes(){
        return view('admin.vacant.storevacantes');
    }
    public function store(Request $request){
        $typecv = Type_cv::find(2);
        $vacant = new Vacant();
        $vacant->title = $request->title;
        $vacant->city = $request->city;
        $vacant->salary = $request->salary;
        $vacant->num_vacants = $request->num_vacants;
        $vacant->description = $request->description;
        $vacant->experience = $request->experience;
        $vacant->education = $request->education;
        $vacant->language = $request->language;
        $vacant->availability_travel = $request->availability_travel;
        $vacant->type_contract = $request->type_contract;
        $vacant->state = 1;   
        $vacant-> num_aplic=0;
        $typecv->vacant()->save($vacant);
        return back()->with('message','Se ha creado la vacante correctamente');
    }
    public function edit($id, Request $request){
        $vacant =  Vacant::where('id',$id)->first();
        $vacant->title = $request->title;
        $vacant->city = $request->city;
        $vacant->salary = $request->salary;
        $vacant->num_vacants = $request->num_vacants;
        if($request->description){
            $vacant->description = $request->description;
        }
        if($request->experience){
            $vacant->experience = $request->experience;
        }
        $vacant->education = $request->education;
        $vacant->language = $request->language;
        $vacant->availability_travel = $request->availability_travel;
        $vacant->type_contract = $request->type_contract;

        $vacant->state = 1;   
        $vacant->save();
        return back()->with('message','Se ha editado la vacante correctamente');
    }
    public function close($id)
    {   
        $vacant = Vacant::where('id',$id)->first();
        $vacant->state = 0;
        $vacant->save();
        return back()->with('message','Se ha cerrado la oferta exitosamente');
    }
    
}
