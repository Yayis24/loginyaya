
<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{asset('home')}}" class="brand-link">
      <img src="{{asset ('AdminLTE/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">ADSO</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset ('AdminLTE/dist/img/descarga.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
            <?php 
            $name = explode(" ", Auth::user()->name);
             ?>

             {{$name[0]}}
              <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                <i style="color:gray" class="fas fa-sign-out-alt"></i>
                </a>

               <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
               @csrf
              </form>
            </a>
        </div>
      </div>

      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            @can('admin.prueba')
          <li class="nav-item">
            <a href="{{asset('prueba')}}" class="nav-link">
              <i class="fas fa-user-tie"></i>
              <p>
                {{trans('menu.Us')}}
              </p>
            </a>
          </li>
          @endcan
          @can('admin.nuevaprueba')
          <li class="nav-item">
            <a href="{{asset('nuevaprueba')}}" class="nav-link">
              <i class="fas fa-file-alt"></i>
              <p>
                {{trans('menu.Test')}}

              </p>
            </a>
          </li>
          @endcan
          @can('admin.apprentices')
          <li class="nav-item">
            <a href="{{asset('apprentices')}}" class="nav-link">
              <i class="fas fa-users"></i>
              <p>
                {{trans('menu.Apprentices')}}
              </p>
            </a>
          </li>
          @endcan

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>