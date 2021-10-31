<!-- Main Header -->
<div class="main-header header d-print-none">
  <div class="header-container">
    <div class="header-left">
      <div class="navigation-toggler">
        <a href="#" data-action="navigation-toggler">
          <i data-feather="menu"></i>
        </a>
      </div>
      <!-- Logo -->
      <div class="header-logo">
        <a href="{{ admin_url('/') }}" class="logo">
          {!! config('admin.logo', config('admin.name')) !!}
        </a>
      </div>
    </div>

    <div class="header-body">
      <div class="header-body-left">
        <ul class="navbar-nav">
          {!! Admin::getNavbar()->render('left') !!}
        </ul>
      </div>
      <div class="header-body-right">
        <ul class="navbar-nav">

        {!! Admin::getNavbar()->render() !!}

        <!-- User Account Menu -->
          <li class="dropdown nav-item user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
              <figure class="avatar avatar-sm">
                <!-- The user image in the navbar-->
                <img src="{{ Admin::user()->avatar }}" class="user-image rounded-circle" alt="User Image">
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
              </figure>
              <span class="ml-2 d-sm-inline d-none">{{ Admin::user()->name }}</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
              <div class="text-center py-4">
                <figure class="avatar avatar-lg mb-3 border-0">
                  <img src="{{ Admin::user()->avatar }}"
                       class="rounded-circle" alt="image">
                </figure>
                <h5 class="text-center">{{ Admin::user()->name }}</h5>
                <div class="mb-3 small text-center text-muted">Member since admin {{ Admin::user()->created_at }}</div>
                <a href="{{ admin_url('auth/setting') }}" class="btn btn-outline-light btn-rounded">{{ trans('admin.setting') }}</a>
              </div>
              <div class="list-group">
                <a href="{{ admin_url('auth/logout') }}" class="list-group-item text-danger">{{ trans('admin.logout') }}</a>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
