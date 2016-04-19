@extends('layouts.app')

@section('content') 
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Messages</div>

                <div class="panel-body">
 
 
                <table class="table">
                    <tr>
                    <th>Subject</th>
                    <th>Sender</th>
                    <th>On</th>
                    </tr>


                 @foreach($messages as $message)
                    <tr>
                   
                   <td><a href="{{ url('messages/'.$message->id) }}">{{ $message->subject }}</a></td>
                   <td>{{ $message->sender }}</td>

                   <td>                                   <p class="hint--top" data-hint="{{  date('F d, Y h:m A', strtotime($message->created_at)) }}">
{{ $message->created_at->diffForHumans() }} </p></td>
                   
                   </tr>
                 @endforeach
             
@if (count($messages) == 0)
<tr>
<td colspan="3">You have not received any messages.</td>
</tr>
@endif
                </table>

                </div>
            </div>
        </div>
    </div>





    

     <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Who Needs Blood ? Near Location</div>

                <div class="panel-body">
 
                

                <table class="table">
                    <tr>
                    <th>Name</th>
                    <th>City</th>
                    <th>Group</th>
                    </tr>


                 @foreach($requests as $req)
                    <tr>
                   
                   <td><a href="{{ url('request-details/'.$req->id) }}">{{ $req->patient  }}</a></td>
                   <td>{{ $req->city }}</td>
                    <td>{{ $req->group }}</td>

                   
                   </tr>
                 @endforeach
             
@if (count($requests) == 0)
<tr>
<td colspan="3">No nearby blood requests.</td>
</tr>
@endif
                </table>



            

                </div>
            </div>
        </div>
    </div>
 
@endsection
