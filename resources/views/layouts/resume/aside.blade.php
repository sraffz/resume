        <!-- ============================================================== -->
                <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('/profile') }}" aria-expanded="false">
                                <i class="mdi mdi-account-network"></i>
                                <span class="hide-menu">Profil</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('/kemaskini/gambar') }}" aria-expanded="false">
                                <i class="mdi mdi-account-box-outline"></i>
                                <span class="hide-menu">Gambar</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('/kemaskini/maklumatdiri') }}" aria-expanded="false">
                                <i class="mdi mdi-av-timer"></i>
                                <span class="hide-menu">Maklumat Diri</span>
                            </a>
                        </li>
                         <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"  aria-expanded="false">
                                <i class="mdi mdi-arrange-bring-forward"></i>
                                <span class="hide-menu">Maklumat Akademik</span>
                            </a>
                             <ul aria-expanded="false" class="collapse  first-level">
                                    <li class="sidebar-item"> 
                                        <a href="{{ url('/kemaskini/ijazah') }}" class="sidebar-link"><i class="mdi mdi-book-multiple-variant"></i><span class="hide-menu">Ijazah</a>
                                    </span></a></li>
                                    <li class="sidebar-item">
                                        <a href="{{ url('/kemaskini/diploma')}}" class="sidebar-link"><i class="mdi mdi-book-multiple-variant"></i><span class="hide-menu">Diploma</a>
                                    </span></a></li>
                                    <li class="sidebar-item">
                                        <a href="{{ url('/kemaskini/tahfiz')}}" class="sidebar-link"><i class="mdi mdi-book-multiple-variant"></i><span class="hide-menu">Tahfiz</a>
                                    </span></a></li>
                                    <li class="sidebar-item">
                                        <a href="{{ url('/kemaskini/stam')}}" class="sidebar-link"><i class="mdi mdi-book-multiple-variant"></i><span class="hide-menu">STAM</a>
                                    </span></a></li>
                                    <li class="sidebar-item">
                                        <a href="{{ url('/kemaskini/sijil')}}" class="sidebar-link"><i class="mdi mdi-book-multiple-variant"></i><span class="hide-menu"> Sijil</a>
                                    </span></a></li>
                                    <li class="sidebar-item">
                                        <a href="{{ url('/kemaskini/spm')}}" class="sidebar-link"><i class="mdi mdi-book-multiple-variant"></i><span class="hide-menu">SPM</a>
                                    </span></a></li>
                                </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('/kemaskini/kokurikulum') }}" aria-expanded="false">
                                <i class="mdi mdi-border-none"></i>
                                <span class="hide-menu">Ko-Kurikulum</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('/kemaskini/pengalaman') }}" aria-expanded="false">
                                <i class="mdi mdi-face"></i>
                                <span class="hide-menu">Pengalaman</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('/kemaskini/rujukan') }}" aria-expanded="false">
                                <i class="mdi mdi-file"></i>
                                <span class="hide-menu">Rujukan</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('/kemaskini/jawatan') }}" aria-expanded="false">
                                <i class="mdi mdi-link"></i>
                                <span class="hide-menu">Jawatan</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ url('/tetapan') }}" aria-expanded="false">
                                <i class="mdi mdi-account-settings-variant"></i>
                                <span class="hide-menu">Tetapan</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"  href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" aria-expanded="false">
                                <i class="mdi mdi-logout"></i>
                                <span class="hide-menu">Log Keluar</span>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                                </form>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->