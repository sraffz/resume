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
                        <h4 class="page-title">SPM</h4>
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
                                <form class="col-lg-12 col-md-offset-2 form-horizontal" method="POST" action="{{ url('/updatespm', array($users->id))}}">
                                  {{ csrf_field() }}

                                      <table class="table no-border mini-table m-t-20">
                                          <tr>
                                            <td>
                                              <select class="form-control" name="mt">
                                                <option value="<?php echo $users->mt; ?>"><?php echo $users->mt; ?></option>
                                                  @include('matapelajaran.mtspm');
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" name="grad">
                                                <option value="<?php echo $users->grd; ?>"><?php echo $users->grd; ?></option>
                                                  @include('gred.gredspm');
                                                </select>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <select class="form-control" name="mt2">
                                                <option value="<?php echo $users->mt2; ?>"><?php echo $users->mt2; ?></option>
                                                  @include('matapelajaran.mtspm');
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" name="grad2">
                                                <option value="<?php echo $users->grd2; ?>"><?php echo $users->grd2; ?></option>
                                                  @include('gred.gredspm');
                                                </select>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <select class="form-control" name="mt3">
                                                <option value="<?php echo $users->mt3; ?>"><?php echo $users->mt3; ?></option>
                                                  @include('matapelajaran.mtspm');
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" name="grad3">
                                                <option value="<?php echo $users->grd3; ?>"><?php echo $users->grd3; ?></option>
                                                  @include('gred.gredspm');
                                                </select>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <select class="form-control" name="mt4">
                                                <option value="<?php echo $users->mt4; ?>"><?php echo $users->mt4; ?></option>
                                                  @include('matapelajaran.mtspm');
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" name="grad4">
                                                <option value="<?php echo $users->grd4; ?>"><?php echo $users->grd4; ?></option>
                                                  @include('gred.gredspm');
                                                </select>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <select class="form-control" name="mt5">
                                                <option value="<?php echo $users->mt5; ?>"><?php echo $users->mt5; ?></option>
                                                  @include('matapelajaran.mtspm');
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" name="grad5">
                                                <option value="<?php echo $users->grd5; ?>"><?php echo $users->grd5; ?></option>
                                                  @include('gred.gredspm');
                                                </select>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <select class="form-control" name="mt6">
                                                <option value="<?php echo $users->mt6; ?>"><?php echo $users->mt6; ?></option>
                                                  @include('matapelajaran.mtspm');
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" name="grad6">
                                                <option value="<?php echo $users->grd6; ?>"><?php echo $users->grd6; ?></option>
                                                  @include('gred.gredspm');
                                                </select>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <select class="form-control" name="mt7">
                                                <option value="<?php echo $users->mt7; ?>"><?php echo $users->mt7; ?></option>
                                                  @include('matapelajaran.mtspm');
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" name="grad7">
                                                <option value="<?php echo $users->grd7; ?>"><?php echo $users->grd7; ?></option>
                                                  @include('gred.gredspm');
                                                </select>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <select class="form-control" name="mt8">
                                                <option value="<?php echo $users->mt8; ?>"><?php echo $users->mt8; ?></option>
                                                  @include('matapelajaran.mtspm');
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" name="grad8">
                                                <option value="<?php echo $users->grd8; ?>"><?php echo $users->grd8; ?></option>
                                                  @include('gred.gredspm');
                                                </select>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <select class="form-control" name="mt9">
                                                <option value="<?php echo $users->mt9; ?>"><?php echo $users->mt9; ?></option>
                                                  @include('matapelajaran.mtspm');
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" name="grad9">
                                                <option value="<?php echo $users->grd9; ?>"><?php echo $users->grd9; ?></option>
                                                  @include('gred.gredspm');
                                                </select>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <select class="form-control" name="mt10">
                                                <option value="<?php echo $users->mt10; ?>"><?php echo $users->mt10; ?></option>
                                                  @include('matapelajaran.mtspm');
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" name="grad10">
                                                <option value="<?php echo $users->grd10; ?>"><?php echo $users->grd10; ?></option>
                                                  @include('gred.gredspm');
                                                </select>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <input type="text" name="mt11" class="form-control" placeholder="Matapelajaran" value="{{ $users->mt11 }}">
                                            </td>
                                            <td>
                                                <select class="form-control" name="grad11">
                                                <option value="<?php echo $users->grd11; ?>"><?php echo $users->grd11; ?></option>
                                                  @include('gred.gredspm');
                                                </select>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <input type="text" name="mt12" class="form-control" placeholder="Matapelajaran" value="{{ $users->mt12 }}">
                                            </td>
                                            <td>
                                                <select class="form-control" name="grad12">
                                                <option value="<?php echo $users->grd12; ?>"><?php echo $users->grd12; ?></option>
                                                  @include('gred.gredspm');
                                                </select>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <input type="text" name="mt13" class="form-control" placeholder="Matapelajaran" value="{{ $users->mt13 }}">
                                            </td>
                                            <td>
                                                <select class="form-control" name="grad13">
                                                <option value="<?php echo $users->grd13; ?>"><?php echo $users->grd13; ?></option>
                                                  @include('gred.gredspm');
                                                </select>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <input type="text" name="mt14" class="form-control" placeholder="Matapelajaran" value="{{ $users->mt14 }}">
                                            </td>
                                            <td>
                                                <select class="form-control" name="grad14">
                                                <option value="<?php echo $users->grd14; ?>"><?php echo $users->grd14; ?></option>
                                                  @include('gred.gredspm');
                                                </select>
                                            </td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <input type="text" name="mt15" class="form-control" placeholder="Matapelajaran" value="{{ $users->mt15 }}">
                                            </td>
                                            <td>
                                                <select class="form-control" name="grad15">
                                                <option value="<?php echo $users->grd15; ?>"><?php echo $users->grd15; ?></option>
                                                  @include('gred.gredspm');
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
                                                Kemaskini
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

