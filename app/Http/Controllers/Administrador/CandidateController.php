<?php


namespace App\Http\Controllers\Administrador;

use App\Http\Controllers\Controller;
use App\Models\Cv;
use App\Models\Recruitment;
use App\Models\State;
use App\Models\Vacant;
use DB;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;

class CandidateController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    //     $this->middleware('can:admin.index');    
    // }
    

    public function postulaciones()
    {       
        Paginator::useBootstrap();


            $candidatos_vacantes = Vacant::where('job',0)->where('num_aplic','!=','0')->paginate(8);
            $trabaja_con_nosotros = Vacant::where('job',1)->where('num_aplic','!=','0')->paginate(8);
            $vacants = Vacant::get();
            $states = State::get();
            return view('admin.candidate.indexcandidatos',compact('trabaja_con_nosotros','candidatos_vacantes','vacants','states'));
    }


}
