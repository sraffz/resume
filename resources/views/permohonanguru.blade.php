@extends('layouts.adminapp')

@section('content')
<div class="container">
  <div class="row text-center" >
    @include('Button.admin-permohonan-guru');
  </div> <br>
  <div class="row">
    <div class="col-md-12 "  >      
      <div class="panel panel-primary">  
        <div class="panel-body">             
          <div class="table-responsive">
            <table id="zero_config" class="table table-bordered">
              <thead class="thead-dark">
               <tr>
                <th rowspan="2"><center>No Siri</center></th>
                <th rowspan="2"><center>Nama</center></th>
                <th rowspan="2"><center>No K/P</center></th>
                <th rowspan="2"><center>Tarikh Temuduga</center></th>
                <th rowspan="2"><center>Markah Temuduga</center></th>
                <th colspan="2"><center>Ditawarkan</center></th>
                <th rowspan="2"><center>Major</center></th>
                <th rowspan="2"><center>Tindakan</center></th>
              </tr>
              <tr>
                <th><center>Tempat</center></th>
                <th><center>Tarikh</center></th>
              </tr>
            </thead>
            <tbody>
             @if(count($pemohon) > 0)
             @foreach($pemohon as $index => $pemohons)
             <tr>
              <td>{{ $pemohons->no_siri }}</td>
              <td>{{$pemohons->namapenuh}}</td>
              <td><center>{{$pemohons->ic}}</center></td>
              <td><center>{{$pemohons->tarikh}} </center></td>
              <td><center>{{$pemohons->markah}} </center></td>
              <td><center>{{$pemohons->tempat_lantikan}}</center></td>
              <td><center>{{$pemohons->tarikh_lantikan}}</center></td>
              <td>{{$pemohons->jawatandipohon}} <br> {{$pemohons->jawatandipohon2}}</td>
              <td><center>
                <a href='{{ url("/admin/butiran-pemohon/{$pemohons->id}") }}' class="btn btn-success btn-xs">Butiran</a></center></td>
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

