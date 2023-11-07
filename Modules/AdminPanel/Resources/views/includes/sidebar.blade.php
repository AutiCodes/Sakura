<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-left" href="/admin">
        <div class="sidebar-brand-icon">
            <img src="{{ URL::asset('/assets/img/Sakura.png') }}" class="pr-0" style="width: 60px">
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
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-thumbtack fa-cog"></i>
            <span>Berichten</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('artikelen.index') }}">Alle berichten</a>
                <a class="collapse-item" href="{{ route('artikelen.create') }}">Nieuw bericht</a>
                <a class="collapse-item" href="/admin/artikelen/categorieen">Categorieën</a>
                <a class="collapse-item" href="/admin/artikelen/tags">Tags</a>
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
                <a class="collapse-item" href="/admin/media/toevoegen">Media toevoegen</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" data-toggle="collapse" data-target="#collapsePages"
          aria-expanded="true" aria-controls="collapsePages">
          <i class="fa-regular fa-fw fa-file-lines"></i>
          <span>Pagina's</span>
      </a>
      <div id="collapsePages" class="collapse" aria-labelledby="collapsePages"
          data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item" href="/admin/paginas/allemaal">Alle pagina's</a>
              <a class="collapse-item" href="/admin/paginas/toevoegen">Pagina toevoegen</a>
          </div>
      </div>
    </li>            
    

    <!-- Nav item - Comments -->
    <li class="nav-item">
      <a class="nav-link" href="/admin/comments">
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
      <a class="nav-link collapsed" data-toggle="collapse" data-target="#collapseView"
          aria-expanded="true" aria-controls="collapseView">
          <i class="fa-regular fa-fw fa-file-lines"></i>
          <span>Weergave</span>
      </a>
      <div id="collapseView" class="collapse" aria-labelledby="collapseView"
          data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item" href="/admin/weergave/tekst">Tekst aanpassen</a>
              <a class="collapse-item" href="/admin/weergave/afbeeldingen">Afbeeldingen wijzigen</a>
          </div>
      </div>
    </li>      

    <!-- Nav Item - Users Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" data-toggle="collapse" data-target="#collapseUsers"
          aria-expanded="true" aria-controls="collapseUsers">
          <i class="fa-solid fa-fw fa-person"></i>
          <span>Gebruikers</span>
      </a>
      <div id="collapseUsers" class="collapse" aria-labelledby="collapseUsers"
          data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item" href="/admin/gebruikers/allemaal">Alle gebruikers</a>
              <a class="collapse-item" href="/admin/gebruikers/profiel/2891223">Jouw profiel</a>
              <a class="collapse-item" href="/admin/gebruikers/toevoegen">Gebruikers toevoegen</a>
          </div>
      </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" data-toggle="collapse" data-target="#collapseStats"
          aria-expanded="true" aria-controls="collapseStats">
          <i class="fa-solid fa-fw fa-chart-column"></i>
          <span>Statistieken</span>
      </a>
      <div id="collapseStats" class="collapse" aria-labelledby="collapseStats"
          data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item" href="/admin/statistieken/website">Website</a>
              <a class="collapse-item" href="/admin/statistieken/discord">Discord</a>
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
      <a class="nav-link collapsed" data-toggle="collapse" data-target="#collapseModules"
          aria-expanded="true" aria-controls="collapseModules">
          <i class="fa-solid fa-fw fa-plug"></i>
          <span>Modules</span>
      </a>
      <div id="collapseModules" class="collapse" aria-labelledby="collapseModules"
          data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item" href="/admin/modules/discord_autoposter">Discord auto post</a>
              <a class="collapse-item" href="/admin/modules/notificaties">Notificaties</a>
          </div>
      </div>
    </li>      

    <!-- Nav Item - Backup Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" data-toggle="collapse" data-target="#collapseBackup"
          aria-expanded="true" aria-controls="collapseBackup">
          <i class="fa-solid fa-fw fa-database"></i>
          <span>Backup</span>
      </a>
      <div id="collapseBackup" class="collapse" aria-labelledby="collapseBackup"
          data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item" href="/admin/backup/aanmaken">Backup maken</a>
              <a class="collapse-item" href="/admin/backup/automatisch">Automatische backup</a>
          </div>
      </div>
    </li>                  

    <!-- Nav item - Comments -->
    <li class="nav-item">
      <a class="nav-link" href="/admin/updates">
          <i class="fa-solid fa-fw fa-arrows-rotate"></i>
          <span>Updates</span></a>
    </li>                   

    <!-- Nav Item - Site settings Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" data-toggle="collapse" data-target="#collapseSiteSettings"
          aria-expanded="true" aria-controls="collapseSiteSettings">
          <i class="fa-solid fa-fw fa-gears"></i>
          <span>Site instellingen</span>
      </a>
      <div id="collapseSiteSettings" class="collapse" aria-labelledby="collapseSiteSettings"
          data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item" href="/admin/instellingen/algemeen">Algemeen</a>
              <a class="collapse-item" href="/admin/instellingen/artikelen">Artikelen</a>
              <a class="collapse-item" href="/admin/instellingen/comments">Comments</a>      
              <a class="collapse-item" href="/admin/instellingen/urls">URL's</a>   
              <a class="collapse-item" href="/admin/instellingen/email-server">Email server</a>
          </div>
      </div>
    </li>    

    <!-- Nav Item - Technical config Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" data-toggle="collapse" data-target="#collapseTechConfig"
          aria-expanded="true" aria-controls="collapseTechConfig">
          <i class="fa-solid fa-fw fa-sliders"></i>
          <span>Technisch</span>
      </a>
      <div id="collapseTechConfig" class="collapse" aria-labelledby="collapseTechConfig"
          data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item" href="/admin/technisch/informatie">Site&server informatie</a>
              <a class="collapse-item" href="/admin/technisch/cache">Cache</a>
              <a class="collapse-item" href="/admin/technisch/beveiliging">Beveiliging</a>
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
              <a class="collapse-item" href="/admin/logs/systeem">Systeem</a>
              <a class="collapse-item" href="/admin/logs/error">Error</a>
              <a class="collapse-item" href="/admin/logs/access">Access</a>
          </div>
      </div>
    </li>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->