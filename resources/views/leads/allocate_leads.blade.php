@extends('layouts.app')

@section('content')
<div id="container">
  <div id="main">
        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
                <h3 style="margin-top:10px;display:inline-block;"> LEADS ALLOCATION </h3>
                <a href="{{route('get_leads')}}" style="margin-left:40px;">VIEW LEADS</a>
            </div>
        </div>

        <form  method="post" action="{{route('allocate_leads')}}" style="margin-top:70px;border: 15px solid green;margin-top: 50px;padding-top:10px;text-align:center;">
            {{csrf_field()}}
            <div class="form-row" >
                <div class="form-group col-md-1">
                </div>
                <div class="form-group col-md-1">
                    <label >Agent</label>
                </div>
                <div class="form-group col-md-8">
                    <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="agent_id">
                        @foreach($agents as $agent)
                        <option value="{{$agent->id}}">{{$agent->name}}</option>
                        @endforeach;
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-1">
                </div>
                <div class="form-group col-md-2">
                    <label >Number of leads to allocate</label>
                </div>
                <div class="form-group col-md-7">
                    <input type="number" class="form-control" name="number">
                    <small class="error">{{$errors->first('number')}}</small>
                </div>
            </div>
            <br><br>
            <div class="form-row" >
                <div class="form-group col-md-1">
                </div>
                <div class="form-group col-md-3" style="color:red;font-size:20px;">
                    <p> Number of un allocated leads : {{ $non_allocated_number}} </p>
                </div>
                <div class="form-group col-md-2">
                </div>
                <div class="form-group col-md-2">
                    <button type="submit" class="btn btn-primary">Allocate</button>
                    @unless($allocated==0)
                        <span style="color:red"> Allocated </span>
                    @endunless
                </div>
        
            </div>

        </form>
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