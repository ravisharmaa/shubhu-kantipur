<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('assets/backend/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{Auth::user()->name}}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="{{Request::is('admin/dashboard*') ? 'active' : ''}}">
                <a href="{{route('admin.dashboard.index')}}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <li class="{{Request::is('admin/gallery/*') ? 'active' : ''}}">
                <a href="{{route('admin.gallery.index')}}">
                    <i class="fa fa-image"></i> <span>Gallery Management</span>
                </a>
            </li>
            <li class="{{Request::is('admin/facility/*') ? 'active' : ''}}">
                <a href="{{route('admin.facility.index')}}">
                    <i class="fa fa-taxi"></i> <span>Facility Management</span>
                </a>
            </li>
            <li class="{{Request::is('admin/room/*') ? 'active' : ''}}">
                <a href="{{route('admin.room.index')}}">
                    <i class="fa fa-bed"></i> <span>Rooms Management</span>
                </a>
            </li>
            <li class="{{Request::is('admin/site-configs/*') ? 'active' : ''}}">
                <a href="{{route('admin.site_configs.edit')}}">
                    <i class="fa fa-cogs"></i> <span>Site Configs</span>
                </a>
            </li>
            <li class="">
                <a href="{{url('/logout')}}">
                    <i class="fa fa-power-off"></i> <span>Log Out</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>