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
use App\Models\Actors;
use Session;
use Mail;
class ActorsController extends CheckAdminMiddleware
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
    */
    public function add()
    {
		return view('admin.actors.add');
    }
    public function addPost(Request $request)
	{
		$data = $request->all();
		$messages = ['name.required'=>'Name is required.'];
		$request->validate([
			'name' => 'required|max:255'
		],$messages);
		
		$actor=Actors::create([
			'name'=>$request->name,
		]);
		Session::flash('message','Actor has been added.');
		return redirect()->route('admin.actors.list');
	}
    public function list()
	{
		$actors=Actors::get();	
		return view('admin.actors.list',compact('actors'));
	}
    public function edit($id)
	{
		$actor = Actors::whereId($id)->first();
		if($actor)
		{
			return view('admin.actors.edit',compact('actor'));
		}
		else
		{
			return redirect()->route('admin.actors.list');
		}
	}
    public function editPost($id,Request $request)
	{
		$data = $request->all();
		$messages = ['name.required'=>'Name is required.'];
		$request->validate([
			'name' => 'required|max:255'
			
		],$messages);
		
		Actors::whereId($id)->update([
			'name'=>$request->name
		]);
		
		Session::flash('message','Actor has been saved.');
		return redirect()->route('admin.actors.list');
	}
	public function delete($id)
	{
		$actor=Actors::whereId($id)->first();
		if($actor)
		{
			Actors::whereId($id)->delete();
			return response()->json(['success'=>false,'error'=>true,'message'=>'Actor has been deleted']);
		}
		else
		{
			return response()->json(['success'=>false,'error'=>true,'message'=>'Actor not found.']);
		}
	}
}