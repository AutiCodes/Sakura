<?php

use Illuminate\Support\Facades\Route;
use Modules\News\Http\Controllers\ArticleController;
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
Route::get('/artikelen/{CategorySlug}', [NewsController::class,'articleList']);

// 404 route
Route::get('/404', [NewsController::class, 'notFound']);

Route::resource('articles', ArticleController::class)
    ->only(['index', 'show']);