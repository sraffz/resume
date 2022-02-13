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
                <h4 class="page-title">KO-KURIKULUM</h4>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ url('/profile') }}">Halaman Utama</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">KO-Kurikulum</li>
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
                        <form class="form-horizontal" method="POST" action="{{ url('/updatekokurikulum', array($users->id))}}">
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
                                        <input onkeyup="this.value = this.value.toUpperCase();" id="sukan" type="text" class="form-control" name="sukan" value="<?php echo $users->sukan; ?>" >
                                    </td>
                                    <td>
                                        <select class="form-control" name="peringkat">   
                                            <option value="<?php echo $users->peringkat; ?>"><?php echo $users->peringkat; ?></option>           
                                            @include('kokurikulum.updateperingkat');
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input onkeyup="this.value = this.value.toUpperCase();" id="sukan2" type="text" class="form-control" name="sukan2" value="<?php echo $users->sukan2; ?>" >
                                    </td>
                                    <td>
                                        <select class="form-control" name="peringkat2">   
                                            <option value="<?php echo $users->peringkat2; ?>"><?php echo $users->peringkat2; ?></option>           
                                            @include('kokurikulum.updateperingkat');
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input onkeyup="this.value = this.value.toUpperCase();" id="sukan3" type="text" class="form-control" name="sukan3" value="<?php echo $users->sukan3; ?>" >
                                    </td>
                                    <td>
                                        <select class="form-control" name="peringkat3">   
                                            <option value="<?php echo $users->peringkat3; ?>"><?php echo $users->peringkat3; ?></option>           
                                            @include('kokurikulum.updateperingkat');
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input onkeyup="this.value = this.value.toUpperCase();" id="sukan4" type="text" class="form-control" name="sukan4" value="<?php echo $users->sukan4; ?>" >
                                    </td>
                                    <td>
                                        <select class="form-control" name="peringkat4">   
                                            <option value="<?php echo $users->peringkat4; ?>"><?php echo $users->peringkat4; ?></option>           
                                            @include('kokurikulum.updateperingkat');
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input onkeyup="this.value = this.value.toUpperCase();" id="sukan5" type="text" class="form-control" name="sukan5" value="<?php echo $users->sukan5; ?>" >
                                    </td>
                                    <td>
                                        <select class="form-control" name="peringkat5">   
                                            <option value="<?php echo $users->peringkat5; ?>"><?php echo $users->peringkat5; ?></option>           
                                            @include('kokurikulum.updateperingkat');
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
                                        <td><input onkeyup="this.value = this.value.toUpperCase();" id="persatuan" type="text" class="form-control" name="persatuan" value="<?php echo $users->namakelab; ?>"></td>
                                        <td>
                                            <select class="form-control" name="jawatan">
                                                <option value="<?php echo $users->jawatan; ?>"><?php echo $users->jawatan; ?></option>
                                                @include('kokurikulum.jawatan');
                                            </select>
                                        </td>
                                        <td>
                                            <select class="form-control" name="peringkatkelab">
                                                <option value="<?php echo $users->peringkatkelab; ?>"><?php echo $users->peringkatkelab; ?></option>
                                                @include('kokurikulum.updateperingkat');
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input onkeyup="this.value = this.value.toUpperCase();" id="persatuan2" type="text" class="form-control" name="persatuan2" value="<?php echo $users->namakelab2; ?>"></td>
                                        <td>
                                            <select class="form-control" name="jawatan2">
                                                <option value="<?php echo $users->jawatan2; ?>"><?php echo $users->jawatan2; ?></option>
                                                @include('kokurikulum.jawatan');
                                            </select>
                                        </td>
                                        <td>
                                            <select class="form-control" name="peringkatkelab2">
                                                <option value="<?php echo $users->peringkatkelab2; ?>"><?php echo $users->peringkatkelab2; ?></option>
                                                @include('kokurikulum.updateperingkat');
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input onkeyup="this.value = this.value.toUpperCase();" id="persatuan3" type="text" class="form-control" name="persatuan3" value="<?php echo $users->namakelab3; ?>"></td>
                                        <td>
                                            <select class="form-control" name="jawatan3">
                                                <option value="<?php echo $users->jawatan3; ?>"><?php echo $users->jawatan3; ?></option>
                                                @include('kokurikulum.jawatan');
                                            </select>
                                        </td>
                                        <td>
                                            <select class="form-control" name="peringkatkelab3">
                                                <option value="<?php echo $users->peringkatkelab3; ?>"><?php echo $users->peringkatkelab3; ?></option>
                                                @include('kokurikulum.updateperingkat');
                                            </select>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="form-group">
                                <div class="text-center">
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
    
    
    