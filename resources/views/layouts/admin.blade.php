<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <meta name="description" content=""/>
        <meta name="author" content=""/>

        <title>@yield('title')</title>

        @stack('prepend-style')
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"/>

        <link rel="stylesheet" type="text/css" href="/style/trix.css">
        <script type="text/javascript" src="/script/trix.js"></script>

        <style>
            trix-toolbar [data-trix-button-group="file-tools"] {
                display: none;
            }
        </style>
        <!-- icon fontawesome -->
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

        <link href="/style/main.css" rel="stylesheet"/>
        <link
            rel="stylesheet"
            type="text/css"
            href="https://cdn.datatables.net/v/bs4/dt-1.10.25/datatables.min.css"/>
        <!-- Buat Print Pdf Table -->
        <link
            rel="stylesheet"
            type="text/css"
            href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
        <!-- Data Table UI -->
        <link
            rel="stylesheet"
            href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css"/>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
        <!-- Data Table -->
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script
            src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
        @stack('addon-style')
    </head>

    <body>
        <div class="page-dashboard">
            <div class="d-flex" id="wrapper" data-aos="fade-right">
                <!-- sidebar -->
                <div class="border-right" id="sidebar-wrapper">
                    <div class="sidebar-heading text-center">
                        <img src="/images/logo.svg" alt="" class="my-4" style="max-width: 120px"/>
                    </div>
                    <div class="list-group list-group-flush">
                        <a
                            href="{{ route('dashboard.index') }}"
                            class="list-group-item list-group-item-action ">
                            <i class="fa fa-home fa-lg mr-2" aria-hidden="true"></i>
                            Dashbord
                        </a>
                        <a
                            href="{{ route('bank.index') }}"
                            class="list-group-item list-group-item-action">
                            <i class="fa fa-credit-card fa-lg mr-2" aria-hidden="true"></i>
                            Bank Account
                        </a>
                        <a
                            href="{{ route('voucher.index') }}"
                            class="list-group-item list-group-item-action">
                            <i class="fa fa-credit-card fa-lg mr-2" aria-hidden="true"></i>
                            Voucher
                        </a>
                        @can('product-list')
                        <a
                            href="{{ route('product.index') }}"
                            class="list-group-item list-group-item-action">
                            <i class="fa fa-product-hunt fa-lg mr-2" aria-hidden="true"></i>
                            Products
                        </a>
                        @endcan @can('imageproduct-list')
                        <a
                            href="{{ route('imageproduct.index') }}"
                            class="list-group-item list-group-item-action ">
                            <i class="fa fa-file-image-o fa-lg mr-2" aria-hidden="true"></i>
                            Products Gallery
                        </a>
                        @endcan @can('category-list')
                        <a
                            href="{{ route('category.index') }}"
                            class="list-group-item list-group-item-action ">
                            <i class="fa fa-object-group fa-lg mr-2" aria-hidden="true"></i>
                            Categories
                        </a>
                        @endcan
                        <a
                            href="{{ route('gudang.index') }}"
                            class="list-group-item list-group-item-action ">
                            <i class="fa fa-home fa-lg mr-2" aria-hidden="true"></i>
                            Warehouse
                        </a>
                        @can('stock-list')
                        <a
                            href="{{ route('stock.index') }}"
                            class="list-group-item list-group-item-action  ">
                            <i class="fa fa-shopping-cart fa-lg mr-2" aria-hidden="true"></i>
                            Purchassing
                        </a>
                        @endcan @can('transaction-list')
                        <a href="#" class="list-group-item list-group-item-action ">
                            <i class="fa fa-money fa-lg mr-2" aria-hidden="true"></i>
                            Transactions
                        </a>
                        @endcan
                        <a href="#" class="list-group-item list-group-item-action  ">
                            <i class="fa fa-user fa-lg mr-2" aria-hidden="true"></i>
                            Profile
                        </a>
                        <a href="{{ route('transaction.index') }}" class="list-group-item list-group-item-action  ">
                            <i class="fa fa-list-alt fa-lg mr-2" aria-hidden="true"></i>
                            My Order
                        </a>
                        @can('supplier-list')
                        <a
                            href="{{ route('supplier.index') }}"
                            class="list-group-item list-group-item-action  ">
                            <i class="fa fa-user fa-lg mr-2" aria-hidden="true"></i>
                            Suppliers
                        </a>
                        @endcan @can('user-list')
                        <a
                            href="{{ route('users.index') }}"
                            class="list-group-item list-group-item-action  ">
                            <i class="fa fa-user fa-lg mr-2" aria-hidden="true"></i>
                            Role Management
                        </a>
                        @endcan @can('blog-list')
                        <a
                            href="{{ route('blog.index') }}"
                            class="list-group-item list-group-item-action">
                            <i class="fa fa-newspaper-o fa-lg mr-2" aria-hidden="true"></i>
                            Blog
                        </a>
                        @endcan @can('category-list')
                        <a
                            href="{{ route('category_blog.index') }}"
                            class="list-group-item list-group-item-action">
                            <i class="fa fa-list-alt fa-lg mr-2" aria-hidden="true"></i>
                            Blog Category
                        </a>
                        @endcan @can('image-list')
                        <a
                            href="{{ route('imageblog.index') }}"
                            class="list-group-item list-group-item-action">
                            <i class="fa fa-object-group fa-lg mr-2" aria-hidden="true"></i>
                            Gallery Blog
                        </a>
                        @endcan
                        <a
                            href="{{ route('logout') }}"
                            onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                            class="list-group-item list-group-item-action">
                            <i class="fa fa-sign-out fa-lg mr-2" aria-hidden="true"></i>
                            Sign Out
                        </a>
                        <form
                            id="logout-form"
                            action="{{ route('logout') }}"
                            method="POST"
                            class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>

                <!-- page content -->
                <div id="page-content-wrapper">
                    <nav
                        class="navbar navbar-store navbar-expand-lg navbar-light fixed-top"
                        data-aos="fade-down">
                        <button class="btn btn-secondary d-md-none mr-auto mr-2" id="menu-toggle">
                            &laquo; Menu
                        </button>

                        <button
                            class="navbar-toggler"
                            type="button"
                            data-toggle="collapse"
                            data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent"
                            aria-expanded="false"
                            aria-label="Toggle navigation">
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
                                        aria-expanded="false">
                                        <img
                                            src="/images/user_pc.png"
                                            alt=""
                                            class="rounded-circle mr-2 profile-picture"/>
                                        Hi,
                                        {{ Auth::user()->name }}
                                    </a>
                                    <div
                                        class="dropdown-menu shadow border-0"
                                        aria-labelledby="navbarDropdown"
                                        style="border-radius: 10px 0px 10px 10px;">
                                        <a class="dropdown-item" href="/">
                                            {{-- <i class="fa fa-sign-out fa-lg mr-2" aria-hidden="true"></i> --}}
                                            <i class="fa fa-shopping-cart fa-lg mr-2" aria-hidden="true"></i>
                                            Back to shop
                                        </a>
                                        <a
                                        class="dropdown-item"
                                            href="{{ route('logout') }}"
                                            onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                            <i class="fa fa-sign-out fa-lg mr-2" aria-hidden="true"></i>
                                            Logout
                                        </a>
                                        <form
                                            id="logout-form"
                                            action="{{ route('logout') }}"
                                            method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                                <li class="nav-item">
                            <a href="{{ route('cart.index') }}" class="nav-link d-inline-block">
                                <i class="fa fa-bell-o fa-2x" aria-hidden="true"></i>
                                </a>
                        </li>
                                <li class="nav-item">
                                    <a href="{{ route('cart.index') }}" class="nav-link d-inline-block">
                                        @php $carts = \App\Models\Cart::where('users_id', Auth::user()->id)->count();
                                        @endphp @if ($carts > 0)
                                        <img src="/images/shopping-cart-filled.svg" alt=""/>
                                        <div class="cart-badge">{{$carts}}</div>
                                        @else
                                        <img src="/images/shopping-cart-empty.svg" alt=""/>
                                        @endif
                                    </a>
                                </li>
                            </ul>
                            <!-- Mobile Menu -->
                            <ul class="navbar-nav d-block d-lg-none mt-3">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        Hi,
                                        {{ Auth::user()->name }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a
                                        class="nav-link d-inline-block"
                                        href="{{ route('logout') }}"
                                        onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-out" aria-hidden="true"></i>
                                        Sign Out</a>
                                    <form
                                        id="logout-form"
                                        action="{{ route('logout') }}"
                                        method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/">
                                        Back to shop
                                    </a>
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
        <script
            type="text/javascript"
            src="https://cdn.datatables.net/v/bs4/dt-1.10.25/datatables.min.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

        <script>
            AOS.init();
        </script>
        <script>
            $("#menu-toggle").click(function (e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });

            document.addEventListener('trix-file-accept', function (e) {
                e.preventDefault();
            });
        </script>
        @stack('addon-script')
    </body>
</html>