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
			'year' => 'required|numeric|max:9999|min:1000',
		],$messages);
		$rated = is_numeric($request->rated)?$request->rated:0;
		$runtime = is_numeric($request->runtime)?$request->runtime:0;
		$metascore = is_numeric($request->metascore)?$request->metascore:0;
		$imdbRating = is_numeric($request->imdbRating)?$request->imdbRating:0;
		$imdbVotes = is_numeric($request->imdbVotes)?$request->imdbVotes:0;
		$movie=Movie::create([
			'title'=>$request->title,
			'year'=>$request->year,
			'rated'=>$rated,
			'released'=>$request->released,
			'runtime'=>$runtime,
			'genre'=>$request->genre,
			'director'=>$request->director,
			'writer'=>$request->writer,
			'actors'=>$request->actors,
			'plot'=>$request->plot,
			'metascore'=>$metascore,
			'imdbRating'=>$imdbRating,
			'imdbVotes'=>$imdbVotes,
			'imdbID'=>$request->imdbid,
			'type'=>$request->type,
			'DVD'=>$request->dvd,
			'boxOffice'=>$request->boxOffice,
			'production'=>$request->production,
			'website'=>$request->website,
			'is_premium_content'=>$request->is_premium,
			'rent_period'=>(is_numeric($request->rent_period,'')!=0)?$request->rent_period:0,
			'rent_price'=>(is_numeric($request->rent_price,'')!=0)?$request->rent_price:0,
		]);
		
		$this->insertMovieMeta($movie->id,'poster',$data['Poster']);
		$this->insertMovieMeta($movie->id,'Language',$data['Language']);
		$this->insertMovieMeta($movie->id,'Country',$data['Country']);
		$this->insertMovieMeta($movie->id,'Awards',$data['Awards']);
		Session::flash('message','Movie has been added.');
		return redirect()->route('admin.movies.list');
	}
	public function list()
	{
		$movies=Movie::get();	
		return view('admin.movies.list',compact('movies'));
	}
	private function get_movie_details($title) {
		$base_url = "http://www.omdbapi.com/";
		$api_key = "e1eeb0f5";  // Replace with your OMDb API key
	
		// Construct the API request URL
		$url = $base_url . "?apikey=" . $api_key . "&t=" . urlencode($title);
	
		// Send the API request
		$response = file_get_contents($url);
		$data = json_decode($response, true);
	
		// Check if the request was successful
		if ($data["Response"] == "True") {
			return $data;
			// Add more fields as needed
		} else {
			// Request failed or movie not found
			return "Error: " . $data["Error"] . "<br>";
		}
	}
	private function get_movie_detailsById($id) {
		$base_url = "http://www.omdbapi.com/";
		$api_key = "e1eeb0f5";  // Replace with your OMDb API key
	
		// Construct the API request URL
		$url = $base_url . "?apikey=" . $api_key . "&i=" . urlencode($id);
	
		// Send the API request
		$response = file_get_contents($url);
		$data = json_decode($response, true);
	
		// Check if the request was successful
		if ($data["Response"] == "True") {
			return $data;
			// Add more fields as needed
		} else {
			// Request failed or movie not found
			return "Error: " . $data["Error"] . "<br>";
		}
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
			'year' => 'required|numeric|max:9999|min:1000',
		],$messages);
		$rated = is_numeric($request->rated)?$request->rated:0;
		$runtime = is_numeric($request->runtime)?$request->runtime:0;
		$metascore = is_numeric($request->metascore)?$request->metascore:0;
		$imdbRating = is_numeric($request->imdbRating)?$request->imdbRating:0;
		$imdbVotes = is_numeric($request->imdbVotes)?$request->imdbVotes:0;
		Movie::whereId($id)->update([
			'title'=>$request->title,
			'year'=>$request->year,
			'rated'=>$rated,
			'released'=>$request->released,
			'runtime'=>$runtime,
			'genre'=>$request->genre,
			'director'=>$request->director,
			'writer'=>$request->writer,
			'actors'=>$request->actors,
			'plot'=>$request->plot,
			'metascore'=>$metascore,
			'imdbRating'=>$imdbRating,
			'imdbVotes'=>$imdbVotes,
			'imdbID'=>$request->imdbid,
			'type'=>$request->type,
			'DVD'=>$request->dvd,
			'boxOffice'=>$request->boxOffice,
			'production'=>$request->production,
			'website'=>$request->website,
			'is_premium_content'=>$request->is_premium,
			'rent_period'=>(is_numeric($request->rent_period,'')!=0)?$request->rent_period:0,
			'rent_price'=>(is_numeric($request->rent_price,'')!=0)?$request->rent_price:0,
		]);
		$this->insertMovieMeta($movie->id,'poster',$data['Poster']);
		$this->insertMovieMeta($movie->id,'Language',$data['Language']);
		$this->insertMovieMeta($movie->id,'Country',$data['Country']);
		$this->insertMovieMeta($movie->id,'Awards',$data['Awards']);
		Session::flash('message','Movie has been saved.');
		return redirect()->route('admin.movies.list');
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
	public function searchPost(Request $request)
	{
		$data = $request->all();
		$search = $request->search;
		$data=$this->get_movie_details($search);
		return response()->json(['success'=>true,'error'=>false,'message'=>'Data has been retrieved.','data'=>$data]);
	}
	public function importPost(Request $request)
	{
		$data = $request->all();
		$imdbId = $request->imdbID;
		if(strcmp($imdbId,'')==0)
		{
			return response()->json(['success'=>false,'error'=>true,'message'=>'Invalid imdbID']);
		}
		$base_url = "http://www.omdbapi.com/";
		$api_key = "e1eeb0f5";  // Replace with your OMDb API key
	
		// Construct the API request URL
		$url = $base_url . "?apikey=" . $api_key . "&i=" . urlencode($imdbId);
	
		// Send the API request
		$response = file_get_contents($url);
		$data = json_decode($response, true);
	
		// Check if the request was successful
		if ($data["Response"] == "True") {
			$data['DVD']=(isset($data['DVD']))?$data['DVD']:[];
			$data['DVD']=(is_array($data['DVD']))?print_r($data['DVD'],true):$data['DVD'];
			if(strcmp($data['Title'],'')==0 || strcmp($data['Year'],'')==0)
			{
				return response()->json(['success'=>false,'error'=>true,'message'=>'Movie not found.']);
			}
			$movie=Movie::create([
				'title'=>$data['Title'],
				'year'=>$data['Year'],
				'rated'=>(isset($data['Released']))?$data['Rated']:'',
				'released'=>(isset($data['Released']))?$data['Released']:'',
				'runtime'=>(isset($data['Runtime']))?$data['Runtime']:'',
				'genre'=>(isset($data['Genre']))?$data['Genre']:'',
				'director'=>(isset($data['Director']))?$data['Director']:'',
				'writer'=>(isset($data['Writer']))?$data['Writer']:'',
				'actors'=>(isset($data['Actors']))?$data['Actors']:'',
				'plot'=>(isset($data['Plot']))?$data['Plot']:'',
				'metascore'=>(isset($data['Metascore']))?$data['Metascore']:'',
				'imdbRating'=>(isset($data['imdbRating']))?$data['imdbRating']:'',
				'imdbVotes'=>(isset($data['imdbVotes']))?$data['imdbVotes']:'',
				'imdbID'=>(isset($data['imdbID']))?$data['imdbID']:'',
				'type'=>(isset($data['Type']))?$data['Type']:'',
				'DVD'=>$data['DVD'],
				'boxOffice'=>(isset($data['BoxOffice']))?$data['BoxOffice']:'',
				'production'=>(isset($data['Production']))?$data['Production']:'',
				'website'=>(isset($data['Website']))?$data['Website']:'',
				'is_premium_content'=>'no'
			]);
			if(isset($data['Poster']))
			{
				$this->insertMovieMeta($movie->id,'poster',$data['Poster']);
			}
			if(isset($data['Language']))
			{
				$this->insertMovieMeta($movie->id,'Language',$data['Language']);
			}
			
			if(isset($data['Country']))
			{
				$this->insertMovieMeta($movie->id,'Country',$data['Country']);
			}
			if(isset($data['Awards']))
			{
				$this->insertMovieMeta($movie->id,'Awards',$data['Awards']);
			}
			return response()->json(['success'=>true,'error'=>false,'message'=>'Movie has been imported.','data'=>$data]);
			
			// Add more fields as needed
		} else {
			return response()->json(['success'=>false,'error'=>true,'message'=>$data["Error"]]);
			// Request failed or movie not found
			//return "Error: " . $data["Error"] . "<br>";
		}
	}
}
