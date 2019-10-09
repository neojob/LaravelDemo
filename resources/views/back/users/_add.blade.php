@extends('layouts.back')
@section('content')
    <ul id="breadcrumb">
        <li><a href="{{ route('adminDashboard') }}" title="Sample page 1"><span class="entypo-home"></span> Dashboard</a></li>
    </ul>
    <div id="admin-content">
        <div class="container">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h2 id="admin-content-title">Add User</h2>
                </div>



                <form>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="email" type="text" class="form-control" name="email" placeholder="Email">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">Text</span>
                        <input id="msg" type="text" class="form-control" name="msg" placeholder="Additional Info">
                    </div>
                </form>






            </div>
        </div>
    </div>
@endsection
