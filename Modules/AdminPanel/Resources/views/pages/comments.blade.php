<!-- 
Project Sakura.
Custom made for the All Day Tech & Gaming community.
By KelvinCodes, 2023.
For source code or contribution see our Github repo: https://github.com/kelvin-codes-stuff/AllDayTechAndGaming-community-site
Admin page theme: SB Admin 2
-->

@extends('adminpanel::layouts.default')

<!-- Settings page title -->
@section('title', 'Alle paginas')

@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">            
                      <!-- Page header -->
                      <h1 class="h3 mb-0 text-gray-800 ml-2">Comments</h1>

                      <!-- Table articles -->
                      <table class="table mt-4">
                        <thead class="thead">
                          <tr>
                            <th scope="col">
                              <!-- Table controls -->
                              <div class="row">
                                <div class="col-3">
                                  <div class="dropdown show">
                                    <a class="btn btn btn-sm dropdown-toggle border bg-primary text-white mb-2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Acties
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                      <a class="dropdown-item" href="#">Bewerken</a>
                                      <a class="dropdown-item" href="#">Prullenbak</a>
                                      <a class="dropdown-item" href="#">Spam</a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              
                              <!-- Top table -->
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                  Auteur
                                </label>
                              </div>
                            </th>
                            <th scope="col">Reactie</th>
                            <th scope="col">Op artikel</th>
                            <th scope="col">Aangemaakt op</th>
                          </tr>
                        </thead>
                        <tbody>
                          <!-- Row 1 -->
                          <tr>
                            <th scope="row" class="w-25">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    <div class="col-sm">
                                      <p class="text-dark">Jan van de pette flat</p>
                                    </div>
                                    <div class="col-sm">
                                      <p class="text-dark">IP: 291.283.12.123</p>
                                    </div>
                                </label>
                              </div>
                            </th>
                            <td>Onze website is voornamelijk bedoeld voor het delen van het laatste tech-nieuws en tips & tricks dat voornamelijk gedeeld word door de oprichter. Alle tech-nieuws, tips & tricks en updates over onze community kan je ook vinden op onze Facebook Pagina! We hopen onze website & community steeds verder uit te breiden</td>
                            <td><a href="#">Prijs AM4 processoren door het dak.</a></td>
                            <td class="w-25">4 Oktober 2023 om 16:21</td>
                          </tr>
                          <!-- Row 2 -->
                          <tr>
                            <th scope="row" class="w-25">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    <div class="col-sm">
                                      <p class="text-dark">Jan van de pette flat</p>
                                    </div>
                                    <div class="col-sm">
                                      <p class="text-dark">IP: 291.283.12.123</p>
                                    </div>
                                </label>
                              </div>
                            </th>
                            <td>Onze website is voornamelijk bedoeld voor het delen van het laatste tech-nieuws en tips & tricks dat voornamelijk gedeeld word door de oprichter. Alle tech-nieuws, tips & tricks en updates over onze community kan je ook vinden op onze Facebook Pagina! We hopen onze website & community steeds verder uit te breiden</td>
                            <td><a href="#">Prijs AM4 processoren door het dak.</a></td>
                            <td class="w-25">4 Oktober 2023 om 16:21</td>
                          </tr>
                        </tbody>
                      </table>
                      <!-- End table article -->


                      <!-- Pagination-->
                      <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                          <li class="page-item"><a class="page-link" href="#">Vorige</a></li>
                          <li class="page-item"><a class="page-link" href="#">1</a></li>
                          <li class="page-item"><a class="page-link" href="#">2</a></li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item"><a class="page-link" href="#">Volgende</a></li>
                        </ul>
                      </nav>

                </div>
                <!-- /.container-fluid -->
@stop