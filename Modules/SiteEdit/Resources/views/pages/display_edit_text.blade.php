<!-- 
Project Sakura.
Custom made for the All Day Tech & Gaming community.
By KelvinCodes, 2023.
For source code or contribution see our Github repo: https://github.com/kelvin-codes-stuff/AllDayTechAndGaming-community-site
Admin page theme: SB Admin 2
-->

@extends('adminpanel::layouts.default')

<!-- Settings page title -->
@section('title', 'Algemeen')

@section('headScrips')
  <!-- include libraries(jQuery, bootstrap) -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

  <!-- include summernote css/js -->
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@stop


<meta name="csrf-token" content="{{ csrf_token() }}" />


@section('content')
  <!-- Begin Page Content -->
  <div class="container">            

    @if (session()->has('success'))
      <div class="alert alert-success" role="alert">
        {{ session('success') }}
      </div>
    @endif


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

    <!-- Page header -->
    <h1 class="h3 mb-1 text-gray-800 ml-0">Tekst instellingen</h1>

    <div class="row">
      <div class="col">
        <div class="card shadow w-100">
          <div class="card-body">
            <h5 class="card-title">Titel</h5>
            <form action="{{ route('weergave-tekst.update', 'title') }}" method="POST">
              @method('PUT')
              @csrf
              <input class="form-control" id="Title" name="title" type="text" value="{{ $title }}">
              <button type="submit" class="btn btn-primary btn-md w-25 mt-4">Update</button>
            </form>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card shadow w-100">
          <div class="card-body">
            <h5 class="card-title">Naam</h5>
            <form action="{{ route('weergave-tekst.update', 'name') }}" method="POST">
              @method('PUT')
              @csrf
              <input class="form-control" id="Title" name="name" type="text" value="{{ $name }}">
              <button type="submit" class="btn btn-primary btn-md w-25 mt-4">Update</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="row mt-5 align-">
      <div class="col">
        <div class="card shadow w-50">
          <div class="card-body">
            <h5 class="card-title">Footer</h5>
            <form action="{{ route('weergave-tekst.update', 'footer') }}" method="POST">
              @method('PUT')
              @csrf
              <input class="form-control" id="Title" name="footer" type="text" value="{{ $footer }}">
              <button type="submit" class="btn btn-primary btn-md w-25 mt-4">Update</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="row mt-5">
      <div class="col">

      <form action="{{ route('weergave-tekst.update', 'homeText') }}" method="POST">
      @method('PUT')
      @csrf
      <h1>Site homepagina tekst</h1>
      <textarea id="summernote" name="editorData">
        {{ $homeText }}
      </textarea>

        <script>
        $(document).ready(function() {
            $('#summernote').summernote({
            height: 600,
            callbacks: {
                onImageUpload: function(files, editor, $editable) {
                // Debug
                sendFile(files[0], editor, $editable);
                }
            }
            });
        });

        function sendFile(file, editor, welEditable) {
            data = new FormData();
            data.append('file', file);
            
            $.ajax({
            data: data,
            type: 'POST',
            url: '/weergave-tekst/media-opslaan',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {
              $('#summernote').summernote('insertImage', data, 'TestName.png')
            },   
            // Debug
            error: function (error) {
            console.log(error);
            }
            });
        }
        </script>
        
        <button type="submit" class="btn btn-primary btn-md w-25 mb-4 mt-4">Updaten</button>

      </div>

    </div>

  </div>
  </div>
  </form>
  </div>
  <!-- /.container-fluid -->
@stop                

@section('scripts')
  <script src="/assets-admin/summernote-0.8.18-dist/summernote.min.js"></script>
@stop