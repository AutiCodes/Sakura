<!-- 
Project Sakura.
Custom made for the All Day Tech & Gaming community.
By KelvinCodes, 2023.
For source code or contribution see our Github repo: https://github.com/kelvin-codes-stuff/AllDayTechAndGaming-community-site
Admin page theme: SB Admin 2
-->

@extends('adminpanel::layouts.default')

<!-- Settings page title -->
@section('title', 'Alle gebruikers')

@section('content')
  <!-- Begin Page Content -->
  <div class="container-fluid">            
    <!-- Page header -->
    <h1 class="h3 mb-0 text-gray-800 ml-2">Gebruikers</h1>
    <button type="button" class="btn btn-primary btn-sm ml-2 mt-1">Nieuwe gebruiker</button>

    <!-- Table pages -->
    <table class="table mt-4">
      <thead class="thead">
        <tr>
          <th scope="col">
            <!-- Table controls -->
            <div class="row">
              <div class="col-3">
                <div class="dropdown show">
                  <a class="btn btn btn-sm dropdown-toggle border bg-primary text-white mb-2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Acties
                  </a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">Bewerken</a>
                    <a class="dropdown-item" href="#">Prullenbak</a>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Top table -->
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault">
              <label class="form-check-label" for="flexCheckDefault">
                Gebruikersnaam
              </label>
            </div>
          </th>
          <th scope="col">Naam</th>
          <th scope="col">Email</i></th>
          <th scope="col">Rol</th>
          <th scope="col">Artikelen</th>
        </tr>
      </thead>
      <tbody>
        <!-- Row 1 -->
        <tr>
          <th scope="row" class="w-25">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault">
              <label class="form-check-label" for="flexCheckDefault">
                <div class="row">
                  <div class="col-4 align-middle">
                    <img src="//placehold.it/40" class="pl-2 pr-2">
                  </div>
                  <div class="col">
                    <a href="#" class="">KelvinCodes</a>
                  </div>
                </div>
              </label>
            </div>
          </th>
          <td>Kelvin de Reus</td>
          <td>prive@kelvincodes.nl</td>
          <td>Super-admin</td>
          <td class="w-25">69</td>
        </tr>
        <!-- Row 2 -->
        <tr>
          <th scope="row" class="w-5">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault">
              <label class="form-check-label" for="flexCheckDefault">
                <div class="row">
                  <div class="col-4 align-middle">
                    <img src="//placehold.it/40" class="pl-2 pr-2">
                  </div>
                  <div class="col">
                    <a href="#" class="">Sander</a>
                  </div>
                </div>
              </label>
            </div>
          </th>
          <td>Sander den Breejen</td>
          <td>email-sander@hotmail.com</td>
          <td>Admin</td>
          <td class="w-25">69</td>
        </tr>
        <!-- Row 3 -->
        <tr>
          <th scope="row" class="w-25">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault">
              <label class="form-check-label" for="flexCheckDefault">
                <div class="row">
                  <div class="col-4 align-middle">
                    <img src="//placehold.it/40" class="pl-2 pr-2">
                  </div>
                  <div class="col">
                    <a href="#" class="">Klaas Jan</a>
                  </div>
                </div>
              </label>
            </div>
          </th>
          <td>Sander den Breejen</td>
          <td>email-sander@hotmail.com</td>
          <td>Redacteur</td>
          <td class="w-25">2</td>
        </tr>                          
      </tbody>
    </table>
    <!-- End table article -->
  </div>
  <!-- /.container-fluid -->
@stop                
