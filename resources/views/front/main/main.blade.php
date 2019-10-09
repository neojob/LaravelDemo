@extends('layouts.front')
@section('content')

@if($logged_in)
    <p>You are logged-In</p>
@else
    <p>You are logged-Out</p>
@endif
<p><a href="{{route('login')}}">Login</a></p>
<p><a href="{{route('register')}}">Register</a></p>
<p style="text-align: center; padding-top: 300px; font-size: 18px; font-weight: bold">This page only for demonstration!</p>

@endsection
