<!-- 
Project Sakura.
Custom made for the All Day Tech & Gaming community.
By KelvinCodes, 2023.
For source code or contribution see our Github repo: https://github.com/kelvin-codes-stuff/AllDayTechAndGaming-community-site
Admin page theme: SB Admin 2
-->

@extends('adminpanel::layouts.default')

<!-- Settings page title -->
@section('title', 'Alle paginas')

@section('content')
  <!-- Begin Page Content -->
  <div class="container-fluid">            
    <!-- Page header -->
    <h1 class="h3 mb-0 text-gray-800 ml-2">Pagina's</h1>
    <button type="button" class="btn btn-primary btn-sm ml-2 mt-1">Nieuwe pagina</button>

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
                    Bulk acties
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
                Titel
              </label>
            </div>
          </th>
          <th scope="col">Auteur</th>
          <th scope="col">Statistieken</th>
          <th scope="col"><i class="fa fa-comment"></i></th>
          <th scope="col">Datum</th>
        </tr>
      </thead>
      <tbody>
        <!-- Row 1 -->
        <tr>
          <th scope="row" class="w-25">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault">
              <label class="form-check-label" for="flexCheckDefault">
                <a href="#">All Day Bot</a> - concept <a href="#"><i class="fa fa-edit"></i></a>
              </label>
            </div>
          </th>
          <td><a href="#">KelvinCodes</a></td>
          <td><a href="#"><i class="fa fa-chart-column"></i></a></td>
          <td><a href="#"><i class="fa fa-comment"></i></a></td>
          <td class="w-25">Aangemaakt op: 4 Oktober 2023 om 16:21</td>
        </tr>
        <!-- Row 2 -->
        <tr>
          <th scope="row">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault">
              <label class="form-check-label" for="flexCheckDefault">
                <a href="#">Onze Facebook groepen</a>
              </label>
            </div>
          </th>
          <td><a href="#">KelvinCodes</a></td>
          <td><a href="#"><i class="fa fa-chart-column"></i></a></td>
          <td><a href="#"><i class="fa fa-comment"></i></a></td>
          <td class="w-25">Aangemaakt op: 4 Oktober 2023 om 16:21</td>
        </tr>
      </tbody>
    </table>
    <!-- End table article -->
  </div>
  <!-- /.container-fluid -->
@stop