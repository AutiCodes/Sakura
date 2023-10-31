<?php
use Modules\News\Http\Controllers\NewsController;

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

// Homepage route
Route::get('/', [NewsController::class, 'index']);

// Article list route
Route::get('/artikelen/{articleCategory}', [NewsController::class,'articleList']);

// Article route
Route::get('/artikel/{articleSlug}', [NewsController::class, 'article']);

// 404 route
Route::get('/404', [NewsController::class, 'notFound']);