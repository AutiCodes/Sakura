<!DOCTYPE html>
<html lang="en">
<!-- 
Project Sakura.
Custom made for the All Day Tech & Gaming community.
By KelvinCodes, 2023.
For source code or contribution see our Github repo: https://github.com/kelvin-codes-stuff/AllDayTechAndGaming-community-site
Admin page theme: SB Admin 2
-->
  <head>

    @include('adminpanel::includes.head')

  </head>

  <body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">

      <!-- Sidebar -->
      @include('adminpanel::includes.sidebar')

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
          @include('adminpanel::includes.navbar')
          
          <!-- Page content -->
          @yield('content')

        </div>
        
        <!-- Footer -->
        @include('adminpanel::includes.footer')

      </div>
    </div>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    @include('adminpanel::includes.scripts')

  </body>
</html>