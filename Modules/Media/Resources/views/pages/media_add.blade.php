<!-- 
Project Sakura.
Custom made for the All Day Tech & Gaming community.
By KelvinCodes, 2023.
For source code or contribution see our Github repo: https://github.com/kelvin-codes-stuff/AllDayTechAndGaming-community-site
Admin page theme: SB Admin 2
-->

@extends('adminpanel::layouts.default')

<!-- Settings page title -->
@section('title', 'Media toevoegen')

@section('css')
  <link href="{{ URL::asset('assets-admin/css/media_add.css') }}" rel="stylesheet">
@stop

@section('content')

@if (session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
@endif

  <!-- Begin Page Content -->
  <div class="container-fluid align-items-center">            
    <!-- Page header -->
    <h1 class="h3 mb-2 text-gray-800 ml-0">Media toevoegen</h1>

    <div class="drop-it-hot shadow" id="drop-area">
      <div class="circle">
        <svg fill="currentColor" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
          <path d="M0 0h24v24H0z" fill="none" />
            <path d="M9 16h6v-6h4l-7-7-7 7h4zm-4 2h14v2H5z" />
        </svg>
      </div>

      <form class="choose-files" action="{{ route('uploads.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="button-wrapper">
          <label class="label" for="file">Sleep een bestand hier heen of</label>
          <button type="button" class="btn">Kies een bestand</button>
          <input type="file" id="file" name="file" onchange="handleFiles(this.files)">
        </div>

      <div id="gallery"></div>

    </div>
    
    <!--
    <div class="editor-media">
      <div class="range-wrapper">
        <label for="contrast">Contrast</label>
        <input class="range" name="contrast" value="100" type="range" min="0" max="200" value="0" data-unit="%">
      </div>
      <div class="range-wrapper">
        <label for="brightness">Brightness</label>
        <input class="range" name="brightness" value="100" type="range" min="0" max="200" data-unit="%">
      </div>
      <div class="range-wrapper">
        <label for="blur">Hue</label>
        <input class="range" name="hue-rotate" value="0" type="range" min="0" max="200" data-unit="deg">
      </div>
      <div class="range-wrapper">
        <label for="sepia">Sepia</label>
        <input class="range" name="sepia" value="0" type="range" min="0" max="200" data-unit="%">
      </div>
    </div>
    -->
    <button type="submit" class="btn btn-primary btn-lg mt-2 mb-4">Uploaden</button>

  </div>
  </form>

  <!-- /.container-fluid -->
@stop                

@section('scripts')
  <script src="{{ URL::asset('assets-admin/js/media_add.js') }}"></script>
@stop