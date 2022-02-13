@extends('layouts.adminapp')

@section('content')
<div class="container">
  <div class="row text-right">
    <div class="col-md-12">
      <div class="panel panel-primary">
        <div class="panel-body">
          <div class="col-md-6 text-right">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exportdetailguru">
              Muat Turun Butiran Pemohon
            </button>
          </div>
          <div class="col-md-6">
            {{-- @include('Button.admin-permohonan-guru'); --}}
            <form class="form-inline" method="GET" action="{{ url('/carian-laporan-kerja') }}">
              @csrf
              <div class="form-group">
                  <div class="col-75">
                {{-- <input type="text" name="penempatan" id="penempatan" class="form-control" placeholder="Penempatan" aria-describedby="helpId"> --}}
                <input type="text" name="jawatan" id="jawatan" class="form-control" placeholder="Jawatan"
                  aria-describedby="helpId" value="{{ old('jawatan') }}">
                  {{-- <label for="carian">Cari</label> --}}
                <input type="text" name="daerah" id="daerah" class="form-control" placeholder="Daerah"
                aria-describedby="helpId" value="{{ old('daerah') }}">
                </div>
                <button class="btn btn-danger" type="submit">Cari</button> <br>
                <small id="helpId" class="text-muted"><i>*Carian untuk mana-mana maklumat dalam jadual.</i></small>
              
            </div>
            </form>
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
                  <td>{{ $index+1 }}</td>
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

<!-- Modal -->
<div class="modal fade" id="exportdetailguru" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">PELAPORAN PERMOHONAN KERJA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ url('/muat-turun-butiran-kerja') }}" method="get">
        <div class="modal-body">
          <div class="container-fluid">
            <div class="form-group">
              <label for="jawatan">Nama Jawatan</label>
              <select class="form-control" name="jawatan" id="jawatan">
                @foreach ($jawatan as $jwt)
                <option value="{{ $jwt->jawatandipohon }}">{{ $jwt->jawatandipohon }}</option>
                @endforeach
              </select><br>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Muat Turun</button>
        </div>
      </form>
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

@endsection