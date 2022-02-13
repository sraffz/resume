@extends('layouts.adminapp')

@section('content')
<body>
<div class="container">
 
  <div class="row text-right">
    <div class="col-md-12">
      <div class="panel panel-primary">
        <div class="panel-body">
          <div class="col-md-6 text-right">
            <!-- Button trigger modal -->
            <div style="float: left "><a href="{{ url('/pelaporan-permohonanKakitangan') }}"> Kembali</a></div>
            <div style="float: right">
                <a class="btn btn-primary" href="{{ url('/muat-turun-butiran-laporanguru') }}">Muat Turun Butiran</a>
            </div>
          </div>
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
              <h5> <center><b>Jumlah Pemohon : </b>
                @foreach ($count as $bilangan)
                 {{ $bilangan->jumlah }}
                @endforeach
              </center></h5>
              <thead>
                <tr>
                  <th>
                    <center>Bil</center>
                  </th>
                  <th>
                    <center>Nama</center>
                  </th>
                  <th>
                    <center>Daerah</center>
                  </th>
                  <th>
                    <center>Jantina</center>
                  </th>
                  <th>
                    <center>SPM (BM)</center>
                  </th>
                  {{-- <th><center>Tarikh Temuduga</center></th>
                    <th><center>Markah Temuduga</center></th>
                    <th colspan="2"><center>Ditawarkan</center></th> --}}
                  <th>
                    <center>Kelulusan</center>
                  </th>
                  <th>
                    <center>Jawatan Diminta</center>
                  </th>
                  
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
                  <td><center>{{ $index+1 }}</center></td>
                  <td>{{ strtoupper($pemohons->namapenuh) }}</td>
                  <td>
                    <center>{{$pemohons->daerah}}</center>
                  </td>
                  <td>
                    <center>{{$pemohons->jantina}}</center>
                  </td>
                  <td>
                    <center>{{$pemohons->grd}}</center>
                  </td>
                  {{-- <td><center> </center></td>
                      <td><center> </center></td>
                      <td><center></center></td>
                      <td><center></center></td> --}}
                  <td>
                    <center>
                      @if($pemohons->ijazah != null)
                      <strong>IJAZAH</strong> : {{ $pemohons->ijazah }}
                      @endif
                      <br>
                      @if($pemohons->diploma != null)
                      <strong>DIPLOMA</strong> : {{ $pemohons->diploma }}
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

<script>
  $('#exampleModal').on('show.bs.modal', event => {
    var button = $(event.relatedTarget);
    var modal = $(this);
    // Use above variables to manipulate the DOM
  });  
</script>
</body>
@endsection