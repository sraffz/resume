@extends('layouts.adminapp')

@section('content')
<div class="container">
  <div class="row"> 
    <div class="panel panel-default"> 
      <div class="panel-heading">
        Tambah Admin
      </div> 
      <div class="panel-body">        
        <form method="POST" action="{{ url('/tambah-admin') }}">
          @csrf
          <div class="form-group row">
            <label for="inputNama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-7">
              <input name="name" type="text" class="form-control" id="inputNama" placeholder="Nama" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-5">
              <input name="email" type="email" class="form-control" id="inputEmail3" placeholder="Email" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputJawatan" class="col-sm-2 col-form-label">Jawatan</label>
            <div class="col-sm-7">
              <input name="jobtitle" type="text" class="form-control" id="inputJawatan" placeholder="Jawatan" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-5">
              <input name="password" type="password" class="form-control" id="inputPassword3" placeholder="Password" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPeranan" class="col-sm-2 col-form-label">Peranan</label>
            <div class="col-sm-3">
              <select class="form-control" name="peranan" id="inputPeranan" required>
                <option value="">Pilih</option>
                @foreach ($peranan as $p)
                <option value="{{ $p->kod }}">{{ $p->nama_peranan }}</option>
                @endforeach
              </select>
            </div>
          </div>          
          <div class="panel-footer text-right">
            <a href="{{ url('/admin/senarai-admin') }}"><button type="button" class="btn btn-danger">Kembali</button></a>
            <button type="submit" class="btn btn-success">Tambah</button>
          </div>
        </form>
      </div>  
    </div>
  </div>
  
  
  @endsection
  
  