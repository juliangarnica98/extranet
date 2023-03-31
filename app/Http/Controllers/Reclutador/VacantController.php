<?php

namespace App\Http\Controllers\Reclutador;

use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Models\Cv;
use App\Models\Type_cv;
use App\Models\Vacant;
use DB;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Validator;

class VacantController extends Controller
{
   
    public function index(){
        Paginator::useBootstrap();
        $vacants = Vacant::paginate(4);
        $vacants_t = Vacant::count();
        $vacants_c = Vacant::where('state',0)->count();
        $vacants_a = Vacant::where('state',1)->count();
        $cvs = Cv::all();
        return view('reclutador.vacant.indexvacantes',compact('vacants','cvs','vacants_t','vacants_c','vacants_a'));
    }
    public function create(){
        $id = Auth::user()->id;
        return view('reclutador.vacant.storevacantes',compact('id'));
    }
    
    public function vacantes(){
        return view('reclutador.vacant.storevacantes');
    }
    public function store(Request $request){

        // dd($request->area_id);
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'city' => 'required|max:255',
            'salary' => 'required|max:255',
            'num_vacants' => 'required|max:255',
            'description' => 'required|max:255',
            'experience' => 'required|max:255',
            'education' => 'required|max:255',
            'language' => 'required|max:255',
            'availability_travel' => 'required|max:255',
            'type_contract' => 'required|max:255',
            
        ]);
        if($validator->fails()){
            return back()->with('error','¡Hay errores en los campos!');
        }
        if($request->area_id){
            $area_id=Area::find($request->area_id);
        }else{
            $area_id=Area::find(3);
        }
        $typecv = Type_cv::find(2);
        $vacant = new Vacant();
        $vacant->author = Auth::user()->name;
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
        $vacant->area = $request->area;
        $vacant->state = 1;   
        $vacant-> num_aplic=0;
        $vacant->area_id=$area_id->id;
        $typecv->vacant()->save($vacant);
        return back()->with('message','Se ha creado la vacante correctamente');
    }
    public function update($id){
        
       $vacant = Vacant::where('id',$id)->first();
       $id = Auth::user()->id;
       return view('reclutador.vacant.editvacantes',compact('vacant','id'));

    }
    public function edit($id, Request $request){
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'city' => 'required|max:255',
            'salary' => 'required|max:255',
            'num_vacants' => 'required|max:255',
            'description' => 'required|max:255',
            'experience' => 'required|max:255',
            'education' => 'required|max:255',
            'language' => 'required|max:255',
            'availability_travel' => 'required|max:255',
            'type_contract' => 'required|max:255',
            
        ]);
        if($validator->fails()){
            return back()->with('error','¡Hay errores en los campos!');
        }
        if($request->area_id){
            $area_id=Area::find($request->area_id);
        }else{
            $area_id=Area::find(3);
        }
        $typecv = Type_cv::find(2);
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
        $vacant-> num_aplic=0;
        $vacant->area_id=$area_id->id;
        $typecv->vacant()->save($vacant);
        // $vacant->save();
        return back()->with('message','Se ha editado la vacante correctamente');
    }
    public function close($id)
    {   
        $vacant = Vacant::where('id',$id)->first();
        $vacant->state = 0;
        $vacant->save();
        return back()->with('message','Se ha cerrado la oferta exitosamente');
    }
    public function search(Request $request)
    {
        Paginator::useBootstrap();
        $busqueda=trim($request->busqueda);
        $vacants_t = Vacant::all()->count();
        $vacants_c = Vacant::where('state',0)->count();
        $vacants_a = Vacant::where('state',1)->count();
        $cvs = Cv::all();
        $vacants = DB::table('vacants')
                            ->where('state','1')
                            ->where('title','LIKE','%'.$busqueda.'%')
                            ->orWhere('city','LIKE','%'.$busqueda.'%')
                            ->orderBy('title','asc')
                            ->paginate(8); 
        
        return view('reclutador.vacant.indexvacantes',compact('vacants','cvs','vacants_t','vacants_c','vacants_a'));
    }
}