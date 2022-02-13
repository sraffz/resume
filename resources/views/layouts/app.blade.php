<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Bank Resume YIK</title>
    <link rel="icon" href="{!! asset('favicon.ico') !!}"/>

    <link href="{{ asset('assets/libs/select2/dist/css/select2.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery-ui.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

   <!-- Calendar -->
    <link href="{{ asset('assets/libs/fullcalendar/dist/fullcalendar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/extra-libs/calendar/calendar.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('dist/css/style.min.css') }}" rel="stylesheet"> --}}
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet">

    <style>
            html, body {
                background: transparent url("storage/bg2.jpg") no-repeat fixed center;
                color: #636b6f;
                font-family: 'arial', sans-serif;
                font-weight: 100;
                color: black;
                height: 100vh;
                margin: 0;
                
            }

            .full-height {
                height: 100vh;
            }

            .navbar-inverse {
                background-color:#2e2e2e;
                border-color: #b2b0ac;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .panel-transparent .panel-heading{
                background: rgba(122, 130, 136, 0.2)!important;
            }

            .panel-transparent .panel-body{
                background: rgba(46, 51, 56, 0.2)!important;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .panel-transparent {
        background: none;
    }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 20px;
                font-size: 15px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
</style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/home') }}">
                      <font style="color: white">Bank Resume YIK</font>  
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                         @if (Auth::guest())

                         @else
                        &nbsp;
                       
                        @endif
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}"> <font style="color: white">Log Masuk</font></a></li>
                            <li><a href="{{ route('register') }}"> <font style="color: white">Daftar Baru</font></a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Log Keluar
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery-1.12.4.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}

    <script src="{{ asset('js/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('js/fullcalendar/dist/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('js/cal-init.js') }}"></script>
    

    <!-- Calendar page js -->
    <script src="{{ asset('assets/libs/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('assets/libs/fullcalendar/dist/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('dist/js/pages/calendar/cal-init.js') }}"></script>

    <script src="{{ asset('assets/libs/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/libs/select2/dist/js/select2.min.js') }}"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js" type="text/javascript"></script>

    <script>
        /*datwpicker*/
        jQuery('.mydatepicker').datepicker({
            dateFormat: 'dd/mm/yy',
            changeMonth: true,
            changeYear: true,
        });
        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true
        });

        $(".select2").select2();

        $('input.guamusangjelikrai').on('change', function() {
            $('input.bukanGuamusangjelikrai').not(this).prop('checked', false);  
        });

        $('input.bukanGuamusangjelikrai').on('change', function() {
            $('input.guamusangjelikrai').not(this).prop('checked', false);  
        });
    </script>
</body>
</html>
