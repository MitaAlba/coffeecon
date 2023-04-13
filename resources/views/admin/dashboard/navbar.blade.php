<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
      <ul class="nav flex-column">
        {{-- <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">
            <span data-feather="home" class="align-text-bottom"></span>
            Dashboard
          </a>
        </li> --}}
        <li class="nav-item">
          <a class="nav-link" href="/admin/usuarios">
            <span data-feather="bar-chart-2" class="align-text-bottom"></span>
            Users
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/admin/ordenes">
            <span data-feather="file" class="align-text-bottom"></span>
            Orders
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/admin/productos">
            <span data-feather="shopping-cart" class="align-text-bottom"></span>
            Products
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/admin/medidas">
            <span data-feather="users" class="align-text-bottom"></span>
            Sizes
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/admin/categorias">
            <span data-feather="bar-chart-2" class="align-text-bottom"></span>
            Categories
          </a>
        </li>
        <li class="nav-item">
          {{-- Revisar si es correcta la url segun web.php--}}
          {{-- <a class="nav-link" href="{{url('/admin/menu')}}"> --}}
          <a class="nav-link" href="/admin/tiendas">
            <span data-feather="layers" class="align-text-bottom"></span>
            Stores
          </a>
        </li>
      </ul>
    </div>
  </nav>