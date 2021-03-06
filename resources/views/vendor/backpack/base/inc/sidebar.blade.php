@if (Auth::check())
    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="{{ backpack_avatar_url(Auth::user()) }}" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>{{ Auth::user()->name }}</p>
            <small><small><a href="{{ route('backpack.account.info') }}"><span><i class="fa fa-user-circle-o"></i> {{ trans('backpack::base.my_account') }}</span></a> &nbsp;  &nbsp; <a href="{{ backpack_url('logout') }}"><i class="fa fa-sign-out"></i> <span>{{ trans('backpack::base.logout') }}</span></a></small></small>
          </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          {{-- <li class="header">{{ trans('backpack::base.administration') }}</li> --}}
          <!-- ================================================ -->
          <!-- ==== Recommended place for admin menu items ==== -->
          <!-- ================================================ -->
          <li><a href="{{ backpack_url('dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>
		<?php if (Auth::user()->hasRole('Super Admin') || Auth::user()->hasRole('Admin')) { ?>
			<li><a href="{{ backpack_url('menu-item') }}"><i class="fa fa-bars"></i> <span>Menu</span></a></li>
			<li><a href="{{ backpack_url('page') }}"><i class="fa fa-file-o"></i> <span>Pages</span></a></li>
			<li><a href="{{ backpack_url('slider') }}"><i class="fa fa-sliders"></i> <span>Slider</span></a></li>
			<li><a href="{{ backpack_url('testimonial') }}"><i class="fa fa-weixin"></i> <span>Testimonial</span></a></li>
		<?php } ?>		
			<li><a href="{{ backpack_url('advertisement') }}"><i class="fa fa-buysellads"></i> <span>Advertisemen</span></a></li>
			<li class="treeview">
				<a href="#"><i class="fa fa-cogs"></i> <span>Manage Party Plot</span> <i class="fa fa-angle-left pull-right"></i></a>
				<ul class="treeview-menu">
					<?php if (Auth::user()->hasRole('Super Admin') || Auth::user()->hasRole('Admin')) { ?>
					<li><a href="{{ backpack_url('category') }}"><i class="fa fa-list"></i> <span>Category</span></a></li>
					<?php } ?>
					<li><a href="{{ backpack_url('partyplot') }}"><i class="fa fa-glass"></i> <span>Party Plot</span></a></li>
				</ul>
			</li>
          
		<?php if (Auth::user()->hasRole('Super Admin') || Auth::user()->hasRole('Admin')) { ?>
          <!-- Users, Roles Permissions -->
          <li class="treeview">
            <a href="#"><i class="fa fa-group"></i> <span>Users, Roles, Permissions</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="{{ backpack_url('user') }}"><i class="fa fa-user"></i> <span>Users</span></a></li>
              <li><a href="{{ backpack_url('role') }}"><i class="fa fa-group"></i> <span>Roles</span></a></li>
              <li><a href="{{ backpack_url('permission') }}"><i class="fa fa-key"></i> <span>Permissions</span></a></li>
            </ul>
          </li>
		<?php } ?>  
		<?php if (Auth::user()->hasRole('Super Admin')) { ?>
          <li class="treeview">
              <a href="#"><i class="fa fa-cogs"></i> <span>Advanced</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="{{ backpack_url('elfinder') }}"><i class="fa fa-files-o"></i> <span>File manager</span></a></li>
                <li><a href="{{ backpack_url('backup') }}"><i class="fa fa-hdd-o"></i> <span>Backups</span></a></li>
                <li><a href="{{ backpack_url('log') }}"><i class="fa fa-terminal"></i> <span>Logs</span></a></li>
                <li><a href="{{ backpack_url('setting') }}"><i class="fa fa-cog"></i> <span>Settings</span></a></li>
              </ul>
          </li>
		<?php } ?>


          <!-- ======================================= -->
          {{-- <li class="header">{{ trans('backpack::base.user') }}</li>
          <li><a href="{{ url(config('backpack.base.route_prefix').'/logout') }}"><i class="fa fa-sign-out"></i> <span>{{ trans('backpack::base.logout') }}</span></a></li> --}}
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
@endif
