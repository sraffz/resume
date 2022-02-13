<!doctype html>
<html lang="en">

<head>
    <title>Bank Resume YIK</title>
    <link rel="icon" href="{!!  asset('favicon.ico') !!}" />
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        html,
        body {
            overflow: auto;
            background: transparent url("storage/bg.jpg") no-repeat fixed center;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            background-size: cover;

            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-4 text-center">
                <img src="{{ url('storage/yik.png') }}" class="" alt="" height="15%">
                <img src="{{ url('storage/eresume.png') }}" class="img-fluid" alt="">
                <div class="card">
                    <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                        @endif
                        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                {{-- <label for="email">Alamat Email</label> --}}
                                <input type="email" class="form-control" name="email" id="email"
                                    aria-describedby="emailHelpId" placeholder="Alamat Email" required>
                                @if ($errors->has('email'))
                                <span class="help-block">
                                    <font style="color: red"><strong>Maklumat tidak wujud.</strong></font>
                                </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                {{-- <label for="password">Kata Laluan</label> --}}
                                <input type="password" class="form-control" name="password" placeholder="Kata Laluan"
                                    id="password" placeholder="" required>
                                @if ($errors->has('password'))
                                <span class="help-block">
                                   <font style="color: red"> <strong>Kata laluan salah.</strong></font>
                                </span>
                                @endif
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-lg btn-success btn-block">
                                    Login
                                </button>
                                <br>
                                <a href="#" data-toggle="modal" data-target="#lupapassword">
                                    Lupa Kata Laluan?
                                </a>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#daftar">
                            Daftar Akaun
                        </button>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Daftar Baru -->
                    <div class="modal fade" id="daftar" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
                        aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Daftar Akaun</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form class="form-horizontal" method="POST"  action="{{ route('register') }}">
                                        @csrf
                                        <div class="form-group{{ $errors->has('nokp') ? ' has-error' : '' }}">
                                            <div class="form-group">
                                                {{-- <label for="nokp">No Kad Pengenalan</label> --}}
                                                <input type="text" class="form-control" style="text-align: center"
                                                    name="nokp" id="nokp" aria-describedby="ichelp"
                                                    placeholder="No Kad Pengenalan"
                                                    onkeypress="return event.charCode === 0 || /\d/.test(String.fromCharCode(event.charCode));"
                                                    type="text" maxlength="12" value="{{ old('nokp') }}" required
                                                    autofocus>
                                                <small id="ichelp" class="form-text text-center text-muted">No Kad
                                                    Pengenalan tanpa (-)</small>
                                            </div>
                                            @if ($errors->has('nokp'))
                                            <span class="help-block">
                                                <font style="color: red"><strong>No Kad Pengenalan telah wujud.</strong></font>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group{{ $errors->has('colorkp') ? ' has-error' : '' }}">
                                            <div class="form-group">
                                                <select style="text-align-last: center;" class="form-control custom-select " name="colorkp" required>
                                                  <option selected value="">Pilih Warna Kad Pengenalan</option>
                                                  <option value="BIRU">BIRU</option>
                                                  <option value="MERAH">MERAH</option>
                                                  <option value="HIJAU">HIJAU</option>
                                                  <option value="COKLAT">COKLAT</option>
                                                </select> 
                                                <small id="ichelp" class="form-text text-center text-muted">Warna Kad Pengenalan</small>
                                            </div>
                                            @if ($errors->has('colorkp'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('colorkp') }}</strong>
                                                </span>
                                                @endif
                                        </div>
                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                            <input type="text" class="form-control" style="text-align: center"
                                                name="name" id="name" aria-describedby="helpId"
                                                placeholder="Nama Singkatan" onkeyup="this.value = this.value.toUpperCase();" value="{{ old('name') }}" required>
                                            @if ($errors->has('name'))
                                            <span class="help-block">
                                                <font style="color: red"><strong>{{ $errors->first('name') }}</strong></font>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            {{-- <label for="namapenuh"></label> --}}
                                            <input type="text" class="form-control" name="namapenuh" id="namapenuh"
                                                style="text-align: center" aria-describedby="helpId"
                                                placeholder="Nama Penuh" onkeyup="this.value = this.value.toUpperCase();" value="{{ old('namapenuh') }}" required
                                                autofocus>
                                            @if ($errors->has('namapenuh'))
                                            <span class="help-block">
                                                <font style="color: red"><strong>{{ $errors->first('namapenuh') }}</strong></font>
                                            </span>
                                            @endif
                                            {{-- <small id="helpId" class="form-text text-muted">Help text</small> --}}
                                        </div>
                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                            <input type="email" class="form-control" name="email" id="email"
                                                style="text-align: center" aria-describedby="helpId"
                                                placeholder="Alamat Email" value="{{ old('email') }}" required
                                                autofocus>
                                            @if ($errors->has('email'))
                                            <span class="help-block">
                                                <font style="color: red"><strong>{{ $errors->first('email') }}</strong></font>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                            <input id="password" type="password" class="form-control" name="password"
                                                style="text-align: center"  placeholder="Kata Laluan baru" required>
                                            @if ($errors->has('password'))
                                            <span class="help-block">
                                                <font style="color: red"><strong>{{ $errors->first('password') }}</strong></font>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <input id="password-confirm" type="password" class="form-control"
                                                name="password_confirmation" style="text-align: center"
                                                placeholder="Taip Semula Kata Laluan" required>
                                        </div>
                                        <div class="form-group text-center">
                            <p style="font: bold; color: black">
                                <strong>* Pemohon hendaklah merupakan warganegara Malaysia yang memiliki Kad Pengenalan berwarna biru sahaja.
                                <br>

                                * Pemohon lepasan ijazah hendaklah membuat permohonan selepas konvokesyen.

                                <br>

                                * Permohonan yang tidak memenuhi syarat akan dibatalkan dari sistem.
                                </strong>
                            </p>
                         

                            <!-- <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required>
                            </div> -->
                        </div>
                                </div>
                                <div class="modal-footer">
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Daftar</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Lupa Password-->
                                <div class="modal fade" id="lupapassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                  <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Menetapkan semula kata laluan</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                        <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                                      <div class="modal-body">
                                            {{ csrf_field() }}
                                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                                <label for="email" class="control-label">Alamat E-Mail</label>
                                                <div class="col-md-12">
                                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                                    @if ($errors->has('email'))
                                                        <span class="help-block">
                                                           <font style="color: red"><strong>Email tidak wujud.</strong></font>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                      <div class="modal-footer">
                                         <button type="submit" class="btn btn-primary btn-block">Hantar Pautan Tukar Kata Laluan</button>
                                      </div>
                                        </form>                                      
                                    </div>
                                  </div>
                                </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

   <script type="text/javascript">
    @if ($errors->has('email'))
        $('#lupapassword').modal('show');
    @endif
    </script>

</body>

</html>