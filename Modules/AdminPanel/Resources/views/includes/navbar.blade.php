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
            <a class="dropdown-item" href="/">
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
                    src="{{ URL::asset('assets-admin/img/undraw_profile.svg') }}">
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
<!-- End of Topbar -->