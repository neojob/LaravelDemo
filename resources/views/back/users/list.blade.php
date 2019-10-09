@extends('layouts.back')
@section('content')
    <ul id="breadcrumb">
        <li><a href="{{ route('adminDashboard') }}" title="Sample page 1"><span class="entypo-home"></span> Dashboard</a></li>
        <li class="filter-field filter-field-content">
            <div class="form-group">
                <label class="sr-only" for="search">First name|Last name|Email</label>
                <div class="input-group">
                    <div class="input-group-addon">First name|Last name|Email</div>
                    <input type="text" class="form-control" data-url="/admin/users/liveSearch" id="search" name="search" placeholder="First name|Last name|Email">
                </div>
            </div>
        </li>
    </ul>
    <div id="admin-content">
        <div class="container">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h2 id="admin-content-title">Users list</h2>
                </div>

                @if (count($data) > 0)
                    <div class="content">
                        @include('back.users.load')
                    </div>
                @else
                    <div class="content">
                        <div class="jumbotron text-center">
                            <h1>Empty Result</h1>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
