<div class="col-md-3 left_col">
  <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
      <a href="{{ route('admin.dashboard') }}" class="site_title"> <span>Juice United</span></a>
    </div>

    <div class="clearfix"></div>

    <div class="profile">
      <div class="profile_pic">
        <img src="" alt="..." class="img-circle profile_img">
      </div>
      <div class="profile_info">
        <span>Hai,</span>
        <h2></h2>
      </div>
    </div>

    <br />

    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
        <h3>General</h3>
        <ul class="nav side-menu">
          <li class="{{ Route::currentRouteNamed('admin.dashboard') ? 'active' : '' }}"><a href="{{ route('admin.dashboard') }}"><i class="fa fa-home"></i> Beranda </a></li>
          <li class="">
            <a>
              <i class="fa fa-beer"></i> Produk <span class="fa fa-chevron-down"></span>
            </a>
            <ul class="nav child_menu" style="">
              <li class=""><a href="">Produk</a></li>
              <li class=""><a href="">Produk Kategori</a></li>
            </ul>
          </li>
          <li class="">
            <a href=""><i class="fa fa-building-o"></i> Kontak </a>
          </li>
          <li class="">
            <a><i class="fa fa-bookmark"></i> Tentang <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li class="">Visi & Misi</a></li>
            </ul>
          </li>
          <li class=""><a href=""><i class="fa fa-share-alt"></i> Social Media </a></li>
        </ul>
      </div>
      <div class="menu_section">
        <h3>Extra</h3>
        <ul class="nav side-menu">
          <li class=""><a href=""><i class="fa fa-inbox"></i> Akses Log </a></li>
          <li class=""><a href=""><i class="fa fa-facebook"></i> Facebook Analytics </a></li>
          <li class=""><a href=""><i class="fa fa-users"></i> Users </a></li>
        </ul>
      </div>

    </div>
    <!-- /sidebar menu -->

    <!-- /menu footer buttons -->
    <div class="sidebar-footer hidden-small">
      <a href="" data-toggle="tooltip" data-placement="top" title="Users">
        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
      </a>
      <a href="" data-toggle="tooltip" data-placement="top" title="Inbox">
        <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
      </a>
      <a href="" data-toggle="tooltip" data-placement="top" title="Profile">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
      </a>
      <a href="" data-toggle="tooltip" data-placement="top" title="Logout">
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
      </a>
    </div>
    <!-- /menu footer buttons -->
  </div>
</div>
