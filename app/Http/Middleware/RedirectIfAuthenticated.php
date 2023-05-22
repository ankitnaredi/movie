<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                $userId=Auth::guard('web')->user()->id;

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
                      return redirect()->route('home');
                      break; 
					          case 'premiumplan':
                      return redirect()->route('home');
                      break;
                    default:
                      return redirect()->route('home');
                    break;
                  }
            }
        }

        return $next($request);
    }
}
