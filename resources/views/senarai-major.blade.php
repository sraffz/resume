@extends('layouts.adminapp')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Senarai Major</div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-bordered">
                            <thead class="thead-dark">
                            <tr>
                                <th><center>Bil.</center></th>
                                <th><center>Major Guru</center></th>
                                <th><center>Kod Major</center></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($major as $index => $majors)
                            <tr>
                              <td>{{ $index + 1 }}</td>
                              <td>{{ $majors->major_guru }}</td>
                              <td><center>{{ $majors->kod_major }}</center></td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="panel-footer text-right">
                    <a href="{{ url('/admin/tambah-major') }}" class="btn btn-success">Tambah Major</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
