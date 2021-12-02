<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="navbar-brand-wrapper d-flex align-items-center">
      <a class="navbar-brand brand-logo" href="home">
        <img src="{{asset('lte')}}/images/logo.svg" alt="logo" class="logo-dark" />
      </a>
      <a class="navbar-brand brand-logo-mini" href="{{asset('lte')}}/index.html"><img src="{{asset('lte')}}/images/logo-mini.svg" alt="logo" /></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1">
      <h5 class="mb-0 font-weight-medium d-none d-lg-flex">Welcome!</h5>
      <ul class="navbar-nav navbar-nav-right ml-auto">
        <form class="search-form d-none d-md-block" action="#">
          <i class="icon-magnifier"></i>
          <input type="search" class="form-control" placeholder="Cari Apa Hayo" title="Search here">
        </form>
        <li class="nav-item"><a href="#" class="nav-link"><i class="icon-basket-loaded"></i></a></li>
        <li class="nav-item"><a href="#" class="nav-link"><i class="icon-chart"></i></a></li>
        <li class="nav-item dropdown">
          <a class="nav-link count-indicator message-dropdown" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
            <i class="icon-speech"></i>
        </li>
        <li class="nav-item dropdown language-dropdown d-none d-sm-flex align-items-center">
          <a class="nav-link d-flex align-items-center dropdown-toggle" id="LanguageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
            <div class="d-inline-flex mr-3">
              <i class="flag-icon flag-icon-us"></i>
            </div>
            <span class="profile-text font-weight-normal">English</span>
          </a>
          <div class="dropdown-menu dropdown-menu-left navbar-dropdown py-2" aria-labelledby="LanguageDropdown">
            <a class="dropdown-item">
              <i class="flag-icon flag-icon-us"></i> English </a>
            <a class="dropdown-item">
              <i class="flag-icon flag-icon-fr"></i> French </a>
            <a class="dropdown-item">
              <i class="flag-icon flag-icon-ae"></i> Arabic </a>
            <a class="dropdown-item">
              <i class="flag-icon flag-icon-ru"></i> Russian </a>
          </div>
        </li>
        <!-- Authentication Links -->
        @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
      </ul>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="icon-menu"></span>
      </button>
    </div>
</nav>