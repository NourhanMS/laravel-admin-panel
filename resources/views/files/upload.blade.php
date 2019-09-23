@extends('layouts.app')

@section('content')
<div id="container">
  <div id="main">
      <div class="row"  style="margin:50px;">
        <div class="medium-6 large-5 columns">
          @if ($message = Session::get('success'))
        
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
        <br>
        @endif
          <form method="post" enctype="multipart/form-data">
              {{csrf_field()}}
              <input type="file" name="image_upload" />
              <small class="error">{{$errors->first('image_upload')}}</small>
              <input type="submit" value="UPLOAD" class="button success hollow" />
          </form>
        </div>
      </div>
  </div>
</div>
@endsection