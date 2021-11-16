<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>@yield('title')</title>

    @stack('prepend-style')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    
    
    <!-- icon fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

    <link href="/style/main.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.25/datatables.min.css"/>
    
    @stack('addon-style')
  </head>

  <body>
    <div class="page-dashboard">
      <div class="d-flex" id="wrapper" data-aos="fade-right">
        <!-- sidebar -->
        <div class="border-right" id="sidebar-wrapper">
          <div class="sidebar-heading text-center">
            <img
              src="/images/logo.svg"
              alt=""
              class="my-4" style="max-width: 120px"
            />
          </div>
          <div class="list-group list-group-flush">
            <a
              href="#"
              class="list-group-item list-group-item-action "
            >
            <i class="fa fa-home fa-lg mr-2" aria-hidden="true"></i>
              Dashbord
            </a>
            <a
              href="#"
              class="list-group-item list-group-item-action"
            >
            <i class="fa fa-product-hunt fa-lg mr-2" aria-hidden="true"></i>
              Products
            </a>
            <a
              href="#"
              class="list-group-item list-group-item-action "
            >
            <i class="fa fa-file-image-o fa-lg mr-2" aria-hidden="true"></i>
              Products Gallery
            </a>
            <a
              href="#"
              class="list-group-item list-group-item-action "
            >
            <i class="fa fa-object-group fa-lg mr-2" aria-hidden="true"></i>
              Categories
            </a>
            <a
              href="#"
              class="list-group-item list-group-item-action "
            >
            <i class="fa fa-money fa-lg mr-2" aria-hidden="true"></i>
              Transactions
            </a> 
            <a
              href="#"
              class="list-group-item list-group-item-action  "
            >
            <i class="fa fa-user fa-lg mr-2" aria-hidden="true"></i>
              Users
            </a>
            @can('supplier-list')
            <a
              href="{{ route('supplier.index') }}"
              class="list-group-item list-group-item-action  "
            >
            <i class="fa fa-user fa-lg mr-2" aria-hidden="true"></i>
              Suppliers
            </a>
            @endcan
            @can('user-list')
              <a
                href="{{ route('users.index') }}"
                class="list-group-item list-group-item-action  "
              >
                <i class="fa fa-user fa-lg mr-2" aria-hidden="true"></i>
                Role Management
              </a>
            @endcan
            <a href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="list-group-item list-group-item-action">
              <i class="fa fa-sign-out fa-lg mr-2" aria-hidden="true"></i>
              Sign Out
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
          </div>
        </div>

        <!-- page content -->
        <div id="page-content-wrapper">
          <nav class="navbar navbar-store navbar-expand-lg navbar-light fixed-top" data-aos="fade-down">
            <button
              class="btn btn-secondary d-md-none mr-auto mr-2"
              id="menu-toggle"
            >
              &laquo; Menu
            </button>

            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto d-none d-lg-flex">
                <li class="nav-item dropdown">
                  <a
                    class="nav-link"
                    href="#"
                    id="navbarDropdown"
                    role="button"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    <img
                      src="/images/user_pc.png"
                      alt=""
                      class="rounded-circle mr-2 profile-picture"
                    />
                    Hi, {{ Auth::user()->name }}
                  </a>
                  <div class="dropdown-menu shadow border-0" aria-labelledby="navbarDropdown" style="border-radius: 10px 0px 10px 10px;">
                    <a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                      <i class="fa fa-sign-out fa-lg mr-2" aria-hidden="true"></i>
                      Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                    </form>
                  </div>
                </li>
              </ul>
              <!-- Mobile Menu -->
              <ul class="navbar-nav d-block d-lg-none mt-3">
                <li class="nav-item">
                  <a class="nav-link" href="#"> Hi, {{ Auth::user()->name }} </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link d-inline-block" href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();"> <i class="fa fa-sign-out" aria-hidden="true"></i> Sign Out</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                    </form>
                </li>
              </ul>
            </div>
          </nav>
          

          {{-- Content --}}
          @yield('content')

        </div>
      </div>
    </div>
    @stack('prepend-script')
    <!-- Bootstrap core JavaScript -->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.25/datatables.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
      AOS.init();
    </script>
    <script>
      $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
      });
    </script>
    @stack('addon-script')
  </body>
</html>
