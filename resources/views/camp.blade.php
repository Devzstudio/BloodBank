@extends('layouts.app')

@section('content')
 
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                  Blood Donation Camps  
                        <div class="pull-right"><a href="{{ url('camp/new') }}">Submit Camp</a></div>
                </div>
<br>
                <div class="panel-body">
                
               @foreach($camps as $camp )
              <div class="thumbnail">
              <div class="camps">
                <p> 
                
                        <div class="panel panel-default">
                          <div class="panel-body">
                           {{ $camp->details }}
                          </div>
                        </div>
                </p>
                <p> Place : {{ $camp->city }} , {{ $camp->district }} , {{ $camp->state }} </p>
                <p> Start : {{  date('F d, Y h:m A', strtotime($camp->start)) }} </p>
                <p> End : {{  date('F d, Y h:m A', strtotime($camp->end)) }} </p>
              </div>
              </div>
               @endforeach

                </div>
            </div>
        </div>
    </div>
 
@endsection
