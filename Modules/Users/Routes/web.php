<?php

use Modules\Users\Http\Controllers\UserController;
use Modules\Users\Http\Controllers\AuthenticationController;

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

Route::resource('gebruikers', UserController::class);

Route::get('/admin-login', [AuthenticationController::class, 'login']);
Route::post('/admin-post-login', [AuthenticationController::class, 'postLogin']);