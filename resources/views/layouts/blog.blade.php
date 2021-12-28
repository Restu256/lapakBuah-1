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
    <link rel="shortcut icon" href="images/logo_lapak_buah/Logo-web-lapakbuah 1.png" type="image/x-icon">

    <title>@yield('title')</title>

    {{-- Style --}}
    @stack('prepend-style')
    @include('includes.blog.style')
    @stack('addon-style')
  </head>

  <body class="content-animate">
    {{-- preloader --}}
    <div class="page-loader">
        <div class="loader-area"></div>
        <div class="loader font-face1">loading...	
        </div>
    </div> 

    <div id="top" class="page"> 
        {{-- Navbar --}}
        @include('includes.blog.header')

        <main class="cd-main-content">

            {{-- Page Content --}}
            @yield('content')
            
            {{-- Footer --}}
            @include('includes.blog.footer')

        </main>		
    </div>

    <!-- Modal Search-->
		<div class="modal fade" id="ModalSearch" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="z-index: 10000;">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-body">	
                    <form action="#" method="GET">
                      <div class="input-group">
                        <input type="text" name="search_query" class="form-control input-search" style="height: 40px;" placeholder="Search..." required>
                        <span class="input-group-btn">
                          <button class="btn btn-default" type="submit" style="height: 40px;background-color: #ccc;"><span class="fa fa-search"></span></button>
                        </span>
                      </div>
                  </form>
                </div>
              </div>
            </div>
          </div>

    {{-- Script --}}
    @stack('prepend-script')
    @include('includes.blog.script')
    @stack('addon-script')
  </body>
</html>
