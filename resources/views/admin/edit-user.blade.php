@extends('layouts.admin')

@section('content')
 

 <div class="panel panel-default">
  <div class="panel-heading">


  <i class="fa fa-ticket"></i> Edit User</div>
  <div class="panel-body">
    

<form action="{{ url('admin/user/edit/'.$user->id) }}" method="POST">
{{ csrf_field() }}
 
            <div class="form-group">
            Name
            <p class="hint--top" data-hint="Name" id="input-field">
                   <input type="text" name="name" class="form-control" value="{{ $user->name }}"   placeholder="Name">
            </p>
            </div>

                       <div class="form-group">
                       Age
                       <p class="hint--top" data-hint="Age" id="input-field">
                   <input type="text" name="age" class="form-control" value="{{ $user->age }}" placeholder="Age">
                   </p>
            </div>


                   <div class="form-group">
                   Weight
                   <div class="input-group">

  <input type="text" class="form-control"  name="weight"  value="{{ $user->weight }}" placeholder="Weight"aria-describedby="basic-addon2">
  <span class="input-group-addon" id="basic-addon2">Kgs</span>
</div>
                    
            </div>


                       <div class="form-group">
                       Address
                   <p class="hint--top" data-hint="Address" id="input-field">
                   <textarea name="address" placeholder="Address" class="form-control">{{ $user->address }}</textarea>
              </p>
            </div>




                   <div class="form-group">
                   State
                  <p class="hint--top" data-hint="State" id="input-field">
                   <input type="text" name="state" class="form-control" value="{{ $user->state }}" placeholder="State">
                  </p>
            </div>


                               <div class="form-group">
                               City
            <p class="hint--top" data-hint="City" id="input-field">     
             <input type="text" name="city" class="form-control" value="{{ $user->city }}" placeholder="City">
            </p>
            </div>



                               <div class="form-group">
                               District
            <p class="hint--top" data-hint="District" id="input-field">     
             <input type="text" name="district" class="form-control" value="{{ $user->district }}" placeholder="District">
            </p>
            </div>

                               <div class="form-group">
                               Phone
                   <p class="hint--top" data-hint="Phone" id="input-field">
                   <input type="phone" name="phone" class="form-control" value="{{ $user->phone }}" placeholder="Phone">
              </p>
            </div>


   <div class="form-group">
   Facebook
      <p class="hint--top" data-hint="Facebook" id="input-field">
                   <input type="text" name="social" class="form-control" value="{{ $user->social }}" placeholder="Facebook">
  </p>
            </div>


   <div class="form-group">
      <p class="hint--top" data-hint="Donate" id="input-field">
          <select name="is_donor" class="form-control" required="">
    <option selected disabled> Available for dontaion </option>          
      <option value="1">Yes</option>
            <option value="0">No</option>
          </select>
    </p>
            </div>



            <input type="submit" class="btn btn-default"  value="Submit">
            </form>

  </div>
   
</div>
</div>

@stop
