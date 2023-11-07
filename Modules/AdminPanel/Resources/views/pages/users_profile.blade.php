<!-- 
Project Sakura.
Custom made for the All Day Tech & Gaming community.
By KelvinCodes, 2023.
For source code or contribution see our Github repo: https://github.com/kelvin-codes-stuff/AllDayTechAndGaming-community-site
Admin page theme: SB Admin 2
-->

@extends('adminpanel::layouts.default')

<!-- Settings page title -->
@section('title', 'Jouw profiel')

@section('content')
<!-- Begin Page Content -->
<div class="container">            
  <!-- Page header -->
  <h1 class="h3 mb-3 text-gray-800 ml-0">Profiel van KelvinCodes</h1>

  <form>
    <!-- Username -->
    <div class="form-group">
      <label for="username">Gebruikersnaam</label>
      <input type="text" class="form-control" id="username" placeholder="KelvinCodes" disabled>
    </div>

    <!-- First name -->
    <div class="form-group">
      <label for="firstname">Voornaam</label>
      <input type="text" class="form-control" id="firstname" placeholder="Kelvin">
    </div>
    
    <!-- Last name -->
    <div class="form-group">
      <label for="lastname">Achternaam</label>
      <input type="text" class="form-control" id="lastname" placeholder="de Reus">
    </div>

    <!-- Email -->
    <div class="form-group">
      <label for="email">Email adres</label>
      <input type="email" class="form-control" id="email" placeholder="prive@kelvincodes.nl">
    </div>
    
    <!-- Role -->
    <div class="form-group">
      <label for="role">Rol</label>
      <select class="form-control" id="role">
        <option selected>Super-admin</option>
        <option>Admin</option>
        <option>Redacteur</option>
      </select>
    </div>

    <!-- Profile picture -->
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

    <!-- Password -->
    <div class="form-group">
      <label for="password">Wachtwoord</label>
      <input type="password" class="form-control" id="password" placeholder="Wachtwoord">
      <i class="fa fa-eye" onclick="showHidePassword()"></i><span> Toon/verberg wachtwoord</span>
    </div>


    <button type="button" class="btn btn-primary btn-lg mb-4">Update</button>

  </form>
</div>
<!-- /.container-fluid -->
@stop                
