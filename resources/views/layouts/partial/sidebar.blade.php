<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
  <div class="position-sticky pt-3">
    <ul class="nav flex-column">

      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="{{ route('dashboard') }}">
          <span data-feather="home" class="align-text-bottom"></span>
          Dashboard
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ Request::is('order*') ? 'active' : '' }}" href="{{ route('orders.index') }}">
          <span data-feather="file" class="align-text-bottom"></span>
          Orders
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ Request::is('products*') ? 'active' : '' }}" href="{{ route('products.index') }}">
          <span data-feather="box" class="align-text-bottom"></span>
          Products
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">
          <span data-feather="users" class="align-text-bottom"></span>
          Customers
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">
          <span data-feather="bar-chart-2" class="align-text-bottom"></span>
          Reports
        </a>
      </li>
      
    </ul>

  </div>
</nav>