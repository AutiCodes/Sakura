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

<meta name="csrf-token" content="{{ csrf_token() }}" />


@section('content')
  <!-- Begin Page Content -->
  <div class="container-fluid mb-6">            
    <!-- Page header -->
    <h1 class="h3 mb-2 text-gray-800 ml-0">Site iconen</h1>

    <div class="row">
      <!-- Change main icon -->
      <div class="col">
        <div class="card" style="width: 25rem;">
          <div class="card-body">
            <h5 class="card-title border-bottom pb-3">Icoon</h5>
            <form action="{{ route('weergave-afbeeldingen.update', 'main') }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf                
            <div class="row">
              <div class="col-2">
                @if ($icon === null)
                  <img src="//placehold.it//60" style="width: 60px">
                @else 
                  <img src="{{ $icon }}" style="width: 60px">
                @endif
              </div>
              <div class="col">
                <input class="form-control mr-3 ml-1" type="file" name="icon" id="formFile">
              </div>
            </div>
            <button type="submit" class="btn btn-primary btn-md  mt-4">Update</button>
            </form>
          </div>
        </div>
      </div>
  </div>
  <!-- /.container-fluid -->
@stop                

@section('scripts')
  <script src="{{ URL::asset('assets-admin/js/media_add.js') }}"></script>
@stop