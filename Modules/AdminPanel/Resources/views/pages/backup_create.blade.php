<!-- 
Project Sakura.
Custom made for the All Day Tech & Gaming community.
By KelvinCodes, 2023.
For source code or contribution see our Github repo: https://github.com/kelvin-codes-stuff/AllDayTechAndGaming-community-site
Admin page theme: SB Admin 2
-->

@extends('adminpanel::layouts.default')

<!-- Settings page title -->
@section('title', 'Backups maken')

@section('content')
  <!-- Begin Page Content -->
  <div class="container">            
      <!-- Page header -->
      <h1 class="h3 mb-2 text-gray-800 ml-0">Backups</h1>

      <!-- Row 1 -->
      <div class="row">
        <div class="col">
          <div class="card shadow w-100">
            <div class="card-body justify-content-center">
              <h5 class="card-title">Aanmaken</h5>
                <form>
                  <p class="pt-2 mb-0">Onderdelen</p>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="checkboxDatabasebackup" value="option1" checked>
                    <label class="form-check-label" for="checkboxDatabasebackup">Database</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="checkboxDirectoryBackup" value="option2" checked>
                    <label class="form-check-label" for="checkboxDirectoryBackup">Directory</label>
                  </div>
                  <p class="pt-3 mb-0">Naam</p>
                  <div class="form-group">
                    <input class="form-control" type="text" placeholder="backup-29-10-2023-kelvincodes" id="backupName">
                  </div>
                  <br>
                  <a href="#" class="btn btn-primary">Aanmaken</a>
                </form>                              
              </div>
            </div>
          </div>

        <div class="col mb-9">
          <div class="card shadow w-100">
            <div class="card-body">
              <h5 class="card-title">Herstellen</h5>
              <form>
                <p class="pt-2 mb-0">Onderdelen</p>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="adminNotifiNewArticles" value="option1" checked>
                  <label class="form-check-label" for="inlineCheckbox1">Database</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="emailNotifiNewArticles" value="option2" checked>
                  <label class="form-check-label" for="inlineCheckbox2">Directory</label>
                </div>
                
                <div class="table-responsive">
                  <div class="dropdown show">
                    <a class="btn btn btn-sm dropdown-toggle border bg-primary text-white mb-2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Bulk acties
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                      <a class="dropdown-item" href="#">Prullenbak</a>
                    </div>
                  </div>
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Selecteer</th>
                        <th>Naam</th>
                        <th>Gemaakt op.</th>
                        <th>Grootte</th>
                        <th>Verwijder</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <input class="form-check-input ml-3" type="checkbox" value="">
                        </td>
                        <td>backup-29-10-2023.zip</td>
                        <td>29 okt 2023</td>
                        <td>4.54GB</td>
                        <td><a href="#"><i class="fa fa-trash ml-3"></i></a></td>
                      </tr>
                      <tr>
                        <td>
                          <input class="form-check-input ml-3" type="checkbox" value="">
                        </td>
                        <td>backup-29-10-2023.zip</td>
                        <td>29 okt 2023</td>
                        <td>4.54GB</td>
                        <td><a href="#"><i class="fa fa-trash ml-3"></i></a></td>
                      </tr>
                      <tr>
                        <td>
                          <input class="form-check-input ml-3" type="checkbox" value="">
                        </td>
                        <td>backup-29-10-2023.zip</td>
                        <td>29 okt 2023</td>
                        <td>4.54GB</td>
                        <td><a href="#"><i class="fa fa-trash ml-3"></i></a></td>
                      </tr>                                                                        
                    </tbody>
                  </table>
                <br>
                <a href="#" class="btn btn-primary mt-2">Toepassen</a>
              </form>  
            </div>
          </div>
        </div>
      </div>
  </div>
  <!-- /.container-fluid -->
@stop                
