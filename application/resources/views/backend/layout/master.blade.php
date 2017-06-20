<!DOCTYPE html>
<html>
  <head>
    @yield('title')
    @include('backend.includes.head')
    @yield('headscript')
  </head>
  <body class="hold-transition skin-red sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        @include('backend.includes.header')
      </header>
      <aside class="main-sidebar">
        @include('backend.includes.sidebar')
      </aside>

      <div class="content-wrapper">
        <section class="content-header">
          @yield('breadcrumb')
        </section>

        <section class="content">
          @yield('content')
        </section>
      </div>

      <footer class="main-footer">
        @include('backend.includes.footer')
      </footer>

    </div>
    @include('backend.includes.bottomscript')
    @yield('script')
  </body>
</html>
