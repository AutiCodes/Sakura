<!-- 
Project Sakura.
Custom made for the All Day Tech & Gaming community.
By KelvinCodes, 2023.
For source code or contribution see our Github repo: https://github.com/kelvin-codes-stuff/AllDayTechAndGaming-community-site
-->

@extends('news::layouts.default')

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
            <img class="d-block w-100 rounded-lg" style="height: 575px;" src="//placehold.it/400" alt="">
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
                <p><i class="fa fa-circle-user ml-2"></i><a class="text-white pl-2" href="#">{{ $article->author_id }}</a></p>
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
            <img class="card-img-left card-img-responsive p-2 w-25 rounded-lg" src="//placehold.it/50"/>
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
            <img class="card-img-left card-img-responsive p-2 w-25 rounded-lg" src="//placehold.it/50"/>
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
            <img class="card-img-left card-img-responsive p-2 w-25 rounded-lg" src="//placehold.it/50"/>
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
        Welkom bij All Day Tech & Gaming! Tech & Gaming for everyone!
        All Day Tech & Gaming is de community voor en door Pc-gebruikers, enthousiaste techfreaks, gamers en noem het maar op. 
        Opgericht door Sander den Breejen.
            
        Onze website is voornamelijk bedoeld voor het delen van het laatste tech-nieuws en tips & tricks dat voornamelijk gedeeld word door de oprichter. 
        Alle tech-nieuws, tips & tricks en updates over onze community kan je ook vinden op onze Facebook Pagina! 
        We hopen onze website & community steeds verder uit te breiden,
            
        Onze community bestaat uit een Discord server & 2 Facebook groepen namelijk: 
        All Day Tech & Gaming (voormalig ICT Hobbyisten) & Computer Problemen & Vragen. 
        Met in totaal meer dan 6000 leden verspreidt over de verschillende groepen beginnen we een begrip op sociale media te worden, en daar zijn we trots op.
            
        De All Day Tech & Gaming Discord server is vooral bedoeld om het contact tussen de leden persoonlijker te maken dan Facebook.
        De bedoeling is dat je gezellig kan chatten, niet alleen over technische onderwerpen!
        En natuurlijk ook met elkaar kan gamen! 
        Bijna iedere avond zijn er wel leden in de Lounge te vinden.
        De sfeer is toegankelijk & sociaal, dat is ook één van de doelstellingen.
        Voel je daarom van harte welkom om lid te worden van onze community!
            
        Wil je chatten over tech-gerelateerde onderwerpen?
        Ben je opzoek naar game-sessies?
        Heb je een vraag over het bouwen van een nieuwe computer of wil je de verkoopwaarde van je hand build computer weten?
        Wil je een homeserver of NAS bouwen?
        Heb je informatie nodig met betrekking tot het overclocken van je processor of grafische kaart?
        Laatste video van Linus Tech Tips of Der8auer bespreken? 
        Hulp nodig bij het configureren van je smarthome?
        Of weet je niet waar de errors zitten in een stukje code dat je geschreven hebt?
          
        Tech is breed begrip. 
        Daarom kan alles met betrekking tot tech, streaming & gaming, hard- of soft- ware matig gerelateerd binnen onze community besproken worden.
        Er zijn beginners, hobbyisten & professionals in onze community aanwezig dat graag hun kennis, expertises & ervaringen met je deelt.
        Geen vraag is te gek.
            
        Onze community is the place to be!
        Voel je welkom, en nodig vooral eventjes je vrienden uit!😉

        <img src="https://alldaytechandgaming.nl/wp-content/uploads/2023/01/COMPUTER-PROBLEMEN-VRAGEN.jpg" class="img-fluid">
              
        Computer Problemen & Vragen is voornamelijk gericht op het ondersteunen van de eindgebruiker, we willen een vaste groep bieden waar PC-gebruikers terecht kunnen met al hun computer problemen & vragen!
        Heb je veel kennis van ICT gerelateerde zaken? Dan kunnen wij jouw hulp ook goed gebruiken!
        All Day Tech & Gaming is een groep voor en door tech-liefhebbers die een steuntje bij willen dragen bij tech-gerelateerde vragen.
        Naast dat er veel over gepraat wordt over tech, zijn er ook andere topic o.a gaming, algemene chat, actualiteiten.
        Kortom; de groep is voor iedereen! Wat de groep uniek maakt is het community gevoel door de mensen die deelnemen aan discussies en vragen.
        Of je nou beginnende gamer/techneut bent of een ervaren, dat maakt niet uit! Iedereen wordt verwelkomt en niemand is buitengesloten.
        Mijn bijdrage aan deze groep is dat ik als professionele IT’er graag mensen wil helpen die nieuw zijn op dit gebied.
        We kunnen het begin nog allemaal herinneren.
        Ik geef hierbij graag de kennis door en los graag problemen op.
            
        Door: vast lid van de Discord Server Wesley.
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