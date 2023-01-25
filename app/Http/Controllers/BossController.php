<?php

namespace App\Http\Controllers;

use App\Exports\RetirementExport;
use App\Models\Boss;
use Illuminate\Http\Request;
use App\Models\Collaborator;
use App\Models\Position;
use Illuminate\Support\Facades\Auth;
use App\Models\Retirement;
use App\Models\TypeRetirement;
use Illuminate\Pagination\Paginator;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;
use Illuminate\Support\Facades\DB;

class BossController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('can:boss.index');
        
    }
    public function index()
    {
        Paginator::useBootstrap();
        $tipo_retiro= TypeRetirement::all();
        $retiros = Retirement::where('user_id',auth()->user()->name)->paginate(7);
        $usuario = auth()->id();
        return view('boss.retirement.indexretiros',compact('retiros','tipo_retiro','usuario'));
    }
   
    public function create()
    {
    }

    public function store(Request $request)
    {
    }

    
    public function show()
    {
        
        Paginator::useBootstrap();
        $positions = Position::all();
        $user = Auth::user()->name;
        $boss = Boss::where('name',$user)->first();
        $collaborators = Collaborator::where('state','1')->where('regional_id',$boss->regional_id)->paginate(20);
        
        return view('boss.collaborator.indexcolaboradores',compact('collaborators','positions'));
    }

    public function search(Request $request)
    {
        
        Paginator::useBootstrap();
        $busqueda=trim($request->busqueda);
        $positions = Position::all();
        $user = Auth::user()->name;
        $boss = Boss::where('name',$user)->first(); 
        $collaborators = DB::table('collaborators')
                            ->select('id','created_at','updated_at','name','state','document','user_id','state_e','position_id','regional_id','gerencia_id')
                            ->where('state','1')
                            ->where('regional_id',$boss->regional_id)
                            ->where('name','LIKE','%'.$busqueda.'%')
                            ->orWhere('document','LIKE','%'.$busqueda.'%')
                            ->orderBy('name','asc')
                            ->paginate(10);        
        // $collaborators = Collaborator::where('state','1')->where('regional_id',$boss->regional_id)->paginate(20);
        
        return view('boss.collaborator.indexcolaboradores',compact('collaborators','positions'));
    }

    public function edit($id)
    {
        
    }
    public function busqueda(Request $request){
        $region_jefe=$request->region_jefe;
        
        $collaborator = Collaborator::where('document',$request->document)->where('state',1)->first(); 
        $collaborator2 = Collaborator::where('document',$request->document)->where('state',0)->first(); 
        
        if($collaborator2){
            return response()->json(['name' => "",'id'=>"",'position'=>""]);
        }
        
        
        if($collaborator){
            if($region_jefe != $collaborator->regional_id){
                return response()->json(['name' => "",'id'=>"",'position'=>""]);
            }else{
                $id = $collaborator->id;
                $name = $collaborator->name;
                $regional = $collaborator->regional_id;
                return response()->json(['name' => $name,'id'=>$id,'position'=>$regional]);
            }
            
        }
        return response()->json(['name' => "",'id'=>"",'position'=>""]);
    }


    public function export(Request $request) 
    {   
        return Excel::download(new RetirementExport($request->id), 'retirement.xlsx');
        return back()->with('message','Exportación completa');
    }
}
