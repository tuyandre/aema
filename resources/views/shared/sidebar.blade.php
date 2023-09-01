<nav class="bg-gray-100 sidebar sidebar-offcanvas" id="sidebar">
   
    <ul class="nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{url('dashboard')}}">
          <img src="{{asset('assets/images/icons/1.png')}}" alt="">
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pages/widgets.html">
            <i class="fa fa-users fa-2x" aria-hidden="true"></i>
          <span class="menu-title">Riders</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pages/forms/index.html">
            <i class="fa fa-car fa-2x" aria-hidden="true"></i>
          <span class="menu-title">Drivers</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pages/ui-elements/buttons.html">
          {{-- <img src="{{asset('assets/images/icons/4.png')}}" alt=""> --}}
          <i class="fa fa-ambulance fa-2x" aria-hidden="true"></i>
          <span class="menu-title">Ambulances</span>
        </a>
      </li>
      <li class="nav-item">
        <a style="color: blueviolet" class="nav-link" href="pages/tables/index.html">
            <i class="fa fa-history fa-2x" aria-hidden="true"></i>
          <span class="menu-title">Tracks</span>
        </a>
      <li class="nav-item">
        <a class="nav-link" href="{{route('profile.edit')}}">
          <img src="{{asset('assets/images/icons/10.png')}}" alt="">
          <span class="menu-title">Settings</span>
        </a>
      </li>
    </ul>
  </nav>