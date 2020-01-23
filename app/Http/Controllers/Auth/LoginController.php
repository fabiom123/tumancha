<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;
use Illuminate\Support\Facades\Auth;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function loginUser()
    {
        // $data = \Request::all();
        $telefono = \Request::input('telefono');
        //var_dump($telefono);exit;
        if ( !isset($telefono)) {
            // Bad Creds. No access!
            return redirect('/login');
        } else {

            $user = User::where('telefono', $telefono)->first();
            //var_dump($user);exit;
            if ($user) {
            Auth::login($user);
            return redirect()->intended('/');
            } else {/* No User Found? */}

        }
    }
}
