<!-- 
Project Sakura.
Custom made for the All Day Tech & Gaming community.
By KelvinCodes, 2023.
For source code or contribution see our Github repo: https://github.com/kelvin-codes-stuff/AllDayTechAndGaming-community-site
Admin page theme: SB Admin 2
-->

@extends('adminpanel::layouts.default')

<!-- Settings page title -->
@section('title', '')

@section('content')
  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Statistieken</h1>

    
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Algemeen</h1>

    <!-- Content Row -->
    <div class="row">
      <!-- Total visitors -->
      <div class="col">
        <div class="card shadow mb-4 w-100">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Totaal pagina bezoekers</h6>
          </div>
          <div class="card-body">
            <div class="chart-area">
                <canvas id="totalPageVisitors"></canvas>
            </div>
            <hr>
            <p class="mb-0">Afgelopen jaar</p>
          </div>
        </div>
      </div>

      <!-- Latest 10 post view numbers -->
      <div class="col">
        <div class="card shadow mb-4 w-100">
          <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Laatste 5 artikelen views</h6>
          </div>
          <div class="card-body">
            <div class="chart-area">
              <canvas id="latestFiveArticlesViews"></canvas>
            </div>
            <hr>
            <p class="mb-0">Idk wat hier moet komen</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Row -->
    <div class="row">
      <!-- Total visitors last 30 days -->
      <div class="col">
        <div class="card shadow mb-4 w-100">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Laatste 30 dagen</h6>
          </div>
          <div class="card-body">
            <div class="chart-area">
                <canvas id="latest30DaysViews"></canvas>
            </div>
            <hr>
            <p class="mb-0">Idk wat hier moet komen</p>
          </div>
        </div>
      </div>

      <!-- Latest 10 post view numbers -->
      <div class="col">
        <div class="card shadow mb-4 w-100">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Laatste 10 weken</h6>
          </div>
          <div class="card-body">
            <div class="chart-area">
              <canvas id="latest10WeeksViews"></canvas>
            </div>
            <hr>
            <p class="mb-0">Idk wat hier moet komen</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Second row -->
    <div class="row">
      <!-- Latest article -->
      <div class="col">
        <div class="card shadow mb-4 w-100">
          <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Laatste artikel</h6>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col">
                <h5 class="card-title text-dark font-weight-bold">Prijs AM4 Processoren door het dak</h5>
                <p>Geplubliceerd: 29 oktober 2023</p>
                <p>Aantal keer bekeken: 69</p>
                <p>Likes: 0</p>
                <p>Reacties: 0</p>
              </div>
              <div class="col-3">
                <img src="//placehold.it//150">
              </div>
            </div>
            <hr>
          </div>
        </div>
      </div>

      <!-- Most viewed article -->
      <div class="col">
        <div class="card shadow mb-4 w-100">
          <div class="card-header py-3">
              h6 class="m-0 font-weight-bold text-primary">Meest bezochte artikel</h6>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col">
                <h5 class="card-title text-dark font-weight-bold">Prijs AM4 Processoren door het dak</h5>
                <p>Geplubliceerd: 29 oktober 2023</p>
                <p>Aantal keer bekeken: 699</p>
                <p>Likes: 69</p>
                <p>Reacties: 69</p>
              </div>
              <div class="col-3">
                <img src="//placehold.it//150">
              </div>
            </div>                            
            <hr>
          </div>
        </div>
      </div>                      
    </div>

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Totaal</h1>

    <!-- Thirth row -->
    <div class="row">
      <!-- Total -->
      <div class="col">
        <div class="card shadow mb-4 w-100">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Totaal</h6>
          </div>
          <div class="card-body">
            <h6>Aantal keer bekeken: 6969</h6>
            <h6>Bezoekers: 6969</h6>
            <h6>Likes: 6969</h6>
            <h6>Reacties: 6969</h6>
            <hr>
          </div>
        </div>
      </div>

      <!-- Populair times -->
      <div class="col">
        <div class="card shadow mb-4 w-100">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Meest populaire tijden</h6>
          </div>
          <div class="card-body">
            <h6 class="mb-5">Beste dag: Dinsdag</h6>
            <h6 class="mb-2">Beste tijd: 20:00</h6>
            <hr class="mt-4">
          </div>
        </div>
      </div>                      

      <!-- Most populair day -->
      <div class="col">
        <div class="card shadow mb-4 w-100">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Meest populaire dag</h6>
          </div>
          <div class="card-body">
            <h6 class="mb-5">Beste dag: 4 oktober</h6>
            <h6 class="mb-2">Aantal keer bekeken: 156</h6>
            <hr class="mt-4">                            
          </div>
        </div>
      </div>                      
    </div>
  </div>
  <!-- /.container-fluid -->
@stop                

@section('scripts')
  <script src="{{ URL::asset('assets/vendor/chart.js/Chart.min.js') }}"></script>
  <script src="{{ URL::asset('assets-admin/js/statistics/total_visitors.js') }}"></script>
  <script src="{{ URL::asset('assets-admin/js/statistics/latest_five_articles_views.js') }}"></script>
  <script src="{{ URL::asset('assets-admin/js/statistics/last_30_days_views.js') }}"></script>
  <script src="{{ URL::asset('assets-admin/js/statistics/last_10_weeks_views.js') }}"></script>
@stop