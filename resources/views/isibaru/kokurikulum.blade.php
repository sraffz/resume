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
                        <h4 class="page-title">KO_KURIKULUM</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="{{ url('/profile') }}">Halaman Utama</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Ko-Kurikulum</li>
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
                                <form class="form-horizontal" method="POST" action="{{ url('/insertkokurikulum2')}}">
                                    {{ csrf_field() }}
                                    <div><strong>SUKAN</strong></div> 
                                                <table class="table no-border mini-table m-t-20">
                                                  <tr>
                                                    <th>
                                                       SUKAN
                                                    </th>
                                                    <th>
                                                        PERINGKAT
                                                    </th>
                                                  </tr>
                                                  <tr>
                                                      <td>
                                                          <input onkeyup="this.value = this.value.toUpperCase();" id="sukan" type="text" class="form-control" name="sukan" value="" >
                                                      </td>
                                                      <td>
                                                            <select class="form-control" name="peringkat">          
                                                                @include('kokurikulum.peringkat');
                                                            </select>
                                                      </td>
                                                  </tr>
                                                  <tr>
                                                      <td>
                                                          <input onkeyup="this.value = this.value.toUpperCase();" id="sukan2" type="text" class="form-control" name="sukan2" value="" >
                                                      </td>
                                                      <td>
                                                            <select class="form-control" name="peringkat2">          
                                                                @include('kokurikulum.peringkat');
                                                            </select>
                                                      </td>
                                                  </tr>
                                                  <tr>
                                                      <td>
                                                          <input onkeyup="this.value = this.value.toUpperCase();" id="sukan3" type="text" class="form-control" name="sukan3" value=" " >
                                                      </td>
                                                      <td>
                                                            <select class="form-control" name="peringkat3">   
                                                                @include('kokurikulum.peringkat');
                                                            </select>
                                                      </td>
                                                  </tr>
                                                  <tr>
                                                      <td>
                                                          <input onkeyup="this.value = this.value.toUpperCase();" id="sukan4" type="text" class="form-control" name="sukan4" value="" >
                                                      </td>
                                                      <td>
                                                            <select class="form-control" name="peringkat4">   
                                                                @include('kokurikulum.peringkat');
                                                            </select>
                                                      </td>
                                                  </tr>
                                                  <tr>
                                                      <td>
                                                          <input onkeyup="this.value = this.value.toUpperCase();" id="sukan5" type="text" class="form-control" name="sukan5" value=" " >
                                                      </td>
                                                      <td>
                                                            <select class="form-control" name="peringkat5">   
                                                                @include('kokurikulum.peringkat');
                                                            </select>
                                                      </td>
                                                  </tr>
                                              </table>
                                            
                                            &nbsp;
                                            <legend></legend>
                                            <div class="panel-heading"><strong>PERSATUAN/KEPIMPINAN</strong></div> 
                                                <div class="table-responsive">
                                                    <table class="table no-border mini-table m-t-20">
                                                      <tr>
                                                        <th>
                                                           PERSATUAN
                                                        </th>
                                                        <th>
                                                            JAWATAN
                                                        </th>
                                                        <th>
                                                            PERINGKAT
                                                        </th>
                                                      </tr>
                                                      <tr>
                                                          <td><input onkeyup="this.value = this.value.toUpperCase();" id="persatuan" type="text" class="form-control" name="persatuan" value=""></td>
                                                          <td>
                                                               <select class="form-control" name="jawatan">
                                                                @include('kokurikulum.jawatan');
                                                               </select>
                                                          </td>
                                                          <td>
                                                               <select class="form-control" name="peringkatkelab">
                                                                @include('kokurikulum.peringkat');
                                                              </select>
                                                          </td>
                                                      </tr>
                                                      <tr>
                                                          <td><input onkeyup="this.value = this.value.toUpperCase();" id="persatuan2" type="text" class="form-control" name="persatuan2" value=""></td>
                                                          <td>
                                                               <select class="form-control" name="jawatan2">
                                                                @include('kokurikulum.jawatan');
                                                               </select>
                                                          </td>
                                                          <td>
                                                               <select class="form-control" name="peringkatkelab2">
                                                                @include('kokurikulum.peringkat');
                                                              </select>
                                                          </td>
                                                      </tr>
                                                      <tr>
                                                          <td><input onkeyup="this.value = this.value.toUpperCase();" id="persatuan3" type="text" class="form-control" name="persatuan3" value=""></td>
                                                          <td>
                                                               <select class="form-control" name="jawatan3">
                                                                @include('kokurikulum.jawatan');
                                                               </select>
                                                          </td>
                                                          <td>
                                                               <select class="form-control" name="peringkatkelab3">
                                                                @include('kokurikulum.peringkat');
                                                              </select>
                                                          </td>
                                                      </tr>
                                                    </table>
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

