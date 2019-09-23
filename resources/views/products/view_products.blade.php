@extends('layouts.app')

@section('content')
<div id="container">
  <div id="main">
        <div style="text-align:center">
            <h3 style="margin-top:10px;"> Products </h3>
            <form method="post" action="{{route('add_products') }}" style="margin-top:20px;">
                {{csrf_field()}}
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Product name" name="name">
                        </div>
                        <div class="col-7">
                        <input type="text" class="form-control" placeholder="Description" name="description">
                        </div>
                        <div class="col">
                        <button class="btn btn-primary" type="submit">ADD PRODUCT </button>
                        </div>
                </div>
            
            </form>
        
                <div style="border: 15px solid green;margin-top: 50px;padding-top:10px;" class="row">
                    <table class="col-md-12">
                        <thead>
                            <tr>
                            <th>Product name</th>
                            <th >Description</th>

                            </tr>
                        </thead>
                        <tbody>
                        @foreach( $products as $product)
                            <tr>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->description }}</td>
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