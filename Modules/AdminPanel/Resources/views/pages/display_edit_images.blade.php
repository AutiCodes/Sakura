<!-- 
Project Sakura.
Custom made for the All Day Tech & Gaming community.
By KelvinCodes, 2023.
For source code or contribution see our Github repo: https://github.com/kelvin-codes-stuff/AllDayTechAndGaming-community-site
Admin page theme: SB Admin 2
-->

@extends('adminpanel::layouts.default')

<!-- Settings page title -->
@section('title', 'Bewerk afbeeldingen')

@section('content')
  <!-- Begin Page Content -->
  <div class="container-fluid">            
    <!-- Page header -->
    <h1 class="h3 mb-2 text-gray-800 ml-0">Site iconen</h1>

    <div class="row">
      <!-- Change favicon -->
      <div class="col">
        <div class="card" style="width: 25rem;">
          <div class="card-body">
            <h5 class="card-title border-bottom pb-3">Favicon</h5>
            <div class="row">
              <div class="col-2">
                <img src="//placehold.it//50">
              </div>
              <div class="col">
                <input class="form-control mr-3" type="file" id="formFile">
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Change main icon -->
      <div class="col">
        <div class="card" style="width: 25rem;">
          <div class="card-body">
            <h5 class="card-title border-bottom pb-3">Hoofd icoon</h5>
            <div class="row">
              <div class="col-2">
                <img src="//placehold.it//50">
              </div>
              <div class="col">
                <input class="form-control mr-3" type="file" id="formFile">
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Change login icon -->
      <div class="col">
        <div class="card" style="width: 25rem;">
          <div class="card-body">
            <h5 class="card-title border-bottom pb-3">Login icoon</h5>
            <div class="row">
              <div class="col-2">
                <img src="//placehold.it//50">
              </div>
              <div class="col">
                <input class="form-control mr-3" type="file" id="formFile">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Page header -->
    <h1 class="h3 mb-2 text-gray-800 ml-0 mt-4">Site header afbeeldingen</h1>
    
    <!-- Site headers -->
    <div class="row">
        <!-- Change header -->
        <div class="col">
          <div class="card" style="width: 50rem;">
            <div class="card-body">
              <h5 class="card-title border-bottom pb-3">Header</h5>
              <div class="row">
                <div class="col-7">
                  <img src="//placehold.it//400">
                </div>
                <div class="col">
                  <input class="form-control mr-3" type="file" id="formFile">
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Change footer-->
        <div class="col">
          <div class="card" style="width: 50rem;">
            <div class="card-body">
              <h5 class="card-title border-bottom pb-3">Footer</h5>
              <div class="row">
                <div class="col-7">
                  <img src="//placehold.it//400">
                </div>
                <div class="col">
                  <input class="form-control mr-3" type="file" id="formFile">
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>

    <button type="button" class="btn btn-primary btn-lg mb-4 mt-5">Sla de wijzigingen op</button>

  </div>
  <!-- /.container-fluid -->
@stop                

@section('scripts')
  <script src="{{ URL::asset('assets-admin/js/media_add.js') }}"></script>
@stop