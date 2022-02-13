@extends('layouts.adminapp')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">  
            <div class="panel panel-default"> 
                <div class="panel-heading">
                    Senarai Admin 
                </div> 
                <div class="panel-body">        
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-bordered ">
                            <thead >
                                <tr>
                                    <th><center>Bil</center></th>
                                    <th><center>Nama</center></th>
                                    <th><center>Email</center></th>
                                    <th><center>Jawatan</center></th>
                                    <th><center>Peranan</center></th>
                                    <th><center>Tindakan </center></th>
                                </tr>
                                
                            </thead>
                            <tbody>
                                @foreach ($admin as $index => $ad)
                                <tr>
                                    <td>{{ $index+1 }}</td>
                                    <td>{{ $ad->name }}</td>
                                    <td>{{ $ad->email }}</td>
                                    <td>{{ $ad->jobtitle }}</td>
                                    <td>{{ $ad->nama_peranan }}</td>
                                    <td></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>   
                <div class="panel-footer text-right">
                    <a href="{{ url('admin/tambah') }}" class="btn btn-success">Tambah Admin</a>
                </div>
            </div>  
        </div>
    </div>
</div>


@endsection

