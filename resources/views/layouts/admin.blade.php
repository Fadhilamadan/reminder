<!DOCTYPE html>
<html lang="en">
    <head>
      @include('layouts.includes_admin._scriptheader')
    </head>

    <body>
      <div id="page-wrapper">
        @include('layouts.includes_admin._header')

          <div class="page-contentbar">

              <aside class="sidebar-navigation">
                @include('layouts.includes_admin._leftsidebar')
              </aside>

              <div id="page-right-content">

                  <div class="container">
                      @yield('content')
                  </div>

                  <div class="footer">
                      @include('layouts.includes_admin._footer')
                  </div>

              </div>

          </div>
      </div>
      @include('layouts.includes_admin._scriptfooter')
    </body>
</html>