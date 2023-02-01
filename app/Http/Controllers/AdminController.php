<?php

namespace App\Http\Controllers;

use App\Exports\RetirementsExport;
use Illuminate\Http\Request;
use App\Models\Area;
use App\Models\Position;
use App\Models\Retirement;
use App\Models\TypeRetirement;
use Illuminate\Support\Facades\Validator;
use Illuminate\Pagination\Paginator;

use App\Imports\UsersImport;
use App\Imports\BossImport;
use App\Imports\CollabolatorsImport;
use App\Models\Boss;
use App\Models\Cdc;
use App\Models\Collaborator;
use App\Models\Cv;
use App\Models\State;
use App\Models\User;
use App\Models\Vacant;
use Maatwebsite\Excel\Facades\Excel;


class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('can:admin.index');    
    }
    
    public function postulaciones()
    {
        Paginator::useBootstrap();
        $cvs = Cv::where('type',2)->paginate();
        $vacants = Vacant::paginate();
        $states = State::paginate();
        return view('admin.candidate.indexcandidatos',compact('cvs','vacants','states'));
    }
   
}
