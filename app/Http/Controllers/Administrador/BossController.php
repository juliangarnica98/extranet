<?php

namespace App\Http\Controllers\Administrador;

use App\Http\Controllers\Controller;
use App\Imports\BossImport;
use App\Imports\UsersImport;
use App\Models\Boss;
use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Pagination\Paginator;
use ErrorException;
use Exception;
use Illuminate\Database\QueryException;
use Maatwebsite\Excel\Facades\Excel;

class BossController extends Controller
{
    
    
    
    
    public function __construct()
    {
        $this->middleware(['role:Admin']);
    }
    public function index()
    {
        Paginator::useBootstrap();
        $jefes = Boss::paginate(15);
        return view('admin.boss.indexboss',compact('jefes'));
    }
  
    public function importExcel(Request $request)
    {
        $file = $request->file('file');
        if(!empty($request->file('file'))){
            // $archivo=$file->store('importJefe');
            $files= new File();
            $files->date_jefes=date("d-m-Y h:i:s");
            $files->file_jefe = $file->store('importJefe');
            $files->save();
            $file->store('importJefe');
        
        }
        
        if($file == null){
            return back()->with('error','Seleccione un archivo');
        } 
        $validator = Validator::make($request->all(), [
            'file*' => 'required|mimes:xlsx'
        ]);
        
        if($validator->fails()){
            return back()->with('error','Seleccione un archivo valido');
        }
        Excel::import(new UsersImport, $file);
        Excel::import(new BossImport, $file);
        try {
            // Excel::import(new UsersImport, $file);
            // Excel::import(new BossImport, $file);
        } catch (ErrorException $e) {
            return back()->with('error','No se ha encontrado alguna columna en el archivo');
        }catch (QueryException $x) {
            return back()->with('error','Existen campos obligatorios que están vacios');
        }catch (\Exception $x) {
            return back()->with('error','Existen un error en el archivo');
        }
        return back()->with('message','importancion de usuarios completa');
    }
}
