<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Auth\Events\Login;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
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
    protected $redirectTo = '/menu';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function loginPage()
    {
        return view('login.login');
    }

    public function attempt(LoginRequest $request)
    {
        if (Auth::attempt(['registry' => $request->registry, 'password' => $request->password])) {
            $route = null;
            return redirect(route('menu'));
        } else {
            return "falha no login";
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect(route('login'));
    }

    public function username()
    {
        return 'registry';
    }
}
