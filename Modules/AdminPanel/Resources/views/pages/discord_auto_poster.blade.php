<!-- 
Project Sakura.
Custom made for the All Day Tech & Gaming community.
By KelvinCodes, 2023.
For source code or contribution see our Github repo: https://github.com/kelvin-codes-stuff/AllDayTechAndGaming-community-site
Admin page theme: SB Admin 2
-->

@extends('adminpanel::layouts.default')

<!-- Settings page title -->
@section('title', 'Discord auto poster')

@section('content')
  <!-- Begin Page Content -->
  <div class="container">            
      <!-- Page header -->
      <h1 class="h3 mb-2 text-gray-800 ml-0">Discord auto poster</h1>

      <div class="card shadow w-50">
        <div class="card-body">
          <h5 class="card-title">Instellingen</h5>
          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" id="switchOffOnDiscordPoster">
            <label class="form-check-label" for="switchOffOnDiscordPoster">Uit/aan</label>
          </div>
          <div class="form-group">
            <label for="webhookUrl">Webhook URL</label>
            <input class="form-control" type="text" placeholder="https://discord.com/api/webhooks/wjqijwoio2j39h/32u0j3ohowe4uhnio">
          </div>
          <a href="#" class="btn btn-primary">Toepassen</a>
        </div>
      </div>
    </div>
    </div>

  </div>
  <!-- /.container-fluid -->
@stop                
