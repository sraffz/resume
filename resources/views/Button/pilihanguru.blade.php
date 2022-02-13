                    
                    <div class="col-md-12">
                        <form lass="form-horizontal" method="POST" action="{{ url('/insertjawatan')}}">
                            {{ csrf_field() }}
                            <div class="form-group col-md-6 col-md-offset-3">
                                <input id="buttonjawatan" type="hidden" class="form-control" name="jawatandipohon" value="Guru Arab/Ugama">&nbsp;
                                <input id="jenis" type="hidden" class="form-control" name="jenis" value="Guru">&nbsp;
                                <button name="submit" type="submit" class="btn btn-danger btn-block">
                                    Guru Arab/Ugama
                                </button>                       
                            </div>
                        </form>
                        
                        <form lass="form-horizontal" method="POST" action="{{ url('/insertjawatan')}}">
                            {{ csrf_field() }}
                            <div class="form-group col-md-6 col-md-offset-3">
                                <input id="buttonjawatan" type="hidden" class="form-control" name="jawatandipohon" value="Guru Bahasa Arab">&nbsp;
                                <input id="jenis" type="hidden" class="form-control" name="jenis" value="Guru">
                                <button name="submit" type="submit" class="btn btn-danger btn-block">
                                    Guru Bahasa Arab
                                </button>                       
                            </div>
                        </form> 
                        
                        <form lass="form-horizontal" method="POST" action="{{ url('/insertjawatan')}}">
                            {{ csrf_field() }}
                            <div class="form-group col-md-6 col-md-offset-3">
                                <input id="buttonjawatan" type="hidden" class="form-control" name="jawatandipohon" value="Guru Tahfiz">&nbsp;
                                <input id="jenis" type="hidden" class="form-control" name="jenis" value="Guru">
                                <button name="submit" type="submit" class="btn btn-danger btn-block">
                                    Guru Tahfiz
                                </button>                       
                            </div>
                        </form> 
                        
                        <form lass="form-horizontal" method="POST" action="{{ url('/insertjawatan')}}">
                            {{ csrf_field() }}
                            <div class="form-group col-md-6 col-md-offset-3">
                                <input id="buttonjawatan" type="hidden" class="form-control" name="jawatandipohon" value="Guru Pra-Sekolah/Tadika">&nbsp;
                                <input id="jenis" type="hidden" class="form-control" name="jenis" value="Guru">
                                <button name="submit" type="submit" class="btn btn-danger btn-block">
                                    Guru Pra-Sekolah/Tadika
                                </button>                       
                            </div>
                        </form> 
                        
                    </div>
                    
                    <div class="col-md-12">
                        <div class="text-center col-md-6 col-md-offset-3">
                            <br><button data-toggle="collapse" data-target="#1" type="button " class="btn btn-primary btn-block">
                                Guru Vokasional/Kemahiran
                            </button> 
                            
                            <div  id="1" class="collapse"><br>
                                <form lass="form-horizontal" method="POST" action="{{ url('/insertjawatan')}}">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <select name="jawatandipohon" id="" class="form-control" required>
                                            <option value="">Pilihan</option>
                                            <option value="Jahitan">Jahitan</option>
                                            <option value="Kulinari">Kulinari</option>
                                        </select>                                                                                  
                                    </div>
                                    <input id="jenis" type="hidden" class="form-control" name="jenis" value="Guru">
                                    <div class="form-group">
                                        <button name="submit" type="submit" class="col-lg-4 col-md-offset-4 btn btn-success">
                                            Hantar
                                        </button>     
                                    </div>
                                </form> 
                            </div> 
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <div class="text-center col-md-6 col-md-offset-3">
                            <br><button data-toggle="collapse" data-target="#demo" type="button " class="btn btn-info btn-block">
                                Guru Akademik
                            </button> 
                            
                            <div  id="demo" class="collapse"><br>
                                <p><strong>Pemohon hanya boleh membuat permohonan untuk 2 jawatan sahaja bagi guru akademik dan hendaklah bersesuaian dengan bidang pengajian yang diambil.</strong></p>
                                <form lass="form-horizontal" method="POST" action="{{ url('/insertjawatan')}}">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <select name="jawatandipohon" id="" class="form-control" required>
                                            <option value="">Pilihan Pertama</option>
                                            <option value="Bahasa Melayu">Bahasa Melayu</option>
                                            <option value="Bahasa Inggeris">Bahasa Inggeris</option>
                                            <option value="Bahasa Mandarin">Bahasa Mandarin</option>
                                            <option value="Matematik">Matematik</option>
                                            <option value="Sains">Sains</option>
                                            <option value="Prinsip Akaun">Prinsip Akaun</option>
                                            <option value="Perniagaan">Perniagaan</option>
                                            <option value="Geografi">Geografi</option>
                                            <option value="Sejarah">Sejarah</option>
                                            <option value="Matematik Tambahan">Matematik Tambahan</option>
                                            <option value="Fizik">Fizik</option>
                                            <option value="Kimia">Kimia</option>
                                            <option value="Biologi">Biologi</option>
                                            <option value="RBT">RBT</option>
                                            <option value="Kemahiran Hidup Bersepadu(KHB)">Kemahiran Hidup Bersepadu(KHB)</option>
                                            <option value="Lukisan Kejuruteraan">Lukisan Kejuruteraan</option>
                                            <option value="Teknologi Maklumat">Teknologi Maklumat</option>
                                        </select>                                                                                  
                                    </div>
                                    
                                    <div class="form-group">
                                        <select name="jawatandipohon2" id="" class="form-control" required>
                                            <option value="">Pilihan Kedua</option>
                                            <option value="Bahasa Melayu">Bahasa Melayu</option>
                                            <option value="Bahasa Inggeris">Bahasa Inggeris</option>
                                            <option value="Bahasa Mandarin">Bahasa Mandarin</option>
                                            <option value="Matematik">Matematik</option>
                                            <option value="Sains">Sains</option>
                                            <option value="Prinsip Akaun">Prinsip Akaun</option>
                                            <option value="Perniagaan">Perniagaan</option>
                                            <option value="Geografi">Geografi</option>
                                            <option value="Sejarah">Sejarah</option>
                                            <option value="Matematik Tambahan">Matematik Tambahan</option>
                                            <option value="Fizik">Fizik</option>
                                            <option value="Kimia">Kimia</option>
                                            <option value="RBT">RBT</option>
                                            <option value="Kemahiran Hidup Bersepadu(KHB)">Kemahiran Hidup Bersepadu(KHB)</option>
                                            <option value="Lukisan Kejuruteraan">Lukisan Kejuruteraan</option>
                                            <option value="Teknologi Maklumat">Teknologi Maklumat</option>
                                        </select>                                                                                  
                                    </div>
                                    <input id="jenis" type="hidden" class="form-control" name="jenis" value="Guru">
                                    <div class="form-group">
                                        <button name="submit" type="submit" class="col-lg-4 col-md-offset-4 btn btn-success">
                                            Hantar
                                        </button>     
                                    </div>
                                </form> 
                            </div> 
                        </div>
                    </div>
                    
                    
                    
                    
                    
                    