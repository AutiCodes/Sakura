<!-- 
Project Sakura.
Custom made for the All Day Tech & Gaming community.
By KelvinCodes, 2023.
For source code or contribution see our Github repo: https://github.com/kelvin-codes-stuff/AllDayTechAndGaming-community-site
Admin page theme: SB Admin 2
-->

@extends('adminpanel::layouts.default')


<!-- Settings page title -->
@section('title', 'Nieuw bericht')


@section('css')
  <link href="{{ URL::asset('assets-admin/css/messages_new.css') }}" rel="stylesheet">
@stop


@section('headScrips')
  <!-- include libraries(jQuery, bootstrap) -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

  <!-- include summernote css/js -->
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@stop


<meta name="csrf-token" content="{{ csrf_token() }}" />


@section('content')
  <!-- Begin Page Content -->
  <div class="container-fluid">            
    <!-- Page header -->
    <h1 class="h3 mb-2 text-gray-800 ml-0">"{{ $article->title }}" bewerken</h1>

    @if ($errors->any())
      <div class="alert alert-danger">
        <h1>WhoopsieDoopsie!</h1>
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    @if (session()->has('success'))
    <div class="alert alert-success" role="alert">
        <h4>{{session('success')}}</h4>
    </div>
    @endif

    <form id="articles_new_form" action="{{ route('artikelen.update', $article->slug) }}" method="POST">
      @method('PUT')
      @csrf
    
      <div class="row">
        <!-- Text editor -->
        <div class="col-8 rounded">
          <!--
          <div class="editor" id="editor" name="editor">
          </div>
          -->
          <input class="form-control mt-2 mb-2" type="text" placeholder="Titel" value="{{ $article->title }}" name="title">


          <textarea id="summernote" name="editorData">
          {{ $article->content }}
          </textarea>

          <script>

            $(document).ready(function() {
              $('#summernote').summernote({
                height: 600,
                callbacks: {
                  onImageUpload: function(files, editor, $editable) {
                    // Debug
                    console.log('onImageUpload called')
                    sendFile(files[0], editor, $editable);
                  }
                }
              });
            });

            function sendFile(file, editor, welEditable) {
              // Debug
              console.log('sendFile called');

              data = new FormData();
              data.append('file', file);
              
              // Debug
              for (const value of data.values()) {
                console.log(value);
              }

              $.ajax({
               data: data,
               type: 'POST',
               url: '/artikelen/media-opslaan',
               headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
               cache: false,
               contentType: false,
               processData: false,
               success: function (data) {
                // Debug
                console.log('success called');
                console.log(data);
                $('#summernote').summernote('insertImage', data, 'TestName.png')
               },   
               // Debug
               error: function (error) {
                console.log(error);
               }
              });
            }
          </script>
        </div>


        <!-- Article settings -->
        <div class="col-lg-auto">
          <!-- Article-tabs -->
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
                <div class="form-group" name="categories">
                    @foreach($categories as $category)
                        <div class="form-check mb-2">
                            @if(in_array($category->id, $categoriesIds))
                            <input class="form-check-input" type="checkbox" value="{{ $category->id }}" name="categories[]" style="transform: scale(1.5);" checked>
                            @else 
                            <input class="form-check-input" type="checkbox" value="{{ $category->id }}" name="categories[]" style="transform: scale(1.5);">
                            @endif
                            <label class="form-check-label ml-4" for="category_general">
                            {{ $category->name }}
                            </label>
                        </div>
                    @endforeach             
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
              <div class="tab-pane ml-5 mr-5" id="tab-3" >
                <h1>Auteur</h1>
                <hr>
                
                <select class="form-select" aria-label="Default select" name="author">
                  <option selected>Open this select menu</option>
                  <option value=1 selected>KelvinCodes</option>
                  <option value=2 >Sander den Breejen</option>
                </select>
                <br>
              </div>                                    
            </div>
          </div>
          <!-- End article-tabs -->

        </div>

      </div>
      <button type="submit" class="btn btn-primary btn-lg mb-4">Publiceren</button>
      <button type="submit" id="concept" class="btn btn-primary btn-lg mb-4">Als concept opslaan</button>
    </form>
  </div>
  <!-- /.container-fluid -->
@stop


@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
@stop