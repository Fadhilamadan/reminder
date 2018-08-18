<!DOCTYPE html>
<html lang="en">
<meta name="csrf-token" content="{{ csrf_token() }}" />
    <head>
      @include('layouts.includes_multi._scriptheader')
    </head>

    <body>

        <div id="page-wrapper">
          @include('layouts.includes_multi._header')
            
            <div class="page-contentbar">

                <div id="page-right-content">
                  @yield('content')
                    
                    <div class="footer">
                      @include('layouts.includes_multi._footer')
                    </div>

                </div>

                <div class="clearfix"></div>

            </div>
        </div>

        @include('layouts.includes_multi._scriptfooter')
    </body>
</html>