<!--begin::Header-->
<nav class="app-header navbar navbar-expand bg-body"> <!--begin::Container-->
    <div class="container-fluid">
        <!--begin::Start Navbar Links-->
        <ul class="navbar-nav">
            <li class="nav-item"> <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button"> <i class="bi bi-list"></i> </a> </li>
        </ul>
        <!--end::Start Navbar Links-->

        <!--begin::End Navbar Links-->
        <ul class="navbar-nav ms-auto">

            <!--begin::User Menu Dropdown-->
            <li class="nav-item dropdown user-menu"> <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"> <img src="{{ url('assets/img/user2-160x160.jpg')}}" class="user-image rounded-circle shadow" alt="User Image"> <span class="d-none d-md-inline">Alexander Pierce</span> </a>
                <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end"> <!--begin::User Image-->
                    <li class="user-header text-bg-primary"> <img src="{{ url('assets/img/user2-160x160.jpg')}}" class="rounded-circle shadow" alt="User Image">
                        <p>
                            Alexander Pierce - Web Developer
                            <small>Member since Nov. 2023</small>
                        </p>
                    </li> <!--end::User Image-->
                    <!--begin::Menu Footer-->
                    <li class="user-footer"> <a href="#" class="btn btn-default btn-flat">Profile</a> <a href="#" class="btn btn-default btn-flat float-end">Sign out</a> </li> <!--end::Menu Footer-->
                </ul>
            </li> <!--end::User Menu Dropdown-->

        </ul> <!--end::End Navbar Links-->
    </div> <!--end::Container-->
</nav> <!--end::Header-->

<!--begin::Sidebar-->
<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <!--begin::Sidebar Brand-->
    <div class="sidebar-brand">
        <!--begin::Brand Link-->
        <a href="#" class="brand-link">
            <!--begin::Brand Image-->
            <img src="{{ url('#')}}" alt="" class="brand-image opacity-75 shadow">
            <!--end::Brand Image--> <!--begin::Brand Text-->
            <span class="brand-text fw-light">Project X</span>
            <!--end::Brand Text-->
        </a>
        <!--end::Brand Link-->
    </div> <!--end::Sidebar Brand-->

    <!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper">
        <nav class="mt-2"> <!--begin::Sidebar Menu-->
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                @if(session('hotel_id'))
                <li class="nav-item">
                    <a href="{{ route('show_rooms',  $hotel)}}" class="nav-link @if(Request::segment(2) == 'dashboard') active @endif">
                        <i class="nav-icon bi bi-speedometer"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                @endif
                @if(!session()->has('hotel_id'))
                <li class="nav-item">
                    <a href="{{ url('hotel_registration_form')}}" class="nav-link @if(Request::segment(2) == 'admin') active @endif">
                        <i class="nav-icon bi bi-person"></i>
                        <p>
                            Add Hotel
                        </p>
                    </a>
                </li>
                @endif
                @if(session('hotel_id'))
                <li class="nav-item">
                    <a href="{{ route('room_registration_form',  $hotel)}}" class="nav-link @if(Request::segment(2) == 'room') active @endif">
                        <i class="nav-icon bi bi-house"></i>
                        <p>
                            Rooms
                        </p>
                    </a>
                </li>
                @endif

                <li class="nav-item">
                    <a href="{{ url('vendor_logout')}}" class="nav-link">
                        <i class="nav-icon bi bi-person"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>
            </ul> <!--end::Sidebar Menu-->
        </nav>
    </div> <!--end::Sidebar Wrapper-->
</aside> <!--end::Sidebar-->