<a href="{{ route('admin.dashboard') }}" class="logo">
  <span class="logo-mini"><b>JU I</b></span>
  <span class="logo-lg" style="font-size:18px;"><b>Juice United</b> Indonesia</span>
</a>
<nav class="navbar navbar-static-top" role="navigation">
  <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
    <span class="sr-only">Toggle navigation</span>
  </a>
  <div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
      <li class="dropdown user user-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="{{ asset('backend/images/profile/').'/'.Auth::user()->avatar }}" class="user-image" alt="User Image">
          <span class="hidden-xs">
            {{ Auth::user()->name }}
          </span>
        </a>
        <ul class="dropdown-menu">
          <li class="user-header">
            <img src="{{ asset('backend/images/profile/').'/'.Auth::user()->avatar }}" class="img-circle" alt="User Image">
            <p>
              {{ Auth::user()->name }}
              <small>
                {{ Auth::user()->role->title }}
              </small>
            </p>
          </li>

          <li class="user-footer">
            <div class="pull-left">
              <a href="{{ route('user.edit') }}" class="btn btn-default btn-flat">Profile</a>
            </div>
            <div class="pull-right">
              <a href="{{ route('logout') }}" class="btn btn-default btn-flat">Sign out</a>
            </div>
          </li>
        </ul>
      </li>
    </ul>
  </div>
</nav>
