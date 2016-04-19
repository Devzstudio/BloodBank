@extends('layouts.app')

@section('content')
 

 <div class="panel panel-default">
  <div class="panel-heading">Donor Details</div>
  <div class="panel-body">
    <table class="table">
    	<tr>
    	  <td> Name</td>
    	  <td> {{ $donor->name }}</td>
    	 </tr>

       <tr>
        <td> Age</td>
        <td> {{ $donor->age }}</td>
       </tr> 	 

       <tr>
    	  <td> Gender</td>
    	  <td> {{ $donor->gender }}</td>
    	 </tr> 

    	 <tr>
        <td> Weight</td>
        <td> {{ $donor->weight }} kgs</td>
       </tr> 


       <tr>
    	  <td> Last Donated</td>
    	  <td>  {{  date('F d, Y h:m A', strtotime($donor->last_donated)) }}</td>
    	 </tr>

    	 <tr>
    	  <td>Group</td>
    	  <td> {{ $donor->group }}</td>
    	 </tr>

    	 <tr>
    	  <td> Address</td>
    	  <td> {{ $donor->address }}</td>
    	 </tr>


    	 <tr>
    	  <td> City</td>
    	  <td> {{ $donor->city }}</td>
    	 </tr>
		

       <tr>
        <td> District</td>
        <td> {{ $donor->district }}</td>
       </tr>		

    <tr>
    	  <td> State</td>
    	  <td> {{ $donor->state }}</td>
    	 </tr>

    	 <tr>
    	  <td>Phone</td>
    	  <td> {{ $donor->phone }}</td>
    	 </tr>

		
    	 <tr>
          <td>Email</td>
          <td> {{ $donor->email }}</td>
         </tr>

        <tr>
          <td>Social</td>
          <td> 
          @if ($donor->social != '')
          <a href="{{ $donor->social }}" target="_blank"><i class="fa fa-facebook"></i></a>
           @if ($donor->whatsapp == 1)
       <p class="hint--top" data-hint="{{ $donor->phone }}">
        <i class="fa fa-whatsapp "></i>
      </p>
      @endif
          @else
            -
          @endif
          </td>
         </tr>


    </table>
<hr>
<h4>Send Message</h4>
<hr>
    <form action="{{ url('message') }}" method="POST">
    {{ csrf_field() }}
      <div class="form-group">
      <input type="email" name="sender" class="form-control" placeholder="Email" required>
      </div>  
        <div class="form-group">
      <input type="phone" name="phone" class="form-control" placeholder="Phone" required>
      </div>

      <div class="form-group">
      <input type="text" name="subject" class="form-control" placeholder="Subject" required>
      </div>

      <div class="form-group">
       <textarea placeholder="Message" name="message" class="form-control" required></textarea> 
        </div>

        <input type="hidden" name="receiver" value="{{ $donor->id }}">

        <div class="form-group">
      <input type="submit"  class="btn btn-primary" value="Submit">
      </div>
      
      

    </form>

  </div>
</div>

@stop