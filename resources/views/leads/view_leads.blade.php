@extends('layouts.app')

@section('content')
<div id="container">
  <div id="main">
        <div style="text-align:center">
            <h3 style="margin-top:10px;">Leads  </h3>
            <a href="{{route('allocate_leads')}}"> ALLOCATE LEADS </a>
            <div style="border: 15px solid green;margin-top: 50px;padding-top:10px;" class="row">
                <table class="col-md-12">
                    <thead>
                        <tr>
                        <th >Title</th>
                        <th >Name</th>
                        <th >Email</th>
                        <th >Phone</th>
                        <th> Postcode </th>
                        <th> Allocation status </th>
                        <th> Added on </th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($leads as $lead)
                        <tr>
                            <td>{{ $lead->title }}</td>
                            <td>{{ $lead->firstname }} {{ $lead->lastname }}</td>
                            <td>{{ $lead->email }}</td>
                            <td>{{ $lead->phone }}</td>
                            <td>{{ $lead->postcode }}</td>
                            <td>{{ $lead->allocated  }}</td>
                            <td>{{ $lead->added_on }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>   
            </div>
            </h3>
            <a href="{{route('admin')}}" style="text-decoration:none;color:black;margin-top:20px;"> <i class="fa fa-mail-reply" style="font-size:80px;color:black"></i> Back </a>
        </div>
    </div>
</div>
@endsection