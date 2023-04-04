<?php

namespace App\Http\Controllers\Principal;

use App\Http\Controllers\Controller;

use App\Models\Cv;
use App\Models\Job;
use App\Models\State;
use App\Models\User;
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
        $first_vacant = Vacant::where('state',1)->first();
        // dd($first_vacant);
        return view('principal.vacantes',compact('vacants','num_vacants','first_vacant'));
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
    public function filtrar(Request $request)
    {
        // dd($request->all());
        $area = $request->area;
        $salary = $request->salario;

        $area = ($area == null) ? ($area=''):$area;
        $salary = ($salary == null) ? ($salary=''):$salary;

       

        $vacants = Vacant::areas($area)->salarys($salary)->where('state',1)->paginate(10);
        $first_vacant = Vacant::where('state',1)->first();

        
        return view('principal.vacantes',compact('vacants','first_vacant'));
    }
    
    // public function buscarjob($id)
    // {
    //     $vacant_found = Vacant::where('state',1)->where('id',$id)->first();
    //     $vacants = Vacant::where('state',1)->paginate(10);
    //     $num_vacants=Vacant::where('state',1)->count();
    //     return view('principal.vacantes',compact('vacants','num_vacants','vacant_found'));
    // }



}
