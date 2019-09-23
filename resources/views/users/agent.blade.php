@extends('layouts.app')

@section('content')
<div id="container">
  <div id="main">
        <div style="text-align:center">
            <h3 style="margin-top:10px;"> ALLOCATED LEADS  </h3>
        
            <div style="border: 15px solid green;margin-top: 50px;padding-top:10px;" class="row">
                <table class="col-md-12">
                    <thead>
                        <tr>
                        <th >Title</th>
                        <th >Name</th>
                        <th >Email</th>
                        <th >Phone</th>
                        <th> Postcode </th>
                        <th> Added on </th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($leads_info as $lead)
                        <tr>
                            <td>{{ $lead->title }}</td>
                            <td>{{ $lead->firstname }} {{ $lead->lastname }}</td>
                            <td>{{ $lead->email }}</td>
                            <td>{{ $lead->phone }}</td>
                            <td>{{ $lead->postcode }}</td>
                            <td>{{ $lead->added_on }}</td>
                        
                            <td><a href="{{route('submit',['agent_id'=>$agent_id ,'lead_id'=>$lead->id]) }}"><button class="btn btn-primary" > SUBMITTED </button> </a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>   
            </div>
            </h3>

        </div>
    </div>
</div>

@endsection