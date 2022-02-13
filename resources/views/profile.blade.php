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
                <h4 class="page-title">Profile</h4>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ url('/profile') }}">Halaman Utama</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Profile</li>
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
            <div class="col-lg-4 col-xlg-3 col-md-5">
                <div class="card">
                    <div class="card-body">
                        @foreach ($md as $m)
                        @foreach ($img as $image)
                        <center class="m-t-30"> <img src="{{ url('storage/uploads/dp/'.$image->profile) }}" class="rounded-circle" alt="Gambar Passport" width="160" height="180" />
                            @endforeach    
                            <h4 class="card-title m-t-10">{{ $m->namapenuh}}</h4>
                            <h6 class="card-subtitle">{{ $m->ic}}</h6>
                            <div class="row text-center justify-content-md-center">
                                <div class="col-6 text-right">
                                    <a onclick="myFunction()" href='{{ url("/printresume/{$m->id}") }}' target="print">
                                        <button class="btn btn-info">Resume</button>
                                        {{-- <iframe id="print" name="print" style="display:none;"></iframe> --}}
                                    </a>
                                </div>
                                <div class="col-6 text-left">
                                    <a onclick="myFunction()" href='{{ url("/coverletter/{$m->id}") }}' target="print">
                                        <button class="btn btn-success">Cover Letter</button>
                                        {{-- <iframe id="print" name="print" style="display:none;"></iframe> --}}
                                    </a>  
                                </div>
                            </div>
                        </center>
                        @endforeach
                    </div>
                    <div>
                        <hr> </div>
                        <div class="card-body"> <small class="text-muted">Status Pengisian</small> <br>
                            @if(count($md) > 0)
                            1. Maklumat Diri <font size="4" color="Green"> ✔</font>
                            @else
                            <a href="{{ url('/kemaskini/maklumatdiri') }}">1. Maklumat Diri</a>
                            @endif
                            
                            <br>
                            @if(count($spm) > 0)
                            2. Maklumat Akademik <font size="4" color="Green"> ✔</font>
                            @else
                            2. Maklumat Akademik
                            @endif           
                            <br>
                            @if(count($kokurikulums) > 0)
                            3. Maklumat Ko-Kurikulum <font size="4" color="Green"> ✔</font>
                            @else
                            <a href=" {{ url('/kemaskini/kokurikulum') }}">3. Maklumat Ko-Kurikulum</a>
                            @endif
                            
                            <br>
                            @if(count($exp) > 0)
                            4. Pengalaman <font size="4" color="Green"> ✔</font>
                            @else
                            <a href=" {{ url('/kemaskini/pengalaman') }}">4. Pengalaman</a>
                            @endif
                            
                            <br>
                            @if(count($prefer) > 0)
                            5. Rujukan <font size="4" color="Green"> ✔</font>
                            @else
                            <a href=" {{ url('/kemaskini/rujukan') }}">5. Rujukan</a>
                            @endif
                            
                            <br>
                            {{-- @if(count($bayaran) > 0)
                                @foreach ($bayaran as $b)
                                @if ($b->bayaran == "Tidak")
                                6. Bayaran ✔
                                @else
                                6. Bayaran <font size="4" color="Green"> ✔</font>
                                @endif
                                @endforeach
                                @endif --}}
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-body">
                                {{-- <small class="text-muted">Status Permohonan</small> <br> <br> --}}
                                @if(count($prefer) > 0)
                                <p style="font-size: 15px">
                                    Sistem Bank Resume YIK diwujudkan untuk memudahkan mereka-mereka yang berhasrat untuk berkhidmat dengan Yayasan Islam Kelantan meletakkan resume secara atas talian. Sistem ini akan dibuka sepanjang masa dan tiada tempoh tarikh luput. 
                                    <br><br>
                                    Pemohon-Pemohon yang telah berdaftar dengan Sistem Bank Resume akan dipertimbangkan panggilan temu duga sekiranya:
                                    <br><br>
                                    Terdapat kekosongan jawatan yang dipohon; dan
                                    Memenuhi syarat skim perkhidmatan jawatan yang dipohon; 
                                    <br><br>
                                    Sistem ini memerlukan pemohon untuk mengisi maklumat mengenai anda di beberapa seksyen bagi menghasilkan resume yang lengkap dan maklumat tersebut boleh dicapai oleh Yayasan Islam Kelantan. Antara seksyen yang perlu dilengkapkan adalah :-
                                    <br><br>
                                    1. Maklumat Diri <br>
                                    2. Maklumat Akademik (Minimum Ijazah bagi jawatan Guru) <br>
                                    3. Maklumat Ko-Kurikulum <br>
                                    4. Pengalaman Kerja <br>
                                    5. Rujukan 
                                    <br><br>
                                    Sila pastikan resume dikemaskini dari masa ke semasa sekiranya terdapat penambahan maklumat peribadi yang baru. 
                                    <br><br>
                                    Tiada tempoh yang ditetapkan bagi proses di atas kerana selepas selesai proses pendaftaran, semua data permohonan akan disimpan di dalam Bank Data Yayasan Islam Kelantan.
                                </p>
                                
                                {{-- @foreach ($bayaran as $b)
                                    @if ($b->bayaran == "Tidak")
                                    <p style="font-size: 20px">
                                        Permohonan belum diproses, permohonan akan diproses setelah pemohon mencetak dan menghantar resume dan cover letter bersama sijil-sijil yang telah disahkan dan disertakan bersama bukti pembayaran wang prosesan RM5.00 ke alamat : <br> <br>
                                        Unit Perkhidmatan Guru <br>
                                        Yayasan Islam Kelantan <br>
                                        Peti Surat 248, <br>
                                        15730 Kota Bharu, <br>
                                        Kelantan.
                                        <br><br>
                                        Wang proses boleh dibuat melalui bank in(slip bank), bayaran di Unit Kewangan YIK(slip bayaran) atau wang pos ke alamat : <br>
                                        YM Pengarah
                                        Yayasan Islam Kelantan <br>
                                        Peti Surat 248, <br>
                                        15730 Kota Bharu, <br>
                                        Kelantan.
                                    </p>
                                    @else 
                                    @foreach ($temuduga as $tm)
                                    @if ($tm->status == "Gagal")
                                    <p style="font-size: 20px">
                                        Permohonan anda tidak berjaya.
                                    </p>
                                    @elseif($tm->status == "Berjaya")
                                    <p style="font-size: 20px">
                                        Tahniah, Permohonan anda telah berjaya. Sila hadir ke sesi temuduga pada {{ $tm->tarikh }} 
                                    </p>
                                    @else
                                    <p style="font-size: 20px">
                                        Wang pos telah kami terima. <br><br>
                                        
                                        Permohonan anda sedang diproses. <br>
                                        Pemohon yang berkelayakan akan dihubungi untuk ditemuduga. <br><br>
                                        <i>Permohonan ini sah sehingga {{ $b->created_at->addYear()->format('d/m/Y') }}. </i>
                                    </p>
                                    @endif
                                    @endforeach
                                    <br>
                                    @endif
                                    @endforeach --}}
                                    @else
                                    Anda perlu melengkapkan maklumat yang tersenarai.
                                    @endif
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