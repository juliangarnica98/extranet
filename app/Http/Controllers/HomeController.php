<?php

namespace App\Http\Controllers;

use App\Models\Vacant;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('principal.index');
    }

    public function vacantes()
    {
        $vacants = Vacant::where('state',1)->paginate(10);
        $num_vacants=Vacant::where('state',1)->count();
        return view('principal.vacantes',compact('vacants','num_vacants'));
    }
    public function buscar($id)
    {
        $vacant_found = Vacant::where('state',1)->where('id',$id)->first();
        $vacants = Vacant::where('state',1)->paginate(10);
        $num_vacants=Vacant::where('state',1)->count();
        return view('principal.vacantes',compact('vacants','num_vacants','vacant_found'));
    }

    public function create()
    {
        
    }
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
