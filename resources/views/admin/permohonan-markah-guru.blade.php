@extends('layouts.adminapp')

@section('content')
<div class="container">
  <div class="row text-right">
    {{-- <div class="col-md-12">
      <div class="panel panel-primary">
        <div class="panel-body">
          <form class="form-inline" method="GET" action="{{ url('/carian-resume-staff') }}">
            @csrf
            <div class="form-group">
              <input type="text" name="daerah" id="daerah" class="form-control" placeholder="Daerah"
                aria-describedby="helpId" value="{{ old('daerah') }}">
              <input type="text" name="jawatan" id="jawatan" class="form-control" placeholder="Jawatan"
                aria-describedby="helpId" value="{{ old('jawatan') }}">
              <button class="btn btn-danger" type="submit">Cari</button> <br>
              <small id="helpId" class="text-muted"><i>*Carian untuk mana-mana maklumat dalam jadual.</i></small>
            </div>
          </form>
        </div>
      </div>
    </div> --}}
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
                    <center>Kad Pengenalan</center>
                  </th>
                  <th>
                    <center>Markah Objektif</center>
                  </th>
                  <th>
                    <center>Markah Subjektif</center>
                  </th>
                  <th>
                    <center>Markah Keseluruhan</center>
                  </th>
                </tr>
                {{-- <tr>
                    <th><center>Tempat</center></th>
                    <th><center>Tarikh</center></th>
                  </tr> --}}
              </thead>
             
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection