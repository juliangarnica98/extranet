<?php

namespace App\Http\Controllers\Administrador;

use App\Http\Controllers\Controller;

use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Pagination\Paginator;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserController extends Controller
{
    public function index()
    {
        Paginator::useBootstrap();
        $reclutadores = User::role(['Reclutador'])->paginate(5);
        $analistas = User::role(['Analista'])->paginate(5);
        // dd($users);
        return view('admin.user.indexuser',compact('reclutadores','analistas'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|max:255',
            'password' => 'required|min:6|max:255',
            
        ]);
        if($validator->fails()){
            // dd($validator->errors());
            return back()->with('error',$validator->errors()->first());
        }
        if($request->rol == 'Reclutador'){
            User::create([
                'name'=>$request->name,
                'last_name'=>$request->last_name,
                'email'=>$request->email,
                'password' => Hash::make($request->password)
            ])->assignRole('Reclutador');
            return back()->with('message','Se ha creado el usuario correctamente');
        }elseif($request->rol == 'Analista'){
            User::create([
                'name'=>$request->name,
                'last_name'=>$request->last_name,
                'email'=>$request->email,
                'password' => Hash::make($request->password)
            ])->assignRole('Analista');
            return back()->with('message','Se ha creado el usuario correctamente');
        }else{
            return back()->with('error','Error al crear usuario');
        }
    }


    public function show($id)
    {
        
    }

  
    public function update(Request $request)
    {

    }


    public function destroy($id)
    {
        
    }
}
