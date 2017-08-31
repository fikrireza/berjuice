<section class="sidebar">
  <div class="user-panel">
    <div class="pull-left image">
      <img src="{{ asset('backend/images/profile/').'/'.Auth::user()->avatar }}" class="img-circle" alt="User Image">
    </div>
    <div class="pull-left info">
      <p>Halo, {{ Auth::user()->name }}</p>
      <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      <small>{{ Auth::user()->role->title }}</small>
    </div>
  </div>
  <ul class="sidebar-menu">
    <li class="header">MAIN NAVIGATION</li>
    <li class="{{ Route::is('admin*') ? 'active' : ''}}">
      <a href="{{ route('admin.dashboard')}}">
        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
      </a>
    </li>
    <li class="treeview {{ Route::is('recipe*') ? 'active' : '' }}">
      <a href="#">
        <i class="fa fa-edit"></i>
        <span>Manage Recipe</span>
        <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="treeview-menu">
        <li class="{{ Route::is('recipe.*') ? 'active' : '' }}">
          <a href="{{ route('recipe.index') }}"><i class="fa fa-circle-o"></i> Recipe List</a>
        </li>
        <li class="{{ Route::is('recipeCategory*') ? 'active' : ''}}">
          <a href="{{ route('recipeCategory.index') }}"><i class="fa fa-circle-o"></i> Recipe Categories</a>
        </li>
      </ul>
    </li>
    <li class="header">SETTING NAVIGATION</li>
    <li class="{{ Route::is('user*') ? 'active' : ''}}">
      <a href="{{ route('user.index')}}">
        <i class="fa fa-users"></i> <span>Manage User</span>
      </a>
    </li>
    <li class="{{ Route::is('config*') ? 'active' : ''}}">
      <a href="{{ route('config.index')}}">
        <i class="fa fa-gear"></i> <span>General Configuration</span>
      </a>
    </li>
  </ul>
</section>
