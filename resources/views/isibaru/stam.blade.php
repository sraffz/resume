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
                        <h4 class="page-title">STAM</h4>
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
                                <form class="col-lg-12 col-md-offset-2 form-horizontal" method="POST" action="{{ url('/stam2')}}">
                                  {{ csrf_field() }}          
                                  <table class="table no-border mini-table m-t-20">
                                      <tr>
                                        <td>
                                           <select class="form-control" name="mt">
                                                @include('matapelajaran.mtstam');
                                            </select>
                                        </td>
                                        <td>
                                            <select class="form-control" name="grad">
                                              @include('gred.gredstam');
                                            </select>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                           <select class="form-control" name="mt2">
                                                @include('matapelajaran.mtstam');
                                            </select>
                                        </td>
                                        <td>
                                            <select class="form-control" name="grad2">
                                              @include('gred.gredstam');
                                            </select>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                           <select class="form-control" name="mt3">
                                                @include('matapelajaran.mtstam');
                                            </select>
                                        </td>
                                        <td>
                                            <select class="form-control" name="grad3">
                                              @include('gred.gredstam');
                                            </select>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                           <select class="form-control" name="mt4">
                                                @include('matapelajaran.mtstam');
                                            </select>
                                        </td>
                                        <td>
                                            <select class="form-control" name="grad4">
                                              @include('gred.gredstam');
                                            </select>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                           <select class="form-control" name="mt5">
                                                @include('matapelajaran.mtstam');
                                            </select>
                                        </td>
                                        <td>
                                            <select class="form-control" name="grad5">
                                              @include('gred.gredstam');
                                            </select>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                           <select class="form-control" name="mt6">
                                                @include('matapelajaran.mtstam');
                                            </select>
                                        </td>
                                        <td>
                                            <select class="form-control" name="grad6">
                                              @include('gred.gredstam');
                                            </select>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                           <select class="form-control" name="mt7">
                                                @include('matapelajaran.mtstam');
                                            </select>
                                        </td>
                                        <td>
                                            <select class="form-control" name="grad7">
                                              @include('gred.gredstam');
                                            </select>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                           <select class="form-control" name="mt8">
                                                @include('matapelajaran.mtstam');
                                            </select>
                                        </td>
                                        <td>
                                            <select class="form-control" name="grad8">
                                              @include('gred.gredstam');
                                            </select>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                           <select class="form-control" name="mt9">
                                                @include('matapelajaran.mtstam');
                                            </select>
                                        </td>
                                        <td>
                                            <select class="form-control" name="grad9">
                                              @include('gred.gredstam');
                                            </select>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                           <select class="form-control" name="mt10">
                                                @include('matapelajaran.mtstam');
                                            </select>
                                        </td>
                                        <td>
                                            <select class="form-control" name="grad10">
                                              @include('gred.gredstam');
                                            </select>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                           <input type="text" name="mt11" class="form-control" placeholder="Matapelajaran">
                                        </td>
                                        <td>
                                            <select class="form-control" name="grad11">
                                              @include('gred.gredstam');
                                            </select>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                           <input type="text" name="mt12" class="form-control" placeholder="Matapelajaran">
                                        </td>
                                        <td>
                                            <select class="form-control" name="grad12">
                                              @include('gred.gredstam');
                                            </select>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                           <input type="text" name="mt13" class="form-control" placeholder="Matapelajaran">
                                        </td>
                                        <td>
                                            <select class="form-control" name="grad13">
                                              @include('gred.gredstam');
                                            </select>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                           <input type="text" name="mt14" class="form-control" placeholder="Matapelajaran">
                                        </td>
                                        <td>
                                            <select class="form-control" name="grad14">
                                              @include('gred.gredstam');
                                            </select>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>
                                           <input type="text" name="mt15" class="form-control" placeholder="Matapelajaran">
                                        </td>
                                        <td>
                                            <select class="form-control" name="grad15">
                                              @include('gred.gredstam');
                                            </select>
                                        </td>
                                      </tr>
                                  </table>                
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


