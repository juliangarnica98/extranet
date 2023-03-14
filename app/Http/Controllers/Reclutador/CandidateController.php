<?php

namespace App\Http\Controllers\Reclutador;

use App\Http\Controllers\Controller;

use App\Models\Cv;
use App\Models\Recruitment;
use App\Models\State;
use App\Models\Vacant;
use DB;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class CandidateController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    //     $this->middleware('can:admin.index');    
    // }
    
    public function index()
    {
        Paginator::useBootstrap();
        $vacants = Vacant::paginate();
        return view('reclutador.candidate.indexcandidato',compact('vacants'));
    }
    public function vercandidato($id)
    {
        Paginator::useBootstrap();
        $cv = Cv::where('type',2)->where('id',$id)->first();
        $vacants = Vacant::paginate();
        $states = State::paginate();
        return view('reclutador.candidate.showcandidate',compact('cv','vacants','states'));
    }
    public function buscar($id)
    {
        
        $cvs = Cv::where('vacant_id',$id)->paginate();
        $vacants = Vacant::paginate();
        $states = State::paginate();
        return view('reclutador.candidate.showcandidatos',compact('vacants','cvs','states'));
    }

}
