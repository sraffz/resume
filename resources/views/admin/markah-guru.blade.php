@extends('layouts.adminapp')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Markah Ujian Kelayakan Pendidik YIK</div>
                <form action="{{ url('/kemaskinimarkahguru') }}" method="post">
                    @csrf
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-bordered">
                                <thead class="thead-dark">
                                    <tr>
                                        <th style="vertical-align: middle" class="text-center" rowspan="2">
                                            <center>Bil.</center>
                                        </th>
                                        <th style="vertical-align: middle" rowspan="2">
                                            <center>Nama</center>
                                        </th>
                                        <th style="vertical-align: middle" rowspan="2">
                                            <center>Kad Pengenalan</center>
                                        </th>
                                        <th style="vertical-align: middle" rowspan="2">
                                            <center>No Tel</center>
                                        </th>
                                        <th style="vertical-align: middle" colspan="3">
                                            <center>Karangan</center>
                                        </th>
                                        <th style="vertical-align: middle" rowspan="2">
                                            <center>Objektif</center>
                                        </th>
                                        <th style="vertical-align: middle" rowspan="2">
                                            <center>Jumlah</center>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>
                                            <center>B. Melayu</center>
                                        </th>
                                        <th>
                                            <center>B. Inggeris</center>
                                        </th>
                                        <th>
                                            <center>B. Arab / Tahfiz</center>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($user as $index => $s)
                                    <tr>

                                        <td style="vertical-align: middle" class="text-center">{{ $index + 1 }}</td>
                                        <td style="vertical-align: middle">{{ $s->namapenuh }} <br> <input type="text"
                                                hidden name="id[]" value="{{ $s->id }}"></td>
                                        <td style="vertical-align: middle" class="text-center">{{ $s->ic }}</td>
                                        <td style="vertical-align: middle" class="text-center">{{ $s->notel }}</td>
                                        <td style="vertical-align: middle" class="text-center">
                                            <input style="text-align:center;" type="text" class="form-control" name="markah_bm[]"
                                                value="{{ $s->markah_bm }}">
                                        </td>
                                        <td class="text-center">
                                            <input style="text-align:center;" type="text" class="form-control" name="markah_bi[]"
                                                value="{{ $s->markah_bi }}">
                                        </td>
                                        <td class="text-center">
                                            <input style="text-align:center;" type="text" class="form-control" name="markah_arab[]"
                                                value="{{ $s->markah_arab }}">
                                        </td>
                                        <td class="text-center">
                                            <input style="text-align:center;" type="text" class="form-control" name="markah_objektif[]"
                                                value="{{ $s->markah_objektif }}">
                                        </td>
                                        <td style="vertical-align: middle" class="text-center">
                                            {{ $s->markah_bm + $s->markah_bi + $s->markah_arab + $s->markah_objektif }}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="panel-footer text-right">
                        <button type="submit" class="btn btn-danger">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection