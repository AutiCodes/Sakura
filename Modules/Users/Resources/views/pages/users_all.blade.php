<!-- 
Project Sakura.
Custom made for the All Day Tech & Gaming community.
By KelvinCodes, 2023.
For source code or contribution see our Github repo: https://github.com/kelvin-codes-stuff/AllDayTechAndGaming-community-site
Admin page theme: SB Admin 2
-->

@extends('adminpanel::layouts.default')

<!-- Settings page title -->
@section('title', 'Alle gebruikers')

@section('content')
  <!-- Begin Page Content -->
  <div class="container-fluid">       
  
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
 
    <!-- Page header -->
    <h1 class="h3 mb-0 text-gray-800 ml-2">Gebruikers</h1>
    <a href="{{ route('gebruikers.create') }}"> <button type="button" class="btn btn-primary btn-sm ml-2 mt-1">Nieuwe gebruiker</button></a>

    <!-- Table pages -->
    <table class="table mt-4">
      <thead class="thead">
        <tr>
          <th scope="col">Edit</th>
          <th scope="col">Naam</th>
          <th scope="col">Email</i></th>
          <th scope="col">Rol</th>
          <th scope="col">Artikelen</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)        
          <!-- Users rows -->
          <tr>
            <td>
              <form action="{{ route('gebruikers.destroy', $user->id) }}" method="POST">
                @method('delete')
                @csrf
                <button type="submit" id="completed-task" class="fabutton">
                    <i class="fa fa-trash" style="border: none; color: red; padding: 0px"></i>
                </button>
              </form>
    
              <form action="{{ route('gebruikers.edit', $user->id) }}" method="GET">
                @csrf
                <button type="submit" id="completed-task" class="fabutton">
                    <i class="fa fa-edit" style="border: none; color: red; padding: 0px"></i>
                </button>
              </form> 
            </td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->roles[0]->name }}</td>
            <td class="w-25">69</td>
          </tr>  
        @endforeach
      </tbody>
    </table>
    <!-- End table article -->
  </div>
  <!-- /.container-fluid -->
@stop                
