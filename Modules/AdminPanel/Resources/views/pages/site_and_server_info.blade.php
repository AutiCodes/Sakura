<!-- 
Project Sakura.
Custom made for the All Day Tech & Gaming community.
By KelvinCodes, 2023.
For source code or contribution see our Github repo: https://github.com/kelvin-codes-stuff/AllDayTechAndGaming-community-site
Admin page theme: SB Admin 2
-->

@extends('adminpanel::layouts.default')

<!-- Settings page title -->
@section('title', 'Technische informatie')

@section('content')
  <!-- Begin Page Content -->
  <div class="container">            
    <!-- Page header -->
    <h1 class="h3 mb-2 text-gray-800 ml-0">Server & site informatie</h1>

    <!-- Sakura and file info -->
    <div class="row">
      <!-- Sakura -->
      <div class="col">
        <div class="card shadow w-100">
          <div class="card-body">
            <h5 class="card-title border-bottom">Sakura</h5>
            <div class="row">
              <div class="col-4">
                <h6>Versie:</h6>
                <h6>Tijdzone:</h6>
                <h6>Artikel link structuur:</h6>
                <h6>Type omgeving:</h6>
                <h6>Debug mode:</h6>
                <h6>Aantal gebruikers:</h6>
              </div>

              <div class="col-6">
                <h6>1.69</h6>
                <h6>Europe/Amsterdam</h6>
                <h6>artikels/2023/10/29/artikel-titel-hier</h6>
                <h6>Productie</h6>
                <h6>Uitgeschakeld</h6>
                <h6>4</h6>
                <br>
                <br>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- File -->
      <div class="col">
        <div class="card shadow w-100">
          <div class="card-body">
            <h5 class="card-title border-bottom">Mappen en bestanden</h5>
            <div class="row">
              <div class="col-4">
                <h6>Sakura map:</h6>
                <h6>Grootte Sakura map:</h6>
                <h6>Gebruiker upload map:</h6>
                <h6>Grootte Gebruiker upload map:</h6>
                <h6>Grootte database:</h6>
                <h6>Grootte totale installatie:</h6>
              </div>

              <div class="col-8">
                <h6>/home/alldaytechandgaming.nl/public_html/</h6>
                <h6>699MB</h6>
                <h6>/home/alldaytechandgaming.nl/public_html/public/user_upload</h6>
                <h6>69MB</h6>
                <h6>69MB</h6>
                <h6>690MB</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Server and database information -->
    <div class="row mt-5">
      <!-- Server -->
      <div class="col">
        <div class="card shadow w-100">
          <div class="card-body">
            <h5 class="card-title border-bottom">Server</h5>
            <div class="row">
              <div class="col-4">
                <h6>Server architectuur:</h6>
                <h6>Webserver:</h6>
                <h6>PHP versie:</h6>
                <h6>PHP geheugenlimiet:</h6>
                <h6>Upload max filesize:</h6>
                <h6>PHP post max size:</h6>
                <h6>Huidige tijd:</h6>
              </div>

              <div class="col-8">
                <h6>Linux 5.15.0-84-generic x86_64</h6>
                <h6>LiteSpeed</h6>
                <h6>8.0.30</h6>
                <h6>30240M</h6>
                <h6>2000M</h6>
                <h6>8000M</h6>
                <h6>2023-10-30T00:12:11+00:00</h6>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Database -->
      <div class="col">
        <div class="card shadow w-100">
          <div class="card-body">
            <h5 class="card-title border-bottom">Database</h5>
            <div class="row">
              <div class="col-4">
                <h6>Extensie:</h6>
                <h6>Server versie:</h6>
                <h6>Client versie:</h6>
                <h6>Gebruikersnaam van de database:</h6>
                <h6>Host van de database:</h6>
                <h6>Naam van de database:</h6>
                <h6>Tabel voorvoegsel:</h6>
                <h6>Database charset:</h6>
                <h6>Database collation:</h6>
                <h6>Max aantal verbindingen:</h6>
              </div>

              <div class="col-8">
                <h6>mysqli</h6>
                <h6>10.6.12-MariaDB-0ubuntu0.22.04.1</h6>
                <h6>mysqlnd 8.0.30</h6>
                <h6>Zbh5jnmluVY8ng</h6>
                <h6>localhost:3306</h6>
                <h6>Zbh5jnmluVY8ng</h6>
                <h6>sk_</h6>
                <h6>utf8mb4</h6>
                <h6>utf8mb4_unicode_520_ci</h6>
                <h6>69</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.container-fluid -->
@stop                
