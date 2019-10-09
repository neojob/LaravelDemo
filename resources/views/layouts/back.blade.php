<?php
use Illuminate\Support\Facades\Auth;
?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ $page_title ??  null }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/backCssJsFonts/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('/backCssJsFonts/assets/css/loader-style.css')}}">
    <link rel="stylesheet" href="{{asset('/backCssJsFonts/assets/css/bootstrap.css')}}">
    <script src="{{asset('/backCssJsFonts/assets/js/jquery2.0.0.js')}}"></script>
    <link rel="stylesheet" href="{{asset('/backCssJsFonts/assets/css/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/backCssJsFonts/assets/js/progress-bar/number-pb.css')}}">
    <script type="text/javascript" src="{{asset('/backCssJsFonts/assets/editinadmin/desc/ckeditor.js')}}"></script>
    <script type="text/javascript" src="{{asset('/backCssJsFonts/assets/js/mine_js/pagination.js')}}"></script>
    <script type="text/javascript" src="{{asset('/backCssJsFonts/assets/js/mine_js/select2.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/backCssJsFonts/assets/js/mine_js/live_search.js')}}"></script>
    {{--Image uploade--}}
    <link media="all" rel="stylesheet" type="text/css" href="{{asset('/backCssJsFonts/assets/imgUpload/css/fileinput.css')}}">
    <script type="text/javascript" src="{{asset('/backCssJsFonts/assets/imgUpload/js/plugins/sortable.js')}}"></script>
    <script type="text/javascript" src="{{asset('/backCssJsFonts/assets/imgUpload/js/fileinput.js')}}"></script>
    <script type="text/javascript" src="{{asset('/backCssJsFonts/assets/imgUpload/js/locales/fr.js')}}"></script>
    <script type="text/javascript" src="{{asset('/backCssJsFonts/assets/imgUpload/js/locales/es.js')}}"></script>
    <script type="text/javascript" src="{{asset('/backCssJsFonts/assets/imgUpload/themes/explorer/theme.js')}}"></script>
    <link rel="shortcut icon" href="{{asset('/backCssJsFonts/assets/ico/minus.png')}}">
    <style>
        #rus,#eng,#dep{
            display: none;
        }
        @media print {
            #rus,#eng,#dep{
                display: block;
                width: 40%;
                text-align: justify-all;
            }
        }
        .car_price{
            display: none;
        }
        div.car_brand{
            height: 65px;
        }
        .owner-name{
            color: #99443f;
            font-size: 16px;
        }
    </style>
</head>
<body data-token="{{ csrf_token() }}">
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
<nav role="navigation" class="navbar navbar-static-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" class="navbar-toggle"
                    type="button">
                <span class="entypo-menu"></span>
            </button>
            <button class="navbar-toggle toggle-menu-mobile toggle-left" type="button">
                <span class="entypo-list-add"></span>
            </button>
            <div id="logo-mobile" class="visible-xs">
                <h1>
                    <span>v1.2</span>
                </h1>
            </div>
        </div>
        <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li>
                    <ul style="margin: 12px 0 0 0;" role="menu" class="dropdown-menu dropdown-wrap">
                        <li>
                            <a href="#">
                                <span style="background:#DF2135" class="noft-icon maki-bus"></span><i>From Station</i>
                                <b>01B</b>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <span style="background:#AB6DB0" class="noft-icon maki-ferry"></span><i>Departing at</i>
                                <b>9:00 AM</b>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <span style="background:#FFA200" class="noft-icon maki-aboveground-rail"></span><i>Delay
                                    for</i> <b>09 Min</b>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <span style="background:#86C440" class="noft-icon maki-airport"></span><i>Take of</i>
                                <b>08:30 AM</b>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <span style="background:#0DB8DF" class="noft-icon maki-bicycle"></span><i>Take of</i>
                                <b>08:30 AM</b>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div>See All Notification</div>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul style="margin-right:0;" class="nav navbar-nav navbar-right">
                <li>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <img alt="" class="admin-pic img-circle" src="{{ "/backCssJsFonts/assets/img/User-icon.png" }}">Hi,
                        {{ Auth::user()->name }}
                        <b class="caret"></b>
                    </a>
                    <ul style="margin-top:14px;" role="menu" class="dropdown-setting dropdown-menu">
                        <li>
                            <a href="{{ route('logout') }}">
                                <span class="entypo-logout"></span>&#160;&#160;Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div id="skin-select">
    <div id="logo">
        <h1><a href="/" target="_blank" class="logo-link">{{env('APP_NAME')}}</a></h1>
    </div>
    <a id="toggle">
        <span class="entypo-menu"></span>
    </a>
    <div class="skin-part">
        <div id="tree-wrap">
            <div class="side-bar">
                <ul class="topnav menu-left-nest">
                    <li>
                        <a href="#" style="border-left:0 solid !important;" class="title-menu-left">
                            <span class="">actions: LIST | ADD | EDIT</span>
                            <i data-toggle="tooltip" class="entypo-cog pull-right config-wrap"></i>
                        </a>
                    </li>
                    <li>
                        <a class="tooltip-tip ajax-load" href="#" title="">
                            <i class="glyphicon glyphicon-th"></i>
                            <span>Pages</span>
                        </a>
                        <ul>
                            <li>
                                <a class="tooltip-tip2 ajax-load" href="#" title="Page List"><i class="entypo-doc-text"></i><span>list</span></a>
                            </li>
                            <li>
                                <a class="tooltip-tip2 ajax-load" href="#" title="Page Detail"><i class="entypo-newspaper"></i><span>add</span></a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="topnav menu-left-nest">

                    <li>
                        <a class="tooltip-tip ajax-load" href="#" title="Settings">
                            <i class="glyphicon glyphicon-cog"></i>
                            <span>Settings</span>
                        </a>
                        <ul>
                            <li>
                                <a class="tooltip-tip2 ajax-load" href="{{ route('adminSettingsList') }}"
                                   title="Blog List"><i class="entypo-doc-text"></i><span>list</span></a>
                            </li>
                            <li>
                                <a class="tooltip-tip2 ajax-load" href="{{ route('adminSettingsAdd') }}"
                                   title="Blog Detail"><i class="entypo-newspaper"></i><span>add</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="tooltip-tip ajax-load" href="#" title="Entities">
                            <i class="glyphicon glyphicon-sort-by-alphabet"></i>
                            <span>Short text</span>
                        </a>
                        <ul>
                            <li>
                                <a class="tooltip-tip2 ajax-load" href="{{ route('adminEntitiesList') }}"
                                   title="Short text List"><i class="entypo-doc-text"></i><span>list</span></a>
                            </li>
                            <li>
                                <a class="tooltip-tip2 ajax-load" href="{{ route('adminEntitiesAdd') }}"
                                   title="Short text Detail"><i class="entypo-newspaper"></i><span>add</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="tooltip-tip ajax-load" href="#" title="Menu">
                            <i class="glyphicon glyphicon-list-alt"></i>
                            <span>Languages</span>
                        </a>
                        <ul>
                            <li>
                                <a class="tooltip-tip2 ajax-load" href="{{ route('adminLanguagesList') }}"
                                   title="Blog List"><i class="entypo-doc-text"></i><span>list</span></a>
                            </li>
                            <li>
                                <a class="tooltip-tip2 ajax-load" href="{{ route('adminLanguagesAdd') }}"
                                   title="Blog Detail"><i class="entypo-newspaper"></i><span>add</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="tooltip-tip ajax-load" href="#" title="Menu">
                            <i class="glyphicon glyphicon-list-alt"></i>
                            <span>Menu</span>
                        </a>
                        <ul>
                            <li>
                                <a class="tooltip-tip2 ajax-load" href="{{ route('adminMenusList') }}"
                                   title="Blog List"><i class="entypo-doc-text"></i><span>list</span></a>
                            </li>
                            <li>
                                <a class="tooltip-tip2 ajax-load" href="{{ route('adminMenusAdd') }}"
                                   title="Blog Detail"><i class="entypo-newspaper"></i><span>add</span></a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="wrap-fluid">
    <div class="container-fluid paper-wrap bevel tlbr">
        <div class="row">
            <div id="paper-top">
            </div>
        </div>

        {{--Content--}}
        <div class="middle-content">
            @yield('content')
        </div>
        {{--Content--}}
        <div class="content-wrap">
            <div id="footer">
                <div class="devider-footer-left"></div>
                <div class="time">
                    <p id="spanDate"></p>
                    <p id="clock"></p>
                </div>
                <div class="copyright">
                   All Rights Reserved
                </div>
                <div class="devider-footer"></div>
            </div>
        </div>
    </div>
</div>
<div class="sb-slidebar sb-right">
    <div class="right-wrapper">
        <div class="row">
            <h3>
                <span><i class="entypo-gauge"></i>&nbsp;&nbsp;MAIN WIDGET</span>
            </h3>
            <div class="col-sm-12">

                <div class="widget-knob">
                        <span class="chart" style="position:relative" data-percent="86">
                            <span class="percent"></span>
                        </span>
                </div>
                <div class="widget-def">
                    <b>Distance traveled</b>
                    <br>
                    <i>86% to the check point</i>
                </div>
                <div class="widget-knob">
                        <span class="speed-car" style="position:relative" data-percent="60">
                            <span class="percent2"></span>
                        </span>
                </div>
                <div class="widget-def">
                    <b>The average speed</b>
                    <br>
                    <i>30KM/h avarage speed</i>
                </div>
                <div class="widget-knob">
                        <span class="overall" style="position:relative" data-percent="25">
                            <span class="percent3"></span>
                        </span>
                </div>
                <div class="widget-def">
                    <b>Overall result</b>
                    <br>
                    <i>30KM/h avarage Result</i>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{asset('/backCssJsFonts/assets/js/progress-bar/src/jquery.velocity.min.js')}}"></script>
<script src="{{asset('/backCssJsFonts/assets/js/progress-bar/number-pb.js')}}"></script>
<script src="{{asset('/backCssJsFonts/assets/js/progress-bar/progress-app.js')}}"></script>
<script src="{{asset('/backCssJsFonts/assets/js/jhere-custom.js')}}"></script>
<script type="text/javascript" src="{{asset('/backCssJsFonts/assets/js/preloader.js')}}"></script>
<script type="text/javascript" src="{{asset('/backCssJsFonts/assets/js/bootstrap.js')}}"></script>
<script type="text/javascript" src="{{asset('/backCssJsFonts/assets/js/app.js')}}"></script>
<script type="text/javascript" src="{{asset('/backCssJsFonts/assets/js/load.js')}}"></script>
<script type="text/javascript" src="{{asset('/backCssJsFonts/assets/js/main.js')}}"></script>
<script type="text/javascript" src="{{asset('/backCssJsFonts/assets/js/chart/jquery.flot.js')}}"></script>
<script type="text/javascript" src="{{asset('/backCssJsFonts/assets/js/chart/jquery.flot.resize.js')}}"></script>
<script type="text/javascript" src="{{asset('/backCssJsFonts/assets/js/countdown/jquery.countdown.js')}}"></script>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $(window).on('load', function () {
            $('#mapContainer').jHERE({
                center: [52.500556, 13.398889],
                type: 'smart',
                zoom: 10
            }).jHERE('marker', [52.500556, 13.338889], {
                icon: '../../../backCssJsFonts/assets/img/marker.png',
                anchor: {
                    x: 12,
                    y: 32
                },
                click: function () {
                    alert('Hallo from Berlin!');
                }
            })
                .jHERE('route', [52.711, 13.011], [52.514, 13.453], {
                    color: '#FFA200',
                    marker: {
                        fill: '#86c440',
                        text: '#'
                    }
                });
        });
    });
</script>
<script type="text/javascript">
    var output, started, duration, desired;

    // Constants
    duration = 5000;
    desired = '50';

    // Initial setup
    output = $('#speed');
    started = new Date().getTime();
    // Animate!
    animationTimer = setInterval(function () {
        // If the value is what we want, stop animating
        // or if the duration has been exceeded, stop animating
        if (output.text().trim() === desired || new Date().getTime() - started > duration) {
            console.log('animating');
            // Generate a random string to use for the next animation step
            output.text('' + Math.floor(Math.random() * 60)
            );
        } else {
            console.log('animating');
            // Generate a random string to use for the next animation step
            output.text('' + Math.floor(Math.random() * 120)
            );
        }
    }, 5000);
</script>
<script type="text/javascript">
    $('#getting-started').countdown('2015/01/01', function (event) {
        $(this).html(event.strftime(
            '<span>%M</span>' + '<span class="start-min">:</span>' + '<span class="start-min">%S</span>'));
    });
</script>
<script type="text/javascript" src="{{asset('/backCssJsFonts/assets/js/mine_js/admin_edit.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function(){
        function printData()
        {
            var divToPrint=document.getElementById("rus");
            newWin= window.open("");
            newWin.document.write(divToPrint.outerHTML);
            newWin.print();
            newWin.close();
        }
        $('#pr-ru').on('click',function(){
            printData();
        });
        function printData1()
        {
            var divToPrint=document.getElementById("eng");
            newWin= window.open("");
            newWin.document.write(divToPrint.outerHTML);
            newWin.print();
            newWin.close();
        }

        $('#pr-en').on('click',function(){
            printData1();
        });
        function printData2()
        {
            var divToPrint=document.getElementById("dep");
            newWin= window.open("");
            newWin.document.write(divToPrint.outerHTML);
            newWin.print();
            newWin.close();
        }

        $('#pr-en-dep').on('click',function(){
            printData2();
        })
    });

</script>
</body>
</html>
