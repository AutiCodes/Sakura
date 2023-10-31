<!-- 
Project Sakura.
Custom made for the All Day Tech & Gaming community.
By KelvinCodes, 2023.
For source code or contribution see our Github repo: https://github.com/kelvin-codes-stuff/AllDayTechAndGaming-community-site
Admin page theme: SB Admin 2
-->

@extends('adminpanel::layouts.default')

<!-- Settings page title -->
@section('title', 'Mail server')

@section('content')
  <!-- Begin Page Content -->
  <div class="container">            
    <!-- Page header -->
    <h1 class="h3 mb-2 text-gray-800 ml-0">Mail server instellingen</h1>

    <!-- Mail server row -->
    <div class="card shadow w-50">
      <div class="card-body">
        <h5 class="card-title">SMTP</h5>
        <form>
          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="mailserverSwitch">
            <label class="form-check-label" for="mailserverSwitch">Uit/aan</label>
          </div>
          <div class="form-group">
            <label for="hostSmtp">Host SMTP</label>
            <input type="text" class="form-control" id="hostSmtp" placeholder="smtp.domeinnaam.nl">
          </div>                    
          <div class="form-group">
            <label for="smtpPort">SMTP poort</label>
            <input type="text" class="form-control w-25" id="smtpPort" placeholder="587">
          </div>      
          <label for="mailEncryption">Encryptie</label>
          <select class="form-select w-25" id="mailEncryption" aria-label="Url formatting">
            <option selected>TLS</option>
            <option>SSL</option>
            <option>Geen (NIET AANBEVOLEN)</option>
          </select>     
          <br>
          <div class="form-group">
            <label for="formGroupExampleInput">Gebruikersnaam</label>
            <input type="text" class="form-control" id="MailUsername" placeholder="mail@domeinnaam.nl">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Wachtwoord</label>
            <input type="password" class="form-control" id="mailPassword" placeholder="mail@domeinnaam.nl">
            <i class="fa fa-eye mr-2" onclick="passswordShowHide()" ></i><p style="display: inline;">Wachtwoord tonen/verbergen</p>
          </div>
          <a href="#" class="btn btn-primary mt-3">Update</a>
        </form>
      </div>
    </div>


    </div>
    </div>

  </div>
  <!-- /.container-fluid -->

@stop                
