<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       
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
        return view('frontend.index',compact('movies'));
    }
}
