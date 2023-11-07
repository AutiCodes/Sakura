<!-- 
Project Sakura.
Custom made for the All Day Tech & Gaming community.
By KelvinCodes, 2023.
For source code or contribution see our Github repo: https://github.com/kelvin-codes-stuff/AllDayTechAndGaming-community-site
Admin page theme: SB Admin 2
-->

@extends('adminpanel::layouts.default')

<!-- Settings page title -->
@section('title', 'Notificaties')

@section('content')
  <!-- Begin Page Content -->
  <div class="container">            
      <!-- Page header -->
      <h1 class="h3 mb-2 text-gray-800 ml-0">Notificaties voor jou</h1>

      <!-- Row 1 -->
      <div class="row">
        <div class="col">
          <div class="card shadow w-100">
            <div class="card-body justify-content-center">
              <h5 class="card-title">Nieuwe artikelen</h5>
                <form>
                  <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="switchOffOnDiscordPoster">
                    <label class="form-check-label" for="switchOffOnDiscordPoster">Uit/aan</label>
                  </div>
                  <p class="pt-2 mb-0">Notificatie levering</p>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="adminNotifiNewArticles" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1">Admin panel</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="emailNotifiNewArticles" value="option2">
                    <label class="form-check-label" for="inlineCheckbox2">Email</label>
                  </div>
                  <br>
                  <a href="#" class="btn btn-primary mt-2">Toepassen</a>
                </form>                              
              </div>
            </div>
          </div>

        <div class="col">
          <div class="card shadow w-100">
            <div class="card-body">
              <h5 class="card-title">Nieuwe comments</h5>
              <form>
                <div class="form-check form-switch">
                  <input class="form-check-input" type="checkbox" id="switchOffOnCommentNotifi">
                  <label class="form-check-label" for="switchOffOnCommentNotifi">Uit/aan</label>
                </div>
                <p class="pt-2 mb-0">Notificatie levering</p>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="adminNotifiNewArticles" value="option1">
                  <label class="form-check-label" for="inlineCheckbox1">Admin panel</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="emailNotifiNewArticles" value="option2">
                  <label class="form-check-label" for="inlineCheckbox2">Email</label>
                </div>
                <br>
                <a href="#" class="btn btn-primary mt-2">Toepassen</a>
              </form>  
            </div>
          </div>
        </div>
      </div>
      
      <!-- Row 2 -->
      <div class="row mt-5">
        <div class="col">
          <div class="card shadow w-100">
            <div class="card-body justify-content-center">
              <h5 class="card-title">Systeem updates</h5>
                <form>
                  <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="switchOffSysteNotifi">
                    <label class="form-check-label" for="switchOffSysteNotifi">Uit/aan</label>
                  </div>
                  <p class="pt-2 mb-0">Notificatie levering</p>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="adminNotifiSystemNotifi" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1">Admin panel</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="emailNotifiSystemNotifi" value="option2">
                    <label class="form-check-label" for="inlineCheckbox2">Email</label>
                  </div>
                  <br>
                  <a href="#" class="btn btn-primary mt-2">Toepassen</a>
                </form>                              
              </div>
            </div>
          </div>

        <div class="col">
          <div class="card shadow w-100">
            <div class="card-body">
              <h5 class="card-title">Criticale error</h5>
              <form>
                <div class="form-check form-switch">
                  <input class="form-check-input" type="checkbox" id="switchOffOnErrorNotifi">
                  <label class="form-check-label" for="switchOffOnErrorNotifi">Uit/aan</label>
                </div>
                <p class="pt-2 mb-0">Notificatie levering</p>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="adminNotifiErrorNotifi" value="option1">
                  <label class="form-check-label" for="inlineCheckbox1">Admin panel</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="emailNotifiErrorNotifi" value="option2">
                  <label class="form-check-label" for="inlineCheckbox2">Email</label>
                </div>
                <br>
                <a href="#" class="btn btn-primary mt-2">Toepassen</a>
              </form>  
            </div>
          </div>
        </div>
      </div>

  </div>
  <!-- /.container-fluid -->
@stop                
