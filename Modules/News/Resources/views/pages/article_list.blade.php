<!-- 
Project Sakura.
Custom made for the All Day Tech & Gaming community.
By KelvinCodes, 2023.
For source code or contribution see our Github repo: https://github.com/kelvin-codes-stuff/AllDayTechAndGaming-community-site
-->

@extends('news::layouts.default')

<!-- Custom title -->
<title>{{ $listFilter }}</title>

@section('content')
<div class="row justify-content-center  mt-4">
  <!-- Articles/embeds -->
    <div class="col-lg-5 mb-4 rounded-lg ml-2 mt-sm-4 mt-lg-1 pl-sm-2 pr-sm-2">

      @foreach($articles as $article)
        <!-- Article card -->
        <div class="card flex-row mb-2">
          <img class="card-img-left card-img-responsive p-2 rounded-lg" style="width: 35%;" src="//placehold.it/300"/>
          <div class="card-body p-2">
            <!-- Categorys -->
            <div class="d-flex justify-content-start p-2 d-block mt-3">                    
              <p><a href="/artikelen/{{ $article->category->slug }}" class="home-category-styling">{{ $article->category->name }}</a></p>
              @if ($article->secondCategory != '')
                <p><a href="/artikelen/{{ $article->secondCategory->slug }}" class="ml-2 home-category-styling">{{ $article->secondCategory->name }}</a></p>
              @endif
            </div>
            <!-- Title -->
            <h5 class="card-text d-block text-left ml-2 mb-2"><a href="/artikel/{{ $article->slug }}" class="text-dark font-weight-bold">{{ $article->title }}</a></h5>
            <div class="d-flex justify-content-start mt-3 ml-2">
              <!-- Poster info -->
              <p><i class="fa fa-clock lp-c""></i><a class="text-dark mr-2 href=""> {{ $article->publish_date }}</a></p> 
              <p><i class="fa fa-circle-user lp-c""></i><a class="text-dark" href="#"> {{ $article->author_id }}</a></p>
            </div>
            <!-- Card text -->
            <p class="pl-2"> 
              {{ \Illuminate\Support\Str::limit($article->content, 300, $end='...') }}
            </p>
          </div>
        </div>   
      @endforeach


    </div>
    <!-- End articles/embeds -->

    <!-- Sidebar -->
    <div class="col-lg-auto mb-4 mt-1">
      <!-- Discord embed -->
      <div class="row justify-content-center ml-3 mr-3 bg-white rounded-lg ml-sm-0 mr-sm-0" style="min-width: 470px; max-height: 550px;">
        <iframe src="https://discord.com/widget?id=716388937450389514&amp;theme=dark"
        class="pt-2 pb-2" width="400" height="540" allowtransparency="true" frameborder="0" 
        sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts">
        </iframe>
      </div>
      
      <!-- Instagram embed -->
      <div class="row mt-4 mb-4 justify-content-center ml-3 mr-3 bg-white rounded-lg ml-sm-0 mr-sm-0" style="min-width: 470px; max-height: 550px;">
        <iframe width="400" height="425" class="pt-2 pb-2"
        src="https://www.instagram.com/alldaytechandgaming/embed/" frameborder="0">
        </iframe>
      </div>
      
    </div>
    <!-- End sidebar -->
  </div>

</div>
@stop