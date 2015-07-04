<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
      <img src="{{ Auth::user()->gravatar() }}" class="img-circle" alt="User Image" />
      </div>
      <div class="pull-left info">
        <p>{{ Auth::user()->getFullName() }}</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <ul class="sidebar-menu">
      <li class="header">MAIN NAVIGATION</li>
      <li>
        <a href="#"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
      </li>
      <li class="treeview {!! (Request::is('admin/activity*') ? 'active' : '') !!}">
        <a href="#">
          <i class="fa fa-files-o"></i>
          <span>Activity</span>
          <span class="label label-primary pull-right">4</span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ url('admin/activity') }}"><i class="fa fa-circle-o {!! (Request::is('admin/activity') ? 'text-red' : '') !!}"></i> All activity</a></li>
          <li><a href="{{ url('admin/activity/create') }}"><i class="fa fa-circle-o {!! (Request::is('admin/activity/create') ? 'text-red' : '') !!}"></i> Add new activity</a></li>
        </ul>
      </li>     
      <li class="treeview {!! (Request::is('admin/career*') ? 'active' : '') !!}">
        <a href="#">
          <i class="fa fa-table"></i> <span>Career</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ url('admin/career') }}"><i class="fa fa-circle-o {!! (Request::is('admin/career') ? 'text-red' : '') !!}"></i> All career</a></li>
          <li><a href="{{ url('admin/career/create') }}"><i class="fa fa-circle-o {!! (Request::is('admin/career/create') ? 'text-red' : '') !!}"></i> Add new carreer</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class="fa fa-th"></i> <span>System Configuration</span> <small class="label pull-right bg-green">new</small>
        </a>
      </li>
      <li class="header">LABELS</li>
      <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
      <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
      <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>