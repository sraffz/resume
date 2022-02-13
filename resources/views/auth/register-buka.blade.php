<div class="panel-body">
    <font style="color: white">
        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}
            <div class="form-group{{ $errors->has('nokp') ? ' has-error' : '' }}">
                <label for="nokp" class="col-md-4 control-label">No Kad Pengenalan</label>
                <div class="col-md-6">
                    <input
                        onkeypress="return event.charCode === 0 || /\d/.test(String.fromCharCode(event.charCode));"
                        type="text" maxlength="12" class="form-control" name="nokp"
                        value="{{ old('nokp') }}" required autofocus>
                    @if ($errors->has('nokp'))
                    <span class="help-block">
                        <strong>{{ $errors->first('nokp') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('colorkp') ? ' has-error' : '' }}">
                <label for="colorkp" class="col-md-4 control-label">Warna Kad Pengenalan</label>
                <div class="col-md-6">
                    <select class="form-control custom-select " name="colorkp" required>
                      <option selected value="">PILIH WARNA</option>
                      <option value="BIRU">BIRU</option>
                      <option value="MERAH">MERAH</option>
                      <option value="HIJAU">HIJAU</option>
                      <option value="COKLAT">COKLAT</option>
                    </select>       
                    @if ($errors->has('colorkp'))
                    <span class="help-block">
                        <strong>{{ $errors->first('colorkp') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name" class="col-md-4 control-label">Nama Singkatan</label>
                <div class="col-md-6">
                    <input  onkeyup="this.value = this.value.toUpperCase();" type="text" class="form-control" name="name" value="{{ old('name') }}"
                        required autofocus>

                    @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('namapenuh') ? ' has-error' : '' }}">
                <label for="namapenuh" class="col-md-4 control-label">Nama Penuh</label>
                <div class="col-md-6">
                    <input id="namapenuh"  type="text" class="form-control" name="namapenuh"
                        value="{{ old('namapenuh') }}" onkeyup="this.value = this.value.toUpperCase();" required autofocus>

                    @if ($errors->has('namapenuh'))
                    <span class="help-block">
                        <strong>{{ $errors->first('namapenuh') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control" name="email"
                        value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="col-md-4 control-label">Kata Laluan</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control" name="password" required>

                    @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <label for="password-confirm" class="col-md-4 control-label">Taip Semula Kata Laluan</label>

                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control"
                        name="password_confirmation" required>
                </div>
            </div>
            <div class="form-group text-center">
                <p style="font: bold;">
                    <strong>* Pemohon hendaklah merupakan warganegara Malaysia yang memiliki Kad Pengenalan berwarna biru sahaja.
                    <br>

                    * Pemohon lepasan ijazah hendaklah membuat permohonan selepas konvokesyen.

                    <br>

                    * Permohonan yang tidak memenuhi syarat akan dibatalkan dari sistem.
                    </strong>
                </p>
             

                <!-- <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control"
                        name="password_confirmation" required>
                </div> -->
            </div>

            <div class="form-group ">
                <div class="text-center">
                    <button type="submit" class="btn btn-danger">
                        Daftar
                    </button>
                </div>
            </div>
        </form>
    </font>
</div>