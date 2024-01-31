
<!-- 
Project Sakura.
Custom made for the All Day Tech & Gaming community.
By KelvinCodes, 2023.
For source code or contribution see our Github repo: https://github.com/kelvin-codes-stuff/AllDayTechAndGaming-community-site
Admin page theme: SB Admin 2
-->

@extends('adminpanel::layouts.default')

<!-- Settings page title -->
@section('title', 'Gebruikers toevoegen')

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
    <h1 class="h3 mb-3 text-gray-800 ml-0">Profiel aanmaken</h1>

    <form action="{{ route('gebruikers.store') }}" method="POST">
      @csrf
      <!-- Name -->
      <div class="form-group">
        <label for="firstname">Naam</label><i class="fa-solid fa-star-of-life small ml-1"></i>
        <input type="text" class="form-control" name="name" placeholder="Voornaam achternaam (of gebruikersnaam)" required>
      </div>
      
      <!-- Email -->
      <div class="form-group">
        <label for="email">Email adres</label><i class="fa-solid fa-star-of-life small ml-1"></i>
        <input type="email" class="form-control" name="email" placeholder="email@provider.nl" required>
      </div>
      
      <!-- Role -->
      <div class="form-group">
        <label for="role">Rol</label><i class="fa-solid fa-star-of-life small ml-1"></i>
        <select class="form-control" name="role" required>
          @foreach ($roles as $role)
            <option value="{{ $role->name }}">{{ $role->name }}</option>
          @endforeach
        </select>
      </div>

      <!-- Profile picture 
      <div class="form-group">
        <label for="profile-picture">Profiel foto</label>
          <div class="col w-25 ml-0 pl-0">
            <img src="//placehold.it/80" class="mb-3">
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="customFile">
              <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
          </div>
        </div>
      -->

      <!-- Password -->
      <div class="form-group">
        <label for="password">Wachtwoord</label><i class="fa-solid fa-star-of-life small ml-1"></i>
        <input type="password" class="form-control" name="password" placeholder="Wachtwoord" required>
        <i class="fa fa-eye" onclick="showHidePassword()"></i><span> Toon/verberg wachtwoord</span>
      </div>


      <button type="submit" class="btn btn-primary btn-lg mb-4">Gebruiker toevoegen</button>

    </form>
  </div>
  <!-- /.container-fluid -->
@stop                
