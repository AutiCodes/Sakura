<!-- 
Project Sakura.
Custom made for the All Day Tech & Gaming community.
By KelvinCodes, 2023.
For source code or contribution see our Github repo: https://github.com/kelvin-codes-stuff/AllDayTechAndGaming-community-site
-->

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-left" href="dashboard.html">
<div class="sidebar-brand-icon">
    <img src="{{ URL::asset('assets-admin/img/ADT&G_logo.png') }}" class="w-50 pr-0">
</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item">
<a class="nav-link" href="/admin">
    <i class="fas fa-fw fa-tachometer-alt"></i>
    <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
CMS
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
<a class="nav-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
    aria-expanded="true" aria-controls="collapseTwo">
    <i class="fas fa-thumbtack fa-cog"></i>
    <span>Berichten</span>
</a>
<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="/admin/berichten/allemaal">Alle berichten</a>
        <a class="collapse-item" href="/admin/berichten/toevoegen">Nieuw bericht</a>
        <a class="collapse-item" href="/admin/berichten/categorieen">Categorieën</a>
        <a class="collapse-item" href="/admin/berichten/tags">Tags</a>
    </div>
</div>
</li>

<!-- Nav Item - Media Collapse Menu -->
<li class="nav-item">
<a class="nav-link collapsed" data-toggle="collapse" data-target="#collapseMedia"
    aria-expanded="true" aria-controls="collapseMedia">
    <i class="fa-solid fa-fw fa-photo-film"></i>
    <span>Media</span>
</a>
<div id="collapseMedia" class="collapse" aria-labelledby="headingMedia"
    data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="/admin/media/allemaal">Bibliotheek</a>
        <a class="collapse-item" href="/admin/media/toev">Media toevoegen</a>
    </div>
</div>
</li>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
  aria-expanded="true" aria-controls="collapsePages">
  <i class="fa-regular fa-fw fa-file-lines"></i>
  <span>Pagina's</span>
</a>
<div id="collapsePages" class="collapse" aria-labelledby="collapsePages"
  data-parent="#accordionSidebar">
  <div class="bg-white py-2 collapse-inner rounded">
      <a class="collapse-item" href="#">Alle pagina's</a>
      <a class="collapse-item" href="#">Pagina toevoegen</a>
  </div>
</div>
</li>            


<!-- Nav item - Comments -->
<li class="nav-item">
<a class="nav-link" href="#">
  <i class="fas fa-fw fa-comments"></i>
  <span>Comments</span></a>
</li>              

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Heading -->
<div class="sidebar-heading">
Website
</div>

<!-- Nav Item - Site view Collapse Menu -->
<li class="nav-item">
<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseView"
  aria-expanded="true" aria-controls="collapseView">
  <i class="fa-regular fa-fw fa-file-lines"></i>
  <span>Weergave</span>
</a>
<div id="collapseView" class="collapse" aria-labelledby="collapseView"
  data-parent="#accordionSidebar">
  <div class="bg-white py-2 collapse-inner rounded">
      <a class="collapse-item" href="#">Tekst aanpassen</a>
      <a class="collapse-item" href="#">Afbeeldingen wijzigen</a>
  </div>
</div>
</li>      

<!-- Nav Item - Users Collapse Menu -->
<li class="nav-item">
<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUsers"
  aria-expanded="true" aria-controls="collapseUsers">
  <i class="fa-solid fa-fw fa-person"></i>
  <span>Gebruikers</span>
</a>
<div id="collapseUsers" class="collapse" aria-labelledby="collapseUsers"
  data-parent="#accordionSidebar">
  <div class="bg-white py-2 collapse-inner rounded">
      <a class="collapse-item" href="#">Alle gebruikers</a>
      <a class="collapse-item" href="#">Jouw profiel</a>
      <a class="collapse-item" href="#">Gebruikers toevoegen</a>
  </div>
</div>
</li>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseStats"
  aria-expanded="true" aria-controls="collapseStats">
  <i class="fa-solid fa-fw fa-chart-column"></i>
  <span>Statistieken</span>
</a>
<div id="collapseStats" class="collapse" aria-labelledby="collapseStats"
  data-parent="#accordionSidebar">
  <div class="bg-white py-2 collapse-inner rounded">
      <a class="collapse-item" href="#">Website</a>
      <a class="collapse-item" href="#">Discord</a>
  </div>
</div>
</li>     

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Heading -->
<div class="sidebar-heading">
Systeem
</div>


<!-- Nav Item - Modules Collapse Menu -->
<li class="nav-item">
<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseModules"
  aria-expanded="true" aria-controls="collapseModules">
  <i class="fa-solid fa-fw fa-plug"></i>
  <span>Modules</span>
</a>
<div id="collapseModules" class="collapse" aria-labelledby="collapseModules"
  data-parent="#accordionSidebar">
  <div class="bg-white py-2 collapse-inner rounded">
      <a class="collapse-item" href="#">Discord auto post</a>
      <a class="collapse-item" href="#">Notificaties</a>
  </div>
</div>
</li>      

<!-- Nav Item - Backup Collapse Menu -->
<li class="nav-item">
<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBackup"
  aria-expanded="true" aria-controls="collapseBackup">
  <i class="fa-solid fa-fw fa-database"></i>
  <span>Backup</span>
</a>
<div id="collapseBackup" class="collapse" aria-labelledby="collapseBackup"
  data-parent="#accordionSidebar">
  <div class="bg-white py-2 collapse-inner rounded">
      <a class="collapse-item" href="#">Backup maken</a>
      <a class="collapse-item" href="#">Automatische backup</a>
  </div>
</div>
</li>                  

<!-- Nav Item - Site settings Collapse Menu -->
<li class="nav-item">
<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSiteSettings"
  aria-expanded="true" aria-controls="collapseSiteSettings">
  <i class="fa-solid fa-fw fa-gears"></i>
  <span>Site instellingen</span>
</a>
<div id="collapseSiteSettings" class="collapse" aria-labelledby="collapseSiteSettings"
  data-parent="#accordionSidebar">
  <div class="bg-white py-2 collapse-inner rounded">
      <a class="collapse-item" href="#">Algemeen</a>
      <a class="collapse-item" href="#">Artikelen</a>
      <a class="collapse-item" href="#">Comments</a>      
      <a class="collapse-item" href="#">URL's</a>   
      <a class="collapse-item" href="#">Email server</a>
  </div>
</div>
</li>    

<!-- Nav Item - Technical config Collapse Menu -->
<li class="nav-item">
<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTechConfig"
  aria-expanded="true" aria-controls="collapseTechConfig">
  <i class="fa-solid fa-fw fa-sliders"></i>
  <span>Technisch</span>
</a>
<div id="collapseTechConfig" class="collapse" aria-labelledby="collapseTechConfig"
  data-parent="#accordionSidebar">
  <div class="bg-white py-2 collapse-inner rounded">
      <a class="collapse-item" href="#">Site&server informatie</a>
      <a class="collapse-item" href="#">Cache</a>
      <a class="collapse-item" href="#">Beveiliging</a>
  </div>
</div>
</li>        

<!-- Nav Item - Logs Collapse Menu -->
<li class="nav-item">
<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLogs"
  aria-expanded="true" aria-controls="collapseLogs">
  <i class="fa-solid fa-fw fa-toolbox"></i>
  <span>Logs</span>
</a>
<div id="collapseLogs" class="collapse" aria-labelledby="collapseLogs"
  data-parent="#accordionSidebar">
  <div class="bg-white py-2 collapse-inner rounded">
      <a class="collapse-item" href="#">Systeem</a>
      <a class="collapse-item" href="#">Error</a>
      <a class="collapse-item" href="#">Access</a>
  </div>
</div>
</li>

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
<button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

        <!-- Nav Item - Comments -->
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="commentsDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-comments fa-fw"></i>
                <!-- Counter - Comments -->
                <span class="badge badge-danger badge-counter">3+</span>
            </a>
            <!-- Dropdown - Comments -->
            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="commentsDropdown">
                <h6 class="dropdown-header">
                    Nieuwe comments
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                        <div class="icon-circle bg-primary">
                            <i class="fas fa-comment text-white"></i>
                        </div>
                    </div>
                    <div>
                        <div class="small text-gray-500">December 12, 2019</div>
                        <span class="font-weight-bold">Dit is het beste artikel! OMG!</span>
                    </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Laat alle comments zien</a>
            </div>
        </li>

        <!-- Nav Item - New actions -->
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="newDropdown" role="button"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-plus fa-fw"></i>
          </a>
          <!-- Dropdown - New actions -->
          <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
            aria-labelledby="newDropdown">
            <a class="dropdown-item" href="#">
                <i class="fas fa-newspaper fa-sm fa-fw mr-2 text-gray-400"></i>
                Artikel
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
                <i class="fas fa-image fa-sm fa-fw mr-2 text-gray-400"></i>
                Media
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
                <i class="fa-regular fa-file-lines fa-sm fa-fw mr-2 text-gray-400"></i>
                Pagina
            </a>                          
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
                <i class="fa fa-person fa-sm fa-fw mr-2 text-gray-400"></i>
                Gebruiker
            </a>                                
          </div>
        </li>
  
        <!-- Nav Item - Site -->
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="siteDropdown" role="button"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-home fa-fw"></i>
          </a>
          <!-- Dropdown - Site -->
          <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
            aria-labelledby="siteDropdown">
            <a class="dropdown-item" href="#">
                <i class="fas fa-home fa-sm fa-fw mr-2 text-gray-400"></i>
                Ga naar je site <i class="fas fa-external-link text-gray-500 ml-2"></i>
            </a>
            <!-- <div class="dropdown-divider"></div>-->                                 
          </div>
        </li>

        <div class="topbar-divider d-none d-sm-block"></div>
        
        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Welkom KelvinCodes</span>
                <img class="img-profile rounded-circle"
                    src="assets/img/undraw_profile.svg">
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profiel bewerken
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Uitloggen
                </a>
            </div>
        </li>
    </ul>
</nav>
