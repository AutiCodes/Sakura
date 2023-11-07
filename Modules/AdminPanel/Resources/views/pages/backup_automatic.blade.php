<!-- 
Project Sakura.
Custom made for the All Day Tech & Gaming community.
By KelvinCodes, 2023.
For source code or contribution see our Github repo: https://github.com/kelvin-codes-stuff/AllDayTechAndGaming-community-site
Admin page theme: SB Admin 2
-->

@extends('adminpanel::layouts.default')

<!-- Settings page title -->
@section('title', '')

@section('content')
  <!-- Begin Page Content -->
  <div class="container">            
    <!-- Page header -->
    <h1 class="h3 mb-2 text-gray-800 ml-0">Automatische backups</h1>

    <!-- Row 1 -->
    <div class="row">
      <div class="col">
        <div class="card shadow w-50">
          <div class="card-body justify-content-center">
            <h5 class="card-title">Automatische backup</h5>
              <form>
                <div class="form-check form-switch">
                  <input class="form-check-input" type="checkbox" id="switchAutoBackup">
                  <label class="form-check-label" for="switchAutoBackup">Uit/aan</label>
                </div>
                <p class="pt-2 mb-0">Notificatie levering</p>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="adminNotifiNewArticles" value="option1">
                  <label class="form-check-label" for="inlineCheckbox1">Admin panel</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="emailNotifiNewArticles" value="option2">
                  <label class="form-check-label" for="inlineCheckbox2">Email</label>
                </div>

                <select class="form-select mt-3 w-50" aria-label="Default select example">
                  <option value=12 selected>12 uur</option>
                  <option value=24>1 dag</option>
                  <option value=48>2 dagen</option>
                  <option value=169>1 week</option>
                </select>
                <br>
                <a href="#" class="btn btn-primary mt-">Toepassen</a>
              </form>                              
            </div>
          </div>
        </div>
    </div>
  </div>
  <!-- /.container-fluid -->
@stop                

