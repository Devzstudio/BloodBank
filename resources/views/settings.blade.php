@extends('layouts.app')

@section('content') 
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Settings</div>

                <div class="panel-body">

            <form action="settings" method="post" >

            {{ csrf_field() }}
 
            <div class="form-group">
            <p class="hint--top" data-hint="Name" id="input-field">
                   <input type="text" name="name" class="form-control" value="{{ $user->name }}"   placeholder="Name">
            </p>
            </div>

                       <div class="form-group">
                       <p class="hint--top" data-hint="Age" id="input-field">
                   <input type="text" name="age" class="form-control" value="{{ $user->age }}" placeholder="Age">
                   </p>
            </div>


                   <div class="form-group">
                   <div class="input-group">

  <input type="text" class="form-control"  name="weight"  value="{{ $user->weight }}" placeholder="Weight"aria-describedby="basic-addon2">
  <span class="input-group-addon" id="basic-addon2">Kgs</span>
</div>
                    
            </div>


                       <div class="form-group">
                   <p class="hint--top" data-hint="Address" id="input-field">
                   <textarea name="address" placeholder="Address" class="form-control">{{ $user->address }}</textarea>
              </p>
            </div>




                   <div class="form-group">
                  <p class="hint--top" data-hint="State" id="input-field">
                   <input type="text" name="state" class="form-control" value="{{ $user->state }}" placeholder="State">
                  </p>
            </div>


                               <div class="form-group">
            <p class="hint--top" data-hint="City" id="input-field">     
             <input type="text" name="city" class="form-control" value="{{ $user->city }}" placeholder="City">
            </p>
            </div>



                               <div class="form-group">
            <p class="hint--top" data-hint="District" id="input-field">     
             <input type="text" name="district" class="form-control" value="{{ $user->district }}" placeholder="District">
            </p>
            </div>

                               <div class="form-group">
                   <p class="hint--top" data-hint="Phone" id="input-field">
                   <input type="tel" id="phone" name="phone" maxlength="10" class="form-control" value="{{ $user->phone }}" placeholder="Phone">
              </p>
            </div>


   <div class="form-group">
      <p class="hint--top" data-hint="Facebook" id="input-field">
                   <input type="text" name="social" class="form-control" value="{{ $user->social }}" placeholder="Facebook">
  </p>
            </div>


   <div class="form-group">
      <p class="hint--top" data-hint="Donate" id="input-field">
          <select name="is_donor" class="form-control" required="">
    <option selected disabled> Available for dontaion </option>          
      <option value="1" >Yes</option>
            <option value="0">No</option>
          </select>
    </p>
            </div>



          
   <div class="form-group">
      <p class="hint--top" data-hint="Last Donated" id="input-field">
                   <input type="text" id="datetimepicker" name="last_donated" class="form-control" value="{{ $user->last_donated }}" placeholder="Last Donated">
  </p>
            </div>





            <input type="submit" class="btn btn-default"  value="Submit">
            </form>


                </div>
            </div>
        </div> 
</div>
@endsection
