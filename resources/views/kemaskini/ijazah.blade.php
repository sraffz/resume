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
                        <h4 class="page-title">IJAZAH</h4>
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
                                <form class="form-horizontal" method="POST" action="{{ url('/updateijazah', array($users->id))}}">
                                    {{ csrf_field() }}
                                    <div id="dynamic"> 
                                        <div id="row1">                                
                                            <div class="form-group{{ $errors->has('tahundeg') ? ' has-error' : '' }}">
                                                <label for="tahundeg" class="col-md-4 control-label">Tahun Graduasi</label>

                                                <div class="col-md-12">
                                                    <input id="tahundeg" type="tahundeg" class="form-control mydatepicker" name="tahundeg" value="<?php echo $users->tahungrad; ?>" required>

                                                    @if ($errors->has('tempatbelajar'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('tempatbelajar') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                                                                                                           
                                            <div class="form-group{{ $errors->has('tempatbelajar') ? ' has-error' : '' }}">
                                                <label for="tempatbelajar" class="col-md-4 control-label">Institusi Pengajian</label>

                                                <div class="col-md-12">
                                                    <input onkeyup="this.value = this.value.toUpperCase();" id="tempatbelajar" type="tempatbelajar" class="form-control" name="tempatbelajar" value="<?php echo $users->institusi; ?>" required>

                                                    @if ($errors->has('tempatbelajar'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('tempatbelajar') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group{{ $errors->has('kursus') ? ' has-error' : '' }}">
                                                <label for="kursus" class="col-md-4 control-label">Bidang</label>

                                                <div class="col-md-12">
                                                    <input onkeyup="this.value = this.value.toUpperCase();" id="kursus" type="kursus" class="form-control" name="kursus" value="<?php echo $users->bidang; ?>" required>

                                                    @if ($errors->has('kursus'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('kursus') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group{{ $errors->has('cgpa') ? ' has-error' : '' }}">
                                                <label for="cgpa" class="col-md-4 control-label">CGPA (PNGK)</label>

                                                <div class="col-md-12">
                                                    <input onkeyup="this.value = this.value.toUpperCase();" id="cgpa" type="cgpa" class="form-control" name="cgpa" value="<?php echo $users->cgpa; ?>" required>

                                                    @if ($errors->has('cgpa'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('cgpa') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                {{-- <button type="button" name="add" id="add" class="btn btn-info">+</button> --}}
                                            </div>
                                        </div>
                                    </div>
                                 
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


@section('script')
    <script>
        $(document).ready(function () {
            var i = 1;

            $('#add').click(function(){
                i++;
                $('#dynamic').append('<div id="row'+i+'"> <div class="form-group{{ $errors->has('tahundeg') ? ' has-error' : '' }}"><label for="tahundeg" class="col-md-4 control-label">Tahun Graduasi</label><div class="col-md-12"><input id="tahundeg" type="tahundeg" class="form-control" name="tahundeg" value="<?php echo $users->tahungrad; ?>" required></div> <div class="form-group{{ $errors->has('tempatbelajar') ? ' has-error' : '' }}"><label for="tempatbelajar" class="col-md-4 control-label">Institusi Pengajian</label><div class="col-md-12"><input id="tempatbelajar" type="tempatbelajar" class="form-control" name="tempatbelajar" value="<?php echo $users->institusi; ?>" required></div></div> <div class="form-group{{ $errors->has('kursus') ? ' has-error' : '' }}"><label for="kursus" class="col-md-4 control-label">Bidang</label><div class="col-md-12"><input id="kursus" type="kursus" class="form-control" name="kursus" value="<?php echo $users->bidang; ?>" required></div></div><div class="form-group{{ $errors->has('cgpa') ? ' has-error' : '' }}"><label for="cgpa" class="col-md-4 control-label">CGPA (PNGK)</label><div class="col-md-12"><input id="cgpa" type="cgpa" class="form-control" name="cgpa" value="<?php echo $users->cgpa; ?>" required</div></div></div>');
            });
            $(document).on('click','.btn-remove',function(){
                var button_id = $(this).attr("id");
                $('#row'+button_id+'').remove();
            });
        });
    </script>
@endsection
