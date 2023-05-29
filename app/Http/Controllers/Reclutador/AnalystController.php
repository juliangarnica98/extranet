<?php

namespace App\Http\Controllers\Reclutador;

use App\Http\Controllers\Controller;
use App\Models\Boss;
use App\Models\Cv;
use App\Models\Cvvacant;
use App\Models\Interview;
use App\Models\Recruitment;
use App\Models\User;
use App\Models\Vacant;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Validator;

class AnalystController extends Controller
{
    
    public function index($id)
    {
        Paginator::useBootstrap();
        $postulaciones = Cvvacant::with('recruitment')->where('vacant_id',$id)->where('state_id',4)->paginate(10);
        $pos_validacion = Cvvacant::with('recruitment')->where('vacant_id',$id)->first();
        $vacant = Vacant::where('id',$id)->first();
        $name_vacant = Vacant::where('id',$id)->first();
        $cvs = Cv::all();
        return view('reclutador.analistas.indexpostulados',compact('vacant','postulaciones','cvs','name_vacant'));
    }
    public function entrevista($id,$vacante)
    {
        // dd( $id);
        $users_admin = User::role('Admin')->get();
        $users_reclutador = User::role('Reclutador')->get();
        $users_jefe = User::role('Jefe')->get();
        $entrevistas = Interview::with('user')->get();
        // return $entrevistas;
        $name_vacant = Vacant::where('id',$vacante)->first();
        return view('reclutador.analistas.indexentrevista',compact('name_vacant','users_admin','users_reclutador','users_jefe','id','entrevistas'));
    }
    public function verentrevista($id,$vacante)
    {
        $name_vacant = Vacant::where('id',$vacante)->first();
        return view('reclutador.analistas.showentrevista',compact('name_vacant'));
    }
    public function registrarentrevista($id,Request $request)
    {  
            if($request->usuario_gerente){
            $postulacion = Cvvacant::where('id',$id)->first();
            $interview = new Interview();
            $interview->cv_id = $postulacion->cv_id;
            $interview->vacant_id = $postulacion->vacant_id;
            // $interview->user_id = $request->usuario_gerente;
            $usuario = User::find($request->usuario_gerente);
            $interview->cargo = 'gerente';
            $usuario->interviews()->save($interview);

            // $interview->save();
            return back()->with('message','Se ha registrado correctamente');
        }else if($request->usuario_jefe ){
            $postulacion = Cvvacant::where('id',$id)->first();
            $interview = new Interview();
            $interview->cv_id = $postulacion->cv_id;
            $interview->vacant_id = $postulacion->vacant_id;
            // $interview->user_id = $request->usuario_jefe;
            $usuario = User::find($request->usuario_jefe);
            $interview->cargo = 'jefe';
            $usuario->interviews()->save($interview);
            return back()->with('message','Se ha registrado correctamente');
        }else if($request->usuario_coordinador){
            $postulacion = Cvvacant::where('id',$id)->first();
            $interview = new Interview();
            $interview->cv_id = $postulacion->cv_id;
            $interview->vacant_id = $postulacion->vacant_id;
            // $interview->user_id = $request->usuario_coordinador;
            $usuario = User::find($request->usuario_coordinador);
            $interview->cargo = 'coordinador';
            $usuario->interviews()->save($interview);
            return back()->with('message','Se ha registrado correctamente');
        }else if($request->usuario_analista){
            
            $postulacion = Cvvacant::where('id',$id)->first();
            
            $interview = new Interview();
            
            $interview->cv_id = $postulacion->cv_id;
            $interview->vacant_id = $postulacion->vacant_id;
            // $interview->user_id = $request->usuario_analista;
            $usuario = User::find($request->usuario_analista);
            $interview->cargo = 'analista';
            // dd($usuario);
            $usuario->interviews()->save($interview);
            return back()->with('message','Se ha registrado correctamente');
        }else{
            return back()->with('error','Debe escoger alguna de las opciones');
        }
        
    }
    
}
