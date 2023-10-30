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
  </head>

  <body>
    <div class="container">

      @include('includes.header')

      <div id="main" class="row">

        @yield('content')

      </div>

      <footer class="row">

        @include('includes.footer')

      </footer>

    </div>
  </body>
</html>