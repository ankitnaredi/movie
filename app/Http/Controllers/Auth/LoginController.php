<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use App\Models\User;
use Session;
use Mail;

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
   //protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
	public function redirectTo()
    {
        $this->middleware(function ($request, $next) {
             if (!Auth::check()) {
                return redirect()->route('login');
            }
            $userId=Auth::guard('web')->user()->id;
			echo "dsafDSA";
			die;
                $user=User::whereId($userId)->with('roles')->first();
                $role = 'basicplan';
                if(isset($user->roles[0]->name))
                {
                    $role = $user->roles[0]->name;
                }
                
            switch ($role) {
                   case 'admin':
                      return redirect()->route('admin.dashboard');
                      break; 
                   case 'basicplan':
                      return redirect()->route('user.dashboard');
                      break; 
					case 'premiumplan':
                      return redirect()->route('user.dashboard');
                      break;
                    
                  }
                  return $next($request);
        });
    }
}
