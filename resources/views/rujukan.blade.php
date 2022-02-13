@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Maklumat Rujukan</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('/insertrujukan')}}">
                        {{ csrf_field() }}
                        <div class="panel-heading">Rujukan 1</div> 
                        <div class="form-group{{ $errors->has('namarujukan') ? ' has-error' : '' }}">

                             

                            <label for="namarujukan" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input onkeyup="this.value = this.value.toUpperCase();" id="namarujukan" type="text" class="form-control" name="namarujukan" value="{{ old('namarujukan') }}" required autofocus>

                                @if ($errors->has('namarujukan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('namarujukan') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('notelrujukan') ? ' has-error' : '' }}">
                            <label for="notelrujukan" class="col-md-4 control-label">No. Telefon</label>

                            <div class="col-md-6">
                                <input onkeypress="return event.charCode === 0 || /\d/.test(String.fromCharCode(event.charCode));" id="notelrujukan" type="notelrujukan" class="form-control" name="notelrujukan" value="{{ old('notelrujukan') }}" required>

                                @if ($errors->has('notelrujukan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('notelrujukan') }}</strong>
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

                        &nbsp;
                        &nbsp;


                        <div class="panel-heading">Rujukan 2</div>
                         <div class="form-group{{ $errors->has('namarujukan2') ? ' has-error' : '' }}">
                            <label for="namarujukan2" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input onkeyup="this.value = this.value.toUpperCase();" id="namarujukan2" type="text" class="form-control" name="namarujukan2" value="{{ old('namarujukan2') }}" >

                                @if ($errors->has('namarujukan2'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('namarujukan2') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('notelrujukan2') ? ' has-error' : '' }}">
                            <label for="notelrujukan2" class="col-md-4 control-label">No. Telefon</label>

                            <div class="col-md-6">
                                <input onkeypress="return event.charCode === 0 || /\d/.test(String.fromCharCode(event.charCode));" id="notelrujukan2" type="notelrujukan2" class="form-control" name="notelrujukan2" value="{{ old('notelrujukan2') }}" >

                                @if ($errors->has('notelrujukan2'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('notelrujukan2') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('jawatan2') ? ' has-error' : '' }}">
                            <label for="jawatan2" class="col-md-4 control-label">Jawatan</label>

                            <div class="col-md-6">
                                <input onkeyup="this.value = this.value.toUpperCase();" id="jawatan2" type="jawatan2" class="form-control" name="jawatan2" value="{{ old('jawatan2') }}">

                                @if ($errors->has('jawatan2'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('jawatan2') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                     
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
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
