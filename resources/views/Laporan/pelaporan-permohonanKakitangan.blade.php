
 @extends('layouts.adminapp')
 @section('content')

 <head>
   
    <link rel="stylesheet" href= "{{ asset('laporan/form.css') }}" type="text/css">
</head>

<body>
<div class="container">
    <div class="row text-right">
      <div class="col-md-12">
        <div class="panel panel-primary">
          <div class="panel-body">

            <label text-align="center"><legend ><b>PELAPORAN PERMOHONAN KERJA DI YIK</b></legend></label>

            <form class="form-inline" method="GET" action="{{ url('/carian-laporan-kerja-kakitangan') }}">  
                    <div class="row">
                        <div class="col-25">
                         <label for="jawatan" text-align = "center"><b>Jawatan</b> </label>
                        </div>
                         <div class="col-75">
                            <select class="form-control" name="jawatan" id="jawatan">
                              <option value="">Sila Pilih</option> 
                              @foreach ($jawatan as $jwt)
                                <option value="{{ $jwt->jawatandipohon }}">{{ $jwt->jawatandipohon }}</option>
                                @endforeach
                              </select><br>
                        </div>
                    </div>

                    <div class="row">
                      <div class="col-25">
                       <label for="daerah" text-align ="center"  padding-left=55px; ><b>Daerah</b> </label>
                      </div>
                       <div class="col-75" >
                          <select class="form-control" name="maklumatdiri" id="maklumatdiri">
                            <option value="">Sila Pilih</option>  
                            @foreach ($maklumatdiri as $data)
                              <option value="{{ $data->daerah }}">{{ $data->daerah }}</option>
                              @endforeach
                            </select><br>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-25">
                       <label for="gred" text-align ="center"><b>Gred BM</b> </label>
                      </div>
                       <div class="col-75" >
                          <select class="form-control" name="gred" id="gred">
                            <option value="">Sila Pilih</option>  
                            @foreach ($gred as $g)
                              <option value="{{ $g->grd }}">{{ $g->grd }}</option>
                              @endforeach
                            </select><br>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-25">
                       <label for="bidang" text-align ="center"><b>Kelulusan</b> </label>
                      </div>
                       <div class="col-75" >
                          <select class="form-control" name="bidang" id="bidang">
                            <option value="">Sila Pilih</option>  
                            @foreach ($bidang as $kelulusan)
                              <option value="{{ $kelulusan->bidang }}">{{ $kelulusan->bidang }}</option>
                              @endforeach
                            </select><br>
                      </div>
                    </div>

                <br><br>
                <div class=center>
                     <button type="submit" href="{{ url('/pelaporan-listDataKakitangan') }}" class="btn btn-primary">Hantar</button>  
                </div>
                <br>
             </form>
          </div>
        </div>
      </div>
    </div>
</div>


</body>
@endsection