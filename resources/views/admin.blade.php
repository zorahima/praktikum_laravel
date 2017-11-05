@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"> Admin Dashboard</div>

                <div class="panel-body">
                    You are logged in as Admin !
                </div>
            </div>
        </div>
    </div>
</div>
@section('logout')
<a href="{{ route('admin.logout') }}"
onclick="event.preventDefault();
document.getElementById('logout-form').submit();">
Logout
</a>
<form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
   {{ csrf_field() }}
</form> 
@endsection
