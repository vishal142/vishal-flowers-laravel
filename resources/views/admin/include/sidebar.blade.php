<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="treeview {{ Route::currentRouteNamed('dashboard') ? 'active' : ''  }}">
          <a href="/admin/dashboard">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>

        <li class="treeview {{ Route::currentRouteNamed('category') ? 'active' : ''  }}">
          <a href="/admin/category">
            <i class="fa fa-dashboard"></i> <span>Category</span>
          </a>
        </li>
    

    </ul>
    </section>
    <!-- /.sidebar -->
  </aside>