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
input[type=email] {
   
    padding: 12px 20px;
    margin: 4px 0;
    box-sizing: border-box;
    border: none;
    border-bottom: 2px solid lightblue;
    
}
</style>
	


	<div class="row">
	<form method="post" action="{{route('store.contact')}}"  enctype="multipart/form-data">
		{{csrf_field()}}
	<center><h3 style="color: red">Update Your Contact</h3></center>
	<br>
	<br>
	@if($contact ==null)
	<div class="col-md-12">
		<div class="col-md-3 col-md-offset-3">
			<input type="text" name="name"  placeholder="Enter your name">
		</div>
		<div class="col-md-3 col-md-offset-1">
			<input type="text" name="phone"  placeholder="Enter you Phone">
		</div>
		<div class="col-md-3 col-md-offset-3">
			<input type="text" name="tell"  placeholder="Enter you tel number">
		</div>
		<div class="col-md-3 col-md-offset-1">
			<input type="text" name="address"  placeholder="Enter your address">
		</div>
		<div class="col-md-3 col-md-offset-3">
			<input type="email" name="email"  placeholder="Enter your email">
		</div>
		<div class="col-md-3 col-md-offset-1" style="margin-top: 15px">
			<button class="btn btn-primary">Upload</button>
		</div>
		
	</div>

	@else
<div class="col-md-12">
		<div class="col-md-3 col-md-offset-3">
			<input type="text" name="name" value="{{$contact->name}}" placeholder="Enter your name">
		</div>
		<div class="col-md-3 col-md-offset-1">
			<input type="text" name="phone"  value="{{$contact->phone}}"   placeholder="Enter you Phone">
		</div>
		<div class="col-md-3 col-md-offset-3">
			<input type="text" name="tell"   value="{{$contact->telphone}}"  placeholder="Enter you tel number">
		</div>
		<div class="col-md-3 col-md-offset-1">
			<input type="text" name="address"  value="{{$contact->address}}"   placeholder="Enter your address">
		</div>
		<div class="col-md-3 col-md-offset-3">
			<input type="email" name="email"  value="{{$contact->email}}"   placeholder="Enter your email">
		</div>
		<div class="col-md-3 col-md-offset-1" style="margin-top: 15px">
			<button class="btn btn-primary">Upload</button>
		</div>
		
	</div>

@endif
	</form>
</div>

@endsection