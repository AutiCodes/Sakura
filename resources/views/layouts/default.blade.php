<!doctype html>
<!-- 
Project Sakura.
Custom made for the All Day Tech & Gaming community.
By KelvinCodes, 2023.
For source code or contribution see our Github repo: https://github.com/kelvin-codes-stuff/AllDayTechAndGaming-community-site
-->
<html>
  <head>
    @include('includes.head')
    <title>Home</title>
  </head>

  <body class="dw-b">
    <div class="container-fluid" style="padding-left: 0px; padding-right: 0px;">

      <header>
        @include('includes.header')
      </header>

      <!-- Main content -->
      @yield('content')

      <!-- Footer -->
      @include('includes.footer')

    </div>
    
    <!-- JS -->
    @include('includes.scripts')

  </body>
</html>