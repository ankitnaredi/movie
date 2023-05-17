@extends('layouts.admin')
@section('title',"Movies list")
@section('content')
<div class="row">
	<div class="col-sm-12">
    	<div class="home-tab">
        	<div class="col-lg-12 grid-margin stretch-card">
            	<div class="card">
                	<div class="card-body">
                    	<h4 class="card-title">Movies</h4>
                        <div class="table-responsive">
                        	<table class="table">
                      <thead>
                        <tr>
                          <th>Title</th>
                          <th>Year</th>
                          <th>Released</th>
                          <th>Runtime</th>
                          <th>Director</th>
                          <th>Type</th>
                          <th>Is premium</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      @if(count($movies) > 0)
                      @foreach($movies as $movie)
                      	<tr>
                        	<td>{{ucfirst($movie->title)}}</td>
                            <td>{{$movie->year}}</td>
                            <td>{{$movie->released}}</td>
                            <td>{{$movie->runtime}}</td>
                            <td>{{ucfirst($movie->director)}}</td>
                            <td>{{ucfirst($movie->type)}}</td>
                            <td>{{ucfirst($movie->is_premium_content)}}</td>
                            <td>
                            	<a href="{{route('admin.movies.edit',$movie->id)}}"><i class="fas fa-edit"></i></a> / 
                                <a class="delete" href="{{route('admin.movies.delete',$movie->id)}}"><i class="fas fa-edit"></i></a>
                            </td>
                        </tr>
             		  @endforeach
                      @else
                      	<tr>
                        	<td colspan="8" style="text-align:center">No Movie found.</td>
                        </tr>
                      @endif
                        
                      </tbody>
                    </table>
                        </div>
                    </div>
                </div>
            </div>
             
                
        </div>
    </div>
</div>
<?php /*?><div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Admin Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div><?php */?>

@endsection
