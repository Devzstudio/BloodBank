@extends('layouts.app')

@section('content')
<div class="content-fixer">
<div class="row">

<div class="col-md-3">

<form method="GET" action="">
<div class="form-group">
 	  <select name="group" class="form-control">
                                        <option value ="AB +">AB +</option>
                                        <option value ="AB -">AB -</option>
                                        <option value ="A +">A +</option>
                                        <option value ="A -">A -</option>
                                        <option value ="B +">B +</option>
                                        <option value ="B -">B -</option>
                                        <option value ="O +">O +</option>
                                        <option value ="O -">O -</option>
                                 </select>

            </div>
 
</div>

<div class="col-md-3">

 <div class="form-group">
 	  <input name="state" class="form-control" placeholder="State" required >
 
                          </div>
 
</div>
<div class="col-md-3">

 <div class="form-group">
    <input name="district" class="form-control" placeholder="District" required >
 
                          </div>
</div>
<div class="col-md-3">

 <div class="form-group">
<div class="input-group">
	  <input name="city" class="form-control" placeholder="City" required >
<span class="input-group-btn">
         <input type="submit" class="btn btn-default btn-info" value="Search">
      </span>
                      </div>           </div>
</form>

</div>
 </div>



<div class="row">
		
	
	 @foreach($users as $user)

	<div class="col-md-4">

	<div class="thumbnail">
	      <div class="caption">


	<h3><a href="{{ url('donor/'.$user->id) }}"> {{ ucfirst($user->name) }} </a> 
	</h3>

	
	
	

	<ul class="list-group">
  <li class="list-group-item">Blood Group : {{ $user->group }}ve </li>
  <li class="list-group-item">City : {{ $user->city }}</li>
  <li class="list-group-item">District : {{ $user->district }}</li>
  <li class="list-group-item">State : {{ $user->state }}</li>
  <li class="list-group-item">Weight : {{ $user->weight }} kgs</li> 
  <li class="list-group-item">Gender : {{ $user->gender }}</li> 
  <li class="list-group-item">Age : {{ $user->age }}</li> 
  <li class="list-group-item">Last Donated : {{  date('F d, Y h:m A', strtotime($user->last_donated)) }}</li> 
  <li class="list-group-item">Social :   @if ($user->social != '')
    <a href="{{ $user->social }}" target="_blank"><i class="fa fa-facebook"></i></a>
      @if ($user->whatsapp == 1)
       <p class="hint--top" data-hint="{{ $user->phone }}">
        <i class="fa fa-whatsapp "></i>
      </p>
      @endif

    @else
    
     <p class="hint--top" data-hint="{{ $user->phone }}">
    <i class="fa fa-minus"></i> 
</p>
  @endif 
  </li> 

</ul>


	</div>
 </div>
 </div>
 
 
	   
	 @endforeach
</div>

@if (count($users) == 0)
<div class="alert alert-info">Sorry !! Currently there is no donors matching your result.</div>
@endif


{{ $users->render() }}


</div>
@stop