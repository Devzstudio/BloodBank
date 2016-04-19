@extends('layouts.app')

@section('content')
 
 <div class="panel panel-default">
  <div class="panel-heading">Request Details</div>
  <div class="panel-body">
    <table class="table">
    	<tr>
    	  <td> Name</td>
    	  <td> {{ $request->patient }}</td>
    	 </tr>
  
    	 <tr>
    	  <td>Group</td>
    	  <td> {{ $request->group }}</td>
    	 </tr>

    	 <tr>
    	  <td>Hospital Address</td>
    	  <td> {{ $request->hospital }}</td>
    	 </tr>


    	 <tr>
    	  <td> City</td>
    	  <td> {{ $request->city }}</td>
    	 </tr>
		
		   <tr>
        <td> District</td>
        <td> {{ $request->district }}</td>
       </tr>
    

    <tr>
    	  <td> State</td>
    	  <td> {{ $request->state }}</td>
    	 </tr>

    	 <tr>
    	  <td>Phone</td>
    	  <td> {{ $request->contact_phone }}</td>
    	 </tr>

		
    	 <tr>
          <td>Email</td>
          <td> {{ $request->contact_email }}</td>
         </tr>
 
     <tr>
          <td>Required on </td>
          <td> {{  date('F d, Y h:m A', strtotime($request->when)) }}</td>
         </tr>
 


    </table> 
  </div>
</div>

@stop