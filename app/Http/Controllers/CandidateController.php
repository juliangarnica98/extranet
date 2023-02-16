<?php

namespace App\Http\Controllers;

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
        // $cvs = Cv::where('type',2)->paginate(10);
        $vacants = Vacant::paginate();
        // $states = State::paginate();
       
        // dd($recruitment);
        return view('reclutador.candidate.indexcandidato',compact('vacants'));
    }
    public function vercandidato($id)
    {
        Paginator::useBootstrap();
        $cv = Cv::where('type',2)->where('id',$id)->first();
        $vacants = Vacant::paginate();
        $states = State::paginate();
       
        // dd($recruitment);
        return view('reclutador.candidate.showcandidate',compact('cv','vacants','states'));
    }
    public function postulaciones()
    {
        Paginator::useBootstrap();
        $cvs = Cv::where('type',2)->paginate();
        $vacants = Vacant::paginate();
        $states = State::paginate();
        return view('admin.candidate.indexcandidatos',compact('cvs','vacants','states'));
    }
    public function buscar($id)
    {
        
        $cvs = Cv::where('vacant_id',$id)->paginate();
        $vacants = Vacant::paginate();
        $states = State::paginate();
        return view('reclutador.candidate.showcandidatos',compact('vacants','cvs','states'));
    }

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
