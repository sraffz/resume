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
                        <h4 class="page-title">TAHFIZ</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="{{ url('/profile') }}">Halaman Utama</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Maklumat Akademik</li>
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
                                <form class="col-lg-11 col-md-offset-1 form-horizontal" method="POST" action="{{ url('/tahfiz2')}}">
                                {{ csrf_field() }}
                                <div class=""><strong>Peringkat Sijil</strong></div><br>

                                    <div class="form-group{{ $errors->has('tahunsijil') ? ' has-error' : '' }}">
                                        <label for="tahunsijil" class="col-md-4 control-label">Tahun Graduasi</label>

                                        <div class="col-md-12">
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

                                        <div class="col-md-12">
                                            <input onkeyup="this.value = this.value.toUpperCase();" id="tempatbelajarsijil" type="tempatbelajarsijil" class="form-control" name="tempatbelajarsijil" value="{{ old('tempatbelajarsijil') }}">

                                            @if ($errors->has('tempatbelajarsijil'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('tempatbelajarsijil') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('kursussijil') ? ' has-error' : '' }}">
                                        <label for="kursussijil" class="col-md-4 control-label">Bidang</label>

                                        <div class="col-md-12">
                                            <input onkeyup="this.value = this.value.toUpperCase();" id="kursussijil" type="kursussijil" class="form-control" name="kursussijil" value="{{ old('kursussijil') }}">

                                            @if ($errors->has('kursussijil'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('kurkursussijilsus') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('cgpasijil') ? ' has-error' : '' }}">
                                        <label for="cgpasijil" class="col-md-4 control-label">CGPA (PNGK)</label>

                                        <div class="col-md-12">
                                            <input onkeyup="this.value = this.value.toUpperCase();" id="cgpasijil" type="cgpasijil" class="form-control" name="cgpasijil" value="{{ old('cgpasijil') }}">

                                            @if ($errors->has('cgpasijil'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('cgpasijil') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                 

                                <legend></legend>
                                <div class=""><strong>Peringkat Diploma</strong></div><br>
                               
                                    <div class="form-group{{ $errors->has('tahundip') ? ' has-error' : '' }}">
                                        <label for="tahundip" class="col-md-4 control-label">Tahun Graduasi</label>

                                        <div class="col-md-12">
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

                                        <div class="col-md-12">
                                            <input onkeyup="this.value = this.value.toUpperCase();" id="tempatbelajardip" type="tempatbelajardip" class="form-control" name="tempatbelajardip" value="{{ old('tempatbelajardip') }}" >

                                            @if ($errors->has('tempatbelajardip'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('tempatbelajardip') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('kursusdip') ? ' has-error' : '' }}">
                                        <label for="kursusdip" class="col-md-4 control-label">Bidang</label>

                                        <div class="col-md-12">
                                            <input onkeyup="this.value = this.value.toUpperCase();" id="kursusdip" type="kursusdip" class="form-control" name="kursusdip" value="{{ old('kursusdip') }}" >

                                            @if ($errors->has('kursusdip'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('kursusdip') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('cgpadip') ? ' has-error' : '' }}">
                                        <label for="cgpadip" class="col-md-4 control-label">CGPA (PNGK)</label>

                                        <div class="col-md-12">
                                            <input onkeyup="this.value = this.value.toUpperCase();" id="cgpadip" type="cgpadip" class="form-control" name="cgpadip" value="{{ old('cgpadip') }}" >

                                            @if ($errors->has('cgpadip'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('cgpadip') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                               

                                <legend></legend>
                                <div class=""><strong>Peringkat Ijazah</strong></div><br>
                                
                                    <div class="form-group{{ $errors->has('tahundeg') ? ' has-error' : '' }}">
                                        <label for="tahundeg" class="col-md-4 control-label">Tahun Graduasi</label>

                                        <div class="col-md-12">
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

                                        <div class="col-md-12">
                                            <input onkeyup="this.value = this.value.toUpperCase();" id="tempatbelajardeg" type="tempatbelajardeg" class="form-control" name="tempatbelajardeg" value="{{ old('tempatbelajardeg') }}" >

                                            @if ($errors->has('tempatbelajardeg'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('tempatbelajardeg') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('kursusdeg') ? ' has-error' : '' }}">
                                        <label for="kursusdeg" class="col-md-4 control-label">Bidang</label>

                                        <div class="col-md-12">
                                            <input onkeyup="this.value = this.value.toUpperCase();" id="kursusdeg" type="kursusdeg" class="form-control" name="kursusdeg" value="{{ old('kursusdeg') }}" >

                                            @if ($errors->has('kursusdeg'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('kursusdeg') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('cgpadeg') ? ' has-error' : '' }}">
                                        <label for="cgpadeg" class="col-md-4 control-label">CGPA (PNGK)</label>

                                        <div class="col-md-12">
                                            <input onkeyup="this.value = this.value.toUpperCase();" id="cgpadeg" type="cgpadeg" class="form-control" name="cgpadeg" value="{{ old('cgpadeg') }}">

                                            @if ($errors->has('cgpadeg'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('cgpadeg') }}</strong>
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


