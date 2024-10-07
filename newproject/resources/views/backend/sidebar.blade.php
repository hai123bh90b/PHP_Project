<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="dashboard" class="brand-link">
      <img src="{{ asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <i class="fa fa-user" style="font-size:36px"></i>
          <!-- <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> -->
        </div>
        <div class="info">
          <a href="#" class="d-block">User</a>
        </div>
      </div>


  
       <!-- Sidebar Menu -->
       <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Dashboard Link -->
        <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link {{request()->routeIs('dashboard') ? 'active' : ''}}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Dashboard
                </p>
            </a>
        </li>

        <!-- Student Link -->
        <li class="nav-item">
            <a href="{{ url('student') }}" class="nav-link {{request()->routeIs('student.*') ? 'active' : ''}}">
                <i class="nav-icon fas fa-user-graduate"></i>
                <p>
                    Students
                </p>
            </a>
        </li>

        <li class="nav-item">
          <a href="{{ route('relation.index') }}" class="nav-link {{request()->routeIs('relation.*') ? 'active' : ''}}">
              <i class="nav-icon fas fa-users"></i>
              <p>Relation</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{ route('users.index') }}" class="nav-link {{ request()->routeIs('users.*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-users-cog"></i>
              <p>Users</p>
          </a>
      </li>

      <li class="nav-item">
        <a href="{{ route('employees.importExport') }}" class="nav-link {{ request()->routeIs('employees.importExport') ? 'active' : '' }}">
            <i class="nav-icon fas fa-file-csv"></i>
            <p>Import/Export</p>
        </a>
    </li>



    </ul>
</nav>

      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  