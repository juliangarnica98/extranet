<?php

namespace App\Http\Controllers\Administrador;

use App\Http\Controllers\Controller;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Validator;

class ProfileController extends Controller
{


    public function index()
    {
        $usuario = User::find(Auth::User()->id);
        // $rol = $usuario->roles->first()->name;
        return view('admin.profile.indexuser',compact('usuario'));
    }

  
    public function store(Request $request)
    {

    }


    public function show($id)
    {
        
    }

  
    public function update(Request $request)
    {
        $usuario = User::find(Auth::User()->id);
        if(empty($usuario)){
            return back()->with('error','¡No se encuentra el usuario!');
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|max:255',
        ]);
        if($validator->fails()){
            return back()->with('error','¡Hay campos vacios!');
        }
        $usuario->name = $request->name;
        $usuario->last_name = $request->last_name;
        $usuario->email = $request->email;
        $usuario->save();
        return back()->with('message','Se ha editado exitosamente el usuario');

    }


    public function destroy($id)
    {
        
    }
}