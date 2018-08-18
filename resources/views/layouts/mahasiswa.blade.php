<!DOCTYPE html>
<html lang="en">
<meta name="csrf-token" content="{{ csrf_token() }}" />
    <head>
      @include('layouts.includes_mahasiswa._scriptheader')
    </head>

    <body>

        <div id="page-wrapper">
          @include('layouts.includes_mahasiswa._header')
            
            <div class="page-contentbar">

                <div id="page-right-content">
                  @yield('content')
                    
                    <div class="footer">
                      @include('layouts.includes_mahasiswa._footer')
                    </div>

                </div>

                <div class="clearfix"></div>

            </div>
        </div>

        @include('layouts.includes_mahasiswa._scriptfooter')
    </body>
</html>