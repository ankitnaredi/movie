@extends('layouts.admin')
@section('title',"Add Actor")
@section('content')
<div class="row">
	<div class="col-sm-12">
    	<div class="home-tab">
        	<div class="col-lg-12 grid-margin stretch-card">
            	<div class="card">
                	<div class="card-body">
                    	<h4 class="card-title">Add actor</h4>
                        <div class="col-lg-6">
                        <form id="form_actor_add" action="{{route('admin.actors.add.post')}}" method="POST" onSubmit="return check_form_requirements()">
                        @csrf
                        <div class="form-group">
                          <label for="name">Name *</label>
                          <input type="text" class="form-control" name="name" id="name" placeholder="Title" value="{{old('name')}}" onkeyDown="checkBlankField(this.id,'Name is required.','nameError')" onkeyUp="checkBlankField(this.id,'Name is required.','nameError')">
                          <span class="text-danger nameError">@error('title'){{$message}}@enderror</span>
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