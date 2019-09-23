@extends('layouts.app')

@section('content')
<div id="container">
    <div style="text-align:center" id="main">
        <h3 style="margin-top:10px;"> Agents </h3>
        <a href="{{route('add_agents')}}"> ADD NEW AGENT </a>
        <br>
        <a href="{{route('export_agents')}}" style="color:blue;margin-top:20px;">Export file </a>
        <div style="border: 15px solid green;margin-top: 50px;padding-top:10px;" class="row">
            <table class="col-md-12">
                <thead>
                    <tr>
                    <th>Agent name</th>
                    <th >Email</th>
                    <th >Phone</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($agents as $agent)
                    <tr>
                        <td>{{ $agent->name }}</td>
                        <td>{{ $agent->email }}</td>
                        <td>{{ $agent->phone }}</td>
                        <td><a href="{{route('edit_agents_view',['agent_id'=> $agent->id])}}"><button class="btn btn-primary" > EDIT </button> </a></td>
                        <td><a href="{{route('delete_agents',['agent_id'=> $agent->id])}}"><button class="btn btn-primary" > DELETE </button> </a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>   
        </div>
        </h3>
        <a href="{{route('admin')}}" style="text-decoration:none;color:black;margin-top:20px;"> <i class="fa fa-mail-reply" style="font-size:80px;color:black"></i> Back </a>
    </div>
</div>

@endsection