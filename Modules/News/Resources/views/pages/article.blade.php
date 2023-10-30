<!-- 
Project Sakura.
Custom made for the All Day Tech & Gaming community.
By KelvinCodes, 2023.
For source code or contribution see our Github repo: https://github.com/kelvin-codes-stuff/AllDayTechAndGaming-community-site
-->

@extends('news::layouts.default')

@section('content')
<div class="row justify-content-center mt-4">
    <!-- Articles/embeds -->
    <div class="col-lg-5 mb-4 rounded-lg ml-2 mt-sm-4 mt-lg-1 pl-sm-2 pr-sm-2 bg-white ml-sm-3 mr-sm-3">
      <!-- Article --> 
      <article class="p-4">
        <!-- Article category -->
        <div class="d-flex justify-content-start d-block">                    
          <p><a href="#" class="home-category-styling">Berichten over hardware</a></p>
          <p><a href="#" class="ml-2 home-category-styling">Processoren</a></p>
        </div>

        <!-- Article title -->
        <h1 class="font-weight-bold">Deepfake detector door Intel!</h1>

        <!-- Article poster info -->
        <div class="row mb-4 pt-3 pb-3">
          <div class="col" style="max-width: 15%;">
            <img src="//placehold.it/75" class="rounded-circle">
          </div>
          <div class="col my-auto">
            <div class="row border-bottom mb-1">
              <h6><i class="fa fa-circle-user lp-c"></i> <a href="#" class="text-dark">KelvinCodes</a></h6>
            </div>
            <div class="row my-auto">
              <h6><i class="fa fa-clock lp-c"></i> Oktober 28, 2023</h6>
            </div>
          </div>
        </div>

        <!-- Article text -->
        Naar aanleiding van de berichtgeving van gisteren brengen wij nu graag een update op basis van insiderinfo. We mogen de bron echter niet bekendmaken.

        Kwartaal 3 zit erop en daarmee zijn ook de rebates afgelopen. We staan nu aan het begin van kwartaal 4. Per kwartaal wordt door elke fabrikant bekeken welke processoren (SKU’s) worden gepusht. In de afgelopen periode zijn de voorraden van de Ryzen 5000-processoren flink afgebouwd door het hanteren van lage prijzen bij onder andere de webshops Alternate & Megekko. Mogelijk met positief effect als gevolg, waardoor er geen directe reden voor deze webshops is om de prijs laag te houden. Daarbij dus ook direct de verklaring waarom deze situatie niet bij iedere retailer gaande is.
        
        Naar alle waarschijnlijkheid zullen de prijzen bij deze webshops langzaam weer dalen richting Black Friday & Cyber Monday, met zoals je al raadt; een “geweldige” deal op Black Friday & Cyber Monday zelf. Tevens is opgemerkt dat de prijzen voor andere soorten hardware ook stijgen, daarbij het meest opmerkelijk met betrekking de op dit moment AM4-processoren.
        
        Dit alles betekent niet dat we nog steeds verwachten dat AM4 zich klaarmaakt om te vertrekken.
        
        OORSPRONKELIJKE BERICHT NA CONSTATERING VAN PRIJSVERHOGINGEN.
        Ik wil liever niet speculeren, maar ik breng de gedachte toch naar voren: betekent dit het einde van het tijdperk voor het AM4-platform? Mogelijk. Vanavond zien we opeens dat de prijzen van AM4-processoren de pan uit rijzen, meestal een logisch gevolg van schaarste. Is de productie van het platform gestopt?
        
        Als iemand nog een krachtigere CPU voor AM4 wil kopen, zou mijn advies zijn om dat NU te doen. Niet elke webshop heeft zijn prijzen al aangepast zoals Azerty.
        
        Niet alleen bij Megekko kost de AMD Ryzen 5 5600 opeens 200 euro, terwijl het eerst 141 euro betrof, ook bij de retailer Alternate zijn de prijzen al flink omhoog geschoten. Het lijkt erop dat dit niet het probleem is van slechts één webshop, of we hebben opeens te maken met heel stom toeval.
        Bij de webshop Informatique is de 5600X een op=op artikel geworden. De prijs is daar ook nog redelijk. Informatique is nooit de goedkoopste webshop geweest. We houden deze prijsverhogingen met betrekking de AM4-processoren de komende dagen nauwlettend in de gaten.
        Het lijkt erop dat het binnenkort niet meer mogelijk zal zijn om AM4 te verkrijgen. Vooral het lagere segment van de markt zal dit verlies het meeste voelen. Het was namelijk lange tijd vrij eenvoudig om een goede budget gaming-computer samen te stellen voor 1080p gaming, met een prijskaartje rond de 700 à 750 euro, inclusief een B550 moederbord en een Ryzen 5 5600 processor. Intel zal waarschijnlijk het dichtstbijzijnde alternatief zijn in het budgetsegment, mede omdat bepaalde moederborden en processors nog steeds DDR4-geheugen ondersteunen. Houd er echter rekening mee dat combinaties met het Socket AM5 een aanzienlijke prijsstijging met zich mee zullen brengen.
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