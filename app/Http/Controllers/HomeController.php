<?php

namespace App\Http\Controllers;

use App\Models\Cv;
use App\Models\Job;
use App\Models\State;
use App\Models\Vacant;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;


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
    public function vacantes2($id)
    {
        $type = $id;
        $jobs = Job::where('state',1)->where('type_job',$id)->paginate();
        return view('principal.vacantes2',compact('jobs','type'));
    }
    public function buscar($id)
    {
        $vacant_found = Vacant::where('state',1)->where('id',$id)->first();
        $vacants = Vacant::where('state',1)->paginate(10);
        $num_vacants=Vacant::where('state',1)->count();
        return view('principal.vacantes',compact('vacants','num_vacants','vacant_found'));
    }
    // public function buscarjob($id)
    // {
    //     $vacant_found = Vacant::where('state',1)->where('id',$id)->first();
    //     $vacants = Vacant::where('state',1)->paginate(10);
    //     $num_vacants=Vacant::where('state',1)->count();
    //     return view('principal.vacantes',compact('vacants','num_vacants','vacant_found'));
    // }



}
