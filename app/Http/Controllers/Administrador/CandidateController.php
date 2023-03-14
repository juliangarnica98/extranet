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
        $cvs = Cv::where('type',2)->paginate();
        $vacants = Vacant::paginate();
        $states = State::paginate();
        return view('admin.candidate.indexcandidatos',compact('cvs','vacants','states'));
        // return view('admin.candidate.indexcandidatos',compact('cvs','vacants','states'));
    }


}
