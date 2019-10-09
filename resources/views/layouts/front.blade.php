<!DOCTYPE html>
<html lang="{{ Config::get('currentLang') }}">
<head>
    <title>{{ $meta_title ?? $page_title ?? '' }}</title>
    <meta name="Description" content="{{$meta_description ?? '' }}">
    <meta name="Keywords" content="{{ $meta_key ?? '' }}">
    <meta name="_token" content="{{csrf_token()}}">
    {{--<link rel="shortcut icon" href="/public/frontCssJsFonts/assets/images/favicon.ico">--}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
</head>
<body data-lang="{{ Config::get('currentLang') }}" data-token="{{ csrf_token() }}">
@yield('content')
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
