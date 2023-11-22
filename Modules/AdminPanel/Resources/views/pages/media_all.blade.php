<!-- 
Project Sakura.
Custom made for the All Day Tech & Gaming community.
By KelvinCodes, 2023.
For source code or contribution see our Github repo: https://github.com/kelvin-codes-stuff/AllDayTechAndGaming-community-site
Admin page theme: SB Admin 2
-->

@extends('adminpanel::layouts.default')

<!-- Settings page title -->
@section('title', 'Alle media')

@section('content')

@if (session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
@endif

@if (session()->has('error'))
    <div class="alert alert-danger" role="alert">
        {{ session('error') }}
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

<!-- Begin Page Content -->
<div class="container-fluid">            
    <!-- Page header -->
    <h1 class="h3 mb-2 text-gray-800 ml-0">Media</h1>
    
    <form action="{{ route('uploads.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <input class="form-control mt-0 mb-1" type="file" id="image" name="image" multiple style="max-width: 20%;">
      <button type="submit" class="btn btn-primary btn-sm mb-4 mt-0">Toevoegen</button>
    </form>
    
        <!-- Media control -->
        <div class="row justify-content-start">
        <div class="col bg-white">
            <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-secondary rounded" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Media types</button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Afbeeldingen</a>
                <a class="dropdown-item" href="#">Videos</a>
                <a class="dropdown-item" href="#">Audio</a>
                <a class="dropdown-item" href="#">Documenten</a>
            </div>
            <button type="button" class="btn btn-secondary ml-2 rounded" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Datums</button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Oktober 2023</a>
                <a class="dropdown-item" href="#">Mei 2023</a>
                <a class="dropdown-item" href="#">April 2023</a>
            </div>
            </div>
        </div>
        
        <div class="col bg-white">
            <div class="input-group float-right">
            <div class="form-outline w-25 bg-dark rounded">
                <input type="search" id="form1" class="form-control" />
                <label class="form-label text-white" for="form1">Zoeken</label>
            </div>
            <button type="button" class="btn btn-primary">
                <i class="fas fa-search"></i>
            </button>
            </div>
        </div>
        
    </div>

    <div class="row mt-2 bg-white jus">
        <div class="container">
        <div class="row mb-2 mt-2">
            <!-- Individual media's -->
            @foreach($media as $file)
              <div class="col-sm mb-2 text-center">
                <a data-toggle="modal" data-target="#m-{{ explode('.', $file->getFileName())[0] }}"><img src="{{ asset('media/' . $file->getFileName()) }}" style="max-width: 120px;" class="rounded shadow"></a>
              </div>         
            @endforeach
        </div>
        </div>
    </div>



    @foreach($media as $file)
        <!-- Modal media information -->
        <div class="modal fade" id="m-{{ explode('.', $file->getFileName())[0] }}" tabindex="-1" role="dialog" aria-labelledby="{{ explode('.', $file->getFileName())[0] }}" aria-hidden="true">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <h1 class="border-bottom ml-4">Media details</h1>

                <div class="row">
                <!-- Image preview -->
                <div class="col mb-4 mt-4 ml-4">
                    <img src="{{ asset('media/' . $file->getFileName()) }}" style="max-width: 600px;">
                </div>

                <!-- Details-->
                <div class="col mt-4 mr-2">
                <p class="font-weight-bold">Geüpload op:</p> <p>{{ $mediaInformation->where('name', $file->getFileName())->first()->created_at }}</p>
                <p class="font-weight-bold">Geüpload door:</p> <p><a href="#">{{ $mediaInformation->where('name', $file->getFileName())->first()->uploaded_by }}</a></p>
                @if ($mediaInformation->where('name', $file->getFileName())->first()->uploaded_for === null)
                  <p class="font-weight-bold">Geüpload voor:</p> <p>Geen artikel is gelinked</p>
                @else
                  <p class="font-weight-bold">Geüpload voor:</p> <p><a href="#">{{ $mediaInformation->where('name', $file->getFileName())->first()->uploaded_for }}</a></p>
                @endif
                <p class="font-weight-bold">Bestandsnaam:</p> <p>{{ $file->getFileName() }}</p>
                <p class="font-weight-bold">Bestandsgrootte:</p> <p>{{ convertFileSize($mediaInformation->where('name', $file->getFileName())->first()->size) }}</p>
                <p class="font-weight-bold">Afmetingen:</p> <p>{{ $mediaInformation->where('name', $file->getFileName())->first()->dimensions }}px</p>
                
                <hr>
                </div>

                <div class="row justify-content-center ml-2 mr-2">
                  <form action="{{ route('uploads.update', $file->getFileName()) }}" method="POST">
                    @method('PUT')
                    @csrf

                    <div class="form-group" hidden>
                      <input type="text" class="form-control" id="old_name" name="old_name" placeholder="" value="{{ $file->getFileName() }}">
                    </div>

                    <div class="form-group">
                    <label for="name" name="name">Naam</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="" value="{{ $file->getFileName() }}">
                    </div>
                    <div class="form-group">
                    <label for="exampleFormControlTextarea1">Bestand url</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" disabled>{{ url('/media/' . $file->getFileName()) }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary mb-2">Toepassen</button>
                  </form>

                  <form class="mb-2" action="{{ route('uploads.destroy', $file->getFileName()) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn mb-2"><i class="fa fa-trash fa-xl"></i></button>
                  </form>
                </div>

                </div>
            </div>
            </div>
        </div>
    @endforeach
</div>
<!-- /.container-fluid -->

@stop