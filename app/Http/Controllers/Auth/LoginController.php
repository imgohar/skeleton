<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;
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

    public function logout() {
        $user = User::find(Auth::user()->id);
        $user->pin = '';
        $user->save();
        Auth::logout();
        Session::forget('is_verified');
        
        return redirect('/login');
      }

      public function login(Request $request)
      {   
          $input = $request->all();
    
          $this->validate($request, [
              'username' => 'required',
              'password' => 'required',
          ]);
    
          $fieldType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
          if(auth()->attempt(array($fieldType => $input['username'], 'password' => $input['password'])))
          {
              return redirect()->route('admin');
          }else{
              return redirect()->route('login')->with('error','Email-Address And Password Are Wrong.');
          }
        }
}

