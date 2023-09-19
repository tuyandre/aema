<nav class="navbar navbar-default col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="bg-white text-center navbar-brand-wrapper">
      <a class="navbar-brand brand-logo" href="{{url('/dashboard')}}"><img style="width: 45px" src="{{asset('assets/img/logo.png')}}" /></a>
      <a class="navbar-brand brand-logo-mini" href="{{url('/dashboard')}}"><img style="width: 45px" src="{{asset('assets/img/logo.png')}}" alt=""></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center">
      <button class="navbar-toggler navbar-toggler d-none d-lg-block navbar-dark align-self-center mr-3" type="button" data-toggle="minimize">
        <span class="navbar-toggler-icon"></span>
      </button>

      <ul class="navbar-nav ml-lg-auto d-flex align-items-center flex-row">
        <li class="nav-item">
          <a class="nav-link profile-pic" href="{{route('profile.edit')}}"><img class="rounded-circle" style="width: 45px" src="{{asset('assets/img/logo.png')}}" alt="">{{ Auth::user()->name }}</a>
        </li>
        <li class="nav-item">
          {{-- <a class="nav-link" href="{{ route('logout') }}"><i class="fa fa-sign-out"></i></a> --}}
          <form method="POST" action="{{ route('logout') }}">
            @csrf

            <x-dropdown-link :href="route('logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();">
                {{-- {{ __('Log Out') }} --}}
                <i class="fa fa-sign-out fa-2x"></i>
            </x-dropdown-link>
        </form>
        </li>
      </ul>
      <button class="navbar-toggler navbar-dark navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>
