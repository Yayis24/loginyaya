<!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{asset('home')}}" class="nav-link">{{trans('menu.Home')}}</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" href="#" role="button" data-toggle="dropdown">
          <i class="fas fa-globe"></i>
        </a>
        <div class="dropdown-menu p-0">
          <a href="{{ url ('lang', ['es']) }}" class="dropdown-item">Es</a>
          <a href="{{ url ('lang', ['en']) }}" class="dropdown-item">En</a>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->