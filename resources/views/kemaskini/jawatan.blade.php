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
                <h4 class="page-title">Jawatan</h4>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ url('/profile') }}">Halaman Utama</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Jawatan Diminta</li>
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
                        <form class="col-lg-12 col-md-offset-2 form-horizontal" method="POST" action="{{ url('/updatejawatan', array($users->id))}}">
                            {{ csrf_field() }}
                            <table class="table table-sm table-bordered">
                                <tr>
                                    <td style="width: 10%">
                                        Jenis Jawatan
                                    </td>
                                    <td>
                                        {{ $users->jenis }} 
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 10%">
                                        Jawatan
                                    </td>
                                    <td>
                                        {{ $users->jawatandipohon }} 
                                    </td>
                                </tr>
                                @if ($users->jawatandipohon2 == null)
                                    
                                @else
                                    <tr>
                                        <td style="width: 10%">
                                            Jawatan 2
                                        </td>
                                        <td>
                                            {{ $users->jawatandipohon2 }} 
                                        </td>
                                    </tr>
                                    
                                @endif
                                <tr>
                                    <td style="width: 10%">
                                        Penempatan
                                    </td>
                                    <td>
                                        Bersedia untuk ditempatkan di sekolah kawasan seperti : <br>
                                        <div class="form-check">
                                          <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input ngmkk" name="gua_musang" id="" value="1" {{ $users->gua_musang?"checked":"" }}>
                                            Gua Musang
                                          </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                              <input type="checkbox" class="form-check-input ngmkk" name="jeli" id="" value="1" {{ $users->jeli?"checked":"" }}>
                                              Jeli
                                            </label>
                                          </div>
                                          <div class="form-check">
                                            <label class="form-check-label">
                                              <input type="checkbox" class="form-check-input ngmkk" name="kualakrai" id="" value="1" {{ $users->kuala_krai?"checked":"" }}>
                                              Kuala Krai
                                            </label>
                                          </div> <br>

                                          <div class="form-check">
                                            <label class="form-check-label">
                                              <input type="checkbox" class="form-check-input gmkk" name="tidak_sedia" id="" value="1" {{ $users->tidak_sedia?"checked":"" }}>
                                              Tidak bersedia ditempatkan di jajahan Gua Musang, Jeli, Kuala Krai 
                                            </label>
                                          </div>
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
    
    