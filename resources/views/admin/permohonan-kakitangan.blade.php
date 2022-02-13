@extends('layouts.adminapp')

@section('content')
<div class="container">
  <div class="row text-right">
    <div class="col-md-12">  
      <div class="panel panel-primary"> 
        <div class="panel-body">
          {{-- @include('Button.admin-permohonan-guru'); --}}
          <form class="form-inline" method="GET" action="{{ url('/carian-resume-staff') }}">
            @csrf
            <div class="form-group">
              {{-- <label for="carian">Cari</label> --}}
              <input type="text" name="daerah" id="daerah" class="form-control" placeholder="Daerah" aria-describedby="helpId" value="{{ old('daerah') }}">
              {{-- <input type="text" name="penempatan" id="penempatan" class="form-control" placeholder="Penempatan" aria-describedby="helpId"> --}}
              <input type="text" name="jawatan" id="jawatan" class="form-control" placeholder="Jawatan" aria-describedby="helpId" value="{{ old('jawatan') }}">
              <button class="btn btn-danger" type="submit">Cari</button> <br>
              <small id="helpId" class="text-muted"><i>*Carian untuk mana-mana maklumat dalam jadual.</i></small>
            </div>
          </form>
        </div> 
      </div>
    </div>
  </div> <br>
  <div class="row">
    <div class="col-md-12">  
      <div class="panel panel-primary">  
        <div class="panel-body">        
          <div class="table-responsive">
            <table id="zero_config" class="table table-bordered ">
              <thead >
                <tr>
                  <th><center>Bil</center></th>
                  <th><center>Nama</center></th>
                  <th><center>Daerah</center></th>
                  <th><center>Jantina</center></th>
                  <th><center>SPM (BM)</center></th>
                  {{-- <th><center>Tarikh Temuduga</center></th>
                    <th><center>Markah Temuduga</center></th>
                    <th colspan="2"><center>Ditawarkan</center></th> --}}
                    <th><center>Kelulusan</center></th>
                    <th><center>Jawatan Diminta</center></th>
                    <th><center>Tindakan</center></th>
                  </tr>
                  {{-- <tr>
                    <th><center>Tempat</center></th>
                    <th><center>Tarikh</center></th>
                  </tr> --}}
                </thead>
                <tbody>
                  @if(count($pemohon) > 0)
                  @foreach($pemohon as $index => $pemohons)
                  <tr>
                    <td>{{ $index+1 }}</td>
                    <td>{{ strtoupper($pemohons->namapenuh) }}</td>
                    <td><center>{{$pemohons->daerah}}</center></td>
                    <td><center>{{$pemohons->jantina}}</center></td>
                    <td><center>{{$pemohons->grd}}</center></td>
                    {{-- <td><center> </center></td>
                      <td><center> </center></td>
                      <td><center></center></td>
                      <td><center></center></td> --}}
                      <td>
                        <center>
                          @if($pemohons->ijazah != null)
                             <strong>IJAZAH</strong>  : {{ $pemohons->ijazah }}
                          @endif
                          
                          @if($pemohons->diploma != null)
                          <br>
                              <strong>DIPLOMA</strong>  : {{ $pemohons->diploma }}
                          @endif
                        </center>
                      </td>
                      <td>
                        <center>
                          {{$pemohons->jawatandipohon}} 
                          @if ($pemohons->jawatandipohon2 != null)
                          & {{$pemohons->jawatandipohon2}}
                          @endif
                        </center>
                      </td>
                      <td><center>
                        <a target="_blank" href='{{ url("/admin/butiran-pemohon/{$pemohons->id}") }}' class="btn btn-success btn-xs">Butiran</a></center></td>
                      </tr>
                      @endforeach
                      @endif
                    </tbody>
                  </table>
                </div>
              </div>   
            </div>  
          </div>
        </div>
      </div>
      
      
      @endsection
      
      