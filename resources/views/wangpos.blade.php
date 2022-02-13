@extends('layouts.adminapp')

@section('content')
<div class="container">
 <div class="row">
   <div class="panel panel-default">
    <div class="panel-heading"><strong>Status Pembayaran</strong></div>
    <div class="panel-body">     
        @if(count($bayaran) > 0)
        @foreach($bayaran->all() as $td)
        <form class="form-horizontal" method="POST" action="{{ url('/update-wangpos', array($td->id))}}">
            {{ csrf_field() }}
            @foreach($major as $m) 
            <div class="form-group{{ $errors->has('bayaran') ? ' has-error' : '' }}">
                <label for="bayaran" class="col-md-4 control-label">Major</label>
                <div class="col-md-3">
                   <label for=""> {{ $m->jawatandipohon }} <br> {{ $m->jawatandipohon2 }} </label>
                </div>
            </div>
            @endforeach

            <div class="form-group{{ $errors->has('bayaran') ? ' has-error' : '' }}">
                <label for="bayaran" class="col-md-4 control-label">Pembayaran</label>

                <div class="col-md-2">
                    <select name="bayaran" id="bayaran" class="form-control">
                        <option selected value="{{ $td->bayaran }}">{{ $td->bayaran }}</option>
                        <option value="Ya">Ya</option>
                        <option value="Tidak">Tidak</option>
                    </select>

                    @if ($errors->has('bayaran'))
                    <span class="help-block">
                        <strong>{{ $errors->first('bayaran') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

             <div class="form-group{{ $errors->has('jenisbayaran') ? ' has-error' : '' }}">
                <label for="jenisbayaran" class="col-md-4 control-label">Jenis Pembayaran</label>

                <div class="col-md-4">
                    <input type="text" name="jenisbayaran" required class="form-control" placeholder="Wangpos/Bank In/Online Banking(Nama Bank)" value="{{ $td->jenisbayaran }}">

                    @if ($errors->has('jenisbayaran'))
                    <span class="help-block">
                        <strong>{{ $errors->first('jenisbayaran') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('no_slip') ? ' has-error' : '' }}">
                <label for="no_slip" class="col-md-4 control-label">No. Slip/Rujukan Pembayaran</label>

                <div class="col-md-4">
                    <input type="text" name="no_slip" required class="form-control" placeholder="No Slip Pembayaran" value="{{ $td->no_slip_rujukan }}">

                    @if ($errors->has('no_slip'))
                    <span class="help-block">
                        <strong>{{ $errors->first('no_slip') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            
            @if (count($rakFail)>0)
                @foreach ($rakFail as $rf)
                    <div class="form-group{{ $errors->has('rakmajor') ? ' has-error' : '' }}">
                    <label for="rakmajor" class="col-md-4 control-label">Rak Major</label>

                    <div class="col-md-4">
                        <select name="rakmajor" id="rakmajor" class="form-control">
                            <option selected value="{{ $rf->kod_major }}">{{ $rf->major_guru }}</option>
                            @foreach ($rak as $r)
                                <option value="{{ $r->kod_major }}">{{ $r->major_guru }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('rakmajor'))
                        <span class="help-block">
                            <strong>{{ $errors->first('rakmajor') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                @endforeach
            @else
                <div class="form-group{{ $errors->has('rakmajor') ? ' has-error' : '' }}">
                    <label for="rakmajor" class="col-md-4 control-label">Rak Major</label>

                    <div class="col-md-4">
                        <select name="rakmajor" id="rakmajor" class="form-control">
                            <option value="">Sila Pilih</option>
                            @foreach ($rak as $r)
                                <option value="{{ $r->kod_major }}">{{ $r->major_guru }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('rakmajor'))
                        <span class="help-block">
                            <strong>{{ $errors->first('rakmajor') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
            @endif

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-success ">
                        Kemaskini
                    </button>
                    <a href='{{ url("/admin/butiran-pemohon/{$td->id}") }}'><button type="Button" class="btn btn-danger ">
                        Kembali
                    </button></a>
                </div>
            </div>
        </form>
        @endforeach
        @endif
    </div>
</div>
</div>
</div>




</div>
@endsection