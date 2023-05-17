@extends('layouts.admin')
@section('title',"Add Movie")
@section('content')
<div class="row">
	<div class="col-sm-12">
    	<div class="home-tab">
        	<div class="col-lg-12 grid-margin stretch-card">
            	<div class="card">
                	<div class="card-body">
                    	<h4 class="card-title">Add movie</h4>
                        <div class="col-lg-6">
                        <form id="form_movie_add" action="{{route('admin.movies.add.post')}}" onSubmit="return check_form_requirements()">
                        @csrf
                        <div class="form-group">
                          <label for="title">Title *</label>
                          <input type="text" class="form-control" name="title" id="title" placeholder="Title" onkeyDown="checkBlankField(this.id,'Title is required.','titleError')" onkeyUp="checkBlankField(this.id,'Title is required.','titleError')">
                          <span class="text-danger titleError">@error('title'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label for="year">Year *</label>
                          <input type="text" class="form-control" onkeyDown="checkBlankField(this.id,'Year is required.','yearError')" onkeyUp="checkBlankField(this.id,'Year is required.','yearError')" name="year" id="year" placeholder="Year" onKeyPress="return isNumber()" max-length="4">
                          <span class="text-danger yearError">@error('year'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label for="rated">Rated</label>
                          <input type="text" class="form-control" name="rated" id="rated" placeholder="Year" max-length="2">
                          <span class="text-danger ratedError">@error('rated'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label for="released">Released</label>
                          <input type="text" class="form-control" name="released" id="released" placeholder="Released">
                          <span class="text-danger releasedError">@error('released'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label for="runtime">Runtime</label>
                          <div class="row">
                            <div class="col-md-8">
                            <input type="text" class="form-control" name="runtime" id="runtime" placeholder="Runtime" >
                            </div>
                        <div class="col-md-4">
                            <select id="runtimeType" name="runtimeType" class="form-control">
                                <option value="min" selected>Min</option>
                                <option value="hour">Hour</option>  
                            </select>
                        </div>
                            </div>
                          <span class="text-danger runtimeError">@error('runtime'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label for="genre">Genre</label>
                          <input type="text" class="form-control" name="genre" id="genre" placeholder="Genre">
                          <span class="text-danger genreError">@error('genre'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label for="director">Director</label>
                          <input type="text" class="form-control" name="director" id="director" placeholder="Director">
                          <span class="text-danger directorError">@error('director'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label for="writer">Writer</label>
                          <input type="text" class="form-control" name="writer" id="writer" placeholder="Writer">
                          <span class="text-danger writerError">@error('writer'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label for="actors">Actors</label>
                          <input type="text" class="form-control" name="actors" id="actors" placeholder="Actors">
                          <span class="text-danger actorsError">@error('actors'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label for="plot">Plot</label>
                          <input type="text" class="form-control" name="plot" id="plot" placeholder="Plot">
                          <span class="text-danger plotError">@error('plot'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label for="metascore">Meta score</label>
                          <input type="text" class="form-control" name="metascore" id="metascore" placeholder="Meta score">
                          <span class="text-danger metascoreError">@error('metascore'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label for="imdbRating">Imdb Rating</label>
                          <input type="text" class="form-control" name="imdbRating" id="imdbRating" placeholder="ImdbRating">
                          <span class="text-danger imdbRatingError">@error('imdbRating'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label for="imdbVotes">Imdb Votes</label>
                          <input type="text" class="form-control" name="imdbVotes" id="imdbVotes" placeholder="Imdb Votes">
                          <span class="text-danger imdbVotesError">@error('imdbVotes'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label for="imdbid">Imdb ID</label>
                          <input type="text" class="form-control" name="imdbid" id="imdbid" placeholder="Imdb ID">
                          <span class="text-danger imdbidError">@error('imdbid'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label for="type">Type</label>
                          <input type="text" class="form-control" name="type" id="type" placeholder="Type">
                          <span class="text-danger typeError">@error('type'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label for="dvd">DVD</label>
                          <input type="text" class="form-control" name="dvd" id="dvd" placeholder="DVD">
                          <span class="text-danger dvdError">@error('dvd'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label for="boxOffice">Box office</label>
                          <input type="text" class="form-control" name="boxOffice" id="boxOffice" placeholder="Box office">
                          <span class="text-danger boxOfficeError">@error('boxOffice'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label for="production">Production</label>
                          <input type="text" class="form-control" name="production" id="production" placeholder="Production">
                          <span class="text-danger productionError">@error('production'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label for="website">Website</label>
                          <input type="text" class="form-control" name="website" id="website" placeholder="Website">
                          <span class="text-danger websiteError">@error('website'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label for="is_premium">Is Premium</label>
                          <select id="is_premium" name="is_premium" class="form-control">
                                <option value="no" selected>No</option>
                                <option value="yes">Yes</option>
                          </select>
                        </div>
                        <div class="mt-3">
                        <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
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