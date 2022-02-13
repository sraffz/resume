<!-- sidebar nav -->
      <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            
                            <li class="text-center">
                               <a href="{{ url('/profile')  }}" class="active"><i class=""></i>  
                                {{ Auth::user()->namapenuh }} <br>
                                {{ Auth::user()->ic }}
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/kemaskini/maklumatdiri') }}"><i class="fa fa-bar-chart-o fa-fw"></i> Maklumat Diri</a>

                            </li>
                            <li>
                                <a href="#"  data-toggle="collapse" data-target="#hehe"><i class="fa fa-edit fa-fw"></i> Maklumat Akademik<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level" >
                                    <li>
                                        <a href="{{ url('/kemaskini/ijazah') }}">Ijazah</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/kemaskini/diploma')}}">Diploma</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/kemaskini/tahfiz')}}">Tahfiz</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/kemaskini/stam')}}">STAM</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/kemaskini/sijil')}}"> Sijil</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/kemaskini/spm')}}">SPM</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="{{ url('/kemaskini/kokurikulum') }}"><i class="fa fa-table fa-fw"></i> Ko-Kurikulum</a>
                            </li>
                            <li>
                                <a href="{{ url('/kemaskini/pengalaman') }}"><i class="fa fa-wrench fa-fw"></i> Pengalaman</a>
                            </li>
                            <li>
                                <a href="{{ url('/kemaskini/rujukan') }}"><i class="fa fa-sitemap fa-fw"></i>Rujukan</a>
                            </li>
                            
                        </ul>
                </div>
        </div>
        