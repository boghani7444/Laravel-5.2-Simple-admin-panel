<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ URL::asset('assets/admin') }}/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="{{ $menu == "dashboard" ? 'active' : '' }}"><a href="{{ url('admin') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            <li class="{{ $menu == "users_list" ? 'active' : '' || $menu=="user_add" ? 'active' : '' }} treeview">
                <a href="javascript:void(0);">
                    <i class="fa fa-dashboard"></i> <span>User</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ $menu == "users_list" ? 'active' : '' }}"><a href="{{ url('admin/user') }}"><i class="fa fa-list"></i>User List</a></li>
                    <li class="{{ $menu == "user_add" ? 'active' : '' }}"><a href="{{ url('admin/user/create') }}"><i class="fa fa-plus"></i>User Add</a></li>
                </ul>
            </li>
            <li><a href="{{ url('admin/logout') }}"><i class="fa fa-sign-out"></i> <span>Sign Out</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>