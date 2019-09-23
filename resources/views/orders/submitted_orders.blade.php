@extends('layouts.app')

@section('content')
<div id="container">
  <div id="main">
        <div style="text-align:center">
            <h3 style="margin-top:10px;"> SUBMITTED ORDERS </h3>
        
                <div style="border: 15px solid green;margin-top: 50px;padding-top:10px;" class="row">
                    <table class="col-md-12">
                        <thead>
                            <tr>
                            <th>AGENT name</th>
                            <th >LEAD NAME</th>

                            </tr>
                        </thead>
                        <tbody>
                        @for($i=0;$i < sizeof($order_leads);$i++)
                            <tr>
                                <td>{{$order_agents[$i]->name}}</td>
                                <td>{{$order_leads[$i]->firstname}}</td>
                            </tr>
                        @endfor
                        </tbody>
                </table>   
                </div>
            </h3>
        </div>
        <br><br>
        <div class="row">
            <div class="col-md-6">
            </div>
            <div class="col-md-4">
                <a href="{{route('admin')}}" style="text-decoration:none;color:black;margin-top:20px;"> <i class="fa fa-mail-reply" style="font-size:80px;color:black"></i> Back </a>
            </div>
        </div>
    </div>
</div>
@endsection

