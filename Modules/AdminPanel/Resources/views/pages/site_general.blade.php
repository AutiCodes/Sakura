<!-- 
Project Sakura.
Custom made for the All Day Tech & Gaming community.
By KelvinCodes, 2023.
For source code or contribution see our Github repo: https://github.com/kelvin-codes-stuff/AllDayTechAndGaming-community-site
Admin page theme: SB Admin 2
-->

@extends('adminpanel::layouts.default')

<!-- Settings page title -->
@section('title', 'Algemeen')

@section('content')
  <!-- Begin Page Content -->
  <div class="container">            
    <!-- Page header -->
    <h1 class="h3 mb-2 text-gray-800 ml-0">Algemene instellingen</h1>

    <!-- Language row -->
    <div class="row">
      <div class="col">
        <div class="card shadow w-100">
          <div class="card-body">
            <h5 class="card-title">Taal website</h5>
            <form>
              <select class="form-select w-25" aria-label="Default select example">
                <option value="nl" selected>Nederlands</option>
              </select>
              <a href="#" class="btn btn-primary mt-3">Update</a>
            </form>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card shadow w-100">
          <div class="card-body">
            <h5 class="card-title">Taal admin pagina</h5>
            <form>
              <select class="form-select w-25" aria-label="Default select example">
                <option value="nl" selected>Nederlands</option>
              </select>
              <a href="#" class="btn btn-primary mt-3">Update</a>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Title and slogan -->
    <div class="row mt-5">
      <div class="col">
        <div class="card shadow w-100">
          <div class="card-body">
            <h5 class="card-title">Title</h5>
            <form>
              <input class="form-control" id="siteTitle" type="text" placeholder="All Day Tech & Gaming">
              <a href="#" class="btn btn-primary mt-3">Update</a>
            </form>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card shadow w-100">
          <div class="card-body">
            <h5 class="card-title">Slogan</h5>
            <form>
              <input class="form-control" id="siteSlogan" type="text" placeholder="Tech & Gaming for everyone!">
              <a href="#" class="btn btn-primary mt-3">Update</a>
            </form>
          </div>
        </div>
      </div>
    </div>

  </div>
  </div>

  </div>
  <!-- /.container-fluid -->
@stop                
