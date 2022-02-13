@extends('layouts.resume.app')

@section('content')
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">MAKLUMAT DIRI</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="{{ url('/profile') }}">Halaman Utama</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Kemaskini Maklumat Diri</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-12 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material" method="POST" action="{{ url('/updatemd', array(Auth::user()->id))}}">
                                    {{ csrf_field() }}
                                    <fieldset>
                                     @if(count($errors) >0 )
                                          @foreach($errors->all() as $error)
                                            <div class="alert alert-danger">{{$error}}</div>
                                          @endforeach
                                      @endif

                                    <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                                        <label for="nama" class="col-md-4 control-label">Nama Penuh</label>

                                        <div class="col-md-12">
                                            <input onkeyup="this.value = this.value.toUpperCase();" id="nama" type="text" class="form-control form-control-line" name="nama" value="<?php echo $users->nama; ?>">
             
                                            @if ($errors->has('nama'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('nama') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('ic') ? ' has-error' : '' }}">
                                        <label for="ic" class="col-md-4 control-label">No Kad Pengenalan</label>

                                        <div class="col-md-12">
                                            <input onkeyup="this.value = this.value.toUpperCase();" id="ic2"  type="text" maxlength="12" class="form-control form-control-line" name="ic" value="<?php echo $users->ic; ?>" required>  

                                            @if ($errors->has('ic'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('ic') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>


                                    
                                    <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                                        <label for="address" class="col-md-4 control-label">Alamat Surat Menyurat</label>

                                        <div class="col-md-12">
                                            <input onkeyup="this.value = this.value.toUpperCase();" id="address" type="address" class="form-control form-control-line" name="address" value="<?php echo $users->alamat; ?>" required>

                                            @if ($errors->has('address'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('address') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('daerah') ? ' has-error' : '' }}">
                                        <label for="daerah" class="col-md-4 control-label">Daerah</label>

                                                <div class="col-md-12">
                                                    <select class="form-control" name="daerah" id="daerah" required>
                                                        <option value="<?php echo $users->daerah ?>"><?php echo $users->daerah ?></option>
                                                        <option value="KOTA BHARU">KOTA BHARU</option>
                                                        <option value="PASIR MAS">PASIR MAS</option>
                                                        <option value="TUMPAT">TUMPAT</option>
                                                        <option value="PASIR PUTEH">PASIR PUTEH</option>
                                                        <option value="BACHOK">BACHOK</option>
                                                        <option value="KUALA KRAI">KUALA KRAI</option>
                                                        <option value="MACHANG">MACHANG</option>
                                                        <option value="TANAH MERAH">TANAH MERAH</option>
                                                        <option value="JELI">JELI</option>
                                                        <option value="GUA MUSANG">GUA MUSANG</option>
                                                    </select>

                                                    @if ($errors->has('daerah'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('daerah') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                         <div class="form-group{{ $errors->has('poskod') ? ' has-error' : '' }}">
                                             <label for="poskod" class="col-md-1 control-label">Poskod</label>

                                            <div class="col-md-12">
                                                <input  id="poskod" type="poskod" class="form-control form-control-line" name="poskod" value="<?php echo $users->poskod; ?>" required>

                                                @if ($errors->has('poskod'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('poskod') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                  <div class="form-group{{ $errors->has('negeri') ? ' has-error' : '' }}">
                                        <label for="negeri" class="col-md-4 control-label">Negeri</label>

                                        <div class="col-md-12">
                                            <input onkeyup="this.value = this.value.toUpperCase();" id="negeri" type="negeri" class="form-control form-control-line" name="negeri" value="<?php echo $users->negeri; ?>" required>

                                            @if ($errors->has('negeri'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('negeri') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('warganegara') ? ' has-error' : '' }}">
                                        <label for="warganegara" class="col-md-4 control-label">Kewarganegaraan</label>

                                        <div class="col-md-12">
                                            <input onkeyup="this.value = this.value.toUpperCase();" id="warganegara" type="warganegara" placeholder="Kewarganegaraan" class="form-control form-control-line" name="warganegara" value="{{ $users->kewarganegaraan }}" required>

                                            @if ($errors->has('warganegara'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('warganegara') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('nosuratberanak') ? ' has-error' : '' }}">
                                        <label for="nosuratberanak" class="col-md-4 control-label">No Surat Beranak</label>

                                        <div class="col-md-12">
                                            <input onkeyup="this.value = this.value.toUpperCase();" id="nosuratberanak"  type="text" class="form-control form-control-line" name="nosuratberanak" placeholder="No Surat Beranak"  value="<?php echo $users->nosuratberanak; ?>" required>
              
                                            @if ($errors->has('nosuratberanak'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('nosuratberanak') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('tempatlahir') ? ' has-error' : '' }}">
                                        <label for="tempatlahir" class="col-md-4 control-label">Tempat Lahir</label>

                                        <div class="col-md-12">
                                            <input onkeyup="this.value = this.value.toUpperCase();" id="tempatlahir" type="tempatlahir" class="form-control form-control-line" name="tempatlahir" value="<?php echo $users->tempatlahir; ?>" required>

                                            @if ($errors->has('tempatlahir'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('tempatlahir') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('jantina') ? ' has-error' : '' }}">
                                        <label for="jantina" class="col-md-4 control-label">Jantina</label>

                                        <div class="col-md-12">
                                            <select class="form-control" name="jantina" id="jantina" required>
                                                <option value="<?php echo $users->jantina ?>"><?php echo $users->jantina ?></option>
                                                <option value="LELAKI">LELAKI</option>
                                                <option value="PEREMPUAN">PEREMPUAN</option>
                                            </select>
                                            @if ($errors->has('jantina'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('jantina') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                     <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                                        <label for="status" class="col-md-4 control-label">Status Perkahwinan</label>

                                        <div class="col-md-12">
                                            <select class="form-control form-control-line" name="status" id="status" required> 
                                                <option value="{{ $users->status }}">{{ $users->status }}</option>
                                                <option value="BUJANG">BUJANG</option>
                                                <option value="BERKAHWIN">BERKAHWIN</option>
                                                <option value="DUDA">DUDA</option>
                                                <option value="JANDA">JANDA</option>
                                            </select>

                                            @if ($errors->has('status'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('status') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                     <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="email" class="col-md-4 control-label">Alamat email</label>

                                        <div class="col-md-12">

                                            <input onkeyup="this.value = this.value.toUpperCase();" id="email" type="email" class="form-control form-control-line" name="email" value="<?php echo $users->email; ?>"  required>

                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('hp') ? ' has-error' : '' }}">
                                        <label for="hp" class="col-md-4 control-label">No telefon (HP)</label>

                                        <div class="col-md-12">
                                            <input onkeyup="this.value = this.value.toUpperCase();" id="hp" type="hp" class="form-control form-control-line" name="hp" value="<?php echo $users->nohp; ?>" required>

                                            @if ($errors->has('hp'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('hp') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                 
                                    <div class="form-group">
                                        <div class="col-md-12 col-md-offset-4 text-center">
                                             <button type="button" onclick="window.location='{{ url('/profile')}}'" class="btn btn-danger">
                                                Batal
                                            </button>
                                             <button type="submit" class="btn btn-success">
                                                Kemaskini
                                            </button>
                                        </div>
                                    </div>
                                    </fieldset>
                         
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
@endsection
