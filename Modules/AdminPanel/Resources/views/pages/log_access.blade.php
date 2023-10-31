<!-- 
Project Sakura.
Custom made for the All Day Tech & Gaming community.
By KelvinCodes, 2023.
For source code or contribution see our Github repo: https://github.com/kelvin-codes-stuff/AllDayTechAndGaming-community-site
Admin page theme: SB Admin 2
-->

@extends('adminpanel::layouts.default')

<!-- Settings page title -->
@section('title', 'Access logs')

@section('content')
  <!-- Begin Page Content -->
  <div class="container">            
    <!-- Page header -->
    <h1 class="h3 mb-2 text-gray-800 ml-0">Access logs (laatste 50 regels)</h1>

    <object data="../admin/example_log.log" type="text/plain" style="width: 1000px;"></object> <!-- Temp, gonna use PHP later to fetch last 50 lines -->
    
  </div>
  <!-- /.container-fluid -->
@stop                

@section('scripts')
  <script src="{{ URL::asset('assets-admin/js/media_add.js') }}"></script>
@stop