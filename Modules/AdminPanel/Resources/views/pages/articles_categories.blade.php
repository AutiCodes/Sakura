<!-- 
Project Sakura.
Custom made for the All Day Tech & Gaming community.
By KelvinCodes, 2023.
For source code or contribution see our Github repo: https://github.com/kelvin-codes-stuff/AllDayTechAndGaming-community-site
Admin page theme: SB Admin 2
-->

@extends('adminpanel::layouts.default')

<!-- Settings page title -->
@section('title', 'Categorieën')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">            
    @if (session()->has('error'))
        <div class="alert alert-danger" role="alert">
            {{ session('error') }}
        </div>
    @endif

    @if (session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
    @endif
    
<!-- Page header -->
  <h1 class="h3 mb-2 text-gray-800 ml-0">Categorieën</h1>

  <div class="row">
    <!-- New category -->
    <div class="col-4 rounded">
      <form action="{{ route('categorieen.store') }}" method="POST">
        @csrf

        <p>Nieuwe categorie toevoegen</p>
        <div class="form-group">
          <label for="name">Naam</label>
          <input type="text" class="form-control shadow" id="name" name="name" placeholder="Hardware">
        </div>
        <div class="form-group">
          <label for="slug">Slug</label>
          <input type="text" class="form-control shadow" id="slug" name="slug" placeholder="hardware-posts">
        </div>                            
        <div class="form-group">
          <label for="description">Beschrijving</label>
          <textarea class="form-control shadow" id="description" name="description" rows="3" disabled></textarea>
        </div>

        <button type="submit" class="btn btn-primary btn-lg mb-4 shadow">Toevoegen</button>
      </form>
    </div>
    
    <!-- Category table-->
    <div class="col-8 rounded mt-5">
      <!-- Table articles -->
      <table class="table mt-4">
        <thead class="thead">
          <tr>
            <th scope="col">
              <!-- Table controls -->
              <div class="row">
                <div class="col-3">
                  <div class="dropdown show">
                    <a class="btn btn btn-sm dropdown-toggle border bg-primary text-white mb-2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Bulk acties
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                      <a class="dropdown-item" href="#">Verwijderen</a>
                    </div>
                  </div>
                </div>
              </div>
              
              <!-- Top table -->
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  Naam
                </label>
              </div>
            </th>
            <th scope="col">Opties</th>
            <th scope="col">Beschrijving</th>
            <th scope="col">Slug</th>
            <th scope="col">Aantal artikelen</th>
          </tr>
        </thead>
        <tbody>
          @foreach($categories as $category)
            <!-- Row -->
            <tr>
                <th scope="row" class="w-25">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                    {{ $category->name }}
                    </label>
                </div>
                </th>
                <td>
                <a href="{{ route('categorieen.edit', $category->slug) }}">
                    <i class="fa fa-edit ml-2"></i>
                </a>
                <form action="{{ route('categorieen.destroy', $category->slug) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" id="completed-task" class="fabutton">
                        <i class="fa fa-trash" style="border: none; color: red; padding: 0px"></i>
                    </button>
                </form>
                </td>            
                <td>...</td>
                <td>{{ $category->slug }}</td>
                <td>..</td>
            </tr>
          @endforeach
        </tbody>
      </table>
      <!-- End table article -->
    </div>
  </div>


</div>
<!-- /.container-fluid -->

@stop