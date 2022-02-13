@extends('layouts.resume.app')

@section('content')
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">RUJUKAN</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="{{ url('/profile') }}">Halaman Utama</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Rujukan</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-12 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal" method="POST" action="{{ url('/insertrujukan2')}}">
                                    {{ csrf_field() }}
                                    <div class="panel-heading">Rujukan 1</div> 
                                    <div class="form-group{{ $errors->has('namarujukan') ? ' has-error' : '' }}">

                                         

                                        <label for="namarujukan" class="col-md-4 control-label">Nama</label>

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
                                            <input onkeyup="this.value = this.value.toUpperCase();" id="notelrujukan" type="notelrujukan" class="form-control" name="notelrujukan" value="{{ old('notelrujukan') }}" required>

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
                                        <label for="namarujukan2" class="col-md-4 control-label">Nama</label>

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
                                            <input onkeyup="this.value = this.value.toUpperCase();" id="notelrujukan2" type="notelrujukan2" class="form-control" name="notelrujukan2" value="{{ old('notelrujukan2') }}" >

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
                                        <div class="col-md-12 col-md-offset-4 text-center">
                                             <button type="button" onclick="window.location='{{ url('/profile')}}'" class="btn btn-danger">
                                                Batal
                                            </button>
                                             <button type="submit" class="btn btn-success">
                                                Hantar
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
@endsection


