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
        // $id = Auth::user()->id;
        // if($id==1){
        //     Paginator::useBootstrap();
        //     $trabaja_con_nosotros = Cv::where('type',1)->where('area',2)->orWhere('area',1)->paginate(8);
        //     $candidatos_vacantes = Cv::where('type',2)->where('area',2)->orWhere('area',1)->paginate(8);
        //     $vacants = Vacant::get();
        //     $states = State::get();
        //     return view('admin.candidate.indexcandidatos',compact('trabaja_con_nosotros','candidatos_vacantes','vacants','states'));
        // }else{
        //     Paginator::useBootstrap();
        //     $trabaja_con_nosotros = Cv::where('type',1)->where('area',3)->paginate(8);
        //     $candidatos_vacantes = Cv::where('type',2)->where('area',3)->paginate(8);
        //     $vacants = Vacant::get();
        //     $states = State::get();
        //     return view('admin.candidate.indexcandidatos',compact('trabaja_con_nosotros','candidatos_vacantes','vacants','states'));
        // }
       
        Paginator::useBootstrap();
            $trabaja_con_nosotros = Cv::where('type',1)->paginate(8);
            $candidatos_vacantes = Cv::where('type',2)->paginate(8);
            $vacants = Vacant::get();
            $states = State::get();
            return view('admin.candidate.indexcandidatos',compact('trabaja_con_nosotros','candidatos_vacantes','vacants','states'));
    }


}
