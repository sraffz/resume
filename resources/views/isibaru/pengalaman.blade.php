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
                        <h4 class="page-title">PENGALAMAN</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="{{ url('/profile') }}">Halaman Utama</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Pengalaman</li>
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
                                <form class="form-horizontal" method="POST" action="{{ url('/insertpengalaman2')}}">
                                    {{ csrf_field() }}

                                    <div class="form-group{{ $errors->has('namasyarikat') ? ' has-error' : '' }}">
                                        <label for="namasyarikat" class="col-md-4 control-label">Name Syarikat</label>

                                        <div class="col-md-12">
                                            <input onkeyup="this.value = this.value.toUpperCase();" id="namasyarikat" type="text" class="form-control" name="namasyarikat" value="{{ old('namasyarikat') }}" required autofocus>

                                            @if ($errors->has('namasyarikat'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('namasyarikat') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('alamatsyarikat') ? ' has-error' : '' }}">
                                        <label for="alamatsyarikat" class="col-md-4 control-label">Alamat Syarikat</label>

                                        <div class="col-md-12">
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

                                        <div class="col-md-12">
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

                                        <div class="col-md-12">
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

                                        <div class="col-md-12">
                                            <input onkeyup="this.value = this.value.toUpperCase();" id="tempohkhidmat" type="tempohkhidmat" class="form-control" name="tempohkhidmat" value="{{ old('tempohkhidmat') }}" required>

                                            @if ($errors->has('tempohkhidmat'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('tempohkhidmat') }}</strong>
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
