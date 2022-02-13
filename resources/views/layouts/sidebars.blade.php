  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          {{-- <img src="{{ url('storage/uploads/'. Auth::file()->name) }}" class="img-circle" alt="User Image"> --}}
          {{-- <img src="{{ url('storage/uploads/'.$imgs->name) }}" alt="" width="160" height="180"> --}}
        </div>
        <div class="pull-left info">
          {{-- <p>{{ Auth::user()->name}}</p> --}}
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="/"><i class="fa fa-link"></i> <span>Dashboard</span></a></li>
        <li>{{-- <a href="{{ url('dashboard') }}"><i class="fa fa-link"></i> <span>Employee Management</span></a> --}}</li>
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>System Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
       {{--      <li><a href="{{ url('dashboard') }}">Department</a></li>
            <li><a href="{{ url('dashboard') }}">Division</a></li>
            <li><a href="{{ url('dashboard') }}">Country</a></li>
            <li><a href="{{ url('dashboard') }}">State</a></li>
            <li><a href="{{ url('dashboard') }}">City</a></li>
            <li><a href="{{ url('dashboard') }}">Report</a></li> --}}
          </ul>
        </li>
        <li>{{-- <a href="{{ route('dashboard') }}"><i class="fa fa-link"></i> <span>User management</span></a> --}}User management</li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>