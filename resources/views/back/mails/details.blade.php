@extends('layouts.back')
@section('content')
    <div id="admin-content">
        <div class="container">
            <h2 id="admin-content-title">Mail Details</h2>
            <div class="jumbotron col-sm-12">
                <div class="col mb4 span1of1">
                    <div class="card">
                        <header>
                            <h2  style="color: #428bca;" class="heading">{{ $data->full_name }}</h2>
                        </header>
                        <p class="body mt2">
                            {{ $data->body }}
                        </p>
                        <br><br>
                        <ul class="list mt6">
                            <li>
                                <span>Email: </span> {{ $data->email }}
                            </li>
                            <li>
                                <span>Company: </span> {{ $data->company }}
                            </li>
                            <li>
                                <span>Create: </span> {{ $data->created_at }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection