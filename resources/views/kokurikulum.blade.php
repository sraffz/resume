@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><strong>Maklumat Ko-Kurikulum</strong></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('/insertkokurikulum')}}">
                        {{ csrf_field() }}
                        <div class="panel-heading"><strong>SUKAN</strong></div> 
                    <div > 
                        <div class="panel-heading col-md-6"><strong>Sukan</strong></div> 
                        <div class="panel-heading col-md-4"><strong>Peringkat</strong></div> 
                    </div>
                        
                        <div class="form-group{{ $errors->has('sukan') ? ' has-error' : '' }}">
                            <div class="col-md-6">
                                <input id="sukan" onkeyup="this.value = this.value.toUpperCase();" type="sukan" class="form-control" name="sukan" value="{{ old('sukan') }}" required>
                            </div>
                                <div class="col-md-4">
                                <select class="form-control" name="peringkat" required>              
                                   @include('kokurikulum.peringkat');
                                  </select>
                                  </div>
                        </div>

                        <div class="form-group{{ $errors->has('sukan2') ? ' has-error' : '' }}">
                            <div class="col-md-6">
                                <input id="sukan2" onkeyup="this.value = this.value.toUpperCase();" type="sukan2" class="form-control" name="sukan2" value="{{ old('sukan2') }}" >
                            </div>
                                <div class="col-md-4">
                                <select class="form-control" name="peringkat2">
                                    @include('kokurikulum.peringkat');
                                  </select>
                                  </div>
                        </div>

                        <div class="form-group{{ $errors->has('sukan3') ? ' has-error' : '' }}">
                            <div class="col-md-6">
                                <input id="sukan3" onkeyup="this.value = this.value.toUpperCase();" type="sukan3" class="form-control" name="sukan3" value="{{ old('sukan3') }}">
                            </div>
                                <div class="col-md-4">
                                    <select class="form-control" name="peringkat3">
                                        @include('kokurikulum.peringkat');
                                    </select>
                                </div>
                        </div>

                        <div class="form-group{{ $errors->has('sukan4') ? ' has-error' : '' }}">
                            <div class="col-md-6">
                                <input id="sukan4" onkeyup="this.value = this.value.toUpperCase();" type="sukan4" class="form-control" name="sukan4" value="{{ old('sukan4') }}">
                            </div>
                                <div class="col-md-4">
                                    <select class="form-control" name="peringkat4">
                                        @include('kokurikulum.peringkat');
                                    </select>
                                </div>
                        </div>

                        <div class="form-group{{ $errors->has('sukan5') ? ' has-error' : '' }}">
                            <div class="col-md-6">
                                <input id="sukan5" onkeyup="this.value = this.value.toUpperCase();" type="sukan5" class="form-control" name="sukan5" value="{{ old('sukan5') }}">
                            </div>
                                <div class="col-md-4">
                                    <select class="form-control" name="peringkat5">
                                        @include('kokurikulum.peringkat');
                                    </select>
                                </div>
                        </div>


                        &nbsp;
                        <legend></legend>
                        <div class="panel-heading"><strong>PERSATUAN/KEPIMPINAN</strong></div> 
                        <div> 
                        <div class="panel-heading col-md-6"><strong>Nama Persatuan</strong></div> 
                        <div class="panel-heading col-md-4"><strong>Jawatan</strong></div>
                        <div class="panel-heading col-md-2"><strong>Peringkat</strong></div> 
                        </div>

                        <div class="form-group{{ $errors->has('persatuan') ? ' has-error' : '' }}">
                            <div class="col-md-5">
                                <input id="persatuan" onkeyup="this.value = this.value.toUpperCase();" type="persatuan" class="form-control" name="persatuan" value="{{ old('persatuan') }}" required>
                                </div>
                                <div class="col-md-4">
                                <select class="form-control" name="jawatan" required>
                                    @include('kokurikulum.jawatan');
                                  </select>
                                  </div>
                                <div class="col-md-3">
                                <select class="form-control" name="peringkatkelab" required>
                                    @include('kokurikulum.peringkat');
                                  </select>
                                  </div>
                        </div>

                        <div class="form-group{{ $errors->has('persatuan2') ? ' has-error' : '' }}">
                            <div class="col-md-5">
                                <input id="persatuan2" onkeyup="this.value = this.value.toUpperCase();" type="persatuan2" class="form-control" name="persatuan2" value="{{ old('persatuan2') }}">
                                </div>
                                <div class="col-md-4">
                                <select class="form-control" name="jawatan2">
                                    @include('kokurikulum.jawatan');
                                  </select>
                                  </div>
                                <div class="col-md-3">
                                <select class="form-control" name="peringkatkelab2">
                                    @include('kokurikulum.peringkat');
                                  </select>
                                  </div>
                        </div>

                        <div class="form-group{{ $errors->has('persatuan3') ? ' has-error' : '' }}">
                            <div class="col-md-5">
                                <input id="persatuan3" onkeyup="this.value = this.value.toUpperCase();" type="persatuan3" class="form-control" name="persatuan3" value="{{ old('persatuan3') }}">
                                </div>
                                <div class="col-md-4">
                                <select class="form-control" name="jawatan3">
                                    @include('kokurikulum.jawatan');
                                  </select>
                                  </div>
                                <div class="col-md-3">
                                <select class="form-control" name="peringkatkelab3">
                                    @include('kokurikulum.peringkat');
                                  </select>
                                  </div>
                        </div>

                        &nbsp;
                        &nbsp;
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-5">
                              {{-- <a href="{{  URL::previous()  }}" class="btn btn-danger">Batal</a>&nbsp; --}}
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
