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

    {{-- Style --}}
    @stack('prepend-style')
    @include('includes.style')
    @stack('addon-style')
  </head>

  <body>
    

    {{-- Page Content --}}
    @yield('content')
    
    {{-- Footer --}}
    {{-- @include('includes.footer') --}}
    <footer>
      <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <p class="pt-4 pb-2">
                    © 2021 Ecommerce theme by Iqbal Zaenal & Restu Dentas
                </p>
            </div>
        </div>
    </div>
    </footer>

    {{-- Script --}}
    @stack('prepend-script')
    @include('includes.script')
    @stack('addon-script')
  </body>
</html>
