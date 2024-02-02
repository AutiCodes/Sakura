<!-- 
Project Sakura.
Custom made for the All Day Tech & Gaming community.
By KelvinCodes, 2023.
For source code or contribution see our Github repo: https://github.com/kelvin-codes-stuff/AllDayTechAndGaming-community-site
-->

@extends('news::layouts.default')

@section('title', $title)

@section('content')
<div class="row mt-4 justify-content-center ml-0 mr-0">
    <!-- Slideshow -->
    <div class="col-lg-5 text-center px-0 mb-4 mr-sm-3 ml-sm-3" id="col-slideshow">
      <div id="carousel-slide" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          @foreach($articles->take(2) as $article)            
            <!-- Item -->
            @if ($loop->index === 0)
              <div class="carousel-item carousel-slide-left active">
            @else 
              <div class="carousel-item carousel-slide-left">
            @endif
            <!-- Article image -->
            <img class="d-block w-100 rounded-lg" style="height: 575px;" src="{{ $article->image }}"
            >
            <div class="carousel-caption text-left">
              <!-- article categorys -->
              <div class="d-flex justify-content-start p-0">                    
                @foreach($article->categories as $category)
                  <p><a href="/artikelen/{{ $category->slug }}" class="home-category-styling mr-3">{{ $category->name }}</a></p>
                @endforeach
              </div>
              <!-- Title -->
              <h2 class="p-0"><a class="text-white" href="{{ route('articles.show', $article->slug) }}">{{ $article->title }}</a></h2>
              <div class="d-flex justify-content-start mt-3">
                <!-- info -->
                <p><i class="fa fa-clock"></i><a class="text-white pl-2" href="#">{{ $article->publish_date }}</a></p> 
                <p><i class="fa fa-circle-user ml-2"></i>
                @foreach($article->users as $author)
                  <a class="text-white pl-2" href="#">
                    {{ $author->name }}
                  </a>
                @endforeach
                </p>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        <!-- Back button -->
        <a class="carousel-control-prev" href="#carousel-slide" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Vorige</span>
        </a>

        <!-- Next button -->
        <a class="carousel-control-next" href="#carousel-slide" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <!-- End slideshow -->
    </div>

        <!-- Article-tabs -->
  <div class="col-lg-auto text-center rounded-lg">
    <ul class="nav nav-tabs rounded-top" role="tablist">
      <li class="d-flex p-2 bg-white"><a class="mt-1 text-dark fnt-ss font-weight-bold h5" data-toggle="tab" href="#tab-1" role="tab"><i class="fa-solid fa-clock"></i> Laatste berichten</a></li>
      <li class="d-flex p-2 bg-white"><a class="mt-1 text-dark fnt-ss font-weight-bold h5" data-toggle="tab" href="#tab-2" role="tab"><i class="fa-solid fa-microchip"></i> Hardware</a></li>
      <li class="d-flex p-2 bg-white"><a class="mt-1 text-dark fnt-ss font-weight-bold h5" data-toggle="tab" href="#tab-3" role="tab"><i class="fa-solid fa-laptop-code"></i> Software</a></li>
    </ul>
    <div class="tab-content tab-articles bg-white">

      <!-- Tab content 1 -->
      <div class="tab-pane active" id="tab-1">
        @foreach($articles->take(4) as $article)
          <!-- Article card -->
          <div class="card flex-row">
            <img class="card-img-left card-img-responsive p-2 w-25 rounded-lg" src="{{ $article->image }}" style="max-width: 250px"/>
            <div class="card-body p-2">
              <!-- Categorys -->
              <div class="d-flex justify-content-start p-2 d-block">       
                @foreach($article->categories as $category)             
                  <p><a href="/artikelen/{{ $category->slug }}" class="home-category-styling mr-3">{{ $category->name }}</a></p>
                @endforeach
              </div>
              <h5 class="card-text d-block text-left ml-2 mb-2"><a href="{{ route('articles.show', $article->slug) }}" class="text-dark font-weight-bold">{{ $article->title }}</a></h5>
            </div>
          </div>      
        @endforeach
      </div>
      
      <!-- Tab content 2 -->
      <div class="tab-pane" id="tab-2">
        @foreach($hardware->take(4) as $articleHardware)
          <!-- Article card -->
          <div class="card flex-row">
            <img class="card-img-left card-img-responsive p-2 w-25 rounded-lg" src="{{ $article->image }}" style="max-width: 250px"/>
            <div class="card-body p-2">
              <!-- Categorys -->
              <div class="d-flex justify-content-start p-2 d-block">                    
                @foreach($articleHardware->categories as $category)             
                  <p><a href="/artikelen/{{ $category->slug }}" class="home-category-styling mr-3">{{ $category->name }}</a></p>
                @endforeach
              </div>
              <h5 class="card-text d-block text-left ml-2 mb-2"><a href="{{ route('articles.show', $articleHardware->slug) }}" class="text-dark font-weight-bold">{{ $articleHardware->title }}</a></h5>
            </div>
          </div>      
        @endforeach
      </div>
      
      <!-- Tab content 3-->
      <div class="tab-pane" id="tab-3">
        @foreach($software->take(4) as $articleSoftware)
          <!-- Article card -->
          <div class="card flex-row">
            <img class="card-img-left card-img-responsive p-2 w-25 rounded-lg" src="{{ $article->image }}" style="max-width: 250px"/>
            <div class="card-body p-2">
              <!-- Categorys -->
              <div class="d-flex justify-content-start p-2 d-block">                    
                @foreach($articleSoftware->categories as $category)             
                  <p><a href="/artikelen/{{ $category->slug }}" class="home-category-styling mr-3">{{ $category->name }}</a></p>
                @endforeach
              </div>
              <h5 class="card-text d-block text-left ml-2 mb-2"><a href="{{ route('articles.show', $articleSoftware->slug) }}" class="text-dark font-weight-bold">{{ $articleSoftware->title }}</a></h5>
            </div>
          </div>      
        @endforeach
      </div>
    </div>
  <!-- End article-tabs -->
  </div>

  <div class="row justify-content-center ml-0 mr-0">
    <!-- Page intro text -->
    <div class="col-lg-5 bg-white mb-4 rounded ml-2 mt-sm-4 mt-lg-1 mr-sm-3 ml-sm-3" style="border-radius: 5px;">
        {!! $homeText !!}
    </div>
    <!-- End page intro text -->


    <div class="col-lg-auto mb-4">
      <!-- Discord embed -->
      <div class="row justify-content-center ml-3 mr-3 bg-white rounded-lg ml-sm-0 mr-sm-0" style="min-width: 470px; max-height: 550px; border-radius: 5px;">
        <iframe src="https://discord.com/widget?id=716388937450389514&amp;theme=dark"
        class="pt-2 pb-2" width="400" height="540" allowtransparency="true" frameborder="0" 
        sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts">
        </iframe>
      </div>
      
      <!-- Instagram embed -->
      <div class="row mt-4 mb-4 justify-content-center ml-3 mr-3 bg-white rounded-lg ml-sm-0 mr-sm-0" style="min-width: 470px; max-height: 550px; border-radius: 5px;">
        <iframe width="400" height="425" class="pt-2 pb-2"
        src="https://www.instagram.com/alldaytechandgaming/embed/" frameborder="0">
        </iframe>
      </div>
      
    </div>
  </div>

</div>
@stop