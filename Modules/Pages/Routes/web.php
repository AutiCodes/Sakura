<?php

use Illuminate\Support\Facades\Route;
use Modules\Pages\Http\Controllers\PageController;

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
    Route::resource('paginas', PageController::class);
    
    // Save page media
    Route::post('paginas/media-opslaan', [PageController::class, 'saveMedia']);
});
