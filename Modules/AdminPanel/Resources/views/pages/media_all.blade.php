<!-- 
Project Sakura.
Custom made for the All Day Tech & Gaming community.
By KelvinCodes, 2023.
For source code or contribution see our Github repo: https://github.com/kelvin-codes-stuff/AllDayTechAndGaming-community-site
Admin page theme: SB Admin 2
-->

@extends('adminpanel::layouts.default')

<!-- Settings page title -->
@section('title', 'Alle media')

@section('content')

                <!-- Begin Page Content -->
                <div class="container-fluid">            
                    <!-- Page header -->
                    <h1 class="h3 mb-2 text-gray-800 ml-0">Media</h1>

                    <input class="form-control mt-0 mb-4" type="file" id="formFileMultiple" multiple style="max-width: 20%;">

                      <!-- Media control -->
                      <div class="row justify-content-start">
                        <div class="col bg-white">
                          <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-secondary rounded" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Media types</button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="#">Afbeeldingen</a>
                              <a class="dropdown-item" href="#">Videos</a>
                              <a class="dropdown-item" href="#">Audio</a>
                              <a class="dropdown-item" href="#">Documenten</a>
                            </div>
                            <button type="button" class="btn btn-secondary ml-2 rounded" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Datums</button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="#">Oktober 2023</a>
                              <a class="dropdown-item" href="#">Mei 2023</a>
                              <a class="dropdown-item" href="#">April 2023</a>
                            </div>
                          </div>
                        </div>
                        
                        <div class="col bg-white">
                          <div class="input-group float-right">
                            <div class="form-outline w-25 bg-dark rounded">
                              <input type="search" id="form1" class="form-control" />
                              <label class="form-label text-white" for="form1">Zoeken</label>
                            </div>
                            <button type="button" class="btn btn-primary">
                              <i class="fas fa-search"></i>
                            </button>
                          </div>
                        </div>
                      
                    </div>

                    <div class="row mt-2 bg-white jus">

                      <div class="container">
                        <div class="row mb-2 mt-2">
                          <div class="col-sm mb-2 text-center">
                            <img src="//placehold.it/120" data-toggle="modal" data-target=".bd-example-modal-lg">
                          </div>
                          <div class="col-sm mb-2 text-center">
                            <img src="//placehold.it/120">
                          </div>
                          <div class="col-sm mb-2 text-center">
                            <img src="//placehold.it/120">
                          </div>
                          <div class="col-sm mb-2 text-center">
                            <img src="//placehold.it/120">
                          </div>
                          <div class="col-sm mb-2 text-center">
                            <img src="//placehold.it/120">
                          </div>            
                          <div class="col-sm mb-2 text-center">
                            <img src="//placehold.it/120">
                          </div>                                                                   
                          <div class="col-sm mb-2 text-center">
                            <img src="//placehold.it/120">
                          </div>                                                      
                        </div>
                      </div>
                    </div>


                    <!-- Modal media information -->
                    <div class="modal fade bd-example-modal-lg w-200" tabindex="-1" role="dialog" aria-labelledby="mediaModal" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <h1 class="border-bottom ml-4">Media details</h1>

                          <div class="row">
                            <!-- Image preview -->
                            <div class="col mb-4 mt-4 ml-4">
                              <img src="//placehold.it/600">
                            </div>

                           <!-- Details-->
                           <div class="col mt-4 mr-2">
                            <p class="font-weight-bold">Geüpload op:</p> <p>31 mei 2023</p>
                            <p class="font-weight-bold">Geüpload door:</p> <p><a href="#">KelvinCodes</a></p>
                            <p class="font-weight-bold">Geüpload voor:</p> <p><a href="#">Windows opnieuw installeren op je PC</a></p>
                            <p class="font-weight-bold">Bestandsnaam:</p> <p>foto_mooi.png</p>
                            <p class="font-weight-bold">Bestandsgrootte:</p> <p>1.3MB</p>
                            <p class="font-weight-bold">Afmetingen:</p> <p>1920 x 1080 pixels</p>
                            
                            <hr>
                          </div>

                          <div class="row justify-content-center ml-2 mr-2">
                            <form class="">
                              <div class="form-group">
                                <label for="exampleFormControlInput1">Naam</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" value="foto_mooi.png">
                              </div>
                              <div class="form-group">
                                <label for="exampleFormControlTextarea1">Bestand url</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" disabled>https://url.nl/img/foto_mooi.png</textarea>
                              </div>

                              <button type="submit" class="btn btn-primary mb-2">Toepassen</button>

                            </form>
                          </div>

                          </div>
                        </div>
                      </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

@stop