<!-- 
Project Sakura.
Custom made for the All Day Tech & Gaming community.
By KelvinCodes, 2023.
For source code or contribution see our Github repo: https://github.com/kelvin-codes-stuff/AllDayTechAndGaming-community-site
Admin page theme: SB Admin 2
-->

@extends('adminpanel::layouts.default')

<!-- Settings page title -->
@section('title', 'Artikelen')

@section('content')
  <!-- Begin Page Content -->
  <div class="container">            
    <!-- Page header -->
    <h1 class="h3 mb-2 text-gray-800 ml-0">Artikel instellingen</h1>

    <!-- Language row -->
    <div class="row">
      <div class="col">
        <div class="card shadow w-50">
          <div class="card-body">
            <h5 class="card-title">Standaard categorie</h5>
            <form>
              <select class="form-select w-25" aria-label="">
                <option selected>Standaard</option>
                <option>Hardware</option>
                <option>Software</option>
              </select>
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
