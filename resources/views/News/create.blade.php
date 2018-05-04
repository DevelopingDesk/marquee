@extends('Dashboard/dashboard')
@section('content')

<style> 
input[type=text] {
   
    padding: 12px 20px;
    margin: 4px 0;
    box-sizing: border-box;
    border: none;
    border-bottom: 2px solid lightblue;
    
}
input[type=textarea] {
   
    padding: 12px 20px;
    margin: 4px 0;
    box-sizing: border-box;
    border: none;
    border-bottom: 2px solid lightblue;
    
}
input[type=file] {
   
    padding: 12px 20px;
    margin: 4px 0;
    box-sizing: border-box;
    border: none;
    border-bottom: 2px solid lightblue;
    
}
</style>
	


	<div class="row">
	<form method="post" action="{{route('store.news')}}"  enctype="multipart/form-data">
		{{csrf_field()}}
	<center><h3 style="color: red">Update Your News</h3></center>
	<br>
	<br>
	<div class="col-md-12">
		<div class="col-md-3 col-md-offset-3">
			<input type="text" name="name"  placeholder="Upload Your News">
		</div>
		
		
	<div class="col-md-6" style="margin-top: 20px">
		<button class="btn btn-primary">Upload</button>
	</div>

	</form>
</div>

@endsection