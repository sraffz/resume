@extends('layouts.adminapp')

@section('content')
<div class="container">
    <div class="row">
        @if(Session::has('message'))
        <p class=" text-center alert alert-success">{{ Session::get('message') }}</p>
        @endif
        <div class="panel panel-default">
            <div class="panel-heading"><strong>Temuduga</strong></div>
            <div class="panel-body">
                @if(count($temuduga) > 0)
                @foreach($temuduga->all() as $td)
                <form class="form-horizontal" method="POST" action="{{ url('/update-temuduga', array($td->id))}}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('tarikh') ? ' has-error' : '' }}">
                        <label for="tarikh" class="col-md-4 control-label">Tarikh</label>

                        <div class="col-md-3">
                            {{--           <input id="#datepicker" type="text" class="form-control" name="tarikh" value="{{ $td->tarikh }}"
                            required autofocus> --}}
                            <input name="tarikh" type="text" class="form-control mydatepicker" placeholder="dd/mm/yyyy"
                                value="{{ $td->tarikh }}">

                            @if ($errors->has('tarikh'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tarikh') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('markah') ? ' has-error' : '' }}">
                        <label for="markah" class="col-md-4 control-label">Markah</label>
                        <div class="col-md-3">
                            <input id="markah" type="text" class="form-control" name="markah" value="{{ $td->markah }}"
                                autofocus>

                            @if ($errors->has('markah'))
                            <span class="help-block">
                                <strong>{{ $errors->first('markah') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('nota') ? ' has-error' : '' }}">
                        <label for="nota" class="col-md-4 control-label">Nota Ringkas</label>

                        <div class="col-md-3">
                            <textarea class="form-control" name="nota" id="nota" cols="30"
                                rows="10">{{ $td->nota }}</textarea>
                            @if ($errors->has('nota'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nota') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <a href='{{ url("/admin/butiran-pemohon/{$td->id}") }}'><button type="Button"
                                    class="btn btn-danger "> Kembali </button></a>
                            <button type="submit" class="btn btn-success "> Kemaskini </button>
                        </div>
                    </div>
                </form>
                @endforeach
                @else
                @foreach($user->all() as $ttt)
                <form class="form-horizontal" method="POST" action="{{ url('/insert-temuduga') }}">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $ttt->id }}">
                    <div class="form-group{{ $errors->has('tarikh') ? ' has-error' : '' }}">
                        <label for="tarikh" class="col-md-4 control-label">Tarikh</label>

                        <div class="col-md-3">
                            <input name="tarikh" type="text" class="form-control mydatepicker" placeholder="dd/mm/yyyy"
                                value="">

                            @if ($errors->has('tarikh'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tarikh') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('markah') ? ' has-error' : '' }}">
                        <label for="markah" class="col-md-4 control-label">Markah</label>
                        <div class="col-md-3">
                            <input id="markah" type="text" class="form-control" name="markah" value=""
                                autofocus>

                            @if ($errors->has('markah'))
                            <span class="help-block">
                                <strong>{{ $errors->first('markah') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('nota') ? ' has-error' : '' }}">
                        <label for="nota" class="col-md-4 control-label">Nota Ringkas</label>

                        <div class="col-md-3">
                            <textarea class="form-control" name="nota" id="nota" cols="30"
                                rows="10"></textarea>
                            @if ($errors->has('nota'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nota') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <a href='{{ url("/admin/butiran-pemohon/{$ttt->id}") }}'><button type="Button"
                                    class="btn btn-danger "> Kembali </button></a>
                            <button type="submit" class="btn btn-success "> Kemaskini </button>
                        </div>
                    </div>
                </form>
                @endforeach
                @endif
            </div>
        </div>
    </div>




</div>
@endsection