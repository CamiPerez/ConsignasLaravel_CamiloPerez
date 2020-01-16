<nav class="navbar">
  <div class="rightbar">
    <ul>
      <li>
        <div id="login" class="logout">
          @if (Route::has('login'))
          @auth
        <div id="login" class="login">
      </li>
      <li>
        <p href="#" role="button" aria-haspopup="true" aria-expanded="false">
          Hola {{ Auth::user()->name }}!
        </p>
          <div>
            <a href="{{ route('logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
            </form>
          </div>
      </li>
  </div>

              @else
            <li>
              <a href="{{ route('login') }}">Log in</a>
            </li>
              @if (Route::has('register'))
            <li>
              <a href="{{ route('register') }}">Sign up</a>
            </li>
              @endif
          @endauth
      @endif
    </ul>
  </div>
  <div class="leftbar">
    <ul>
      <li><a href="{{ url('/') }}">Inicio</a></li>
      <li><a href="{{ url('/peliculas') }}">Películas</a></li>
      <li><a href="{{ url('/actores') }}">Actores</a></li>
      <li><a href="{{ url('/generos') }}">Géneros</a></li>
    </ul>
  </div>



</nav>

{{-- @if (Route::has('login'))
    <div class="top-right links">
        @auth
          <p>  Hola {{ Auth::user()->name }}!</p>
        @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}">Registro</a>
            @endif
        @endauth
    </div>
@endif --}}
