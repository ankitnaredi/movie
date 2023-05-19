@extends('layouts.admin')
@section('title',"Actors list")
@section('content')
<div class="row">
	<div class="col-sm-12">
    	<div class="home-tab">
        	<div class="col-lg-12 grid-margin stretch-card">
            	<div class="card">
                	<div class="card-body">
                    	<h4 class="card-title">Actors</h4>
                        <div class="table-responsive">
                        	<table class="table">
                      <thead>
                        <tr>
                          <th>Name</th>
                          
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      @if(count($actors) > 0)
                      @foreach($actors as $actor)
                      	<tr>
                        	<td>{{ucfirst($actor->name)}}</td>
                            
                            <td>
                            	<a href="{{route('admin.actors.edit',$actor->id)}}"><i class="fas fa-edit"></i></a> / 
                                <a  href="{{route('admin.actors.delete',$actor->id)}}" class="delete"><i class="fas fa-trash"></i></a>
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
        title: 'Do you want to delete this actor',
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