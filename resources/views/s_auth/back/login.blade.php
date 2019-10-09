<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{{ env('APP_NAME') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <script type="text/javascript" src="{{asset('backCssJsFonts/assets/js/jquery.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('backCssJsFonts/assets/css/loader-style.css')}}">
    <link rel="stylesheet" href="{{asset('backCssJsFonts/assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('backCssJsFonts/assets/css/signin.css')}}">
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="{{asset('backCssJsFonts/assets/ico/minus.png')}}">
</head>
<body>
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
<div class="container">
    <div class="" id="login-wrapper">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div id="logo-login">
                    <h1>{{ env('APP_NAME') }}</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="account-box">
                    @if(session('error'))
                        <div class="alert alert-danger fade in alert-dismissable">
                            <a class="close" href="#" data-dismiss="alert" aria-label="close" title="close">×</a>
                            <strong>Warning!</strong>
                            {{session('error')}}
                        </div>
                    @endif
                    @if(session('reg-success'))
                        <div class="alert alert-success fade in alert-dismissable">
                            <a class="close" href="#" data-dismiss="alert" aria-label="close" title="close">×</a>
                            <strong>Success!</strong>
                            {{session('reg-success')}}
                        </div>
                    @endif
                    @if(session('success'))
                        <div class="alert alert-success fade in alert-dismissable">
                            <a class="close" href="#" data-dismiss="alert" aria-label="close" title="close">×</a>
                            <strong>Success!</strong>
                            {{session('success')}}
                        </div>
                    @endif
                   <form role="form" action="{{route('postLog')}}" method="post">
                    {{csrf_field()}}
                        <div class="form-group">
                            <label for="inputEmail">Email</label>
                            <input type="text" id="inputEmail" name="email" value="{{ old('email') }}" class="form-control">
                        </div>
                        <div class="form-group">
{{--                            <a href="{{ route('adminForgot') }}" class="pull-right label-forgot">Forgot password?</a>--}}
                            <label for="inputPassword">Password</label>
                            <input type="password" id="inputPassword" name="password" class="form-control">
                        </div>
                        {{--<div class="checkbox pull-left">--}}
                            {{--<label><input name="remember" type="checkbox">Remember me</label>--}}
                        {{--</div>--}}
                        <div class="form-group">
                            <input type="submit" name="login" value="Log In" class="btn btn btn-primary pull-right">
                        </div>
                    </form>
                    <div class="or-box">
                        <div style="margin-top:25px" class="row">
                        </div>
                    </div>
                    {{--<div class="row-block">--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-md-12 row-block">--}}
                                {{--<a href="{{  route('Reg')  }}" class="btn btn-primary btn-block">Create New Account</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>
    </div>
</div>
<div id="test1" class="gmap3"></div>
<script type="text/javascript" src="{{asset('backCssJsFonts/assets/js/preloader.js')}}"></script>
<script type="text/javascript" src="{{asset('backCssJsFonts/assets/js/bootstrap.js')}}"></script>
<script type="text/javascript" src="{{asset('backCssJsFonts/assets/js/app.js')}}"></script>
<script type="text/javascript" src="{{asset('backCssJsFonts/assets/js/load.js')}}"></script>
<script type="text/javascript" src="{{asset('backCssJsFonts/assets/js/main.js')}}"></script>
<script type="text/javascript" src="{{asset('backCssJsFonts/assets/js/map/gmap3.js')}}"></script>
</body>
</html>
