<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="{{ route('admin.dashboard') }}">
            <img src="{{ asset('logo/vlogo.png') }}" style="height:150px!important; width:250px!important" alt="logo" />
        </a>
        <a class="sidebar-brand brand-logo-mini" href="{{ route('admin.dashboard') }}"><img src="{{ asset('logo/logo-mini.png') }}" alt="logo" /></a>
    </div>
    <ul class="nav">
        <li class="nav-item profile">
            <div class="profile-desc">
                <div class="profile-pic">
                    <div class="count-indicator">
                        <img class="img-xs rounded-circle "
                            src="{{ isset(auth()->user()->image) ? asset(auth()->user()->image) : asset('admin-asset/assets/images/faces/face15.jpg')}}" alt="">
                        <span class="count bg-success"></span>
                    </div>
                    <div class="profile-name">
                        <h5 class="mb-0 font-weight-normal">{{ auth()->user()->first_name }}</h5>
                        <span>{{ auth()->user()->last_name }}</span>
                    </div>
                </div>
                <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
                <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list"
                    aria-labelledby="profile-dropdown">
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-settings text-primary"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-onepassword  text-info"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                                <i class="mdi mdi-calendar-today text-success"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                        </div>
                    </a>
                </div>
            </div>
        </li>
        <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('admin.dashboard') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-speedometer"></i>
                </span>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <span class="menu-icon">
                    <i class="mdi mdi-security"></i>
                </span>
                <span class="menu-title">Admin Mgt</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('users.index') }}">User</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('address.index') }}">User Address</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('admins.index') }}"> Admin </a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('categories.index') }}"> Categories </a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('admin.subcategories.index') }}"> Sub Categories </a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('brands.index') }}">Brands</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('products.index') }}"> Products </a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('admin.orders.index') }}"> Orders </a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('units.index') }}"> Units </a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('discounts.index') }}"> Discounts </a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('teams.index') }}">Team Members</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('sociallinks.index') }}">Social Links</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
                aria-controls="ui-basic">
                <span class="menu-icon">
                    <i class="mdi mdi-laptop"></i>
                </span>
                <span class="menu-title">Marketing Mgt</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('banners.index') }}">Banners</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('contacts.index') }}"> Inbox </a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('us.index') }}"> About Vgears </a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('blogs.index') }}"> Blogs </a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('admin.subscribe') }}"> Subscriber </a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="#ui-basic">
                <span class="menu-icon">
                    <i class="mdi mdi-settings text-success"></i>
                </span>
                <span class="menu-title">Settings</span>
            </a>
        </li>
    </ul>
</nav>
