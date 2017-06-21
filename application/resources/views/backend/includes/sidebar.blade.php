<section class="sidebar">
  <div class="user-panel">
    <div class="pull-left image">
      <img src="{{ asset('backend/dist/img/avatar.png') }}" class="img-circle" alt="User Image">
    </div>
    <div class="pull-left info">
      <p>Halo Admin</p>
      <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      <small>Admin</small>
    </div>
  </div>
  <ul class="sidebar-menu">
    <li class="header">MAIN NAVIGATION</li>
    <li class="{{ Route::is('admin*') ? 'active' : ''}}">
      <a href="{{ route('admin.dashboard')}}">
        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
      </a>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-edit"></i>
        <span>Reservation Management</span>
        <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="treeview-menu">
        <li class=""><a href=""><i class="fa fa-circle-o"></i> Reservation List</a></li>
        <li class=""><a href=""><i class="fa fa-circle-o"></i> Reservation Cancelled</a></li>
        <li class=""><a href=""><i class="fa fa-circle-o"></i> Reservation Block</a></li>
        <li class=""><a href=""><i class="fa fa-circle-o"></i> Group Booking Payment</a></li>
        <li><a href=""><i class="fa fa-circle-o"></i> Reservation Report</a></li>
      </ul>
    </li>
    <li class="header">SETTING NAVIGATION</li>
  </ul>
</section>
