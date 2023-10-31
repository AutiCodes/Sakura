<!-- 
Project Sakura.
Custom made for the All Day Tech & Gaming community.
By KelvinCodes, 2023.
For source code or contribution see our Github repo: https://github.com/kelvin-codes-stuff/AllDayTechAndGaming-community-site
Admin page theme: SB Admin 2
-->

@extends('adminpanel::layouts.default')

<!-- Settings page title -->
@section('title', 'Comments')

@section('content')
  <!-- Begin Page Content -->
  <div class="container">            
      <!-- Page header -->
      <h1 class="h3 mb-2 text-gray-800 ml-0">Comments instellingen</h1>

      <!-- Settings row -->
      <div class="row">
        <div class="col">
          <div class="card shadow w-100">
            <div class="card-body">
              <h5 class="card-title">Comments</h5>
              <form>
                <div class="form-check form-switch">
                  <input class="form-check-input" type="checkbox" role="switch" id="commentSwitchOffOn">
                  <label class="form-check-label" for="commentSwitchOffOn">Uit/aan</label>
                </div>
                <p class="pt-3 pb-0">Comments accepteren voor ze gepost worden</p>
                <div class="form-check form-switch mt-0">
                  <input class="form-check-input" type="checkbox" role="switch" id="commentSwitchOffOn">
                  <label class="form-check-label" for="commentSwitchOffOn">Uit/aan</label>
                </div>
                <a href="#" class="btn btn-primary mt-3">Update</a>
              </form>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow w-100">
            <div class="card-body">
              <h5 class="card-title">Spam filter</h5>
              <form>
                <div class="form-check form-switch">
                  <input class="form-check-input" type="checkbox" role="switch" id="commentSwitchOffOn">
                  <label class="form-check-label" for="commentSwitchOffOn">Uit/aan</label>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Verboden woorden (1 spatie tussen de woorden!)</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">Shit Sinaasappel</textarea>
                </div>
                <a href="#" class="btn btn-primary mt-3">Update</a>
              </form>
            </div>
          </div>
        </div>
      </div>

    </div>
    </div>

  </div>
                <!-- /.container-fluid -->
@stop                
