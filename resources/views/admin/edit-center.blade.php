@extends('layouts.admin')

@section('content')
 

 <div class="panel panel-default">
  <div class="panel-heading"><i class="fa fa-ticket"></i> Edit Center</div>
  <div class="panel-body">
    

<form action="{{ url('admin/center/edit/'.$center->id) }}" method="POST">
{{ csrf_field() }}
 
 <div class="form-group">
                          Name                 
                   <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $center->state }}">
            </div>


 <div class="form-group">
                          Phone                 
                   <input type="text" name="phone" class="form-control" placeholder="Phone" value="{{ $center->phone }}">
            </div>



 <div class="form-group">
                          State                 
                   <input type="text" name="state" class="form-control" placeholder="State" value="{{ $center->state }}">
            </div>

 <div class="form-group">
                          District                 
                   <input type="text" name="district" class="form-control" placeholder="District" value="{{ $center->district }}">
            </div>


 <div class="form-group">
                          City                 
                   <input type="text" name="city" class="form-control" placeholder="City" value="{{ $center->city }}">
            </div>


 
     <div class="form-group">
            <input type="submit" class="btn btn-default"  value="Submit">
            </div>

  </form>
  </div>
   
</div>
</div>

@stop