@extends('layouts.admin')
@section('title',"Import Movie")
@section('content')
<div class="row">
	<div class="col-sm-12">
    	<div class="home-tab">
        	<div class="col-lg-12 grid-margin stretch-card">
            	<div class="card">
                	<div class="card-body">
                    	<h4 class="card-title">Import movie</h4>
                        <div class="col-lg-6">
                        
                        @csrf
                            <div class="form-group">
                                <input type="text" id="search" name="search" value="" class="form-control" onkeypress="callkeyvalue(event)"/>
                                <div class="mt-3 searchbtn">
                                    <input type="button" id="searchbtn" name="searchbtn" value="Search" class="btn btn-primary"/>
                                </div>
                            </div>
                            <div class="Movie_details" style="display:none">
                                
                            </div>
                            <div class="mt-3 importbtn"  style="display:none">
                                    <button type="button" class="btn btn-primary" id="importbtn" name="importbtn">
                                        {{ __('Import') }}
                                    </button>
                            </div>
                        
                        </div>
                    </div>
                </div>
            </div>   
        </div>
    </div>
</div>
<script type="text/javascript">
    function searchMovie()
    {
        
        
        if(document.getElementById("search").value.length < 3)
        {
            Swal.fire('minimum 3 character is required.');
            return;
        }
        $(".overlay").css('display','block');
        $(".acoda-spinner").css('display','flex');
        $.ajax({
            url:"{{route('admin.movies.search')}}",
            type:"POST",
            data:{
                '_token':"{{csrf_token()}}",
                "search":document.getElementById("search").value
            },
            success:function(data){
                if(data.success)
                {
                    if(typeof data.data.Actors === "undefined")
                    {
                        $(".Movie_details").css("display",'none');
                        $(".Movie_details").html('');
                        Swal.fire('No movie found.');
                        return;
                    }
                    console.log(data.data);
                    var html = '<div class="form-group">';
                    html+='<p><label>Title:</label> '+data.data.Title+'</p>';
                    html+='<p><label>Year:</label> '+data.data.Year+'</p>';
                    html+='<p><label>Type:</label> '+data.data.Type+'</p>';
                    html+='<p><label>Actors:</label> '+data.data.Actors+'</p>';
                    html+='<p><input type="hidden" id="imdbID" name="imdbID" value="'+data.data.imdbID+'"/>';
                    html+='<p><label>Awards:</label> '+data.data.Awards+'</p>';
                    html+='<p><label>BoxOffice:</label> '+data.data.BoxOffice+'</p>';
                    html+='<p><label>Country:</label> '+data.data.Country+'</p>';
                    html+='<p><label>Director:</label> '+data.data.Director+'</p>';
                    html+='<p><label>Genre:</label> '+data.data.Genre+'</p>';
                    html+='<p><label>Language:</label> '+data.data.Language+'</p>';
                    html+='</div>';
                    $(".Movie_details").html(html);
                    $(".Movie_details").css('display','block');
                   
                    $(".importbtn").css('display','block');
                }
                else{
                    Swal.fire('No movie exist');
                }
            },
            error:function(error){
                
            },
            complete:function(data){
                $(".overlay").css('display','none');
                $(".acoda-spinner").css('display','none');
            }
        });
    }
    function callkeyvalue(e)
    {
        if(e.keyCode == 13)
        {
            searchMovie()
        }
    }
    $("#importbtn").on('click',function(e){
        e.preventDefault();
        if($("#imdbID").length < 1)
        {
            Swal.fire('Movie not found.');
        }
        $(".overlay").css('display','block');
        $(".acoda-spinner").css('display','flex');
        $.ajax({
            url:"{{route('admin.movies.import.post')}}",
            type:"POST",
            data:{
                '_token':"{{csrf_token()}}",
                "imdbID":$("#imdbID").val()
            },
            success:function(data){
                if(data.success)
                {
                    $(".Movie_details").html('');
                    $(".Movie_details").css('display','none');
                    
                    $(".importbtn").css('display','none');
                    $("#search").val('');
                    Swal.fire('Movie has been imported');
                }
                else{
                    Swal.fire(data.message);
                }
            },
            error:function(error){
                
            },
            complete:function(data){
                $(".overlay").css('display','none');
                $(".acoda-spinner").css('display','none');
            }
        });
        
    });
    $("#searchbtn").on('click',function(e){
        e.preventDefault();
        searchMovie();
    });
</script>
@endsection