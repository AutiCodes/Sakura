<?php
use Modules\AdminPanel\Http\Controllers\AdminPanelController;

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

// Admin dashboard
Route::get('/admin', [AdminPanelController::class, 'index']);

/*
* Messages 
*/
Route::get('/admin/berichten/allemaal', [AdminPanelController::class, 'messagesAll']);
Route::get('/admin/berichten/toevoegen', [AdminPanelController::class, 'messagesAdd']);
Route::get('/admin/berichten/categorieen', [AdminPanelController::class, 'messagesCategorys']);
Route::get('/admin/berichten/tags', [AdminPanelController::class, 'messagesTags']);

/*
* Media
*/
Route::get('/admin/media/allemaal', [AdminPanelController::class, 'mediaAll']);
Route::get('/admin/media/toevoegen', [AdminPanelController::class, 'mediaAdd']);

/*
* Pages
*/
Route::get('admin/paginas/allemaal', [AdminPanelController::class, 'pagesAll']);
Route::get('/admin/paginas/toevoegen', [AdminPanelController::class, 'pagesAdd']);

/*
* Comments
*/
Route::get('/admin/comments', [AdminPanelController::class, 'comments']);