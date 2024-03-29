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
    public function index2()
    {
        return view('principal.index');
    }
    public function vacantes()
    {
        $vacants = Vacant::where('state',1)->where('job',0)->paginate(10);
        $num_vacants=Vacant::where('state',1)->where('job',0)->count();
        $first_vacant = Vacant::where('state',1)->where('job',0)->first();
        // dd($first_vacant);
        return view('principal.vacantes',compact('vacants','num_vacants','first_vacant'));
    }
    public function vacantes2($area){
    // {
    //     $area_b=trim($area);
    //     $jobs=Vacant::where('area',$area_b)->where('job',1)->paginate();       
    //     $type=$area_b;
    //     return view('principal.vacantes2',compact('jobs','type'));

        $vacant_found = Vacant::where('state',1)->where('job',0)->where('area',$area)->first();
        $vacants = Vacant::where('state',1)->where('job',0)->where('area',$area)->paginate(10);
        $num_vacants=Vacant::where('state',1)->where('job',0)->where('area',$area)->count();
        return view('principal.vacantes',compact('vacants','num_vacants','vacant_found'));
    }
    public function buscar($id)
    {
        $vacant_found = Vacant::where('state',1)->where('job',0)->where('id',$id)->first();
        $vacants = Vacant::where('state',1)->where('job',0)->paginate(10);
        $num_vacants=Vacant::where('state',1)->where('job',0)->count();
        return view('principal.vacantes',compact('vacants','num_vacants','vacant_found'));
    }
    public function filtrar(Request $request)
    {
        // dd($request->all());
        $area = $request->area;
        $salary = $request->salario;

        $area = ($area == null) ? ($area=''):$area;
        $salary = ($salary == null) ? ($salary=''):$salary;

       

        $vacants = Vacant::areas($area)->salarys($salary)->where('job',0)->where('state',1)->paginate(10);
        $first_vacant = Vacant::where('state',1)->where('job',0)->first();

        
        return view('principal.vacantes',compact('vacants','first_vacant'));
    }
    




}
