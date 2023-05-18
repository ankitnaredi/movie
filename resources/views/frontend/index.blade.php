@extends('layouts.frontend')
@section('title',"Home")
@section('content')
@php
$movies = Helper::getAllMoviesObject();
@endphp
<div id="content">
      <div class="box">
        <div class="head">
          <h2>All Movies</h2>
        </div>
        <div class="cl">&nbsp;</div>
        @php
            $i=0;
        @endphp
        @foreach($movies as $movie)
        @php
            $imageUrl = '';
            if(strcmp(Helper::getMovieMeta($movie->id,'Poster'),'')!=0)
            {
                if(strcmp(Helper::getMovieMeta($movie->id,'Poster'),'N/A')!=0)
                {
                    $imageUrl = Helper::getMovieMeta($movie->id,'Poster');
                }
                else
                {
                    $imageUrl = url('/public/frontend/images/no-image.jpg');
                }
            }
            else
            {
                $imageUrl = url('/public/frontend/images/no-image.jpg');
            }
        @endphp
        <div class="movie">
          <div class="movie-image"> <span class="play"><span class="name">{{strtoupper($movie->title)}}</span></span> <a href="{{route('movie.view')}}"><img src="{{$imageUrl}}" alt="" /></a> </div>
          
          <div class="rating">
            <p>{{ucfirst($movie->title)}}</p><br>
            @if(strcmp($movie->is_premium_content,'yes')==0)
                <p>PREMIUM PLAN MOVIE</p>
            @else
                <p>BASIC PLAN MOVIE</p>
            @endif
            @php
                $i++;
            @endphp
        </div>
        </div>
        @if($i%4==0)
        <div class="cl">&nbsp;</div>
        @endif
        @endforeach
        
        
       
      </div>
      
      
    </div>
  
    <div class="cl">&nbsp;</div>
    @endsection