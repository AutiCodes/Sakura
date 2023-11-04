<!-- 
Project Sakura.
Custom made for the All Day Tech & Gaming community.
By KelvinCodes, 2023.
For source code or contribution see our Github repo: https://github.com/kelvin-codes-stuff/AllDayTechAndGaming-community-site
-->

@extends('news::layouts.default')

@section('content')
  @foreach($articles->take(2) as $article)    

    <h1>{{ $article->title }}</h1>
    
    @foreach ($article->categories as $category)        
     <p>{{ $category->name }}</p>
    @endforeach

  @endforeach
@stop