@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><strong>Maklumat Akademik</strong></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="panel-body col-md-offset-1">
                        <div class="links">
                            <a href="{{ url('/ijazah') }}"> Ijazah </a> 
                            <a href="{{ url('/diploma')}}"> Diploma </a>
                            <a href="{{ url('/tahfiz') }}"> TAHFIZ </a>
                            <a href="{{ url('/stam') }}"> STAM </a>
                            <a href="{{ url('/sijil') }}"> SIJIL </a>
                            <a href="{{ url('/spm') }}"> SPM </a>
                        </div>
                    </div>
                    &nbsp;
                   <p><br><br><div class="text-center"><font color="black" size="3">Sila isi mana-mana yang berkenaan kemudian klik selesai setelah mengisi semua yang berkaitan</font></div><br><br><br></p>
                    <div><a href="{{ url('/kokurikulum') }}" class="col-lg-2 col-md-offset-5 btn btn-success">
                                    Selesai
                                </a></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
