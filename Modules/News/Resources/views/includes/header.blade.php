<!-- 
Project Sakura.
Custom made for the All Day Tech & Gaming community.
By KelvinCodes, 2023.
For source code or contribution see our Github repo: https://github.com/kelvin-codes-stuff/AllDayTechAndGaming-community-site
-->

<!-- Banner -->
  <img src="{{ URL::asset('assets/img/banner_adtg_1920_380.png') }}" style="width: 2500px;" class="img-fluid" alt="Banner">

  <a href="#" class="fa fa-facebook social_icons_banner_fb"></a> <!-- Fix Bootstrap! -->
  <a href="#" class="fa fa-instagram social_icons_banner_insta"></a> <!-- Fix Bootstrap! -->

<!-- Navbar -->
<div class="lp-b p-0">
  <nav class="navbar navbar-expand-lg navbar-dark w-100 container-fluid d-block d-lg-flex justify-content-around">
    <div class="d-flex d-md-flex d-lg-block justify-content-around">
      <a href="/" class="navbar-brand fa fa-home fa-2x icon-h-ld-c" id=""></a>

      <button class="navbar-toggler icon-h-ld-b" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon icon-h-ld-b"></span>
      </button>
      
      <a href="#" class="d-sm-block d-lg-none navbar-brand fa fa-search mx-3  text-white" style="font-size: 30px;"></a>
    </div>

    <div class="collapse navbar-collapse flex-grow-0 ani-05s" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <!-- Facebook groups-->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle font-weight-bold text-uppercase fnt-ss" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Facebook groepen
          </a>
          <div class="dropdown-menu ld2-b mt-0 p-0 ani-05s-o" style="border-radius: 12px; top: 80%;" aria-labelledby="navbarDropdown"> <!-- fix style! -->
            <a class="dropdown-item text-white display-12 text-uppercase" style="border-radius: 12px;" href="#" target="_blank">Word lid van All Day Tech & Gaming <br>Facebook Groep <i class="fa fa-external-link"></i></a>
            <a class="dropdown-item text-white display-12 text-uppercase" style="border-radius: 12px;" href="#" target="_blank">Word lid van Computer problemen & <br>vragen Facebook Groep <i class="fa fa-external-link"></i></a>
          </div>
        </li>

        <div class="dropdown-divider lwp-c"></div>

        <!-- Discord -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle font-weight-bold text-uppercase fnt-ss" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Onze Discord server!
          </a>
          <div class="dropdown-menu ld2-b mt-0 p-0 ani-05s-o" style="border-radius: 12px; top: 80%;" aria-labelledby="navbarDropdown">
            <a class="dropdown-item text-white display-12 text-uppercase" style="border-radius: 12px;" href="#" target="_blank">Word lid van onze Discord server! <i class="fa fa-external-link"></i></a>
            <a class="dropdown-item text-white display-12 text-uppercase" style="border-radius: 12px;" href="#">Discord huisregels & richtlijnen</a>
            <a class="dropdown-item text-white display-12 text-uppercase" style="border-radius: 12px;" href="#">All Day Bot</a>
          </div>
        </li>
        <div class="dropdown-divider lwp-c"></div>
        <!-- Know how -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle font-weight-bold text-uppercase fnt-ss" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Know how!
          </a>
          <div class="dropdown-menu ld2-b mt-0 p-0 ani-05s-o" style="border-radius: 12px; top: 80%;" aria-labelledby="navbarDropdown">
            <a class="dropdown-item text-white display-12 text-uppercase" style="border-radius: 12px;" href="#">Windows (opnieuw) installeren op je PC</a>
          </div>
        </li>
        <div class="dropdown-divider lwp-c"></div>
        <li class="nav-item">
          <a class="nav-link font-weight-bold text-uppercase fnt-ss" href="#">Berichten over hardware</a>
        </li>
        <div class="dropdown-divider lwp-c"></div>
        <li class="nav-item">
          <a class="nav-link font-weight-bold text-uppercase fnt-ss" href="#">Berichten over software</a>
        </li>
      </ul>
    </div>

    <div class="d-none d-lg-block navbar-brand">
      <a href="#" class="fa fa-search fa-2x icon-h-ld-c text-white"></a>
      <a href="#" class="fa fa-sun fa-2x icon-h-ld-c ml-2 text-white"></a>
    </div>

  </nav>
</div>
<!-- End navbar -->