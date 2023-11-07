<!-- 
Project Sakura.
Custom made for the All Day Tech & Gaming community.
By KelvinCodes, 2023.
For source code or contribution see our Github repo: https://github.com/kelvin-codes-stuff/AllDayTechAndGaming-community-site
Admin page theme: SB Admin 2
-->

@extends('adminpanel::layouts.default')

<!-- Settings page title -->
@section('title', 'URLS')

@section('content')
  <!-- Begin Page Content -->
  <div class="container">            
    <!-- Page header -->
    <h1 class="h3 mb-2 text-gray-800 ml-0">URL instellingen</h1>

    <div class="card shadow w-50">
      <div class="card-body">
        <h5 class="card-title">Format</h5>
        <form>
          <select class="form-select w-100" aria-label="Url formatting">
            <option selected>https://website.nl/artikels/2023/10/29/artikel-titel-hier</option>
            <option>https://website.nl/posts/artikel-titel-hier</option>
          </select>
          <a href="#" class="btn btn-primary mt-3">Update</a>
        </form>
      </div>
    </div>
  </div>
  <!-- /.container-fluid -->
@stop                

