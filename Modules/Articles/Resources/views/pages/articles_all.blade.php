<!-- 
Project Sakura.
Custom made for the All Day Tech & Gaming community.
By KelvinCodes, 2023.
For source code or contribution see our Github repo: https://github.com/kelvin-codes-stuff/AllDayTechAndGaming-community-site
Admin page theme: SB Admin 2
-->

@extends('adminpanel::layouts.default')

<!-- Settings page title -->
@section('title', 'Alle artikelen')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">            

  @if (session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
  @endif

  <!-- Page header -->
  <h1 class="h3 mb-0 text-gray-800 ml-2">Artikelen</h1>
  <a href="{{ route('artikelen.create') }}" class="btn btn-primary btn-sm ml-2 mt-1" >Nieuwe post</a>

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
                  <a class="dropdown-item" href="#">Bewerken</a>
                  <a class="dropdown-item" href="#">Prullenbak</a>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Top table -->
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              Titel
            </label>
          </div>
        </th>
        <th scope="col">Opties</th>
        <th scope="col">Auteur</th>
        <th scope="col">Categorieën</th>
        <th scope="col">Tags</th>
        <th scope="col"><i class="fa fa-comment"></i></th>
        <th scope="col">Datum</th>
      </tr>
    </thead>

    <tbody>
      <!-- Row -->
      @foreach($articles as $article)
        <tr>
            <th scope="row" class="w-25">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                <a href="#">{{ $article->title }}</a> 
                </label>
            </div>
            </th>
            <td>
              <a href="{{ route('artikelen.edit', $article->slug) }}">
                <i class="fa fa-edit ml-2"></i>
              </a>
              <form id="articles_new_form" action="{{ route('artikelen.destroy', $article->slug) }}" method="POST">
                @method('delete')
                @csrf
                <button type="submit" id="completed-task" class="fabutton">
                    <i class="fa fa-trash" style="border: none; color: red; padding: 0px"></i>
                </button>
              </form>
            </td>
            <td><a href="#">{{ $article->author_id }}</a></td>
            <td>
                @foreach($article->categories as $category)
                  <a href="#">{{ $category->name }}</a>
                @endforeach
            </td>
            <td><a href="#">-</a></td>
            <td><a href="#"><i class="fa fa-comment"></i></a></td>
            <td class="w-25">laatste wijziging:<a href="#"> {{ $article->updated_at }}</a></td>
        </tr>
      @endforeach
    </tbody>
  </table>
  <!-- End table article -->
  <nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
      <li class="page-item"><a class="page-link" href="#">Vorige</a></li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item"><a class="page-link" href="#">Volgende</a></li>
    </ul>
  </nav>

</div>
<!-- /.container-fluid -->

<!-- Modal deletion -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModal">Artikel verwijderen</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h4>Weet je zeker dat je dit artikel wilt verwijderen?!</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Sluit</button>
        <button type="button" class="btn btn-primary">Ja, ik weet het zeker!</button>
      </div>
    </div>
  </div>
</div>
@stop