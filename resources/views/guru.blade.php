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
                         Sila pilih jawatan yang hendak dipohon.  
                        </div>
                            <div class="panel-body">
                               
                               @include('Button.pilihanjawatan')

                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

                    
