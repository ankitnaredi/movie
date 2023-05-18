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
                        <form id="form_movie_add" action="{{route('admin.movies.add.post')}}" method="POST" onSubmit="return check_form_requirements()">
                        @csrf
                        <div class="form-group">
                          <label for="title">Title *</label>
                          <input type="text" class="form-control" name="title" id="title" placeholder="Title" value="{{old('title')}}" onkeyDown="checkBlankField(this.id,'Title is required.','titleError')" onkeyUp="checkBlankField(this.id,'Title is required.','titleError')">
                          <span class="text-danger titleError">@error('title'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label for="year">Year *</label>
                          <input type="text" class="form-control"  onkeyDown="checkBlankField(this.id,'Year is required.','yearError')" onkeyUp="checkBlankField(this.id,'Year is required.','yearError')" value="{{old('year')}}" name="year" id="year" placeholder="Year" onKeyPress="return isNumber()" max-length="4">
                          <span class="text-danger yearError">@error('year'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label for="rated">Rated</label>
                          <input type="text" class="form-control" name="rated" id="rated" placeholder="Rated" max-length="2" value="{{old('rated')}}">
                          <span class="text-danger ratedError">@error('rated'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label for="released">Released</label>
                          <input type="text" class="form-control" name="released" id="released" placeholder="Released" value="{{old('released')}}">
                          <span class="text-danger releasedError">@error('released'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label for="runtime">Runtime</label>
                         
                            
                            <input type="text" class="form-control" name="runtime" id="runtime" placeholder="Runtime" value="{{old('runtime')}}">
                           
                       
                          
                          <span class="text-danger runtimeError">@error('runtime'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label for="genre">Genre</label>
                          <input type="text" class="form-control" name="genre" id="genre" placeholder="Genre" value="{{old('genre')}}">
                          <span class="text-danger genreError">@error('genre'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label for="director">Director</label>
                          <input type="text" class="form-control" name="director" id="director" placeholder="Director" value="{{old('director')}}">
                          <span class="text-danger directorError">@error('director'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label for="writer">Writer</label>
                          <input type="text" class="form-control" name="writer" id="writer" placeholder="Writer" value="{{old('writer')}}">
                          <span class="text-danger writerError">@error('writer'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label for="actors">Actors</label>
                          <input type="text" class="form-control" name="actors" id="actors" placeholder="Actors" value="{{old('actors')}}">
                          <span class="text-danger actorsError">@error('actors'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label for="plot">Plot</label>
                          <input type="text" class="form-control" name="plot" id="plot" placeholder="Plot" value="{{old('plot')}}">
                          <span class="text-danger plotError">@error('plot'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label for="metascore">Meta score</label>
                          <input type="text" class="form-control" name="metascore" id="metascore" placeholder="Meta score" value="{{old('metascore')}}">
                          <span class="text-danger metascoreError">@error('metascore'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label for="imdbRating">Imdb Rating</label>
                          <input type="text" class="form-control" name="imdbRating" id="imdbRating" placeholder="ImdbRating" value="{{old('imdbRating')}}">
                          <span class="text-danger imdbRatingError">@error('imdbRating'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label for="imdbVotes">Imdb Votes</label>
                          <input type="text" class="form-control" name="imdbVotes" id="imdbVotes" placeholder="Imdb Votes" value="{{old('imdbVotes')}}">
                          <span class="text-danger imdbVotesError">@error('imdbVotes'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label for="imdbid">Imdb ID</label>
                          <input type="text" class="form-control" name="imdbid" id="imdbid" placeholder="Imdb ID" value="{{old('imdbid')}}">
                          <span class="text-danger imdbidError">@error('imdbid'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label for="type">Type</label>
                          <input type="text" class="form-control" name="type" id="type" placeholder="Type" value="{{old('type')}}">
                          <span class="text-danger typeError">@error('type'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label for="dvd">DVD</label>
                          <input type="text" class="form-control" name="dvd" id="dvd" placeholder="DVD"  value="{{old('dvd')}}">
                          <span class="text-danger dvdError">@error('dvd'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label for="boxOffice">Box office</label>
                          <input type="text" class="form-control" name="boxOffice" id="boxOffice" placeholder="Box office" value="{{old('boxOffice')}}">
                          <span class="text-danger boxOfficeError">@error('boxOffice'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label for="production">Production</label>
                          <input type="text" class="form-control" name="production" id="production" placeholder="Production" value="{{old('production')}}">
                          <span class="text-danger productionError">@error('production'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label for="website">Website</label>
                          <input type="text" class="form-control" name="website" id="website" placeholder="Website" value="{{old('website')}}">
                          <span class="text-danger websiteError">@error('website'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label for="Poster">Poster</label>
                          <input type="text" class="form-control" name="Poster" id="Poster" placeholder="Poster" value="{{old('Poster')}}">
                          <span class="text-danger PosterError">@error('website'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label for="Language">Language</label>
                          <input type="text" class="form-control" name="Language" id="Language" placeholder="Poster" value="{{old('Language')}}">
                          <span class="text-danger LanguageError">@error('Language'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label for="Country">Country</label>
                          <input type="text" class="form-control" name="Country" id="Country" placeholder="Poster" value="{{old('Country')}}">
                          <span class="text-danger CountryError">@error('Country'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label for="Awards">Awards</label>
                          <input type="text" class="form-control" name="Awards" id="Awards" placeholder="Awards" value="{{old('Awards')}}">
                          <span class="text-danger AwardsError">@error('Awards'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label for="is_premium">Is Premium</label>
                          <select id="is_premium" name="is_premium" class="form-control">
                                <option value="no"  @if(strcmp(old("is_premium"),"no")==0) selected @endif>No</option>
                                <option value="yes" @if(strcmp(old("is_premium"),"yes")==0) selected @endif>Yes</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="rent_price">Rent price</label>
                          <input type="text" class="form-control" name="rent_price" id="rent_price" onKeyPress="return isNumber()" placeholder="Rent price" value="{{old('rent_price')}}">
                          <span class="text-danger rentpriceError">@error('rent_price'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                          <label for="rent_period">Rent period</label>
                          <input type="text" class="form-control" name="rent_period" id="rent_period" onKeyPress="return isNumber()" placeholder="Rent period" value="{{old('rent_period')}}">
                          <span class="text-danger rent_periodError">@error('rent_period'){{$message}}@enderror</span>
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