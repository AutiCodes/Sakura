<?php

use Illuminate\Support\Facades\Route;
use Modules\SiteEdit\Http\Controllers\SiteImageController;
use Modules\SiteEdit\Http\Controllers\SiteTextController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => ['role:Super Admin|Admin|Redacteur']], function () {
    Route::resource('weergave-tekst', SiteTextController::class);
    Route::post('/weergave-tekst/media-opslaan', [SiteTextController::class, 'saveMedia']);
    Route::resource('weergave-afbeeldingen', SiteImageController::class);
});


