@extends('layouts.app')

@section('content')
<div id="container">
  <div id="main">
        <div style="text-align:center">
            <h3 style="margin-top:10px;">ADMIN </h3>
        </div>
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-4">
                <h2>PRODUCTS </h2>
                <ul>
                    <li> <a href="{{route('get_products')}}"> VIEW PRODUCTS </a> </li>
                </ul>
            </div>
            <div class="col-md-2">
                </div>
            <div class="col-md-4">
                <h2>AGENTS </h2>
                <ul>
                    <li> <a href="{{route('get_agents')}}"> VIEW AGENTS </a> </li>
                </ul>
            </div>
        </div>
        <br><br><br>
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-4">
                <h2>LEADS </h2>
                <ul>
                    <li> <a href="{{route('get_leads')}}"> VIEW LEADS </a> </li>
                    <li> <a href="{{route('allocate_leads')}}"> ALLOCATE LEADS </a> </li>
                </ul>
            </div>
            <div class="col-md-2">
            </div>
            <div class="col-md-4">
                <h2>ORDERS </h2>
                <ul>
                    <li> <a href="{{route('submitted_orders')}}"> VIEW SUBMITTED ORDERS </a> </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
            </div>
            <div class="col-md-2">
            <ul class="dropdown menu" data-dropdown-menu="tckp8q-dropdown-menu" role="menubar">
                <li role="menuitem">
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                                                Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
            </div>
        </div>
    </div>
</div>
@endsection