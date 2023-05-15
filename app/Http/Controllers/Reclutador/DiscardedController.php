<?php

namespace App\Http\Controllers\Reclutador;

use App\Http\Controllers\Controller;
use App\Models\Cv;
use App\Models\Cvvacant;
use App\Models\Discarded;
use App\Models\Vacant;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class DiscardedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function discarded($id)
    {
        // return $id;
        Paginator::useBootstrap();
        $descartados=Cvvacant::with('discarded')->where('vacant_id',$id)->where('state_id',11)->paginate(10);
        // return $descartados;
        $discardeds=Discarded::with('cvvacant')->paginate(10);
        $vacantes=Vacant::all();
        $cvs=Cv::all();
        $name_vacant=Vacant::where('id',$id)->first();
        // return $discardeds;
        // return $descartados;
        return view('reclutador.discarded.indexdiscarded',compact('discardeds','vacantes','cvs','name_vacant','descartados'));
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
