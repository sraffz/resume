@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <!-- <div class="panel panel-default"> -->
                <div class="panel-heading text-center"><font style="color: white" size="8" >DAFTAR</font></div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

<font style="color: white">
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nama Singkatan</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('namapenuh') ? ' has-error' : '' }}">
                            <label for="namapenuh" class="col-md-4 control-label">Nama Penuh</label>

                            <div class="col-md-6">
                                <input id="namapenuh" type="text" class="form-control" name="namapenuh" value="{{ old('namapenuh') }}" required autofocus>

                                @if ($errors->has('namapenuh'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('namapenuh') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('ic') ? ' has-error' : '' }}">
                            <label for="ic" class="col-md-4 control-label">No Kad Pengenalan</label>

                            <div class="col-md-6">
                                <input id="ic" type="text" class="form-control" name="ic" value="{{ old('ic') }}" required autofocus>

                                @if ($errors->has('ic'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ic') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Kata Laluan</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Taip Semula Kata Laluan</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-success">
                                    Daftar
                                </button>
                            </div>
                        </div>
                    </form>
                </font>
                </div>
            </div>
        <!-- </div> -->
    </div>
</div>
@endsection
