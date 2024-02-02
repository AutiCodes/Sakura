<?php
use Modules\Articles\Http\Controllers\ArticleAdminController;
use Modules\Articles\Http\Controllers\CategoryAdminController;

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
    Route::resource('artikelen', ArticleAdminController::class)->only([
        'index',
        'create',
        'store',
        'edit',
        'update',
        'destroy'
    ]);
    
    Route::post('artikelen/media-opslaan', [ArticleAdminController::class, 'articleSaveMedia']);
    
    Route::resource('categorieen', CategoryAdminController::class);
});

