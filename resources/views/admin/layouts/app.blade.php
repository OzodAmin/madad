<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin - @yield('title')</title>

  <!-- Custom fonts for this template-->
  <link href="{{ asset('admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('admin/sb-admin-2.min.css') }}" rel="stylesheet">
  <link href="{{ asset('admin/datatables/DataTables-1.10.21/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
  @yield('css')

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-flag"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Exchange</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item {{ (request()->is('backend')) ? 'active' : '' }}">
        <a class="nav-link" href="/backend">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      @can('user-list')

        <li class="nav-item {{ (request()->is('backend/user')) ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('user.index') }}">
            <i class="fas fa-fw fa-user"></i>
            <span>Users</span></a>
        </li>
      @endcan

      @can('role-list')
        <li class="nav-item {{ (request()->is('backend/role')) ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('role.index') }}">
            <i class="fas fa-fw fa-key"></i>
            <span>Roles</span></a>
        </li>
      @endcan

      @can('permission-list')
        <li class="nav-item {{ (request()->is('backend/permission')) ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('permission.index') }}">
            <i class="fas fa-fw fa-user-lock"></i>
            <span>Permission</span></a>
        </li>
      @endcan

      @can('category-list')
        <li class="nav-item {{ (request()->is('backend/category')) ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('category.index') }}">
            <i class="fas fa-fw fa-newspaper"></i>
            <span>Category</span></a>
        </li>
      @endcan

      @can('news-list')
        <li class="nav-item {{ (request()->is('backend/news')) ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('news.index') }}">
            <i class="fas fa-fw fa-newspaper"></i>
            <span>News</span></a>
        </li>
      @endcan

      @can('comment-list')
        <li class="nav-item {{ (request()->is('backend/comment')) ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('comment.index') }}">
            <i class="fas fa-fw fa-comments"></i>
            <span>Comment</span></a>
        </li>
      @endcan

      <hr class="sidebar-divider">

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
          <i class="fas fa-fw fa-sign-out-alt"></i>
          <span>{{ __('Logout') }}</span></a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <div class="container-fluid mt-5">
          @yield('content')
        </div>
      </div>
    </div>
  </div>

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  
  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('admin/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('admin/sb-admin-2.min.js') }}"></script>
  <script src="{{ asset('admin/datatables/datatables.min.js') }}"></script>
  <script src="{{ asset('admin/datatables/DataTables-1.10.21/js/dataTables.bootstrap4.min.js') }}"></script>


  @yield('script')
</body>

</html>
