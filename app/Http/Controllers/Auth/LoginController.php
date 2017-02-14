<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    //REDIRECCIONA AL PATH SOLICITADO DESPUES DE AUTENTICAR
    protected function redirectTo()
    {
        return '/admin';
    }

    //ESTE METODO SOBREESCRIBE A UN METODO DE IGUAL NOMBRE UBICADO EN AuthenticatesUsers
    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

}
