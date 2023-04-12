<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Request;
use Spatie\Permission\Traits\HasRoles;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers, HasRoles;

  
    //  protected $redirectTo = RouteServiceProvider::HOME;

   
    public function redirectTo(){

        if(Auth::user()->hasRole('Admin')){
            return '/administrador/nuevasvacantes'; 
            
        }elseif(Auth::user()->hasRole('Reclutador')){
            return '/reclutador/perfil';
        }
        elseif(Auth::user()->hasRole('Jefe')){
            return '/jefe/perfil';
        }
    }
  
    protected function loggedOut() {
        return redirect('/login');
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    

}
