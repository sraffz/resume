                    
                    <div class="col-md-12">
                        <form lass="form-horizontal" method="POST" action="{{ url('/insertjawatan')}}">
                            {{ csrf_field() }}
                            <div class="form-group form-group col-md-8 col-md-offset-2">
                                <input id="buttonjawatan" type="hidden" class="form-control" name="jawatandipohon" value="Penolong Pegawai Teknologi Maklumat">&nbsp;
                                <input id="jenis" type="hidden" class="form-control" name="jenis" value="Kakitangan">
                                <button name="submit" type="submit" class="btn btn-danger btn-block">
                                    Penolong Pegawai Teknologi Maklumat
                                </button>                       
                            </div>
                        </form>
                        <form lass="form-horizontal" method="POST" action="{{ url('/insertjawatan')}}">
                            {{ csrf_field() }}
                            <div class="form-group form-group col-md-8 col-md-offset-2">
                                <input id="buttonjawatan" type="hidden" class="form-control" name="jawatandipohon" value="Juruteknik Komputer">&nbsp;
                                <input id="jenis" type="hidden" class="form-control" name="jenis" value="Kakitangan">
                                <button name="submit" type="submit" class="btn btn-danger btn-block">
                                    Juruteknik Komputer
                                </button>                       
                            </div>
                        </form>

                        <form lass="form-horizontal" method="POST" action="{{ url('/insertjawatan')}}">
                            {{ csrf_field() }}
                            <div class="form-group form-group col-md-8 col-md-offset-2">
                                <input id="buttonjawatan" type="hidden" class="form-control" name="jawatandipohon" value="Pembantu Tadbir / Penyelia Asrama / Juruteknik">&nbsp;
                                <input id="jenis" type="hidden" class="form-control" name="jenis" value="Kakitangan">
                                <button name="submit" type="submit" class="btn btn-danger btn-block">
                                    Pembantu Tadbir / Penyelia Asrama / Juruteknik
                                </button>                       
                            </div>
                        </form>
                        
                        <form lass="form-horizontal" method="POST" action="{{ url('/insertjawatan')}}">
                            {{ csrf_field() }}
                            <div class="form-group form-group col-md-8 col-md-offset-2">
                                <input id="buttonjawatan" type="hidden" class="form-control" name="jawatandipohon" value="Pembantu Awam / Pembantu Operasi / Pemandu">&nbsp;
                                <input id="jenis" type="hidden" class="form-control" name="jenis" value="Kakitangan">
                                <button name="submit" type="submit" class="btn btn-danger btn-block">
                                    Pembantu Awam / Pembantu Operasi / Pemandu
                                </button>                       
                            </div>
                        </form> 
                        
                        <form lass="form-horizontal" method="POST" action="{{ url('/insertjawatan')}}">
                            {{ csrf_field() }}
                            <div class="form-group form-group col-md-6 col-md-offset-3">
                                <input id="buttonjawatan" type="hidden" class="form-control" name="jawatandipohon" value="Pengawal Keselamatan">&nbsp;
                                <input id="jenis" type="hidden" class="form-control" name="jenis" value="Kakitangan">
                                <button name="submit" type="submit" class="btn btn-danger btn-block">
                                    Pengawal Keselamatan
                                </button>                       
                            </div>
                        </form> 

                        <div class="col-md-12">
                            <div class="text-center col-md-6 col-md-offset-3">
                                <br><button data-toggle="collapse" data-target="#demo" type="button " class="btn btn-info btn-block">
                                    Lain-lain
                                </button> 
                                
                                <div  id="demo" class="collapse"><br>
                                    <p><strong>Nyatakan Nama Jawatan di bawah.</strong></p>
                                    <form lass="form-horizontal" method="POST" action="{{ url('/insertjawatan')}}">
                                        {{ csrf_field() }}
                                        <div class="form-group col-md-12">
                                            <input id="buttonjawatan" type="text" class="form-control" name="jawatandipohon" placeholder="Nyatakan Jawatan">&nbsp;
                                            <input id="jenis" type="hidden" class="form-control" name="jenis" value="Kakitangan">
                                            <button name="submit" type="submit" class="btn btn-success btn-block">
                                                Hantar
                                            </button>                       
                                        </div>
                                    </form> 
                                </div> 
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    
                    
                    