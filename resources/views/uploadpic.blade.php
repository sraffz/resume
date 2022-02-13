@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
        	<div class="col-md-8 col-md-offset-2">
	            <div class="panel panel-default">
	                <div class="panel-heading">Gambar Passport</div>
		                <div class="panel-body text-center">
		                	
		                	<form action="{{ URL::to('upload') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
							{{ csrf_field() }}
							<div><br>
								 <label>Sila pilih gambar berukuran passport untuk dimuat naik</label>
							</div>

						    <div  class="col-md-8 col-md-offset-1">
						    	<input class="form-control" type="file" name="file" id="file">
						    	@if ($errors->has('file'))
                                    <span class="help-block">
                                        <strong><font style="color: red">Gambar yang dimuat naik melebihi 2MB</font></strong>
                                    </span>
                                @endif
						    	{{-- @if (count($errors) > 0)
					            <div class="alert alert-danger">
					                <strong>Whoops!</strong> Gambar yang dimuat naik hendaklah tidak melebihi.
					                <ul>
					                    @foreach ($errors->all() as $error)
					                        <li>{{ $error }}</li>
					                    @endforeach
					                </ul>
					            </div>
					        @endif --}}
						    	<font style="color: red">*Saiz gambar tidak melebihi 2MB</font>
						    </div>

						    <div  class="col-md-2">
						    	<input class="form-control btn btn-success" type="submit" value="Muat Naik" name="submit">
						    	<br>
						    	
						    </div>
						    	<br><br><br><br>
							</form>
		                </div>
						
				</div>
			</div>
		</div>
	</div>
@endsection

