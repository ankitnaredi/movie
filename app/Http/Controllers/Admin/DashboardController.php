<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\CheckAdminMiddleware;
use Auth;
use App\Models\User;
use Helper;
use App\Models\Movie;
use App\Models\MovieMeta;
class DashboardController extends CheckAdminMiddleware
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
             if (!Auth::check()) {
                return redirect()->route('login');
            }
            $userId=Auth::guard('web')->user()->id;

                $user=User::whereId($userId)->with('roles')->first();
                $role = 'basicplan';
                if(isset($user->roles[0]->name))
                {
                    $role = $user->roles[0]->name;
                }
                
            switch ($role) {
                   
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.dashboard');
    }
	public function logout()
	{
		Auth::guard('web')->logout();
        return redirect()->route('login');
	}
}
