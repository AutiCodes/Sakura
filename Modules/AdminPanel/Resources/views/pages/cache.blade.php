<!-- 
Project Sakura.
Custom made for the All Day Tech & Gaming community.
By KelvinCodes, 2023.
For source code or contribution see our Github repo: https://github.com/kelvin-codes-stuff/AllDayTechAndGaming-community-site
Admin page theme: SB Admin 2
-->

@extends('adminpanel::layouts.default')

<!-- Settings page title -->
@section('title', 'Cache')

@section('content')
  <!-- Begin Page Content -->
  <div class="container">            
    <!-- Page header -->
    <h1 class="h3 mb-2 text-gray-800 ml-0">Cache instellingen</h1>

      <!-- Settings row -->
      <div class="card shadow w-50">
        <div class="card-body">
          <h5 class="card-title border-bottom">Cache</h5>
          <form>
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" role="switch" id="commentSwitchOffOn">
              <label class="form-check-label" for="commentSwitchOffOn">Database</label>
            </div>
            <div class="form-check form-switch mt-2">
              <input class="form-check-input" type="checkbox" role="switch" id="commentSwitchOffOn">
              <label class="form-check-label" for="commentSwitchOffOn">Pagina</label>
            </div>                              
            <a href="#" class="btn btn-primary mt-3">Update</a>

            <a href="#" class="btn btn-primary mt-3">Cache legen</a>
          </form>
        </div>
      </div>
  </div>
  <!-- /.container-fluid -->
@stop                
