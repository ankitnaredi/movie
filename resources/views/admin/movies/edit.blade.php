@extends('layouts.admin')
@section('title',"Edit Movie")
@section('content')
@php
  $actors = Helper::getallActors();
@endphp
<div class="row">
	<div class="col-sm-12">
    	<div class="home-tab">
        	<div class="col-lg-12 grid-margin stretch-card">
            	<div class="card">
                	<div class="card-body">
                    	<h4 class="card-title">Edit movie</h4>
                        <div class="col-lg-6">
                        <form id="form_movie_edit" method="POST" action="{{route('admin.movies.edit.post',$movie->id)}}" onSubmit="return check_form_requirements()">
                        @csrf
                        <div class="form-group">
                          <label for="title">Title *</label>
                          <input type="text" class="form-control" value="{{$movie->title}}" name="title" id="title" placeholder="Title" onkeyDown="checkBlankField(this.id,'Title is required.','titleError')" onkeyUp="checkBlankField(this.id,'Title is required.','titleError')">
                          <span class="text-danger titleError">@error('title'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label for="year">Year *</label>
                          <input type="text" class="form-control" value="{{$movie->year}}" onkeyDown="checkBlankField(this.id,'Year is required.','yearError')" onkeyUp="checkBlankField(this.id,'Year is required.','yearError')" name="year" id="year" placeholder="Year" onKeyPress="return isNumber()" max-length="4">
                          <span class="text-danger yearError">@error('year'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label for="rated">Rated</label>
                          <input type="text" class="form-control" value="{{$movie->rated}}" name="rated" id="rated" placeholder="Year" max-length="2">
                          <span class="text-danger ratedError">@error('rated'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label for="released">Released</label>
                          <input type="text" class="form-control" value="{{$movie->released}}" name="released" id="released" placeholder="Released">
                          <span class="text-danger releasedError">@error('released'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label for="runtime">Runtime</label>
                            <input type="text" class="form-control" value="{{$movie->runtime}}" name="runtime" id="runtime" placeholder="Runtime" >
                           
                          <span class="text-danger runtimeError">@error('runtime'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label for="genre">Genre</label>
                          <input type="text" class="form-control" name="genre" id="genre" value="{{$movie->genre}}" placeholder="Genre">
                          <span class="text-danger genreError">@error('genre'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label for="tags">Tags</label>
                          <input type="text" class="form-control" name="tags" id="tags" placeholder="Tags" value="{{$movie->tags}}">
                          <span class="text-danger tagsError">@error('tags'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label for="director">Director</label>
                          <input type="text" class="form-control" name="director" id="director"  value="{{$movie->director}}" placeholder="Director">
                          <span class="text-danger directorError">@error('director'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label for="writer">Writer</label>
                          <input type="text" class="form-control" name="writer" id="writer" value="{{$movie->writer}}" placeholder="Writer">
                          <span class="text-danger writerError">@error('writer'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                        <label for="actors">Actors</label>
                        @php
                          $actorN=$movie->actors;
                          $actorNArray=explode(',',$actorN)
                        @endphp
                          @foreach($actors as $actor)
                          <br><input type="checkbox" id="actors_{{$actor->id}}" @if(in_array($actor->name,$actorNArray)) {{'checked'}} @endif name="actors[]" value="{{$actor->name}}"/> <label for="actors_{{$actor->id}}">{{$actor->name}}</label>
                          @endforeach
                        <span class="text-danger actorsError">@error('actors'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label for="plot">Plot</label>
                          <input type="text" class="form-control" name="plot" id="plot" value="{{$movie->plot}}" placeholder="Plot">
                          <span class="text-danger plotError">@error('plot'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label for="metascore">Meta score</label>
                          <input type="text" class="form-control" name="metascore" value="{{$movie->metascore}}" id="metascore" placeholder="Meta score">
                          <span class="text-danger metascoreError">@error('metascore'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label for="imdbRating">Imdb Rating</label>
                          <input type="text" class="form-control" name="imdbRating"  value="{{$movie->imdbRating}}" id="imdbRating" placeholder="ImdbRating">
                          <span class="text-danger imdbRatingError">@error('imdbRating'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label for="imdbVotes">Imdb Votes</label>
                          <input type="text" class="form-control" name="imdbVotes"  value="{{$movie->imdbVotes}}" id="imdbVotes" placeholder="Imdb Votes">
                          <span class="text-danger imdbVotesError">@error('imdbVotes'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label for="imdbid">Imdb ID</label>
                          <input type="text" class="form-control" name="imdbid" value="{{$movie->imdbID}}" id="imdbid" placeholder="Imdb ID">
                          <span class="text-danger imdbidError">@error('imdbid'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label for="type">Type</label>
                          <input type="text" class="form-control" name="type" id="type"  value="{{$movie->type}}" placeholder="Type">
                          <span class="text-danger typeError">@error('type'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label for="dvd">DVD</label>
                          <input type="text" class="form-control" name="dvd" id="dvd"  value="{{$movie->DVD}}" placeholder="DVD">
                          <span class="text-danger dvdError">@error('dvd'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label for="boxOffice">Box office</label>
                          <input type="text" class="form-control" name="boxOffice" value="{{$movie->boxOffice}}" id="boxOffice" placeholder="Box office">
                          <span class="text-danger boxOfficeError">@error('boxOffice'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label for="production">Production</label>
                          <input type="text" class="form-control" name="production" value="{{$movie->production}}" id="production" placeholder="Production">
                          <span class="text-danger productionError">@error('production'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label for="website">Website</label>
                          <input type="text" class="form-control" name="website" value="{{$movie->website}}" id="website" placeholder="Website">
                          <span class="text-danger websiteError">@error('website'){{$message}}@enderror</span>
                        </div>
                        
                        <div class="form-group">
                          <label for="rent_price">Rent price</label>
                          <input type="text" class="form-control" name="rent_price" id="rent_price" onKeyPress="return isNumber()" placeholder="Rent price" value="{{$movie->rent_price}}">
                          <span class="text-danger rentpriceError">@error('rent_price'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label for="rent_period">Rent period</label>
                          <input type="text" class="form-control" name="rent_period" id="rent_period" onKeyPress="return isNumber()" placeholder="Rent period" value="{{$movie->rent_period}}">
                          <span class="text-danger rent_periodError">@error('rent_period'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label for="Poster">Poster</label>
                          <input type="text" class="form-control" name="Poster" id="Poster" placeholder="Poster" value="{{Helper::getMovieMeta($movie->id,'Poster')}}">
                          <span class="text-danger PosterError">@error('Poster'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label for="Language">Language</label>
                          <input type="text" class="form-control" name="Language" id="Language" placeholder="Language" value="{{Helper::getMovieMeta($movie->id,'Language')}}">
                          <span class="text-danger LanguageError">@error('Language'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label for="Country">Country</label>
                          <input type="text" class="form-control" name="Country" id="Country" placeholder="Country" value="{{Helper::getMovieMeta($movie->id,'Country')}}">
                          <span class="text-danger CountryError">@error('Country'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label for="Awards">Awards</label>
                          <input type="text" class="form-control" name="Awards" id="Awards" placeholder="Awards" value="{{Helper::getMovieMeta($movie->id,'Awards')}}">
                          <span class="text-danger AwardsError">@error('Awards'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label for="is_premium">Is Premium</label>
                          <select id="is_premium" name="is_premium" class="form-control">
                                <option value="no" @if(strcmp($movie->is_premium_content,'no')==0) selected @endif>No</option>
                                <option value="yes" @if(strcmp($movie->is_premium_content,'yes')==0) selected @endif>Yes</option>
                          </select>
                        </div>
                        
                        <div class="mt-3">
                        <button type="submit" class="btn btn-primary">
                                    {{ __('Save') }}
                                </button>
</div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>   
        </div>
    </div>
</div>
<script type="text/javascript">
function check_form_requirements()
{
    var check = false;
	if($("#title").val().length < 1)
    {
        $(".titleError").css('display','block');
        $(".titleError").html('Title is required.');
        check = true;
    }
    else
    {
        $(".titleError").css('display','none');
        $(".titleError").html('');
    }
    if($("#year").val().length < 4)
    {
        $(".yearError").css('display','block');
        $(".yearError").html('Year is required.');
        check = true;
    }
    else{
        $(".yearError").css('display','none');
        $(".yearError").html('');
    }
    if(check){
        $('html, body').animate({scrollTop:0},500);
        return false;
    }
}
</script>
@endsection