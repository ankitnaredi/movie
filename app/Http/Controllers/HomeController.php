<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use Auth;
use App\Models\User;
class HomeController extends Controller
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
                  
                   case 'admin':
                     return redirect()->route('admin.dashboard');
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
    public function index(Request $request)
    {
        $search = isset($request->s)?$request->s:'';
        $movies = Movie::where(function($query) use($search) {
                        if(strcmp($search,'')!=0)
                        {
                            $query->where('title','LIKE','%'.$search.'%')
                                ->orWhere('tags','LIKE','%'.$search.'%');
                        }
                    })->get();
                    $userId=Auth::guard('web')->user()->id;

                    $user=User::whereId($userId)->with('roles')->first();
                    $role = 'basicplan';
                    if(isset($user->roles[0]->name))
                    {
                        $role = $user->roles[0]->name;
                    }

        return view('frontend.index',compact('movies','role'));
    }
    public function view($id)
    {
        $movie=Movie::whereId($id)->first();
        if(!$movie)
        {
            return redirect()->route('home');
        }
        $userId=Auth::guard('web')->user()->id;

                    $user=User::whereId($userId)->with('roles')->first();
                    $role = 'basicplan';
                    if(isset($user->roles[0]->name))
                    {
                        $role = $user->roles[0]->name;
                    }
        $checkHavetoUpgrade = false;
       
        if(strcmp($movie->is_premium_content,'yes')==0 && strcmp($role,'basicplan')==0)
        {
            $checkHavetoUpgrade = true;
        }
        return view('frontend.movie.view',compact('checkHavetoUpgrade','movie'));
    }
    public function logout()
    {
        Auth::guard('web')->logout();
        return redirect()->route('login');
    }
}
