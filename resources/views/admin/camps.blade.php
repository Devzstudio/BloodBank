@extends('layouts.admin')

@section('content')
 

 <div class="panel panel-default">
  <div class="panel-heading"><i class="fa fa-ticket"></i> Camps</div>
  <div class="panel-body">
    
  <table class="table">
  <tr>
     <th>City</th>
     <th>District</th>
     <th>State</th>
     <th>Start</th>
     <th>End</th>
     <th>Actions</th>
  </tr>


   @foreach($camps as $camp)
     <tr>
         <td>{{ $camp->city }}</td>
         <td>{{ $camp->district }}</td>
         <td>{{ $camp->state }}</td>
         <td>{{  date('F d, Y h:m A', strtotime($camp->start)) }}</td>
         <td>{{  date('F d, Y h:m A', strtotime($camp->end)) }}</td>
        <td> 
                 <a href="{{ url('admin/camp/edit/'.$camp->id) }}" class="btn btn-default"><i class="fa fa-edit"></i> Edit</a> 
                 <a href="{{ url('admin/delete/camp/'.$camp->id) }}" class="btn btn-default"><i class="fa fa-trash"></i> Delete</a> 
         </td>
     </tr>
   @endforeach


@if (count($camps) == 0)
<tr>
<td colspan=6>There is no camps.</td>
</tr>
@endif


  
  </table>


{{ $camps->render() }}

  </div>
   
</div>
</div>

@stop