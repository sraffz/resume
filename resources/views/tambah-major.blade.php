@extends('layouts.adminapp')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tambah Major</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('/tambah-major') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('major') ? ' has-error' : '' }}">
                            <label for="major" class="col-md-4 control-label">Major</label>

                            <div class="col-md-6">
                                <input type="text" name="major" required class="form-control">

                                @if ($errors->has('major'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('major') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('kod_major') ? ' has-error' : '' }}">
                            <label for="kod_major" class="col-md-4 control-label">Kod Major</label>

                            <div class="col-md-3">
                                <input type="text" name="kod_major" required class="form-control">

                                @if ($errors->has('kod_major'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('kod_major') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-5">
                                <a href="{{ url('admin/senarai-major') }}"><button type="Button" class="btn btn-danger ">
                                    Batal
                                </button></a>
                                <button type="submit" class="btn btn-success ">
                                    Tambah
                                </button>
                            </div>
                        </div>
                    </form>
                </div>          
            </div>
        </div>
    </div>
</div>
@endsection
