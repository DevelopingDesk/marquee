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
	<form method="post" action="{{route('store.gallery')}}"  enctype="multipart/form-data">
		{{csrf_field()}}
	<center><h3 style="color: red">Enter Gallery Images</h3></center>
	<br>
	<br>
	<div class="col-md-12">
		<div class="col-md-3 col-md-offset-3">
			<input type="text" name="name"  placeholder="Enter Image Name">
		</div>
		<div class="col-md-3 ">
			<input type="file" name="images">
		</div>
		<div class="col-md-3 col-md-offset-3">
		<input type="text" name="description" placeholder="Enter Description">
	</div>
	<div class="col-md-6" style="margin-top: 20px">
		<button class="btn btn-primary">Upload</button>
	</div>

	</form>
</div>
</div>

@if($gallery !=null)<br><br>
<div class="col-md-12" >
	<hr>
  <center><h3 style="color: blue"> Gallery Data</h3></center>

  <div style="background-color: white" id="divide">
    <br><br>
  
 


<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
              <th>Serial Number</th>
                <th>Image</th>
                
                <th>Name</th>
                <th>Description</th>
                
                        @if(Auth::User()->hasrole('admin'))
                
                <th>Delete</th>
               @endif
                

               
                
            </tr>
        </thead>
       
        <tbody>
          @foreach($gallery as $cls)
            <tr>

                <td>{{$cls->id}}</td>
                <td>{{$cls->name}}</td>
             
                
                <td><img src="{{asset($cls->image)}}" height="30px" width="50px"></td>
                <td>{{$cls->description}}</td>
             
                



  




              
                        @if(Auth::User()->hasrole('admin'))

                <td>

                <a href="{{route('delete.gallery',$cls->id)}}" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-remove"></i> Delete</a>
             
               </td>
               @endif
            </tr>
           @endforeach

        </tbody>

    </table>
   
  
    
    
       
<script type="text/javascript">
  
  $(document).ready(function() {
    $('#example').DataTable();
} );
</script>


</div>

</div>
@endif
@endsection