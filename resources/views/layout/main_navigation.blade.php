<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto">
                <a class="navbar-brand" href="{{ url('/') }}"><span class="brand-logo">
                    <img class="latest-logo" src="{{asset(get_settings('logo'))}}" alt="Maxhype" width="150" height="30" ></span>
                    <h2 class="brand-text"></h2>
                </a>
            </li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="nav-item dashboard"><a class="d-flex align-items-center" href="{{url('admin/home')}}"><i data-feather="home"></i><span class="menu-title text-truncate">Dashboard</span></a>
            <li class="nav-item"><a class="d-flex align-items-center usermgt" href="#"><i data-feather="users"></i><span class="menu-title text-truncate">Users</span></a>
                <ul class="menu-content dfdsfsd">
                    <li class="roles"><a class="d-flex align-items-center" href="{{ url('admin/roles') }}"><i data-feather="circle"></i><span class="menu-item text-truncate">Roles</span></a>
                    </li>
                    <li class="users"><a class="d-flex align-items-center" href="{{ url('admin/users') }}"><i data-feather="circle"></i><span class="menu-item text-truncate">User List</span></a>
                    </li>
                </ul>
            </li>
            <li class="nav-item customer-mng"><a class="d-flex align-items-center" href="{{url('admin/order')}}"><i data-feather="square"></i><span class="menu-title text-truncate">Orders</span></a>
            </li>
            <li class="nav-item box-mng"><a class="d-flex align-items-center" href="{{ url('admin/boxes') }}"><i data-feather="box"></i><span class="menu-title text-truncate">Boxes</span></a>
            </li>
             <li class="nav-item pkg-mng"><a class="d-flex align-items-center" href="{{ url('admin/package') }}"><i data-feather="package"></i><span class="menu-title text-truncate">Packages</span></a>
            </li>
            <li class="nav-item shipment-mng"><a class="d-flex align-items-center" href="{{ url('admin/shipment') }}"><i data-feather="codesandbox"></i><span class="menu-title text-truncate">Shipments</span></a>
            </li>
            <li class="nav-item inquiry"><a class="d-flex align-items-center" href="{{url('admin/inquiry')}}"><i data-feather="archive"></i><span class="menu-title text-truncate">Inquiry</span></a>
            </li>
             <li class="roles customer_desc"><a class="d-flex align-items-center" href="{{ url('admin/descriptions') }}"><i data-feather="folder"></i><span class="menu-item text-truncate">Terms</span></a>
            </li>
            <li class=" nav-item settings"><a class="d-flex align-items-center" href="{{url('admin/settings')}}"><i data-feather='settings'></i><span class="menu-title text-truncate">Settings</span></a>
            </li>
        </ul>
    </div>
</div>

<!-- END: Main Menu-->

