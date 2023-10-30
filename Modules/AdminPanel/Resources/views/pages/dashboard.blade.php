<!-- 
Project Sakura.
Custom made for the All Day Tech & Gaming community.
By KelvinCodes, 2023.
For source code or contribution see our Github repo: https://github.com/kelvin-codes-stuff/AllDayTechAndGaming-community-site
Admin page theme: SB Admin 2
-->

@extends('adminpanel::layouts.default')

<!-- Settings page title -->
@section('title', 'Dashboard')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
  <!-- Version info -->
  <span class="text-gray-800 mb-4">Version: 1.69</span>

  <!-- Site preview -->
  <div class="row justify-content-center">
    <div class="col-md-8 ml-0 text-center">
      <h1 class="text-dark">Site preview home</h1>
      <iframe src="/" class="" style="height: 300%; min-width: 60%;"></iframe>
    </div>
  </div>
</div>
<!-- /.container-fluid -->

@stop