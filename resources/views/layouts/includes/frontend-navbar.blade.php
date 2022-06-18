<nav class="top-navbar" id="home">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-auto">
                <p>
                    <i class='bx bxs-envelope fs-5'></i>
                    <span class="m-3">nirdosh@gmail.com</span>

                    <i class='bx bxs-phone-call fs-5'></i>
                    <span class="m-3">9801014247</span>
                </p>
            </div>
            <div class="col-auto">
                <div class="social-links">
                    <a href="#"><i class='bx bxl-facebook' ></i></a>
                    <a href="#"><i class='bx bxl-twitter' ></i></a>
                    <a href="#"><i class='bx bxl-youtube' ></i></a>
                    <a href="#"><i class='bx bxl-instagram' ></i></a>

                </div>
            </div>
        </div>
    </div>

</nav>
<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top py-3">
    <div class="container">
      <a class="navbar-brand" href="#">Manilake <span> Law Associates</span></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

          {{--  <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{url('/#home')}}">Home</a>
          </li>  --}}

          @foreach ($menu as $menus )
            <li class="nav-item dropdown">
                {{--  Submenu  --}}
                @if($menus->subMenus()->exists())
                    <a class="nav-link dropdown-toggle" href="{{route($menus->route)}}" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{$menus->title}}
                    </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @foreach ($menus->subMenus as $submenus )
                                <li><a class="dropdown-item" href="{{route($submenus->route)}}">{{$submenus->title}}</a></li>
                                @endforeach
                            </ul>
                @else
                {{--  Main menu  --}}
                    <a class="nav-link" href="{{route($menus->route)}}">
                        {{$menus->title}}
                    </a>
                @endif
            </li>
          @endforeach

          {{--  <li class="nav-item">
            <a class="nav-link" href="{{url('/#about')}}">About</a>
          </li>  --}}
          {{--  <li class="nav-item">
            <a class="nav-link" href="{{url('/#services')}}">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/#activities')}}">Our Activities</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/#review')}}">Review</a>
          </li>  --}}
          {{--  <li class="nav-item">
            <a class="btn btn-brand ms-lg-3" href="{{url('/#contact')}}">Contact</a>
          </li>  --}}

          <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest


      </div>
    </div>
  </nav>
