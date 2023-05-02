<?php

namespace App\Http\Controllers\Reclutador;

use App\Http\Controllers\Controller;
use App\Models\Cv;
use App\Models\Discarded;
use App\Models\State;
use App\Models\Vacant;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
class RegisterController extends Controller
{
    public function index()
    {
        Paginator::useBootstrap();

        $trabaja_con_nosotros =Vacant::where('state',1)->where('job',1)->where('num_aplic','!=','0')->paginate();
        $vacants = Vacant::get();
        $states = State::get();
        return view('reclutador.registers.indexregister',compact('trabaja_con_nosotros','vacants','states'));
    }
  
    // return view('reclutador.candidate.indexcandidato',compact('vacants'));
    
}
