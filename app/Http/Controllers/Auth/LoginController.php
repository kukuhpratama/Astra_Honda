<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

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

    public function showLoginForm(){
        if(session()->has('id_user')){
            return redirect('home');
        }
        return view('auth.login'); 
    }

    public function login(Request $request)
    {  
        $input = $request->all();
   
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
            
        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {   
            session([
                'email'     => auth()->user()->email,
                'name'      => auth()->user()->name,
                'jabatan'   => auth()->user()->jabatan,
                'id_user'   => auth()->user()->id_user,
                'id_dealer'   => auth()->user()->id_dealer,
            ]);
            
            return redirect()->route('home');
        }else{
            return redirect()->route('login')->with('error','Email-Address And Password Are Wrong.');
        }
        
          
    }
}
