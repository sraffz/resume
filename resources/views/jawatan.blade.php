@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading text-center">Selamat Datang ke Bank Resume Yayasan Islam Kelantan</div>
                <div class="panel-body text-center">     
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div>
                        Sila pilih jawatan yang anda berminat.  
                    </div>
                    <div class="panel-body">    
                        @if (Auth::user()->jenis_jawatan == "Guru")
                        @include('Button.pilihanguru')   
                        @elseif(Auth::user()->jenis_jawatan == "Kakitangan")
                        @include('Button.pilihankakitangan')   
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection


