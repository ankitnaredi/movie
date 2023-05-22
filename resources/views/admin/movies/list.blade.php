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
                            <td>{{$movie->runtime}} {{Helper::getMovieMeta($movie->id,'runtimeType')}}</td>
                            <td>{{ucfirst($movie->director)}}</td>
                            <td>{{ucfirst($movie->type)}}</td>
                            <td>{{ucfirst($movie->is_premium_content)}}</td>
                            <td>
                            	<a href="{{route('admin.movies.edit',$movie->id)}}"><i class="fas fa-edit"></i></a> / 
                                <a  href="{{route('admin.movies.delete',$movie->id)}}" class="delete"><i class="fas fa-trash"></i></a>
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
<script type="text/javascript">
    $=jQuery;
    $(".delete").on('click',function(e){
        e.preventDefault();
        var that = $(this);
        Swal.fire({
        title: 'Do you want to delete this movie',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete this!'
        }).then((result) => {
                
                if (result.isConfirmed) {
                    $(".overlay").css('display','block');
                $(".acoda-spinner").css('display','flex');
                    $.ajax({
                        url:that.attr('href'),
                        type:"POST",
                        data:{
                            '_token':'{{csrf_token()}}'
                        },
                        success:function(data)
                        {
                            that.closest('tr').remove();
                        },
                        error:function(error){

                        },
                        complete:function(data){
                            $(".acoda-spinner").css('display','none');
                            $(".overlay").css('display','none');
                        }
                    });
                }
        });
    });
</script>
@endsection