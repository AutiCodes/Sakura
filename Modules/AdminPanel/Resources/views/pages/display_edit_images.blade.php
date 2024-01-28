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
      <!-- Change favicon -->
      <div class="col">
        <div class="card" style="width: 25rem;">
          <div class="card-body">
            <h5 class="card-title border-bottom pb-3">Favicon</h5>
            <form action="{{ route('weergave-afbeeldingen.update', 'faticon') }}" method="POST">
            @method('PUT')
            @csrf
            <div class="row">
              <div class="col-2">
                  @if ($faticon === null)
                    <img src="//placehold.it//60" style="width: 60px">
                  @else 
                    <img src="{{ $faticon->image_location }}" style="width: 60px">
                  @endif
              </div>
              <div class="col">
                <input class="form-control mr-3 ml-1" type="file" name="faticon" id="formFile">
              </div>
            </div>
            <button type="submit" class="btn btn-primary btn-md  mt-4">Update</button>
            </form>
          </div>
        </div>
      </div>
      <!-- Change main icon -->
      <div class="col">
        <div class="card" style="width: 25rem;">
          <div class="card-body">
            <h5 class="card-title border-bottom pb-3">Hoofd icoon</h5>
            <form action="{{ route('weergave-afbeeldingen.update', 'main') }}" method="POST">
            @method('PUT')
            @csrf                
            <div class="row">
              <div class="col-2">
                @if ($main === null)
                  <img src="//placehold.it//60" style="width: 60px">
                @else 
                  <img src="{{ $main->image_location }}" style="width: 60px">
                @endif
              </div>
              <div class="col">
                <input class="form-control mr-3 ml-1" type="file" name="main" id="formFile">
              </div>
            </div>
            <button type="submit" class="btn btn-primary btn-md  mt-4">Update</button>
            </form>
          </div>
        </div>
      </div>
      <!-- Change login icon -->
      <div class="col">
        <div class="card" style="width: 25rem;">
          <div class="card-body">
            <h5 class="card-title border-bottom pb-3">Login icoon</h5>
            <form action="{{ route('weergave-afbeeldingen.update', 'signin') }}" method="POST">
            @method('PUT')
            @csrf                
            <div class="row">
              <div class="col-2">
                @if ($signin === null)
                  <img src="//placehold.it//60" style="width: 60px">
                @else 
                  <img src="{{ $signin->image_location }}" style="width: 60px">
                @endif
              </div>
              <div class="col">
                <input class="form-control mr-3 ml-1" type="file" nam="signin" id="formFile">
              </div>
            </div>
            <button type="submit" class="btn btn-primary btn-md  mt-4">Update</button>
            </form>
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
              <form action="{{ route('weergave-afbeeldingen.update', 'header') }}" method="POST">
              @method('PUT')
              @csrf                
              <div class="row">
                <div class="col-7">
                  @if ($header === null)
                    <img src="//placehold.it//400" style="width: 400px">
                  @else 
                    <img src="{{ $header->image_location }}" style="width: 400px">
                  @endif
                </div>
                <div class="col">
                  <input class="form-control mr-3" type="file" name="header" id="formFile">
                </div>
              </div>
              <button type="submit" class="btn btn-primary btn-md  mt-4">Update</button>
              </form>
            </div>
          </div>
        </div>

        <!-- Change footer-->
        <div class="col">
          <div class="card" style="width: 50rem;">
            <div class="card-body">
              <h5 class="card-title border-bottom pb-3">Footer</h5>
              <form action="{{ route('weergave-afbeeldingen.update', 'footer') }}" method="POST">
              @method('PUT')
              @csrf                
              <div class="row">
                <div class="col-7">
                  @if ($footer === null)
                    <img src="//placehold.it//400" style="width: 400px">
                  @else 
                    <img src="{{ $footer->image_location }}" style="width: 400px">
                  @endif
                </div>
                <div class="col">
                  <input class="form-control mr-3" type="file" name="footer" id="formFile">
                </div>
              </div>
              <button type="submit" class="btn btn-primary btn-md  mt-4">Update</button>
              </form>
            </div>
          </div>
        </div>
    </div>

  </div>
  <!-- /.container-fluid -->
@stop                

@section('scripts')
  <script src="{{ URL::asset('assets-admin/js/media_add.js') }}"></script>
@stop