@extends('layouts.admin')

@section('content')
 

 <div class="panel panel-default">
  <div class="panel-heading"><i class="fa fa-group"></i> Users</div>
  <div class="panel-body">
    
  <table class="table">
  <tr>
     <th>Name</th>
     <th>Email</th>
     <th>Joined</th>
     <th>Last Login</th>
     <th>Donor</th>
     <th>Actions</th>
  </tr>


   @foreach($users as $user)
     <tr>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{  date('F d, Y h:m A', strtotime($user->created_at)) }}</td>
        <td>{{  date('F d, Y h:m A', strtotime($user->updated_at)) }}</td>
        <td>@if ( $user->is_donor == 1 )
        Yes
        @else 
        No
        @endif</td>
        <td> 

        <a href="{{ url('admin/user/edit/'.$user->id) }}" class="btn btn-default"><i class="fa fa-edit"></i> Edit</a> 
  
      @if ($user->id != Auth::user()->id )

        @if ($user->is_admin != 1)
        <a href="{{ url('admin/make/admin/'.$user->id) }}" class="btn btn-default"><i class="fa fa-user-plus"></i> Make Admin</a>   
        @else
                      <a href="{{ url('admin/remove/admin/'.$user->id) }}" class="btn btn-default"><i class="fa fa-user-times"></i> Remove Admin</a>   

        @endif
         <a href="{{ url('admin/delete/user/'.$user->id) }}" class="btn btn-default"><i class="fa fa-trash"></i> Delete</a> 
                    
        @endif

         </td>
     </tr>
   @endforeach



  
  </table>


{{ $users->render() }}

  </div>
   
</div>
</div>

@stop