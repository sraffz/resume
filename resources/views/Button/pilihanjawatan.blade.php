                    
                                           <div class="col-md-12">
                                                <form lass="form-horizontal" method="POST" action="{{ url('/insertjenisjawatan', [Auth::user()->id]) }}">
                                                    {{ csrf_field() }}
                                                    <div class="form-group col-md-6 col-md-offset-3">
                                                       <input id="buttonjawatan" type="hidden" class="form-control" name="jenisjawatan" value="Guru">&nbsp;
                                                         <button name="submit" type="submit" class="btn btn-danger btn-block">
                                                            Guru
                                                        </button>                       
                                                    </div>
                                                </form>
                                                
                                                <form lass="form-horizontal" method="POST" action="{{ url('/insertjenisjawatan', [Auth::user()->id]) }}">
                                                    {{ csrf_field() }}
                                                    <div class="form-group col-md-6 col-md-offset-3">
                                                       <input id="buttonjawatan" type="hidden" class="form-control" name="jenisjawatan" value="Kakitangan">&nbsp;
                                                         <button name="submit" type="submit" class="btn btn-primary btn-block">
                                                            Kakitangan (Bukan Guru)
                                                        </button>                       
                                                    </div>
                                                </form> 
                                           </div>



    
                                   
                    

                                         
                          