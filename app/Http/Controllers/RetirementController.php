<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TypeRetirement;
use App\Models\Retirement;
use Illuminate\Support\Facades\Auth;

use App\Imports\UsersImport;
use App\Imports\CollabolatorsImport;
use App\Models\Boss;
use App\Models\Collaborator;
use App\Models\Position;
use Maatwebsite\Excel\Facades\Excel;

class RetirementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware('can:boss.index');
    }

    public function  index()
    {
        $usuario =Auth::user()->email;
        $jefe = Boss::where('email',$usuario)->first();
        $regional = $jefe->regional_id;
        $positions = Position::paginate();
        $type_retirements = TypeRetirement::paginate();
        return view('boss.retirement.storeretiros',compact('type_retirements','positions','regional'));
    }
    

    

    public function create(Request $request){

        $retiro = new Retirement();
        $retiro->user_id=Auth::user()->name;

         $colaborador = Collaborator::where('id',$request->collaborator_id)->first();
         $colaborador->state = "0";
         $colaborador->save();

        $retiro->collaborator_id=$request->collaborator_id;
        $retiro->document_collaborator=$request->document_collaborator;
        $retiro->name_collaborator=$request->name_collaborator;

        $retiro->performance=$request->performance;
        $retiro->type_retirement_id=$request->type_retirement_id;
        $retiro->last_day=$request->last_day;

        $retiro->reason=$request->reason;
        $retiro->reason_performance=$request->reason_performance;
        

        $retiro->money_pend=$request->money_pend;
        $retiro->money_amou=$request->money_amou;
        $retiro->money_conc=$request->money_conc;

        $retiro->date_1= $request->date_1 == '2000-01-01' ? '':$request->date_1 ;
        $retiro->date_2= $request->date_2 == '2000-01-01' ? '':$request->date_2 ;
        $retiro->date_3= $request->date_3 == '2000-01-01' ? '':$request->date_3 ;
        $retiro->date_4= $request->date_4 == '2000-01-01' ? '':$request->date_4 ;
        $retiro->date_5= $request->date_5 == '2000-01-01' ? '':$request->date_5 ;
     
        $retiro->date_d_1= $request->date_d_1 == '2000-01-01' ? '':$request->date_d_1 ;
        $retiro->date_d_2= $request->date_d_2 == '2000-01-01' ? '':$request->date_d_2 ;
        $retiro->date_d_3= $request->date_d_3 == '2000-01-01' ? '':$request->date_d_3 ;
        $retiro->date_d_4= $request->date_d_4 == '2000-01-01' ? '':$request->date_d_4 ;
        $retiro->date_d_5= $request->date_d_5 == '2000-01-01' ? '':$request->date_d_5 ;
    
        
        // $retiro->cum_bonus=$request->cum_bonus;
        // $retiro->cat_bonus=$request->cat_bonus;
        // $retiro->ext_bonus=$request->ext_bonus;

        $retiro->admin_ent=$request->ad_carnet." " .$request->ad_tokens." " .$request->ad_pc." " .$request->ad_ninguno;
        $retiro->store_ent=$request->ti_jean." " .$request->ti_camisa. " " .$request->ti_gafete." " .$request->ti_token." " . $request->ti_carnet." " . $request->ti_canguro. " " .$request->ti_ninguno;
        $retiro->letter=$request->letter;
        $retiro->cedi_ent=$request->cedi_jean." " .$request->cedi_camisa." " .$request->cedi_botas." " .$request->cedi_terminal." " .$request->cedi_token." " .$request->cedi_carnet." " .$request->cedi_chaqueta." " .$request->cedi_canguro." " .$request->cedi_cofia." " .$request->cedi_ninguno;

        // $retiro->pc=$request->pc;
        // $retiro->cell=$request->cell;
        $retiro->delivery_certificate=$request->delivery_certificate;
        $retiro->save();
        return back()->with('message','Se a realizado el retiro de '.$retiro->name_collaborator.' satisfactoriamente');
    }
}
