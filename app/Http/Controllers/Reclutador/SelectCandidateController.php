<?php

namespace App\Http\Controllers\Reclutador;


use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Models\Cv;
use App\Models\Cvvacant;
use App\Models\Discarded;
use App\Models\Recruitment;
use App\Models\State;
use App\Models\Type_cv;
use App\Models\Vacant;
use DB;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;

class SelectCandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Paginator::useBootstrap();
        $vacants = Vacant::where('state',1)->where('job',0)->paginate();
        // dd($vacants);
        return view('reclutador.select.indexselect',compact('vacants'));
    }
    public function buscar($id)
    {
        Paginator::useBootstrap();
        $postulaciones=Cvvacant::where('vacant_id',$id)->where('state_id',2)->paginate(10);
        $vacants=Vacant::paginate();      
        $cvs=Cv::paginate();      
        return view('reclutador.select.showcandidatos',compact('vacants','postulaciones','cvs'));
    }
    public function vercandidato($id,$vacant)
    {
        Paginator::useBootstrap();
        $postulacion = Cvvacant::where('cv_id',$id)->where('vacant_id',$vacant)->first();
        $cv = Cv::where('id',$id)->first();
        $vacants = Vacant::paginate();       
        $reclutamiento = Recruitment::where('cvvacant_id',$postulacion->id)->first();
        // dd($postulacion);
        return view('reclutador.select.showcandidate',compact('cv','vacants','postulacion','reclutamiento'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
