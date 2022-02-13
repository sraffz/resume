<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bank Resume YIK</title>
    <link rel="icon" href="{!!  asset('favicon.ico') !!}" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    
    <!-- Styles -->
    <style>
        html,
        body {
            overflow: auto;
            background: transparent url("storage/bg.jpg") no-repeat fixed center;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            background-size: cover;

            /*background-color: #fff;*/
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
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
            right: 40px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

    </style>
</head>

<body>
    <div class="flex-center position-ref full-height">
        @if(Route::has('login'))
            <div class="top-right links">
                @if(Auth::check())
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();">
                        Log Keluar
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                @else
                    <a class="btn btn-danger btn-lg" href="{{ url('/login') }}">
                        <font style="color:white">Log Masuk </font>
                    </a>
                    <a class="btn btn-danger btn-lg" href="{{ url('/register') }}">
                        <font style="color:white"> Daftar Baru</font>
                    </a> <br>
                @endif
            </div>
        @endif
        <div class="container">
            <div class="col-md-8 content">
                <div class="col-md-4">
                    <img src="{{ url('storage/yik.png') }}" alt="" width="30%" height="30%">
                </div>
                <div class="col-md-4">
                    <img src="{{ url('storage/eresume.png') }}" alt="" width="75%" height="45%">
                </div>

                @if(Auth::check())
                    <!-- <div class="links">
                                <a href="{{ url('/maklumatdiri') }}">Maklumat Diri</a>
                                <a href="{{ url('/maklumatakademik') }}">Maklumat Akademik</a>
                                <a href="{{ url('/kokurikulum') }}">Maklumat Ko-Kurikulum</a>
                                <a href="{{ url('/pengalaman') }}">Pengalaman</a>
                                <a href="{{ url('/rujukan') }}">Rujukan</a>
                            </div> -->
                @endif
            </div>
        </div>
    </div>
</body>

</html>
