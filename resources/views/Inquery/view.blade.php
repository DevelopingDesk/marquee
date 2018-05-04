@extends('Dashboard/dashboard')
@section('content')
@if($inquery !=null)<br><br>
<div class="col-md-12" >
	<hr>
  <center><h3 style="color: blue">Inquery Stuff</h3></center>

  <div style="background-color: white" id="divide">
    <br><br>
  
 


<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
              <th>Serial Number</th>
                <th>First Name</th>
                
                <th>Last Name</th>
                
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
                
                        @if(Auth::User()->hasrole('admin'))
                
                <th>Delete</th>
               @endif
                

               
                
            </tr>
        </thead>
       
        <tbody>
          @foreach($inquery as $cls)
            <tr>

                <td>{{$cls->id}}</td>
                <td>{{$cls->fname}}</td>
                 <td>{{$cls->lname}}</td>
                  <td>{{$cls->email}}</td>
                   <td>{{$cls->subject}}</td>
                    <td>{{$cls->message}}</td>
             
                
             
        
             
                



  




              
                        @if(Auth::User()->hasrole('admin'))

                <td>

                <a href="{{route('delete.inquery',$cls->id)}}" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-remove"></i> Delete</a>
             
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