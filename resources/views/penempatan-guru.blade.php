@extends('layouts.adminapp')

@section('content')
<div class="container">
 <div class="row">
     <div class="panel panel-default">
        <div class="panel-heading"><strong>Lantikan</strong></div>
        <div class="panel-body">    
            @if(count($penempatan) > 0)
            @foreach($penempatan->all() as $td)
            <form class="form-horizontal" method="POST" action="{{ url('/update-penempatan-guru', array($td->id))}}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('tarikh_lantikan') ? ' has-error' : '' }}">
                    <label for="tarikh_lantikan" class="col-md-4 control-label">Tarikh Lantikan</label>

                    <div class="col-md-3">
                      {{--   <input id="#datepicker" type="text" class="form-control" name="tarikh_lantikan" value="{{ $td->tarikh_lantikan }}" required autofocus> --}}
                      <input name="tarikh_lantikan" type="text" class="form-control mydatepicker" placeholder="dd/mm/yyyy"  value="{{ $td->tarikh_lantikan }}" required>


                      @if ($errors->has('tarikh_lantikan'))
                      <span class="help-block">
                        <strong>{{ $errors->first('taritarikh_lantikankh') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('tempat_lantikan') ? ' has-error' : '' }}">
                    <label for="tempat_lantikan" class="col-md-4 control-label">Nama Sekolah</label>

                    <div class="col-md-4">
                       <select name="tempat_lantikan" required class="select2 form-control custom-select" style="width: 130%; height:150px;">
                        <option>{{ $td->tempat_lantikan }}</option>
                        @if(count($sekolah) > 0)
                        @foreach($sekolah->all() as $ss)              
                        <option value="{{ $ss->nama }}">{{ $ss->nama }}</option>     
                        @endforeach
                        @endif
                    </select>

                    @if ($errors->has('tempat_lantikan'))
                    <span class="help-block">
                        <strong>{{ $errors->first('tempat_lantikan') }}</strong>
                    </span>
                    @endif
                    </div>
                </div>
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
@endsection