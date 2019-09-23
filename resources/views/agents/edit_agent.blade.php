@extends('layouts.app')

@section('content')
<div id="container">
  <div id="main">
    <div class="row">
        <div class="col-md-5">
        </div>
        <div class="col-md-4">
        <h3 style="margin-top:10px;"> EDIT - AGENT </h3>
        <a href="{{route('get_agents')}}" style="margin-left:40px;">VIEW AGENTS</a>
        </div>
    </div>


    <form method="post" action="{{route('edit_agents',['agent_id'=>$id])}}" style="margin-top:70px;border: 15px solid green;margin-top: 50px;padding-top:10px;">
      {{csrf_field()}}
      <div class="form-row">
        <div class="form-group col-md-1">
        </div>
        <div class="form-group col-md-1">
            <label >Name</label>
        </div>
        <div class="form-group col-md-3">
            <input type="text" class="form-control" name="name" value="{{$name}}">
            <small class="error">{{$errors->first('name')}}</small>
        </div>
        <div class="form-group col-md-2">
        </div>
        <div class="form-group col-md-1 ">
            <label >Email</label>
        </div>
        <div class="form-group col-md-3">
          <input type="email" class="form-control" name="email" value="{{$email}}">
          <small class="error">{{$errors->first('email')}}</small>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-1">
        </div>
        <div class="form-group col-md-1">
            <label >phone</label>
        </div>
        <div class="form-group col-md-3">
            <input type="number" class="form-control" name="phone" value="{{$phone}}">
            <small class="error">{{$errors->first('phone')}}</small>
        </div>
        <div class="form-group col-md-2">
        </div>
        <div class="form-group col-md-1 ">
            <label >Password</label>
        </div>
        <div class="form-group col-md-3">
          <input type="password" class="form-control" name="password" value="{{$password}}" >
          <small class="error">{{$errors->first('password')}}</small>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-5">
        </div>
        <div class="form-group col-md-2">
          <button class="btn btn-primary btn-lg" type="submit" style="margin-left:5px;" >Edit AGENT </button>
        </div>
      </div>
      </form>
      <div class="row" style="margin-top:20px;">
        <div class="col-md-5">
        </div>
        <div class="col-md-3">
        <a href="{{route('admin')}}" style="text-decoration:none;color:black;margin-top:20px;"> <i class="fa fa-mail-reply" style="font-size:80px;color:black"></i> Back </a>
        </div>
    </div>
  </div>
</div>
@endsection