@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Pengalaman</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('/insertpengalaman')}}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('namasyarikat') ? ' has-error' : '' }}">
                            <label for="namasyarikat" class="col-md-4 control-label">Nama Syarikat</label>

                            <div class="col-md-6">
                                <input onkeyup="this.value = this.value.toUpperCase();" id="namasyarikat"  type="text" class="form-control" name="namasyarikat" value="{{ old('namasyarikat') }}" required autofocus>

                                @if ($errors->has('namasyarikat'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('namasyarikat') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('alamatsyarikat') ? ' has-error' : '' }}">
                            <label for="alamatsyarikat" class="col-md-4 control-label">Alamat Syarikat</label>

                            <div class="col-md-6">
                                <input onkeyup="this.value = this.value.toUpperCase();" id="alamatsyarikat" type="alamatsyarikat" class="form-control" name="alamatsyarikat" value="{{ old('alamatsyarikat') }}" required>

                                @if ($errors->has('alamatsyarikat'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('alamatsyarikat') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('notelsyarikat') ? ' has-error' : '' }}">
                            <label for="notelsyarikat" class="col-md-4 control-label">No. Tel Syarikat</label>

                            <div class="col-md-6">
                                <input onkeyup="this.value = this.value.toUpperCase();" id="notelsyarikat" type="notelsyarikat" class="form-control" name="notelsyarikat" value="{{ old('notelsyarikat') }}" required>

                                @if ($errors->has('notelsyarikat'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('notelsyarikat') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('jawatan') ? ' has-error' : '' }}">
                            <label for="jawatan" class="col-md-4 control-label">Jawatan</label>

                            <div class="col-md-6">
                                <input onkeyup="this.value = this.value.toUpperCase();" id="jawatan" type="jawatan" class="form-control" name="jawatan" value="{{ old('jawatan') }}" required>

                                @if ($errors->has('jawatan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('jawatan') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('tempohkhidmat') ? ' has-error' : '' }}">
                            <label for="tempohkhidmat" class="col-md-4 control-label">Tempoh Berkhidmat</label>

                            <div class="col-md-6">
                                <input onkeyup="this.value = this.value.toUpperCase();" id="tempohkhidmat" type="tempohkhidmat" class="form-control" name="tempohkhidmat" value="{{ old('tempohkhidmat') }}" required>

                                @if ($errors->has('tempohkhidmat'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tempohkhidmat') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-6">
                                <button type="submit" class="btn btn-success">
                                    Hantar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
