@extends('layouts.frontend')
@section('title',"View")
@section('content')
<div id="content">
      <div class="box">
        @if(!$checkHavetoUpgrade)
        <div class="head">
          <h1>{{ucfirst($movie->title)}}</h1>
        </div>
        <div class="cl">&nbsp;</div>
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
        <img src="{{$imageUrl}}"/>
        <div class="cl">&nbsp;</div>
        <p><b>Actors: </b>{{ucfirst($movie->actors)}}</p><br>
        <div class="cl">&nbsp;</div>
            <p><b>Tags: </b>{{ucfirst($movie->tags)}}</p><br>
            <div class="cl">&nbsp;</div>
            <p><b>Price: </b>${{($movie->rent_price)}}</p><br>
            <div class="cl">&nbsp;</div>
            <p><b>writer:</b> {{($movie->writer)}}</p><br>
            <div class="cl">&nbsp;</div>
        @else
        <h1 style="font-size:60px;text-align:center">{{__("Sorry, You can't see this content as this is premium, Please ask admin to upgrade your plan")}}</h1>
            @endif
      </div>
      
      
    </div>
    @endsection