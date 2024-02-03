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
  <h1 class="h3 mb-3 text-gray-800 ml-0">Profiel van {{ $user->name }}</h1>

  <form action="{{ route('gebruikers.update', $user->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <!-- Name -->
    <div class="form-group">
      <label for="firstname">Voornaam</label>
      <input type="text" class="form-control" name="name" placeholder="{{ $user->name }}">
    </div>
  
    <!-- Email -->
    <div class="form-group">
      <label for="email">Email adres</label>
      <input type="email" class="form-control" name="email" placeholder="{{ $user->email }}">
    </div>
    
    <!-- Role -->
    <div class="form-group">
      <label for="role">Rol</label>
      <select class="form-control" name="role">
        @foreach ($roles as $role)
          @if ($role->name == $user->roles[0]->name)
            <option selected>{{ $role->name }}</option>
          @else
            <option>{{ $role->name }}</option>
          @endif
        @endforeach
      </select>
    </div>

    <!-- Profile picture -->
    <div class="form-group">
      <label for="profile-picture">Profiel foto</label>
        <div class="col w-25 ml-0 pl-0">
          <img src="{{ URL::asset('system/profile-pictures/'. Auth::user()->id. '.png') }}" class="mb-3" style="max-width: 75px; max-height: 75px;">
            <input type="file" name="profile_picture">
        </div>
      </div>
    
    <script>

    </script>

    <!-- Password -->
    <div class="form-group">
      <label for="password">Wachtwoord</label>
      <input type="password" class="form-control" name="password" placeholder="Wachtwoord">
      <i class="fa fa-eye" onclick="showHidePassword()"></i><span> Toon/verberg wachtwoord</span>
    </div>

    <button type="submit" class="btn btn-primary btn-lg mb-4">Updaten</button>

  </form>
</div>
<!-- /.container-fluid -->
@stop                
