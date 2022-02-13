@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <!-- <div class="panel panel-default"> -->
            <div class="panel-heading text-center">
                <font style="color: white" size="8">DAFTAR</font>
            </div>
            {{-- @include('auth.register-closed') --}}
            @include('auth.register-buka')
            
        </div>
        <!-- </div> -->
    </div>
</div>
@endsection