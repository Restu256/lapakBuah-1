<nav class="
        navbar navbar-expand-lg navbar-light navbar-store
        fixed-top
        navbar-fixed-top d-flex flex-column
      " data-aos="fade-down">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="/images/logo_lapak_buah/Logo-web-lapakbuah 1.png" alt="" style="max-width: 120px" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link {{ (request()->is('/')) ? 'active' : '' }}" href="/">Home </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (request()->is('category_front')) ? 'active' : '' }}" href="/category_front">Categories</a>
                </li>
                <li class="nav-item">
                    <input type="checkbox" id="button_search" class="checkbox-lg d-none" name="button_search" value="bayar nanti">
                    <label class="nav-link button-inputer" for="button_search"><i class="fa fa-search fa-lg" aria-hidden="true"></i></label>
                </li>
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="/register">Sign Up</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-success nav-link px-4 text-white" href="/login">Sign In</a
                >
              </li>
            @endguest
          </ul>
          @auth
          <!-- Desktop Menu -->
          <ul class="navbar-nav d-none d-lg-flex">
            <li class="nav-item dropdown">
              <a
                href="#"
                class="nav-link"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
              >
                <img
                  src="images/user_pc.png"
                  alt=""
                  class="rounded-circle mr-2 profile-picture"
                />
                Hi, {{ Auth::user()->name }}
              </a>
                    <div class="dropdown-menu bg-white">
                        <a href="dashboard" class="dropdown-item">Dashboard</a>
                        <a href="#" class="dropdown-item">Settings</a
                >
                <div class="dropdown-divider"></div>
                <a href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="dropdown-item">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link d-inline-block">
                      <img src="/images/shopping-cart-filled.svg" alt="" />
                      <div class="cart-badge">5</div>
                {{-- @php
                    // $carts = \App\Cart::where('users_id', Auth::user()->id)->count();
                @endphp
                @if ($carts > 0)
                  <img src="/images/shopping-cart-filled.svg" alt="" />
                  <div class="cart-badge">5</div>
                @else
                  <img src="/images/shopping-cart-empty.svg" alt="" />
                @endif --}}
              </a>
                </li>
            </ul>

            <ul class="navbar-nav d-block d-lg-none">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                Hi, {{ Auth::user()->name }}
              </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link d-inline-block">
                Cart
              </a>
                </li>
            </ul>
            @endauth

        </div>
    </div>
    <div class="container d-flex justify-content-center" id="form-search">
        <!-- <form method="POST" class="bg-dark col-md-12" action="#" style="text-align: center;"> -->
        <input class="form-control search-form mt-2" id="search-form" type="search" placeholder="Search..">
        <!-- </form> -->
    </div>
</nav>