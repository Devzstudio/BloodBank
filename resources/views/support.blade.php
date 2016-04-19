@extends('layouts.app')

@section('content') 
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Support</div>

                <div class="panel-body">

            <form action="support" method="post" >

            {{ csrf_field() }}
         
            <div class="form-group">
            <p class="hint--top" data-hint="Name" id="input-field">
                   <input type="text" name="name" class="form-control"  placeholder="Name" required>
          </p>
            </div>
          
                       <div class="form-group">
                                   <p class="hint--top" data-hint="Email" id="input-field">
                   <input type="email" name="email" class="form-control"   placeholder="Email" required>
                  </p>
            </div>

 

                        <div class="form-group">
                                                           <p class="hint--top" data-hint="Message" id="input-field">
                   <textarea name="message" placeholder="Message" class="form-control" required></textarea>
                   </p>
            </div>


 



            <input type="submit" class="btn btn-default"  value="Submit">
            </form>


                </div>
            </div>
        </div> 
</div>
@endsection
