<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin</title>
    <link rel="icon" href="{!! asset('favicon.ico') !!}"/>

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css') }}">

    <link href="{{ asset('assets/libs/flot/css/float-chart.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/libs/magnific-popup/dist/magnific-popup.css') }}" rel="stylesheet">
    <!-- Form -->
    <link href="{{ asset('assets/libs/select2/dist/css/select2.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/libs/jquery-minicolors/jquery.minicolors.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css">
    {{-- <link href="{{ asset('assets/libs/quill/dist/quill.snow.css') }}" rel="stylesheet" type="text/css"> --}}
    <link href="{{ asset('assets/libs/jquery-steps/jquery.steps.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/libs/jquery-steps/steps.css') }}" rel="stylesheet">
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet">
    <!-- Table -->
    <link href="{{ asset('assets/extra-libs/multicheck/multicheck.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet">
    <!-- Elements -->
    <link href="{{ asset('assets/libs/toastr/build/toastr.min.css') }}" rel="stylesheet">
    <!-- Calendar -->
    <link href="{{ asset('assets/libs/fullcalendar/dist/fullcalendar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/extra-libs/calendar/calendar.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('dist/css/style.min.css') }}" rel="stylesheet"> --}}

    <style>
        html, body {
            background-color: #002B27;
            color: #636b6f;
            font-family: 'arial', sans-serif;
            font-weight: 100;
            color: black;
            font-size: 14px;
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
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    @if (Auth::guest())
                    <a class="navbar-brand" href="{{ url('/admin') }}">
                        BANK RESUME
                    </a>
                    @else
                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/admin') }}">
                        ADMIN DASHBOARD
                    </a>
                    @endif
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                     @if (Auth::guest())

                     @else
                     &nbsp;
                     <li><a href="{{ url('admin/permohonanguru-notpay') }}">Permohonan Guru</a></li>
                     <li><a href="{{ url('admin/permohonan-kakitangan') }}">Permohonan Kakitangan</a></li>
                        @endif
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                        <li><a href="{{ route('login') }}">Log Masuk</a></li>
                        <li><a href="{{ route('register') }}">Daftar Baru</a></li>
                        @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                               @if (Auth::user()->peranan == 1)
                               <li>
                                   <a href="{{ url('admin/senarai-admin') }}">Senarai Admin</a>
                               </li>
                                   
                               @endif
                                <li>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="fa fa-power-off m-r-5 m-l-5"></i> Logout
                                </a>
                                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
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
<script src="{{ asset('js/app.js') }}"></script>

<script src="{{ asset('assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js') }}"></script>
{{-- <script src="{{ asset('dist/js/pages/mask/mask.init.js') }}"></script> --}}
<script src="{{ asset('assets/libs/select2/dist/js/select2.full.min.js') }}"></script>
<script src="{{ asset('assets/libs/select2/dist/js/select2.min.js') }}"></script>
<script src="{{ asset('assets/libs/jquery-asColor/dist/jquery-asColor.min.js') }}"></script>
<script src="{{ asset('assets/libs/jquery-asGradient/dist/jquery-asGradient.js') }}"></script>
<script src="{{ asset('assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js') }}"></script>
<script src="{{ asset('assets/libs/jquery-minicolors/jquery.minicolors.min.js') }}"></script>
<script src="{{ asset('assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>

<script src="{{ asset('assets/extra-libs/multicheck/datatable-checkbox-init.js') }}"></script>
<script src="{{ asset('assets/extra-libs/multicheck/jquery.multicheck.js') }}"></script>
<script src="{{ asset('assets/extra-libs/DataTables/datatables.min.js') }}"></script>

{{-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> --}}
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>
    $(".select2").select2();

    $('#zero_config').DataTable({
        "language": {
                "emptyTable":   "Tiada data",
                "lengthMenu":   "_MENU_ Rekod setiap halaman",
                "zeroRecords":  "Tiada padanan rekod yang dijumpai.",
                "info":         "Paparan dari _START_ hingga _END_ dari _TOTAL_ rekod",
                "infoEmpty":    "Paparan 0 hingga 0 dari 0 rekod",
                "infoFiltered": "(Ditapis dari jumlah _MAX_ rekod)",
                "search":       "Carian:",
                "oPaginate": {
                    "sFirst":       "Pertama",
                    "sPrevious":    "Sebelum",
                    "sNext":        "Seterusnya",
                    "sLast":        "Akhir"
                }
            }
    });
</script>
<script>
    $('.mydatepicker').datepicker({
            // autoclose: true,
            todayHighlight: true,
            dateFormat:"dd/mm/yy",
            showButtonPanel: true,
            showAnim: "drop",
            changeMonth: true,
            changeYear: true
        });
    $('#datepicker-autoclose').datepicker({
        autoclose: true,
        todayHighlight: true
    });
</script>

</body>
</html>
