<!-- 
Project Sakura.
Custom made for the All Day Tech & Gaming community.
By KelvinCodes, 2023.
For source code or contribution see our Github repo: https://github.com/kelvin-codes-stuff/AllDayTechAndGaming-community-site
Admin page theme: SB Admin 2
-->

@extends('adminpanel::layouts.default')

<!-- Settings page title -->
@section('title', 'Alle paginas')

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

  <!-- Begin Page Content -->
  <div class="container-fluid">            
    <!-- Page header -->
    <h1 class="h3 mb-0 text-gray-800 ml-2">Pagina's</h1>
    <a href="{{ route('paginas.create') }}"><button type="button" class="btn btn-primary btn-sm ml-2 mt-1">Nieuwe pagina</button></a>

    <!-- Table pages -->
    <table class="table mt-4">
      <thead class="thead">
        <tr>
          <th scope="col">Titel</th>
          <th scope="col">Opties</th>
          <th scope="col">Auteur</th>
          <th scope="col">Statistieken</th>
          <th scope="col">Datum</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($pages as $page)
        <!-- Row 1 -->
        <tr>
          <th scope="row" class="w-25"><a href="{{ route('paginas.edit', $page->slug ) }}">{{ $page->title }}</a></th>
          <td>
            <a href="{{ route('paginas.edit', $page->slug ) }}">
              <i class="fa fa-edit ml-2"></i>
            </a>
            <form id="articles_new_form" action="{{ route('paginas.destroy', $page->slug) }}" method="POST">
              @method('delete')
              @csrf
              <button type="submit" id="completed-task" class="fabutton">
                <i class="fa fa-trash" style="border: none; color: red; padding: 0px"></i>
              </button>
            </form>
          </td>          
          <td><a href="#">{{ $page->author_id }}</a></td>
          <td><a href="#"><i class="fa fa-chart-column"></i></a></td>
          <td class="w-25">Aangemaakt op: {{ $page->created_at }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <!-- End table article -->
  </div>
  <!-- /.container-fluid -->
@stop