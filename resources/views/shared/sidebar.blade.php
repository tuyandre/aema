<nav class="bg-gray-100 sidebar sidebar-offcanvas" id="sidebar">

    <ul class="nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{url('dashboard')}}">
          <img src="{{asset('assets/images/icons/1.png')}}" alt="">
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('admin.riders')}}">
            <i class="fa fa-users fa-2x" aria-hidden="true"></i>
          <span class="menu-title">Customers</span>
        </a>
      </li>
        <li class="nav-item">
            <a style="color: blueviolet" class="nav-link" href="{{route('admin.rider.history')}}">
                <i class="fa fa-history fa-2x" aria-hidden="true"></i>
                <span class="menu-title">Customers History</span>
            </a>
        </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('admin.drivers')}}">
            <i class="fa fa-car fa-2x" aria-hidden="true"></i>
          <span class="menu-title">Drivers</span>
        </a>
      </li>

        <li class="nav-item">
            <a style="color: blueviolet" class="nav-link" href="{{route('admin.driver.history')}}">
                <i class="fa fa-history fa-2x" aria-hidden="true"></i>
                <span class="menu-title">Driver History</span>
            </a>
        </li>

    </ul>
  </nav>
