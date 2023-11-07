<!-- 
Project Sakura.
Custom made for the All Day Tech & Gaming community.
By KelvinCodes, 2023.
For source code or contribution see our Github repo: https://github.com/kelvin-codes-stuff/AllDayTechAndGaming-community-site
Admin page theme: SB Admin 2
-->

@extends('adminpanel::layouts.default')

<!-- Settings page title -->
@section('title', 'Nieuwe pagina')

@section('css')
<link href="{{ URL::asset('assets-admin/css/messages_new.css') }}" rel="stylesheet">
@stop

@section('content')

  <!-- Begin Page Content -->
  <div class="container-fluid">            
    <!-- Page header -->
    <h1 class="h3 mb-2 text-gray-800 ml-0">Nieuwe pagina</h1>

    <div class="row">
      <!-- Text editor -->
      <div class="col-8 rounded">
        <div class="editor">
        </div>
      </div>

      <!-- Page settings -->
      <div class="col-lg-auto">
        <!-- Page-tabs -->
        <div class="col-lg-auto text-center">
          <ul class="nav nav-tabs rounded-top" role="tablist">
            <li class="d-flex p-2 bg-white"><a class="mt-1 text-dark fnt-ss font-weight-bold h5" data-toggle="tab" href="#tab-1" role="tab">Categorieën</a></li>
            <li class="d-flex p-2 bg-white"><a class="mt-1 text-dark fnt-ss font-weight-bold h5" data-toggle="tab" href="#tab-2" role="tab">Publiceer tijd</a></li>
            <li class="d-flex p-2 bg-white"><a class="mt-1 text-dark fnt-ss font-weight-bold h5" data-toggle="tab" href="#tab-3" role="tab">Auteur</a></li>
          </ul>
              
            <div class="tab-content tab-articles bg-white rounded">

              <!-- Tab content 1 -->
              <div class="tab-pane active ml-5 mr-5" id="tab-1">
                <h1>Categorieën</h1>
                <hr class="pt-0">
                <div class="form-check">
                  <input class="form-check-input " type="checkbox" value="" id="flexCheckDefault" style="transform: scale(1.5);" checked>
                  <label class="form-check-label ml-4" for="flexCheckDefault">
                    Algemeen
                  </label>
                </div>
                <div class="form-check pt-2">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" style="transform: scale(1.5);">
                  <label class="form-check-label ml-4" for="flexCheckChecked">
                    Hardware
                  </label>
                </div>
                <div class="form-check pt-2">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" style="transform: scale(1.5);">
                  <label class="form-check-label ml-4" for="flexCheckChecked">
                    Software
                  </label>
                </div>
                <div class="form-check pt-2">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" style="transform: scale(1.5);">
                  <label class="form-check-label ml-4" for="flexCheckChecked">
                    Windows
                  </label>
                </div>                    
                <hr>         
                <p><a class="text-dark pb-4" href="#">Categorie toevoegen</a></p>                                                                                               
              </div>

              <!-- Tab content 2 -->
              <div class="tab-pane ml-5 mr-5" id="tab-2">
                <h1>Publiceer tijd</h1>
                <hr>
                <p>T.b.c</p>
              </div>

              <!-- Tab content 3 -->
              <div class="tab-pane ml-5 mr-5" id="tab-3">
                <h1>Auteur</h1>
                <hr>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" style="transform: scale(1.5);">
                  <label class="form-check-label ml-4" for="flexCheckChecked">
                    Sander den breejen
                  </label>
                </div>    
                <div class="form-check pt-2">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" style="transform: scale(1.5);">
                  <label class="form-check-label ml-4" for="flexCheckChecked">
                    KelvinCodes
                  </label>
                </div>    
                <br>
              </div>   
                                               
            </div>
          </div>
          <!-- End page-tabs -->
      </div>
    </div>

    <button type="button" class="btn btn-primary btn-lg mb-4">Publiceer</button>

  </div>
  <!-- /.container-fluid -->

@stop

@section('scripts')
<!-- CKeditor -->
<script src="{{ URL::asset('assets-admin/ckeditor5-40.0.0/build/ckeditor.js') }}"></script>
<script src="{{ URL::asset('assets-admin/ckeditor5-40.0.0/sample/script.js') }}"></script>
@stop