@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><strong>TAHFIZ</strong></div>
                 
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="panel-body">

                    
                    <form class="col-lg-11 col-md-offset-1 form-horizontal" enctype="multipart/form-data" method="POST" action="{{ url('/tahfiz')}}">
                        {{ csrf_field() }}
                    <div class=""><strong>Peringkat Sijil</strong></div><br>
                        <div class="form-group{{ $errors->has('tahunsijil') ? ' has-error' : '' }}">
                            <label for="tahunsijil" class="col-md-4 control-label">Tahun Graduasi</label>

                            <div class="col-md-6">
                                <input id="tahunsijil" type="tahunsijil" class="form-control mydatepicker" name="tahunsijil" value="{{ old('tahunsijil') }}">

                                @if ($errors->has('tahunsijil'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tahunsijil') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                                                                                                       
                        <div class="form-group{{ $errors->has('tempatbelajarsijil') ? ' has-error' : '' }}">
                            <label for="tempatbelajarsijil" class="col-md-4 control-label">Institusi Pengajian</label>

                            <div class="col-md-6">
                                <input id="tempatbelajarsijil" type="tempatbelajarsijil" onkeyup="this.value = this.value.toUpperCase();" class="form-control" name="tempatbelajarsijil" value="{{ old('tempatbelajarsijil') }}">

                                @if ($errors->has('tempatbelajarsijil'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tempatbelajarsijil') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('kursussijil') ? ' has-error' : '' }}">
                            <label for="kursussijil" class="col-md-4 control-label">Bidang</label>

                            <div class="col-md-6">
                                <input id="kursussijil" onkeyup="this.value = this.value.toUpperCase();" type="kursussijil" class="form-control" name="kursussijil" value="{{ old('kursussijil') }}">

                                @if ($errors->has('kursussijil'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('kurkursussijilsus') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('cgpasijil') ? ' has-error' : '' }}">
                            <label for="cgpasijil" class="col-md-4 control-label">CGPA (PNGK)</label>

                            <div class="col-md-6">
                                <input id="cgpasijil" onkeyup="this.value = this.value.toUpperCase();" type="cgpasijil" class="form-control" name="cgpasijil" value="{{ old('cgpasijil') }}">

                                @if ($errors->has('cgpasijil'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cgpasijil') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        {{-- <div class="form-group{{ $errors->has('transkriptsijil') ? ' has-error' : '' }}">
                            <label for="transkriptsijil" class="col-md-4 control-label">Transkript</label>

                            <div class="col-md-6">
                
                                <input class="form-control" type="file" name="transkriptsijil" id="file">

                                @if ($errors->has('transkriptsijil'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('transkriptsijil') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('sijilkonvosijil') ? ' has-error' : '' }}">
                            <label for="sijilkonvosijil" class="col-md-4 control-label">Sijil Konvo</label>

                            <div class="col-md-6">
                
                                <input class="form-control" type="file" name="sijilkonvosijil" id="file">

                                @if ($errors->has('sijilkonvosijil'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sijilkonvosijil') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> --}}
                        
                    
<br>
                    
                    <div class=""><strong>Peringkat Diploma</strong></div><br>
                    
                    
                        <div class="form-group{{ $errors->has('tahundip') ? ' has-error' : '' }}">
                            <label for="tahundip" class="col-md-4 control-label">Tahun Graduasi</label>

                            <div class="col-md-6">
                                <input id="tahundip" type="tahundip" class="form-control mydatepicker" name="tahundip" value="{{ old('tahundip') }}" >

                                @if ($errors->has('tahundip'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tahundip') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                                                                                                       
                        <div class="form-group{{ $errors->has('tempatbelajardip') ? ' has-error' : '' }}">
                            <label for="tempatbelajardip" class="col-md-4 control-label">Institusi Pengajian</label>

                            <div class="col-md-6">
                                <input id="tempatbelajardip" onkeyup="this.value = this.value.toUpperCase();" type="tempatbelajardip" class="form-control" name="tempatbelajardip" value="{{ old('tempatbelajardip') }}" >

                                @if ($errors->has('tempatbelajardip'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tempatbelajardip') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('kursusdip') ? ' has-error' : '' }}">
                            <label for="kursusdip" class="col-md-4 control-label">Bidang</label>

                            <div class="col-md-6">
                                <input id="kursusdip" onkeyup="this.value = this.value.toUpperCase();" type="kursusdip" class="form-control" name="kursusdip" value="{{ old('kursusdip') }}" >

                                @if ($errors->has('kursusdip'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('kursusdip') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('cgpadip') ? ' has-error' : '' }}">
                            <label for="cgpadip" class="col-md-4 control-label">CGPA (PNGK)</label>

                            <div class="col-md-6">
                                <input id="cgpadip" onkeyup="this.value = this.value.toUpperCase();" type="cgpadip" class="form-control" name="cgpadip" value="{{ old('cgpadip') }}" >

                                @if ($errors->has('cgpadip'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cgpadip') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <br>
                        {{-- <div class="form-group{{ $errors->has('transkriptdip') ? ' has-error' : '' }}">
                            <label for="transkriptdip" class="col-md-4 control-label">Transkript</label>

                            <div class="col-md-6">
                                
                                <input class="form-control" type="file" name="transkriptdip" id="file">

                                @if ($errors->has('transkriptdip'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('transkriptdip') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('sijilkonvodip') ? ' has-error' : '' }}">
                            <label for="sijilkonvodip" class="col-md-4 control-label">Sijil Konvo</label>

                            <div class="col-md-6">
                                
                                <input class="form-control" type="file" name="sijilkonvodip" id="file">

                                @if ($errors->has('sijilkonvodip'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sijilkonvodip') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> --}}
                       
                    

                   
                    <div class=""><strong>Peringkat Ijazah</strong></div><br>
                    
                        <div class="form-group{{ $errors->has('tahundeg') ? ' has-error' : '' }}">
                            <label for="tahundeg" class="col-md-4 control-label">Tahun Graduasi</label>

                            <div class="col-md-6">
                                <input id="tahundeg" type="tahundeg" class="form-control mydatepicker" name="tahuntahundegdip" value="{{ old('tahundeg') }}" >

                                @if ($errors->has('tahundeg'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tahundeg') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                                                                                                       
                        <div class="form-group{{ $errors->has('tempatbelajardeg') ? ' has-error' : '' }}">
                            <label for="tempatbelajardeg" class="col-md-4 control-label">Institusi Pengajian</label>

                            <div class="col-md-6">
                                <input id="tempatbelajardeg" onkeyup="this.value = this.value.toUpperCase();" type="tempatbelajardeg" class="form-control" name="tempatbelajardeg" value="{{ old('tempatbelajardeg') }}" >

                                @if ($errors->has('tempatbelajardeg'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tempatbelajardeg') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('kursusdeg') ? ' has-error' : '' }}">
                            <label for="kursusdeg" class="col-md-4 control-label">Bidang</label>

                            <div class="col-md-6">
                                <input id="kursusdeg" onkeyup="this.value = this.value.toUpperCase();" type="kursusdeg" class="form-control" name="kursusdeg" value="{{ old('kursusdeg') }}" >

                                @if ($errors->has('kursusdeg'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('kursusdeg') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('cgpadeg') ? ' has-error' : '' }}">
                            <label for="cgpadeg" class="col-md-4 control-label">CGPA (PNGK)</label>

                            <div class="col-md-6">
                                <input id="cgpadeg" onkeyup="this.value = this.value.toUpperCase();" type="cgpadeg" class="form-control" name="cgpadeg" value="{{ old('cgpadeg') }}">

                                @if ($errors->has('cgpadeg'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cgpadeg') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         {{-- <div class="form-group{{ $errors->has('transkriptdeg') ? ' has-error' : '' }}">
                            <label for="transkriptdeg" class="col-md-4 control-label">Transkript</label>

                            <div class="col-md-6">
                                
                                <input class="form-control" type="file" name="transkriptdeg" id="file">

                                @if ($errors->has('transkriptdeg'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('transkriptdeg') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('sijilkonvodeg') ? ' has-error' : '' }}">
                            <label for="sijilkonvodeg" class="col-md-4 control-label">Sijil Konvo</label>

                            <div class="col-md-6">
                                
                                <input class="form-control" type="file" name="sijilkonvodeg" id="file">

                                @if ($errors->has('sijilkonvodeg'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sijilkonvodeg') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> --}}

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                &nbsp;
                                <a href="{{  URL::previous()  }}" class="btn btn-danger">Batal</a>
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
