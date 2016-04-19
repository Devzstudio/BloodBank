@extends('layouts.app')

@section('content')
 
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                 Blood Center
                        <div class="pull-right"><a href="{{ url('center/new') }}">Submit Blood Center</a></div>
                </div> 
                <div class="panel-body">
                <table class="table"> 
                <tr>
                  <th>Name</th>
                  <th>Phone</th>
                  <th>State</th>
                  <th>District</th>
                  <th>City</th>
                  <th>Landmark</th>
                </tr>
               @foreach($centers as $center )
             <tr>
                      <td>  {{ $center->name }} </td>
                      <td>  {{ $center->phone }} </td>
                           <td> {{ $center->city }} </td>
                        <td>    {{ $center->district }} </td>
                         <td>   {{ $center->state }} </td>
                         <td>   {{ $center->landmark }} </td>

               </tr>
               @endforeach
                </table>
                </div>
            </div>
        </div>
    </div>
 
@endsection
