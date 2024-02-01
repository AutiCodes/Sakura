<!-- 
Project Sakura.
Custom made for the All Day Tech & Gaming community.
By KelvinCodes, 2023.
For source code or contribution see our Github repo: https://github.com/kelvin-codes-stuff/AllDayTechAndGaming-community-site
Admin page theme: SB Admin 2
-->

@extends('adminpanel::layouts.default')

<!-- Settings page title -->
@section('title', 'Bewerk een categorie')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">           
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
        {{ session('success') }}
    </div>
    @endif

  <!-- Page header -->
  <h1 class="h3 mb-2 text-gray-800 ml-0">Categorieën</h1>

  <div class="row">
    <!-- New category -->
    <div class="col-4 rounded">
      <form action="{{ route('categorieen.update', $category->slug) }}" method="POST">
        @method('PUT')
        @csrf

        <p>Categorie bewerken</p>
        <div class="form-group">
          <label for="name">Naam</label>
          <input type="text" class="form-control shadow" id="name" name="name" placeholder="Hardware" value="{{ $category->name }}">
        </div>
        <div class="form-group">
          <label for="slug">Slug</label>
          <input type="text" class="form-control shadow" id="slug" name="slug" placeholder="hardware-posts" value="{{ $category->slug }}">
        </div>                            
        <div class="form-group">
          <label for="description">Beschrijving</label>
          <textarea class="form-control shadow" id="description" name="description" rows="3" disabled></textarea>
        </div>

        <button type="submit" class="btn btn-primary btn-lg mb-4 shadow">Updaten</button>

      </form>
    </div>
  </div>


</div>
<!-- /.container-fluid -->

@stop