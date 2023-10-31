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
    <h1 class="h3 mb-2 text-gray-800">Statistieken (update interval: 1 uur)</h1>

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Totaal</h1>

    <!-- Content Row -->
    <div class="row">
        <!-- Total member count -->
        <div class="col">
          <div class="card shadow mb-4 w-100">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Totaal aantal leden</h6>
            </div>
            <div class="card-body">
              <div class="chart-area">
                <canvas id="totalMembers"></canvas>
              </div>
              <hr>
              <p class="mb-0">Afgelopen jaar</p>
            </div>
          </div>
        </div>

        <!-- Total bannen members -->
        <div class="col">
          <div class="card shadow mb-4 w-100">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Totaal banned leden</h6>
            </div>
            <div class="card-body">
              <div class="chart-area">
                  <canvas id="totalBanned"></canvas>
              </div>
              <hr>
              <p class="mb-0">Afgelopen jaar</p>
            </div>
          </div>
        </div>
    </div>

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Berichten</h1>

    <!-- Content Row -->
    <div class="row">
        <!-- Total member count -->
        <div class="col">
            <div class="card shadow mb-4 w-100">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Totaal berichten</h6>
                </div>
                <div class="card-body">
                  <div class="chart-area">
                    <canvas id="totalMessages"></canvas>
                  </div>
                  <hr>
                  <p class="mb-0">Afgelopen maand</p>
                </div>
            </div>
        </div>

        <!-- Total bannen members -->
        <div class="col">
          <div class="card shadow mb-4 w-100">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Populairste 5 kanalen berichten</h6>
            </div>
            <div class="card-body">
              <div class="chart-area">
                <canvas id="messagesTop5Channels"></canvas>
              </div>
              <hr>
              <p class="mb-0">Afgelopen maand</p>
            </div>
          </div>
        </div>
    </div>                    
  </div>
  <!-- /.container-fluid -->
@stop                

@section('scripts')
  <script src="{{ URL::asset('assets/vendor/chart.js/Chart.min.js') }}"></script>
  <script src="{{ URL::asset('assets-admin/js/statistics/discord_total_members.js') }}"></script>
  <script src="{{ URL::asset('assets-admin/js/statistics/discord_total_banned.js') }}"></script>
  <script src="{{ URL::asset('assets-admin/js/statistics/discord_total_messages.js') }}"></script>
  <script src="{{ URL::asset('assets-admin/js/statistics/discord_most_populair_channels.js') }}"></script>
@stop