<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta charset="utf-8">
        

        <title>e-Resume YIK</title>
        <link rel="icon" href="{!! asset('favicon.ico') !!}"/>
        

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Styles -->

         <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- MetisMenu CSS -->
         <link href="{{ url('css/metisMenu.min.css') }}" rel="stylesheet">
        <!-- Timeline CSS -->      
         <link href="{{ url('css/timeline.css') }}" rel="stylesheet">
        <!-- Custom CSS -->      
         <link href="{{ url('css/startmin.css') }}" rel="stylesheet">
        <!-- Morris Charts CSS -->      
         <link href="{{ url('css/morris.css') }}" rel="stylesheet">
        <!-- Custom Fonts -->
        
        <link href="{{ url('css/font-awesome.min.css') }}" rel="stylesheet"  type="text/css">
    <style>
            html, body {
                
                background-color: #fff;
                color: #636b6f;
                font-family: 'arial', sans-serif;
                font-weight: 100;
                font-size: 14px;
                color: black;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
</style>
</head>
<body>
    <div id="wrapper">
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
            @include('layouts.sidebar')  
            <div id="wrapper">  
                 @yield('content')
            </div>
      </div>  
    <!-- </div> -->

        <!-- Scripts -->
         <script src="{{ url('js/jquery.min.js') }}"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="{{ url('js/bootstrap.min.js') }}"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="{{ url('js/metisMenu.min.js') }}"></script>

        <!-- Morris Charts JavaScript -->
        <script src="{{ url('js/raphael.min.js') }}"></script>
        <script src="{{ url('js/morris.min.js') }}"></script>
        {{-- <script src="{{ url('js/morris-data.js') }}"></script> --}}

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
