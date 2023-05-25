<?php

namespace App\Http\Controllers\Reclutador;

use App\Http\Controllers\Controller;
use App\Models\Cv;
use App\Models\Vacant;
use Illuminate\Http\Request;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\CvExport;
use Exception;

class ExcelController extends Controller
{

    public function store($id,Request $request)
    {
        $name_vacant =Vacant::where('id',$id)->first();
        $vacante=Vacant::where('id',$id)->first();
        $select_cvs = $request->seleccionados;
        $cvs=Cv::whereIn('id',$select_cvs)->get();
        return view('reclutador.reports.indexreportsexcel',compact('select_cvs','name_vacant','vacante','cvs'));
    }

    public function export(Request $request)
    {
        try {
            return Excel::download(new CvExport($request), 'candidatos.xlsx');
        } catch (\Throwable $th) {
            return back()->with('error','Seleccione los datos que desea exportar');
        }
        
    }

}
