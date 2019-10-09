@extends('layouts.back')
@section('content')
    <ul id="breadcrumb">
        <li><a href="{{ route('adminDashboard') }}" title="Sample page 1"><span class="entypo-home"></span> Dashboard</a></li>
    </ul>
    <div id="admin-content">
        <div class="container">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h2 id="admin-content-title">Settings list</h2>
                </div>
                @if (count($data) > 0)
                    <div class="content">
                        @include('back.settings.load')
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

