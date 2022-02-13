@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><strong>Muat Naik Sijil SPM/KP/Surat Beranak</strong></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="panel-body">
                    <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="{{ url('/muatnaik-doc')}}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('tahundeg') ? ' has-error' : '' }}">
                            <label for="filespm" class="col-md-4 control-label">Sijil SPM</label>

                            <div class="col-md-6">
                                {{-- <input id="tahundeg" type="tahundeg" class="form-control" name="tahundeg" value="{{ old('tahundeg') }}" required> --}}
                                <input class="form-control" type="file" name="filespm" id="filespm">

                                @if ($errors->has('filespm'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('filespm') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('tahundeg') ? ' has-error' : '' }}">
                            <label for="filekp" class="col-md-4 control-label">Kad Pengenalan</label>

                            <div class="col-md-6">
                                {{-- <input id="tahundeg" type="tahundeg" class="form-control" name="tahundeg" value="{{ old('tahundeg') }}" required> --}}
                                <input class="form-control" type="file" name="filekp" id="filekp">

                                @if ($errors->has('filekp'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('filekp') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('tahundeg') ? ' has-error' : '' }}">
                            <label for="filesb" class="col-md-4 control-label">Surat Beranak</label>

                            <div class="col-md-6">
                                {{-- <input id="tahundeg" type="tahundeg" class="form-control" name="tahundeg" value="{{ old('tahundeg') }}" required> --}}
                                <input class="form-control" type="file" name="filesb" id="filesb">

                                @if ($errors->has('filesb'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('filesb') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-success">
                                    Hantar
                                </button>
                                &nbsp;
                                 <button class="btn btn-light">
                              Batal
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
