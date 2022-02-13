@extends('layouts.resume.app')

@section('content')
@if(Session::has('message'))
<p class=" text-center alert alert-success">{{ Session::get('message') }}</p>
@endif
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
                <h4 class="page-title">Tetapan</h4>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ url('/profile') }}">Halaman Utama</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Tetapan</li>
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
            <div class="col-lg-12 col-xlg-3 col-md-5">
               
            </div>
            <!-- Column -->
        </div>
        <!-- Row -->
        <!-- Row -->
        <div class="row">
            <!-- Column -->
            <div class="col-lg-12 col-xlg-3 col-md-5">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-sm">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">TUKAR KATA LALUAN</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <form class="form-horizontal" method="GET" action="{{ url('/tukarkatalaluan', [Auth::user()->id]) }}">
                                                {{ csrf_field() }}
                                                <div class="card-body">
                                                    {{-- <h4 class="card-title">Tukar Kata Laluan</h4> --}}
                                                    <div class="form-group row">
                                                        <label for="currentpassword" class="col-sm-3 text-right control-label col-form-label {{ $errors->has('currentpassword') ? ' has-error' : '' }}">Kata Laluan Sekarang</label>
                                                        <div class="col-sm-9">
                                                            <input id="currentpassword" type="password" name="currentpassword" class="form-control" placeholder="Kata laluan Sekarang" aria-label="Password" aria-describedby="basic-addon1" required>
                                                            @if ($errors->has('currentpassword'))
                                                            <span class="help-block">
                                                                <strong><font style="color: red">Kata laluan tidak sama.</font></strong>
                                                            </span>                                       
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="newpassword" class="col-sm-3 text-right control-label col-form-label {{ $errors->has('newpassword') ? ' has-error' : '' }}">Kata Laluan Baru</label>
                                                        <div class="col-sm-9">
                                                            <input id="newpassword" type="password" name="newpassword" class="form-control" placeholder="Kata laluan Baru" aria-label="Password" aria-describedby="basic-addon1" required>
                                                            @if ($errors->has('currentpassword'))
                                                            <span class="help-block">
                                                                <strong><font style="color: red">{{ $errors->first('newpassword') }}</font></strong>
                                                            </span>                                       
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="confirmnewpassword" class="col-sm-3 text-right control-label col-form-label {{ $errors->has('confirmnewpassword') ? ' has-error' : '' }}">Taip Semula Kata Laluan Baru</label>
                                                        <div class="col-sm-9">
                                                            <input name="confirmnewpassword" id="confirmnewpassword" type="password" class="form-control" placeholder="Pengesahan Kata laluan" aria-label="Password" aria-describedby="basic-addon1" required>
                                                            @if ($errors->has('currentpassword'))
                                                            <span class="help-block">
                                                                <strong><font style="color: red">{{ $errors->first('confirmnewpassword') }}</font></strong>
                                                            </span>                                       
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="border-top">
                                                    <div class="card-body text-center">
                                                        <a href="{{ url('/profile') }}"><button type="button" class="btn btn-warning">Kembali</button></a>
                                                        <button type="submit" class="btn btn-primary">Tukar Kata Laluan</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
        <!-- Row -->
        <!-- Row -->
        <div class="row">
            <!-- Column -->
            <div class="col-lg-12 col-xlg-3 col-md-5">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-sm">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">BATAL PERMOHONAN</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <form class="form-horizontal" method="POST" action="{{ url('/batalpermohonan', [Auth::user()->id]) }}">
                                                {{ csrf_field() }}
                                                <div class="card-body">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input type="radio" class="form-check-input" name="pembatalan" id="pembatalan" value="Tukar Jawatan" checked>
                                                            Menukar kepada jawatan lain.
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input type="radio" class="form-check-input" name="pembatalan" id="pembatalan" value="Tidak Berminat">
                                                            Tidak berminat untuk memohon.
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input type="radio" class="form-check-input" name="pembatalan" id="pembatalan" value="Tidak Pernah Memohon">
                                                            Saya tidak pernah membuat permohonan.
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input type="radio" class="form-check-input" name="pembatalan" id="pembatalan" value="lain-lain">
                                                            Lain-lain.
                                                            <div  class="form-group{{ $errors->has('lain2') ? ' has-error' : '' }}">
                                                                <input class="form-control" type="text" name="lain2" placeholder="Nyata sebab pembatalan">
                                                                @if ($errors->has('lain2'))
                                                                <span class="help-block">
                                                                    <strong> <font style="color:red"> Sila nyata sebab pembatalan.</font></strong>
                                                                </span>
                                                                @endif
                                                            </div>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="border-top">
                                                    <div class="card-body text-center">
                                                        <button onclick="return confirm('Adakah anda pasti untuk membatalkan resume ini?')" type="submit" class="btn btn-danger">Batal Permohonan</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
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