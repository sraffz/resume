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
                <h4 class="page-title">GAMBAR</h4>
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
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-sm">
                                <thead class="thead-dark">
                                    <tr>
                                        <th colspan="1" scope="col">GAMBAR</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        
                                        <td>
                                            <div class="card-body">
                                                @foreach ($users as $image)
                                                <center class="m-t-30"> <img src="{{ url('storage/uploads/dp/'.$image->profile) }}" class="rounded-circle" alt="Gambar Passport" width="160" height="180" />
                                                </center>
                                                @endforeach    
                                                <br>
                                                <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="{{ url('/tukargambar') }}">
                                                    {{ csrf_field() }}
                                                    {{-- <h4 class="card-title">Tukar Kata Laluan</h4> --}}
                                                    <div class="form-group row">
                                                        <label for="gambar" class="col-sm-3 text-center control-label col-form-label {{ $errors->has('gambar') ? ' has-error' : '' }}"> </label>
                                                        <div class="col-sm-9">
                                                            <input type="file" class="form-control-file" name="gambar" id="gambar" placeholder="Tukar Gambar" aria-describedby="fileHelpId">
                                                            <small id="fileHelpId" class="form-text text-muted"><font style="color: red">Gambar tidak melebihi 2MB</font></small>
                                                            @if ($errors->has('gambar'))
                                                            <span class="help-block">
                                                                <strong><font style="color: red">{{ $errors->first('gambar') }}</font></strong>
                                                            </span>                                       
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="border-top">
                                                    <div class="card-body text-center">
                                                        <button type="submit" class="btn btn-primary">Tukar Gambar</button>
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