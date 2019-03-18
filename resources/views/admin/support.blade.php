@extends('layouts.admin')

@section('content')
 

 <div class="panel panel-default">
  <div class="panel-heading"><i class="fa fa-ticket"></i> Support</div>
  <div class="panel-body">
    
  <table class="table">
  <tr>
     <th>Name</th>
     <th>Email</th>
     <th>Date</th>
     <th>Actions</th>
  </tr>


   @foreach($supports as $support)
     <tr>
         <td>{{ $support->name }}</td>
         <td>{{ $support->email }}</td>
         <td>{{  date('F d, Y h:m A', strtotime($support->created_at)) }}</td>
        <td> 
         <a href="{{ url('admin/view/support/'.$support->id) }}" class="btn btn-default"><i class="fa fa-eye"></i> View</a> 
         <a href="{{ url('admin/delete/support/'.$support->id) }}" class="btn btn-default"><i class="fa fa-trash"></i> Delete</a> 
         </td>
     </tr>
   @endforeach


@if (count($supports) == 0)
<tr>
<td colspan=4>There is no messages.</td>
</tr>
@endif


  
  </table>


{{ $supports->render() }}

  </div>
   
</div>
</div>

@stop
