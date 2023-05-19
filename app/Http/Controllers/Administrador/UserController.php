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
    public function __construct()
    {
        $this->middleware(['role:Admin']);
    }
    public function index()
    {
        Paginator::useBootstrap();
        $reclutadores = User::role(['Reclutador'])->paginate(5);
        // return $reclutadores;
        $id = Auth::user()->id;
        
        if(!$id){
            return redirect()->route('logout');
            // return redirect('logout');
        }
        return view('admin.user.indexuser',compact('reclutadores'));
    }

    public function store(Request $request)
    {   

        $rules = [
            'name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|max:255|unique:users',
            'password' => 'required|min:6|max:255',
        ];
        $messages = [
            'name.required' => 'El nombre es requerido.',
            'name.max' =>'El nombre del usuario no puede ser mayor a :max caracteres.',
            
            'last_name.required' => 'El apellido es requerido.',
            'last_name.max' =>'El apellido del usuario no puede ser mayor a :max caracteres.',

            'email.required'=> 'El correo es requerido.',
            'email.max' =>'El correo del usuario no puede ser mayor a :max caracteres.',
            'email.unique' =>'El correo del usuario ya existe.',

            'password.required'=> 'La contraseña es requerida.',
            'password.min'=> 'La contraseña debe tener al menos :min caracteres.',
            'password.max' =>'El contraseña no puede ser mayor a :max caracteres.',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()){
 
            return back()->with('error',$validator->errors()->first());
        }
        User::create([
            'name'=>$request->name,
            'last_name'=>$request->last_name,
            'email'=>$request->email,
            'password' => Hash::make($request->password)
        ])->assignRole('Reclutador');    
        return back()->with('message','El usuario se ha creado correctamente');    
    }

  
    public function update($id)
    {
        $user=User::where('id',$id)->first();
       

        if($user->status==1){
            $user->status=0;
            $user->save();
            return back()->with('message','El usuario se desactivo');
        }
        if($user->status==0){
            $user->status=1;
            $user->save();
            return back()->with('message','El usuario se activo');
        }
        
    }

    public function destroy($id)
    {
        $user=User::where('id',$id)->first();
        $user->delete();
        return back()->with('message','El usuario se ha eliminado correctamente');
    }
}
