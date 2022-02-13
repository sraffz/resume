@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><strong>Peringkat Diploma</strong></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="panel-body">
                    <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="{{ url('/diploma')}}">
                        {{ csrf_field() }}
                    
                        <div class="form-group{{ $errors->has('tahundip') ? ' has-error' : '' }}">
                            <label for="tahundip" class="col-md-4 control-label">Tarikh Graduasi</label>

                            <div class="col-md-6">
                                <input id="tahundip" type="tahundip" class="form-control mydatepicker" name="tahundip" value="{{ old('tahundip') }}" required>

                                @if ($errors->has('tahundip'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tahundip') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                                                                                                       
                        <div class="form-group{{ $errors->has('tempatbelajar') ? ' has-error' : '' }}">
                            <label for="tempatbelajar" class="col-md-4 control-label">Institusi Pengajian</label>

                            <div class="col-md-6">
                                <input id="tempatbelajar" onkeyup="this.value = this.value.toUpperCase();" type="tempatbelajar" class="form-control" name="tempatbelajar" value="{{ old('tempatbelajar') }}" required>

                                @if ($errors->has('tempatbelajar'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tempatbelajar') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('kursus') ? ' has-error' : '' }}">
                            <label for="kursus" class="col-md-4 control-label">Bidang</label>

                            <div class="col-md-6">
                                <input id="kursus" type="kursus" onkeyup="this.value = this.value.toUpperCase();" class="form-control" name="kursus" value="{{ old('kursus') }}" required>

                                @if ($errors->has('kursus'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('kursus') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('cgpa') ? ' has-error' : '' }}">
                            <label for="cgpa" class="col-md-4 control-label">CGPA (PNGK)</label>

                            <div class="col-md-6">
                                <input id="cgpa" type="cgpa" onkeyup="this.value = this.value.toUpperCase();" class="form-control" name="cgpa" value="{{ old('cgpa') }}" required>

                                @if ($errors->has('cgpa'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cgpa') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        {{-- <div class="form-group{{ $errors->has('transkript') ? ' has-error' : '' }}">
                            <label for="transkript" class="col-md-4 control-label">Transkript</label>

                            <div class="col-md-6">
                                
                                <input class="form-control" type="file" name="transkript" id="file">

                                @if ($errors->has('transkript'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('transkript') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('sijilkonvo') ? ' has-error' : '' }}">
                            <label for="sijilkonvo" class="col-md-4 control-label">Sijil Konvo</label>

                            <div class="col-md-6">
                                
                                <input class="form-control" type="file" name="sijilkonvo" id="file">

                                @if ($errors->has('sijilkonvo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sijilkonvo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> --}}
                     
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                 <a href="{{  URL::previous()  }}" class="btn btn-danger">Batal</a>&nbsp;
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
