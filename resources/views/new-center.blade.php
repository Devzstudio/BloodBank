@extends('layouts.app')

@section('content') 
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">New Center</div>

                <div class="panel-body">
            <form action="{{ url('center/new') }}" method="post" >
            {{ csrf_field() }}
  
                      

          <div class="form-group">
              <input type="text" name="name" placeholder="Name" class="form-control" required></input>
          </div> 

   <div class="form-group">
              <input type="phone" name="phone" placeholder="Phone" class="form-control" required></input>
          </div> 



          <div class="form-group">
              <input type="text" name="city" placeholder="City" class="form-control" required></input>
          </div>

  <div class="form-group">
              <input type="text" name="district" placeholder="District" class="form-control" required></input>
          </div>


 <div class="form-group">
              <input type="text" name="state" placeholder="State" class="form-control" required></input>
          </div>


 <div class="form-group">
              <input type="text" name="landmark" placeholder="Landmark" class="form-control" required></input>
          </div>

 


            <input type="submit" class="btn btn-default" value="Submit"  value="Submit">
            </form>


                </div>
            </div>
        </div>
    </div> 
@endsection
