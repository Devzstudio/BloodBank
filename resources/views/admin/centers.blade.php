@extends('layouts.admin')

@section('content')
 

 <div class="panel panel-default">
  <div class="panel-heading"><i class="fa fa-ticket"></i> Blood Center</div>
  <div class="panel-body">
    
  <table class="table">
  <tr>
     <th>Name</th>
     <th>City</th>
     <th>District</th>
     <th>State</th> 
     <th>Landmark</th> 
     <th>Actions</th>
  </tr>


   @foreach($centers as $center)
     <tr>
         <td>{{ $center->name }}</td>
         <td>{{ $center->phone }}</td>
         <td>{{ $center->city }}</td>
         <td>{{ $center->district }}</td>
         <td>{{ $center->state }}</td>
         <td>{{ $center->landmark }}</td>
      <td> 
                 <a href="{{ url('admin/center/edit/'.$center->id) }}" class="btn btn-default"><i class="fa fa-edit"></i> Edit</a> 
                 <a href="{{ url('admin/delete/center/'.$center->id) }}" class="btn btn-default"><i class="fa fa-trash"></i> Delete</a> 
         </td>
     </tr>
   @endforeach


@if (count($centers) == 0)
<tr>
<td colspan=6>There is no blood centers.</td>
</tr>
@endif


  
  </table>


{{ $centers->render() }}

  </div>
   
</div>
</div>

@stop
