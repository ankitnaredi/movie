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
use Session;
use Mail;
class MovieController extends CheckAdminMiddleware
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
    */
    public function add()
    {
		return view('admin.movies.add');
    }
	public function addPost(Request $request)
	{
		$data = $request->all();
		$messages = ['title.required'=>'Title is required.','year.required'=>'Year is required.','rated'=>'Numeric value is required.'];
		$request->validate([
			'title' => 'required|max:255',
			'year' => 'required|numeric|max:4',
			'rated'=>'numeric',
			'runtime'=>'numeric',
			'metascore'=>'numeric',
			'imdbRating'=>'numeric',
			'imdbVotes'=>'numeric'
		],$messages);
		$movie=Movie::create([
			'title'=>$request->title,
			'year'=>$request->year,
			'rated'=>$request->rated,
			'released'=>$request->released,
			'runtime'=>$request->runtime,
			'genre'=>$request->genre,
			'director'=>$request->director,
			'writer'=>$request->writer,
			'actors'=>$request->actors,
			'plot'=>$request->plot,
			'metascore'=>$request->metascore,
			'imdbRating'=>$request->imdbRating,
			'imdbVotes'=>$request->imdbVotes,
			'imdbID'=>$request->imdbid,
			'type'=>$request->type,
			'DVD'=>$request->dvd,
			'boxOffice'=>$request->boxOffice,
			'production'=>$request->production,
			'website'=>$request->website,
			'is_premium_content'=>$request->is_premium_content
		]);
		Session::flash('message','Movie has been added.');
		return redirect()->route('admin.movie.list');
	}
	public function list()
	{
		$movies=Movie::paginate(20);	
		return view('admin.movies.list',compact('movies'));
	}
	public function edit($id)
	{
		$movie = Movie::whereId($id)->first();
		if($movie)
		{
			return view('admin.movies.edit',compact('movie'));
		}
		else
		{
			return redirect()->route('admin.movies.list');
		}
	}
	public function editPost($id,Request $request)
	{
		$data = $request->all();
		$messages = ['title.required'=>'Title is required.','year.required'=>'Year is required.','rated'=>'Numeric value is required.'];
		$request->validate([
			'title' => 'required|max:255',
			'year' => 'required|numeric|max:4',
			'rated'=>'numeric',
			'runtime'=>'numeric',
			'metascore'=>'numeric',
			'imdbRating'=>'numeric',
			'imdbVotes'=>'numeric'
		],$messages);
		Movie::whereId($id)->update([
			'title'=>$request->title,
			'year'=>$request->year,
			'rated'=>$request->rated,
			'released'=>$request->released,
			'runtime'=>$request->runtime,
			'genre'=>$request->genre,
			'director'=>$request->director,
			'writer'=>$request->writer,
			'actors'=>$request->actors,
			'plot'=>$request->plot,
			'metascore'=>$request->metascore,
			'imdbRating'=>$request->imdbRating,
			'imdbVotes'=>$request->imdbVotes,
			'imdbID'=>$request->imdbid,
			'type'=>$request->type,
			'DVD'=>$request->dvd,
			'boxOffice'=>$request->boxOffice,
			'production'=>$request->production,
			'website'=>$request->website,
			'is_premium_content'=>$request->is_premium_content
		]);
		Session::flash('message','Movie has been saved.');
		return redirect()->route('admin.movie.list');
	}
	public function delete($id)
	{
		$movie=Movie::whereId($id)->first();
		if($movie)
		{
			Movie::whereId($id)->delete();
			return response()->json(['success'=>false,'error'=>true,'message'=>'Movie has been deleted']);
		}
		else
		{
			return response()->json(['success'=>false,'error'=>true,'message'=>'Movie not found.']);
		}
	}
	public function import()
	{
		return view('admin.movies.import');
	}
	public function importPost(Request $request)
	{
		
	}
	
}
