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
                    <a class="nav-link {{ (request()->is('category_front')) ? 'active' : '' }}" href="{{ url('category_front') }}">Categories</a>
                </li>
                @guest
                <li class="nav-item">
                    <a class="nav-link {{ (request()->is('register')) ? 'active' : '' }}" href="/register">Sign Up</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-success nav-link px-4 text-white {{ (request()->is('login')) ? 'active' : '' }}" href="/login">Sign In</a
                >
              </li>
            @endguest
            
          </ul>
        </div>
    </div>
</nav>