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

        $vacants = Vacant::where('state',1)->where('job',0)->paginate(4);
        $vacants_t = Vacant::where('job',0)->count();
        $vacants_c = Vacant::where('state',0)->where('job',0)->count();
        $vacants_a = Vacant::where('state',1)->where('job',0)->count();
        $cvs = Cv::all();
        return view('reclutador.vacant.indexvacantes',compact('vacants','cvs','vacants_t','vacants_c','vacants_a'));
    }
    public function archivadas(){
        Paginator::useBootstrap();
        $vacants = Vacant::where('state',0)->where('job',0)->paginate(5);
        $cvs = Cv::all();
        return view('reclutador.vacant.vacantesarchivadas',compact('vacants','cvs'));
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
        $vacant->state = 1;   
        $vacant-> num_aplic=0;
        // $vacant->area_id=$area_id->id;
        $vacant->area = $request->area;
        $vacant->job=0;

        $vacant->residence_change=$request->residence_change;

        $vacant->ventas=$request->ventas;
        $vacant->riesgos=$request->riesgos;
        $vacant->tecnica=$request->tecnica;
        $vacant->poligrafo=$request->poligrafo;
        $vacant->visita=$request->visita;

        $vacant->entrevista_analista=$request->entrevista_analista;
        $vacant->entrevista_coordinador=$request->entrevista_coordinador;
        $vacant->entrevista_jefe=$request->entrevista_jefe;
        $vacant->entrevista_gerente=$request->entrevista_gerente;

       // $table->string('pregunta1')->nullable();
        // $table->string('pregunta2')->nullable();
        // $table->string('pregunta3')->nullable();
        // $table->string('pregunta4')->nullable();

        $vacant->filtro= ($request->salary <= 1000000) ?'1' :'' ;
        $vacant->filtro= ($request->salary >= 1000001 && $request->salary <= 3000000) ?'2' :$vacant->filtro ;
        $vacant->filtro= ($request->salary >= 3000001) ?'3' :$vacant->filtro ;

        $typecv->vacant()->save($vacant);

        return redirect('/reclutador/vacantes')->with('message','Se ha creado la vacante correctamente');
    }
    public function update($id){
        
       $vacant = Vacant::where('id',$id)->first();
       $id = Auth::user()->id;
       return view('reclutador.vacant.editvacantes',compact('vacant','id'));

    }
    public function duplicar($id){
        
        $vacant = Vacant::where('id',$id)->first();
        $id = Auth::user()->id;
        return view('reclutador.vacant.duplicarvacantes',compact('vacant','id'));
 
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
        
        $vacant->residence_change=$request->residence_change;
        $vacant->ventas=$request->ventas;
        $vacant->riesgos=$request->riesgos;
        $vacant->tecnica=$request->tecnica;
        $vacant->poligrafo=$request->poligrafo;
        $vacant->visita=$request->visita;

        $vacant->entrevista_analista=$request->entrevista_analista;
        $vacant->entrevista_coordinador=$request->entrevista_coordinador;
        $vacant->entrevista_jefe=$request->entrevista_jefe;
        $vacant->entrevista_gerente=$request->entrevista_gerente;
        
        $vacant->state = 1;   
        $vacant-> num_aplic=0;
        $typecv->vacant()->save($vacant);
        // $vacant->save();
        return back()->with('message','Se ha editado la vacante correctamente');
    }
    public function archivar($id)
    {   
        $vacant = Vacant::where('id',$id)->where('job',0)->first();
        $vacant->state = 0;
        $vacant->archivate_date=date("d-m-Y h:i:s");
        $vacant->save();
        return back()->with('message','Se ha archivado la oferta exitosamente');
    }
    // public function duplicar($id)
    // {   
    //     $vacant = Vacant::where('id',$id)->where('job',0)->first();
    //     return view('reclutador.vacant.duplicarvacantes',compact('vacant'));
    // }
    public function search(Request $request)
    {
        Paginator::useBootstrap();
        $busqueda=trim($request->busqueda);
        $vacants_t = Vacant::where('job',0)->count();
        $vacants_c = Vacant::where('state',0)->where('job',0)->count();
        $vacants_a = Vacant::where('state',1)->where('job',0)->count();
        $cvs = Cv::all();
        $vacants = DB::table('vacants')
                            ->where('job',0)
                            ->where('state','1')
                            ->where('title','LIKE','%'.$busqueda.'%')
                            ->orWhere('city','LIKE','%'.$busqueda.'%')
                            ->orderBy('title','asc')
                            ->paginate(8); 
        
        return view('reclutador.vacant.indexvacantes',compact('vacants','cvs','vacants_t','vacants_c','vacants_a'));
    }
}