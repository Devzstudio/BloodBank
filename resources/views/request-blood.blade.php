@extends('layouts.app')

@section('content') 
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Request Blood</div>

                <div class="panel-body">

            <form action="request-blood" method="post" >

            {{ csrf_field() }}
 
            <div class="form-group">
                   <input type="text" name="patient" class="form-control"  placeholder="Patient Name" required>
            </div>

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

 
     <div class="form-group">
                   <input type="text" name="state" class="form-control"  placeholder="State" required>
            </div>



    <div class="form-group">
                   <input type="text" name="district" class="form-control"  placeholder="District" required>
            </div>



    <div class="form-group">
                   <input type="text" name="city" class="form-control"  placeholder="City" required>
            </div>



                       <div class="form-group">
                   <textarea name="hospital" placeholder="Hostpital Name & Address" class="form-control" required></textarea>
            </div>

 <div class="form-group">
                   <input type="text" name="doctor" class="form-control"  placeholder="Doctor Name" required>
            </div>


     <div class="form-group">
                   <input type="text" name="contact_person" class="form-control"  placeholder="Contact Person" required>
            </div>


    <div class="form-group">
                   <input type="email" name="contact_email" class="form-control"  placeholder="Contact Email" required>
            </div>

                <div class="form-group">
                   <input type="number" name="contact_phone" class="form-control"  placeholder="Contact Phone" required>
            </div>


      <div class="form-group">
                   <input type="date" name="when" class="form-control"  placeholder="When required" id="datetimepicker" required>
            </div>


            <input type="submit" class="btn btn-default" value="Submit">
            </form>


                </div>
            </div>
        </div>
    </div> 
@endsection
