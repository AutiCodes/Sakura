<!-- 
Project Sakura.
Custom made for the All Day Tech & Gaming community.
By KelvinCodes, 2023.
For source code or contribution see our Github repo: https://github.com/kelvin-codes-stuff/AllDayTechAndGaming-community-site
Admin page theme: SB Admin 2
-->

@extends('adminpanel::layouts.default')

<!-- Settings page title -->
@section('title', 'Verander site tekst')

@section('css')
  <link href="{{ URL::asset('assets-admin/css/messages_new.css') }}" rel="stylesheet">
@stop

@section('content')
  <!-- Begin Page Content -->
  <div class="container-fluid">            
    <!-- Page header -->
    <h1 class="h3 mb-2 text-gray-800 ml-0">Site hoofd tekst</h1>

    <!-- Main site text editor-->
    <div class="row">
      <!-- Text editor -->
      <div class="col-8 rounded">
        <div class="editor">
          Hier komt de site text automatisch
          </div>
        </div>
      </div>

      <button type="button" class="btn btn-primary btn-lg mb-4">Sla de wijzigingen op</button>

  </div>
  <!-- /.container-fluid -->
@stop                

@section('scripts')
  <script src="{{ URL::asset('assets-admin/ckeditor5-40.0.0/build/ckeditor.js') }}"></script>
  <script src="{{ URL::asset('assets-admin/ckeditor5-40.0.0/sample/script.js') }}"></script>
@stop