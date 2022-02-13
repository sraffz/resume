<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta charset="utf-8">

    {{-- <link rel="icon" type="image/png" sizes="16x16" href="{{ url('assets/images/favicon.png') }}"> --}}
    <title>e-Resume YIK</title>
    <link rel="icon" href="{!! asset('favicon.ico') !!}"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ url('/assets/libs/chartist/dist/chartist.min.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ url('dist/css/style.min.css') }}" rel="stylesheet">

</head>
<body>
    <div id="wrapper">
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
             <!--  <div class="container"> -->

                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ url('/profile')  }}">e-Resume YIK</a>
                </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <ul class="nav navbar-nav navbar-left navbar-top-links">
                 <!--  <li><a href="#"><i class="fa fa-home fa-fw"></i></a></li> -->
                </ul>

                 <ul class="nav navbar-right navbar-top-links">

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> {{ Auth::user()->name }} <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="{{ route('logout') }}"
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
                </ul>
                <!-- /.navbar-top-links --> 
            </nav>
        </header>
            @include('layouts.sidebars')  
        <div class="page-wrapper">  
            @yield('content')
        </div>
    </div>  

    <script src="{{ url('assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ url('assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ url('assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ url('assets/extra-libs/sparkline/sparkline.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ url('dist/js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ url('dist/js/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ url('dist/js/custom.min.js') }}"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="{{ url('assets/libs/chartist/dist/chartist.min.js') }}"></script>
    <script src="{{ url('assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js') }}"></script>
    <script src="{{ url('dist/js/pages/dashboards/dashboard1.js') }}"></script>

<!-- Custom Theme JavaScript -->
<script src="{{ url('js/startmin.js') }}"></script>
<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
</script>

</script>


</body>
</html>
