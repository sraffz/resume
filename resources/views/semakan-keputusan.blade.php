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
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
    <!-- Styles -->
    <style>
        html,
        body {
            overflow: auto;
            background: transparent url("storage/bg.jpg") no-repeat fixed center;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            background-size: cover;
        }

        .full-height {
            height: 145vh;
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
        @if (Route::has('login'))
            <div class="top-right links">
                @if (Auth::check())
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
                    <a class="btn btn-danger btn-lg" href="{{ url('/semakan') }}">
                        <font style="color:white"> semakan kelayakan</font>
                    </a>
                @endif
            </div>
        @endif
        <div class="container">
            <div class="col-md-4 offset-md-4">
                <div class=" text-center">
                    <div class="">
                        <img src="{{ url('storage/yik.png') }}" alt="" width="30%" height="30%">
                        <img src="{{ url('storage/eresume.png') }}" alt="" width="75%" height="45%">
                    </div>
                </div>
            </div>
            <div class="col-md-8 offset-md-2">
                <div class="text-center">
                    <div class="card">
                        <div class="card-body">
                            @if (count($result) > 0)
                                @foreach ($result as $r)
                                    <p style="text-transform: uppercase">
                                        <strong>{{ $r->nama }} ({{ $r->ic }})</strong>
                                    </p>
                                    Sukacita dimaklumkan tuan/puan terpilih untuk menduduki Ujian
                                    Penilaian Kelayakan Pendidik YIK 2021 sebagaimana
                                    berikut :- <br>
                                    <br>
                                    <strong>Pengkhususan</strong> : {{ $r->jawatandipohon }} <br>
                                    <strong>Tarikh</strong> : {{ $r->tarikh->format('d/m/Y') }} ({{ $r->hari }}) <br>
                                    <strong>Masa</strong> : {{ $r->masa }} {{ $r->waktu }}<br>
                                    <strong>Tempat</strong> : {{ $r->tempat }}
                                    <br>
                                    <br>

                                    Sila buat bayaran wang proses untuk menduduki peperiksaan melalui online banking sebanyak RM5.00 (wang pendaftaran ujian) ke  
                                     : <br> Nombor Akaun <strong>Bank Islam</strong> Yayasan Islam Kelantan : <strong>03018010002220</strong> <br> <br>
                                    Calon hendaklah membawa slip kehadiran <a name="" id="" class="btn btn-primary"
                                        href="{{ url('cetak-semakan', [$r->id]) }}" target="blank" role="button">Cetak
                                        Slip</a>
                                    berserta resit bayaran
                                    RM5.

                                    <br><br>
                                    Calon-calon <strong>hendaklah</strong> : <br>
                                    - Hadir awal 15 minit sebelum peperiksaan bermula. <br>
                                    - Berpakaian kemas. <br>
                                    - Sila bawa alat tulis sendiri. <br>
                                    - Tidak membawa telefon bimbit ke dalam dewan peperiksaan. <br>
                                    - Memakai pelitup muka. <br>
                                    - Mengamalkan penjarakan sosial sepanjang ujian.
                                @endforeach
                            @else
                                <p>
                                    Dukacita dimaklumkan saudara/saudari tidak terpilih untuk menjalani sesi Ujian
                                    Penilaian Kelayakan Pendidik YIK 2021. <br> Sebab : Tiada rekod / maklumat tidak lengkap / tidak memenuhi syarat.
                                </p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
