@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading"><strong>STAM</strong></div>
        
        
        <div class="panel-body">
          @if (session('status'))
          <div class="alert alert-success">
            {{ session('status') }}
          </div>
          @endif
          
          <div class="panel-body">
            <form class="col-lg-12 col-md-offset-2 form-horizontal" method="POST" action="{{ url('/stam')}}">
              {{ csrf_field() }}
              
              <div class="form-group">
                <div class="col-md-4">
                  <select class="form-control" name="mt">
                    @include('matapelajaran.mtstam');
                  </select>
                </div>
                <div class="col-md-3">
                  <select class="form-control" name="grad" required>
                    @include('gred.gredstam');
                  </select>
                </div>
              </div>
              
              <div class="form-group">
                <div class="col-md-4">
                  <select class="form-control" name="mt2">
                    @include('matapelajaran.mtstam');
                  </select>
                </div>
                <div class="col-md-3">
                  <select class="form-control" name="grad2" required>
                    @include('gred.gredstam');
                  </select>
                </div>
              </div>
              
              <div class="form-group">
                <div class="col-md-4">
                  <select class="form-control" name="mt3">
                    @include('matapelajaran.mtstam');
                  </select>
                </div>
                <div class="col-md-3">
                  <select class="form-control" name="grad3" required>
                    @include('gred.gredstam');
                  </select>
                </div>
              </div>
              
              <div class="form-group">
                <div class="col-md-4">
                  <select class="form-control" name="mt4">
                    @include('matapelajaran.mtstam');
                  </select>
                </div>
                <div class="col-md-3">
                  <select class="form-control" name="grad4">
                    @include('gred.gredstam');
                  </select>
                </div>
              </div>
              
              <div class="form-group">
                <div class="col-md-4">
                  <select class="form-control" name="mt5">
                    @include('matapelajaran.mtstam');
                  </select>
                </div>
                <div class="col-md-3">
                  <select class="form-control" name="grad5">
                    @include('gred.gredstam');
                  </select>
                </div>
              </div>
              
              <div class="form-group">
                <div class="col-md-4">
                  <select class="form-control" name="mt6">
                    @include('matapelajaran.mtstam');
                  </select>
                </div>
                <div class="col-md-3">
                  <select class="form-control" name="grad6">
                    @include('gred.gredstam');
                  </select>
                </div>
              </div>
              
              <div class="form-group">
                <div class="col-md-4">
                  <select class="form-control" name="mt7">
                    @include('matapelajaran.mtstam');
                  </select>
                </div>
                <div class="col-md-3">
                  <select class="form-control" name="grad7">
                    @include('gred.gredstam');
                  </select>
                </div>
              </div>
              
              <div class="form-group">
                <div class="col-md-4">
                  <select class="form-control" name="mt8">
                    @include('matapelajaran.mtstam');
                  </select>
                </div>
                <div class="col-md-3">
                  <select class="form-control" name="grad8">
                    @include('gred.gredstam');
                  </select>
                </div>
              </div>
              
              <div class="form-group">
                <div class="col-md-4">
                  <select class="form-control" name="mt9">
                    @include('matapelajaran.mtstam');
                  </select>
                </div>
                <div class="col-md-3">
                  <select class="form-control" name="grad9">
                    @include('gred.gredstam');
                  </select>
                </div>
              </div>
              
              <div class="form-group">
                <div class="col-md-4">
                  <select class="form-control" name="mt10">
                    @include('matapelajaran.mtstam');
                  </select>
                </div>
                <div class="col-md-3">
                  <select class="form-control" name="grad10">
                    @include('gred.gredstam');
                  </select>
                </div>
              </div>
              
              <div class="form-group">
                <div class="col-md-4">
                  <input type="text" name="mt11" class="form-control" value="">
                </div>
                <div class="col-md-3">
                  <select class="form-control" name="grad11">
                    @include('gred.gredstam');
                  </select>
                </div>
              </div>
              
              <div class="form-group">
                <div class="col-md-4">
                  <input type="text" name="mt12" class="form-control" value="">
                </div>
                <div class="col-md-3">
                  <select class="form-control" name="grad12">
                    @include('gred.gredstam');
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-4">
                  <input type="text" name="mt13" class="form-control" value="">
                </div>
                <div class="col-md-3">
                  <select class="form-control" name="grad13">
                    @include('gred.gredstam');
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-4">
                  <input type="text" name="mt14" class="form-control" value="">
                </div>
                <div class="col-md-3">
                  <select class="form-control" name="grad14">
                    @include('gred.gredstam');
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-4">
                  <input type="text" name="mt15" class="form-control" value="">
                </div>
                <div class="col-md-3">
                  <select class="form-control" name="grad15">
                    @include('gred.gredstam');
                  </select>
                </div>
              </div>                                                                       
              <div class="form-group">
                <div class="col-md-6 col-md-offset-3">
                  
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
