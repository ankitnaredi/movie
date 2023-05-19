@extends('layouts.admin')
@section('title',"Edit Actor")
@section('content')
<div class="row">
	<div class="col-sm-12">
    	<div class="home-tab">
        	<div class="col-lg-12 grid-margin stretch-card">
            	<div class="card">
                	<div class="card-body">
                    	<h4 class="card-title">Edit Actor</h4>
                        <div class="col-lg-6">
                        <form id="form_actor_edit" method="POST" action="{{route('admin.actors.edit.post',$actor->id)}}" onSubmit="return check_form_requirements()">
                        @csrf
                        <div class="form-group">
                          <label for="name">Name *</label>
                          <input type="text" class="form-control" value="{{$actor->name}}" name="name" id="name" placeholder="Name" onkeyDown="checkBlankField(this.id,'Name is required.','nameError')" onkeyUp="checkBlankField(this.id,'Name is required.','nameError')">
                          <span class="text-danger nameError">@error('name'){{$message}}@enderror</span>
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
	if($("#name").val().length < 1)
    {
        $(".nameError").css('display','block');
        $(".nameError").html('Name is required.');
        check = true;
    }
    else
    {
        $(".nameError").css('display','none');
        $(".nameError").html('');
    }
    
    if(check){
        $('html, body').animate({scrollTop:0},500);
        return false;
    }
}
</script>
@endsection