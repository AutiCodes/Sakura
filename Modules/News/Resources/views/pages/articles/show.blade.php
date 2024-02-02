<!-- 
Project Sakura.
Custom made for the All Day Tech & Gaming community.
By KelvinCodes, 2023.
For source code or contribution see our Github repo: https://github.com/kelvin-codes-stuff/AllDayTechAndGaming-community-site
-->

@extends('news::layouts.default')

<!-- Custom title -->
<title>{{ $article->title }}</title>

@section('content')
<div class="row justify-content-center mt-4">
    <!-- Articles/embeds -->
    <div class="col-lg-5 mb-4 rounded-lg ml-2 mt-sm-4 mt-lg-1 pl-sm-2 pr-sm-2 bg-white ml-sm-3 mr-sm-3">
      <!-- Article --> 
      <article class="p-4">
        <!-- Article category -->
        <div class="d-flex justify-content-start d-block">                    
          @foreach($article->categories as $category)
            <p><a href="/artikelen/{{ $category->slug }}" class="home-category-styling mr-3">{{ $category->name }}</a></p>
          @endforeach
        </div>

        <!-- Article title -->
        <h1 class="font-weight-bold">{{ $article->title }}</h1>

        <!-- Article poster info -->
        <div class="row mb-4 pt-3 pb-3">
          <div class="col" style="max-width: 15%;">
            <img src="//placehold.it/75" class="rounded-circle">
          </div>
          <div class="col my-auto">
            <div class="row border-bottom mb-1">
              <h6><i class="fa fa-circle-user lp-c"></i> 
                @foreach($article->authors as $author)
                  <a class="text-dark" href="{{ $author->name }}">
                    {{ $author->name }}
                  </a>
                 @endforeach
                </a></h6>
            </div>
            <div class="row my-auto">
              <h6><i class="fa fa-clock lp-c"></i> {{ $article->publish_date }}</h6>
            </div>
          </div>
        </div>

        <!-- Article text -->
        {!! $article->content !!}
      </article>
      <!-- End article -->
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