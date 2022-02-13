@extends('layouts.adminapp')

@section('content')
<div class="container">
    <div class="row text-center">
        {{-- @include('Button.admin-permohonan-guru'); --}}
    </div> <br>
    <div class="row col-md-12" style="background: #ebebeb">
        <div class="row col-md-6">
            <h2>Status Permohonan</h2>
            <div>   
                Tarikh Kemaskini : 
                @foreach ($kemaskini as $kms)
                {{ $kms->tarikh_kemaskini->format('d/m/Y') }}
                @endforeach <br>
                @foreach ($jawatan as $jwt)
                Jawatan : {{ $jwt->jawatandipohon }}
                    @if ($jwt->jawatandipohon2 != null)
                    & {{ $jwt->jawatandipohon2 }} 
                    @endif<br>
                Kesediaan Penempatan : 
                @if ($jwt->gua_musang == 1)
                Gua Musang,
                @endif
                @if ($jwt->jeli == 1)
                Jeli,
                @endif
                @if ($jwt->kuala_krai == 1)
                Kuala Krai
                @endif
                @if ($jwt->tidak_sedia == 1)
                Tidak bersedia ditempatkan di Gua Musang/Jeli/Kuala Krai
                @endif
                @endforeach <br>
                @foreach ($temuduga as $td)
                Tarikh Temuduga : {{ $td->tarikh }} ({{ $td->markah }}) <br>
                Nota Ringkas : {{ $td->nota }}
                @endforeach <br> <br>
            </div>
        </div>
        <div class="row col-md-6 text-center">
            @foreach($pemohon as $index => $pemohons)
            <h2>Tindakan<br></h2>        
            <a href='{{ url("/admin/wangpos/{$pemohons->id}") }}'>
                <button class="btn btn-danger">Wang Pos</button>
                {{-- <iframe id="print" name="print" style="display:none;"></iframe> --}}
            </a>
            
            <a href='{{ url("/admin/temuduga/{$pemohons->id}") }}'>
                <button class="btn btn-primary">Temuduga</button>
                {{-- <iframe id="print" name="print" style="display:none;"></iframe> --}}
            </a>
            
            <a href='{{ url("/admin/penempatan-guru/{$pemohons->id}") }}'>
                <button class="btn btn-warning">Penempatan</button>
                {{-- <iframe id="print" name="print" style="display:none;"></iframe> --}}
            </a>
            <br><br>
            <a onclick="myFunction()" href='{{ url("/admin/printresume/{$pemohons->id}") }}' target="print">
                <button class="btn btn-success">Resume</button>
            </a>
            
            <a onclick="myFunction()" href='{{ url("/admin/coverletter/{$pemohons->id}") }}'  target="print">
                <button class="btn btn-info">Cover Letter</button>
                <iframe id="print" name="print" style="display:none;"></iframe>
            </a>    
            <br><br>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#padampermohonan">
                Padam Permohonan
              </button>
              
              <!-- Modal -->
              <div class="modal fade" id="padampermohonan" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title">Padam Permohonan</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                          </div>
                          <form action="{{ url('/padampermohonan', [$pemohons->id]) }}" method="get">
                          <div class="modal-body">
                              Adakah anda pasti untuk memadam permohonan ini?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success" data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-danger">Padam</button>
                            </div>
                        </form>
                      </div>
                  </div>
              </div> 
            @endforeach <br><br>
        </div>
    </div>
    <div class="row text-center col-md-12" style="background-color:#073f3c">
        
        <div class="col-md-3">
            @if(count($img) > 0)
            @foreach($img->all() as $imgs)
            <br>
            {{-- <img src="{{ url('storage/uploads/dp/'.$imgs->name) }}" class="img-circle" alt="Gambar Passport" width="160" height="180" border="5px"> --}}
            <img src="{{ url('storage/uploads/dp/'.$imgs->profile) }}" class="img-circle" alt="Gambar Passport" width="160" height="180" border="5px">
            <br><br>
            @endforeach
            @endif 
        </div>
        <div class="col-md-9 text-left">
            @if(count($md) > 0)
            @foreach($md->all() as $mdiri)
            <br>   <font color="white">
                <font size="5px">{{ strtoupper($mdiri->namapenuh) }} </font>
                <br>{{ $mdiri->alamat }}<br>
                {{ $mdiri->poskod }}, {{ $mdiri->daerah }} <br> 
                {{ $mdiri->negeri }} <br>
                No Tel : {{ $mdiri->nohp }} &emsp;&emsp;&emsp;Email : {{ $mdiri->email }} <br>
                No. K/P : {{ $mdiri->ic }}  &emsp; Jantina : {{ $mdiri->jantina }} &emsp;  Status : {{ $mdiri->status }}
                
            </font>	
            @endforeach
            @endif	
        </div>
    </div>
    
    {{-- =============================================================================================================================================== --}}
    <div class="row col-md-12 text-center" style="background-color:#a0a0a0">
        AKADEMIK
    </div>
    <div class="row col-md-12"  style="background-color:#d3d3d3">
        <div class="col-md-6">
            <table class="table">
                @if(count($spm) > 0)
                @foreach($spm->all() as $spmm)
                <tr>
                    <th colspan="2" class="text-center">SPM</th>
                </tr>
                <tr>
                    <td>
                        {{ $spmm->mt }}<br>
                        {{ $spmm->mt2 }}<br>
                        {{ $spmm->mt3 }}<br>
                        {{ $spmm->mt4 }}<br>
                        {{ $spmm->mt5 }}<br>
                        {{ $spmm->mt6 }}<br>
                        {{ $spmm->mt7 }}<br>
                        {{ $spmm->mt8 }}<br>
                        {{ $spmm->mt9 }}<br>
                        {{ $spmm->mt10 }}<br>
                        {{ $spmm->mt11 }}<br>
                        {{ $spmm->mt12 }}<br>
                        {{ $spmm->mt13 }}<br>
                        {{ $spmm->mt14 }}<br>
                        {{ $spmm->mt15 }} <br>
                        {{ $spmm->mt16 }}
                        
                    </td>
                    <td align="left">
                        {{ $spmm->grd }}<br>
                        {{ $spmm->grd2 }}<br>
                        {{ $spmm->grd3 }}<br>
                        {{ $spmm->grd4 }}<br>
                        {{ $spmm->grd5 }}<br>
                        {{ $spmm->grd6 }}<br>
                        {{ $spmm->grd7 }}<br>
                        {{ $spmm->grd8 }}<br>
                        {{ $spmm->grd9 }}<br>
                        {{ $spmm->grd10 }}<br>
                        {{ $spmm->grd11 }}<br>
                        {{ $spmm->grd12 }}<br>
                        {{ $spmm->grd13 }}<br>
                        {{ $spmm->grd14 }}<br>
                        {{ $spmm->grd15 }} <br>
                        {{ $spmm->grd16 }}
                    </td>   
                </tr>
                @endforeach
                @endif
            </table>
        </div>
        <div class="col-md-6">
            <table class="table">
                @if(count($degree) > 0)
                @foreach($degree->all() as $ijazah)
                <tr>
                    <th colspan="4" class="text-center">IJAZAH</th>
                </tr>
                <tr>
                    <td align="right">
                        TAHUN GRADUASI<br>
                        INSTITUSI<br>
                        KURSUS<br>
                        CGPA
                    </td>
                    <td align="left">
                        : &nbsp;{{ $ijazah->tahungrad }} <br>
                        : &nbsp;{{ $ijazah->institusi }} <br>
                        : &nbsp;{{ $ijazah->bidang }} <br>
                        : &nbsp;{{ $ijazah->cgpa }}
                    </td>   
                    <td colspan="" rowspan="" headers=""></td>
                    <td colspan="" rowspan="" headers=""></td>
                </tr>
                
                @endforeach
                @endif <br>
                
                @if(count($diploma) > 0)
                @foreach($diploma->all() as $dip)
                
                <tr>
                    <th colspan="4" class="text-center">DIPLOMA</th>
                </tr>
                <tr>
                    <td align="right">
                        TAHUN GRADUASI<br>
                        INSTITUSI<br>
                        KURSUS<br>
                        CGPA
                    </td>
                    <td align="left">
                        : &nbsp;{{ $dip->tahungrad }} <br>
                        : &nbsp;{{ $dip->institusi }} <br>
                        : &nbsp;{{ $dip->bidang }} <br>
                        : &nbsp;{{ $dip->cgpa }}
                    </td>   
                    <td colspan="" rowspan="" headers=""></td>
                    <td colspan="" rowspan="" headers=""></td>
                </tr>
                
                @endforeach
                @endif
                
                @if(count($sijil) > 0)
                @foreach($sijil->all() as $sjl)
                <tr>
                    <th colspan="4" class="text-center">SIJIL</th>
                </tr>
                <tr>
                    <td align="right">
                        TAHUN GRADUASI<br>
                        INSTITUSI<br>
                        KURSUS<br>
                        CGPA
                    </td>
                    <td align="left">
                        : &nbsp;{{ $sjl->tahungrad }} <br>
                        : &nbsp;{{ $sjl->institusi }} <br>
                        : &nbsp;{{ $sjl->bidang }} <br>
                        : &nbsp;{{ $sjl->cgpa }}
                    </td>   
                    <td colspan="" rowspan="" headers=""></td>
                    <td colspan="" rowspan="" headers=""></td>
                </tr>                     
                @endforeach
                @endif
                
                @if(count($stam) > 0)
                @foreach($stam->all() as $stams)
                <tr>
                    <th colspan="4" class="text-center">STAM</th>
                </tr>
                <tr>
                    <td class="text-right">
                        {{ $stams->mt }}<br>
                        {{ $stams->mt2 }}<br>
                        {{ $stams->mt3 }}<br>
                        {{ $stams->mt4 }}<br>
                        {{ $stams->mt5 }}<br>
                        {{ $stams->mt6 }}<br>
                        {{ $stams->mt7 }}<br>
                        {{ $stams->mt8 }}<br>
                        {{ $stams->mt9 }}<br>
                        {{ $stams->mt10 }}<br>
                        {{ $stams->mt11 }}<br>
                        {{ $stams->mt12 }}<br>
                        {{ $stams->mt13 }}<br>
                        {{ $stams->mt14 }}<br>
                        {{ $stams->mt15 }}
                    </td>
                    
                    <td colspan="2" align="left">
                        {{ $stams->grd }}<br>
                        {{ $stams->grd2 }}<br>
                        {{ $stams->grd3 }}<br>
                        {{ $stams->grd4 }}<br>
                        {{ $stams->grd5 }}<br>
                        {{ $stams->grd6 }}<br>
                        {{ $stams->grd7 }}<br>
                        {{ $stams->grd8 }}<br>
                        {{ $stams->grd9 }}<br>
                        {{ $stams->grd10 }}<br>
                        {{ $stams->grd11 }}<br>
                        {{ $stams->grd12 }}<br>
                        {{ $stams->grd13 }}<br>
                        {{ $stams->grd14 }}<br>
                        {{ $stams->grd15 }}
                    </td>   
                    <td colspan="" rowspan="" headers=""></td>
                    <td colspan="" rowspan="" headers=""></td>
                </tr>
                @endforeach
                @endif
            </table>
        </div>
    </div>
    
    {{-- =============================================================================================================================================== --}}
    <div class="row col-md-12 text-center" style="background-color:#a0a0a0">
        MAKLUMAT KOKURIKULUM
    </div>
    <div class="row col-md-12"  style="background-color:#d3d3d3">
        <div class="col-md-6">        
            <div class="table-responsive">
                <table class="table">
                    <thead> 
                        <th>SUKAN</th>
                        <th>PERINGKAT</th>
                    </thead> 
                    <tbody>
                        @if(count($kokurikulums) > 0)
                        @foreach($kokurikulums->all() as $kk) 
                        <td>{{ $kk->sukan }} <br>
                            {{ $kk->sukan2 }} <br>
                            {{ $kk->sukan3 }}
                        </td>
                        <td>{{ $kk->peringkat }} <br>
                            {{ $kk->peringkat2 }} <br>
                            {{ $kk->peringkat3 }}
                        </td>
                        @endforeach
                        @endif
                    </tbody>                        
                </table>
            </div>
        </div>
        <div class="col-md-6">        
            <div class="table-responsive">
                <table class="table">
                    <thead> 
                        <th>PERSATUAN/BADAN BERUNIFORM</th>
                        <th>JAWATAN</th>
                        <th>PERINGKAT</th>
                    </thead> 
                    <tbody>@if(count($kokurikulums) > 0)
                        @foreach($kokurikulums->all() as $kk) 
                        <td>
                            {{ $kk->namakelab }}<br>
                            {{ $kk->namakelab2 }}<br>
                            {{ $kk->namakelab3 }}
                        </td>
                        <td>
                            {{ $kk->jawatan }}<br>
                            {{ $kk->jawatan2 }}<br>
                            {{ $kk->jawatan3 }}
                        </td>
                        <td>
                            {{ $kk->peringkatkelab }}<br>
                            {{ $kk->peringkatkelab2 }}<br>
                            {{ $kk->peringkatkelab3}}
                        </td>
                        @endforeach
                        @endif
                    </tbody>                        
                </table>
            </div>
        </div>
    </div>
    
    {{-- =============================================================================================================================================== --}}
    <div class="row col-md-12 text-center" style="background-color:#a0a0a0">
        PENGALAMAN
    </div>
    <div class="row col-md-12"  style="background-color:#d3d3d3">
        <div class="col-md-7 col-md-offset-3">        
            @if(count($exp) > 0)
            @foreach($exp->all() as $pengalaman)
            <table class="table">                      
                <tr align="left">
                    <th>
                        SYARIKAT<br>
                        ALAMAT<br>
                        NO. TELEFON<br>
                        JAWATAN <br>
                        TEMPOH BERKHIDMAT
                    </th>   
                    <td colspan="" rowspan="" headers="">
                        : <br>
                        : <br>
                        : <br>
                        : <br>
                        : <br>
                    </td>
                    <td colspan="" rowspan="" headers="">
                        {{ $pengalaman->namasyr }} <br>
                        {{ $pengalaman->alamatsyr }}<br>
                        {{ $pengalaman->notelsyr }}<br>
                        {{ $pengalaman->jwtnsyr }}<br>
                        {{ $pengalaman->tempohkhidmat }}
                    </td>
                </tr>                   
            </table>
            @endforeach
            @endif                  
        </div>
    </div>
    
    {{-- =============================================================================================================================================== --}}
    <div class="row col-md-12 text-center" style="background-color:#a0a0a0">
        RUJUKAN
    </div>
    <div class="row col-md-12"  style="background-color:#d3d3d3">
        <div class="col-md-7 col-md-offset-3">        
            @if(count($prefer) > 0)
            @foreach($prefer->all() as $rujukan)
            <table class="table">                      
                <tr align="left">
                    <th>NAMA  <br> 
                        TELEFON <br>
                        JAWATAN <br>
                    </th>   
                    <td colspan="" rowspan="" headers="">
                        : <br>
                        : <br>
                        : <br>
                    </td>
                    <td colspan="" rowspan="" headers="">
                        {{ $rujukan->namarujukan }} <br>
                        {{ $rujukan->notelrujukan }}<br>
                        {{ $rujukan->jawatanrujukan }}
                    </td>
                </tr>                   
            </table>
            @endforeach
            @endif                  
        </div>
    </div>
    <div class="row text-center col-md-12" style="background-color:#073f3c">
        <br>
    </div>
</div>
@endsection