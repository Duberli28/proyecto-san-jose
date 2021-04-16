<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
    
        <li class="nav-item">
            <a class="nav-link">
              Bienvenido {{ Auth::user()->name }} {{ Auth::user()->apellido_pat }} {{ Auth::user()->apellido_mat }}
            </a>
          </li>

      <li class="nav-item">
        <a class="nav-link"  href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                   document.getElementById('logout-form').submit()">

          <i class="fas fa-sign-out-alt"></i>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="post" display="none">
          @csrf
        </form>

      </li>
    </ul>
  </nav>