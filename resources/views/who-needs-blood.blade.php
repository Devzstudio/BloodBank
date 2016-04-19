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

 
            <div class="panel panel-default">
                <div class="panel-heading">Who Needs Blood ?</div>

                <div class="panel-body">

              
               @foreach($requests as $request )
              <div class="thumbnail">
                 <div class="panel-content">
                <h3> <a href="{{ url('request-details/'.$request->id) }}"> {{  ucfirst($request->patient) }} - {{ $request->group }}ve </a> </h3>

                
                <ul class="list-group">
  <li class="list-group-item">Blood Group : {{ $request->group }}ve </li> 
  <li class="list-group-item">City : {{ $request->city }} </li> 
  <li class="list-group-item">District : {{ $request->district }} </li> 
  <li class="list-group-item">State : {{ $request->state }} </li> 

  </li> 
              </div>
              </div>
               @endforeach
 
            </div>
       
    </div>
</div> 
@endsection
