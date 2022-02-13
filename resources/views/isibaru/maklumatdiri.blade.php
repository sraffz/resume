@extends('layouts.resume.app')

@section('content')
<div class="container">
    <div class="row">
         <div id="sidebar" class="col-md-3">
            
        </div>
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">Maklumat Diri</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                   
                    <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('/maklumatdiri2')}}">
                         

                        {{ csrf_field() }}
                        
                        <fieldset>
                         @if(count($errors) >0 )
                              @foreach($errors->all() as $error)
                                <div class="alert alert-danger">{{$error}}</div>
                              @endforeach
                          @endif
                        <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                            <label for="nama" class="col-md-4 control-label">Nama Penuh</label>

                            <div class="col-md-6">
                                <input onkeyup="this.value = this.value.toUpperCase();" id="nama" type="text" class="form-control" name="nama" value="{{ old('nama') }}">
 
                                @if ($errors->has('nama'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nama') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('ic') ? ' has-error' : '' }}">
                            <label for="ic" class="col-md-4 control-label">No Kad Pengenalan</label>

                            <div class="col-md-6">
                                <input onkeyup="this.value = this.value.toUpperCase();" id="ic2"  type="text"  class="form-control" name="ic"  required>  

                                @if ($errors->has('ic'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ic') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        
                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label for="address" class="col-md-4 control-label">Alamat Surat Menyurat</label>

                            <div class="col-md-6">
                                <input onkeyup="this.value = this.value.toUpperCase();" id="address" type="address" class="form-control" name="address" required>

                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('daerah') ? ' has-error' : '' }}">
                            <label for="daerah" class="col-md-4 control-label">Daerah</label>

                                    <div class="col-md-3">
                                        <input onkeyup="this.value = this.value.toUpperCase();" id="daerah" type="daerah" class="form-control" name="daerah" required>

                                        @if ($errors->has('daerah'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('daerah') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                             <div class="form-group{{ $errors->has('poskod') ? ' has-error' : '' }}">
                                 <label for="poskod" class="col-md-1 control-label">Poskod</label>

                                <div class="col-md-2">
                                    <input onkeyup="this.value = this.value.toUpperCase();" id="poskod" type="poskod" class="form-control" name="poskod" required>

                                    @if ($errors->has('poskod'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('poskod') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                      <div class="form-group{{ $errors->has('negeri') ? ' has-error' : '' }}">
                            <label for="negeri" class="col-md-4 control-label">Negeri</label>

                            <div class="col-md-6">
                                <input onkeyup="this.value = this.value.toUpperCase();" id="negeri" type="negeri" class="form-control" name="negeri"  required>

                                @if ($errors->has('negeri'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('negeri') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('tempatlahir') ? ' has-error' : '' }}">
                            <label for="tempatlahir" class="col-md-4 control-label">Tempat Lahir</label>

                            <div class="col-md-6">
                                <input onkeyup="this.value = this.value.toUpperCase();" id="tempatlahir" type="tempatlahir" class="form-control" name="tempatlahir" required>

                                @if ($errors->has('tempatlahir'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tempatlahir') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('jantina') ? ' has-error' : '' }}">
                            <label for="jantina" class="col-md-4 control-label">Jantina</label>

                            <div class="col-md-6">
                                <input onkeyup="this.value = this.value.toUpperCase();" id="jantina" type="jantina" class="form-control" name="jantina" required>

                                @if ($errors->has('jantina'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('jantina') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                            <label for="status" class="col-md-4 control-label">Status Perkahwinan</label>

                            <div class="col-md-6">
                                <input onkeyup="this.value = this.value.toUpperCase();" id="status" type="status" class="form-control" name="status" required>

                                @if ($errors->has('status'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('status') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Alamat email</label>

                            <div class="col-md-6">

                                <input onkeyup="this.value = this.value.toUpperCase();" id="email" type="email" class="form-control" name="email"  required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('hp') ? ' has-error' : '' }}">
                            <label for="hp" class="col-md-4 control-label">No telefon (HP)</label>

                            <div class="col-md-6">
                                <input onkeyup="this.value = this.value.toUpperCase();" id="hp" type="hp" class="form-control" name="hp"  required>

                                @if ($errors->has('hp'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('hp') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                     
                        <div class="form-group">
                            <div class="col-md-12 col-md-offset-4 text-center">
                                             <button type="button" onclick="window.location='{{ url('/profile')}}'" class="btn btn-danger">
                                                Batal
                                            </button>
                                             <button type="submit" class="btn btn-success">
                                                Hantar
                                            </button>
                                        </div>
                        </div>
                    </fieldset>
             
                    </form>
                </div>
               
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
