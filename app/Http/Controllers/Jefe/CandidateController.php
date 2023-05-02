<?php

namespace App\Http\Controllers\Jefe;

use App\Http\Controllers\Controller;
use App\Models\Boss;
use App\Models\Cv;
use App\Models\Cvvacant;
use App\Models\Recruitment;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Paginator::useBootstrap();
        $boss = Boss::where('email',auth()->user()->email)->first();
        $reclutamientos = Recruitment::with('cvvacant')->where('boss_id',$boss->id)->paginate();
        $cvs = Cv::paginate();
        return view('jefe.candidate.indexcandidate',compact('reclutamientos','cvs'));
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
    public function show($id,$vacant,$recruitment)
    {
        $reclutamiento = Recruitment::where('id',$recruitment)->first();
        // dd($reclutamiento);
        $postulacion = Cvvacant::where('cv_id',$id)->where('vacant_id',$vacant)->first();
        $postulacion->revision=1;
        $postulacion->save();
        Paginator::useBootstrap();
        $cv = Cv::where('id',$id)->first();
        // return $pivot;
        return view('jefe.candidate.showcandidate',compact('cv','postulacion','reclutamiento'));
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
