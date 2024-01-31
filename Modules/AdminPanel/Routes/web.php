<?php
use Modules\AdminPanel\Http\Controllers\AdminPanelController;
use Modules\AdminPanel\Http\Controllers\ArticleController;
use Modules\AdminPanel\Http\Controllers\CategoryController;
use Modules\AdminPanel\Http\Controllers\MediaController;
use Modules\AdminPanel\Http\Controllers\PageController;
use Modules\AdminPanel\Http\Controllers\SiteImagesController;
use Modules\AdminPanel\Http\Controllers\SiteTextController;

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

/**
 * Articles 
 */
Route::resource('artikelen', ArticleController::class)->only([
        'index',
        'create',
        'store',
        'edit',
        'update',
        'destroy'
    ]);

// Save article media
Route::post('artikelen/media-opslaan', [ArticleController::class, 'articleSaveMedia']);

/**
 * Categories
 */
Route::resource('categorieen', CategoryController::class);

/**
 * Media
 */
Route::resource('uploads', MediaController::class);

/** 
 * Pages
 */
Route::resource('paginas', PageController::class);

// Save page media
Route::post('paginas/media-opslaan', [PageController::class, 'saveMedia']);

/**
 * Comments
 */
Route::get('/admin/comments', [AdminPanelController::class, 'comments']);

/**
 * Display
 */
Route::resource('weergave-tekst', SiteTextController::class);
Route::post('/weergave-tekst/media-opslaan', [SiteTextController::class, 'saveMedia']);
Route::resource('weergave-afbeeldingen', SiteImagesController::class);

/**
 * Statistics
 */
Route::get('/admin/statistieken/website', [AdminPanelController::class, 'websiteStatistics']);
Route::get('/admin/statistieken/discord', [AdminPanelController::class, 'discordStatistics']);

/**
 * Modules
 */
Route::get('/admin/modules/discord_autoposter', [AdminPanelController::class, 'discordAutoPost']);
Route::get('/admin/modules/notificaties', [AdminPanelController::class, 'notifications']);

/**
 * Backup
 */
Route::get('/admin/backup/aanmaken', [AdminPanelController::class, 'backupCreate']);
Route::get('/admin/backup/automatisch', [AdminPanelController::class, 'backup_automatic']);

/**
 * Updates
 */
Route::get('/admin/updates', [AdminPanelController::class, 'updates']);

/**
 * Site settings
 */
Route::get('/admin/instellingen/algemeen', [AdminPanelController::class, 'settingsGeneral']);
Route::get('/admin/instellingen/artikelen', [AdminPanelController::class, 'settingsArticles']);
Route::get('/admin/instellingen/comments', [AdminPanelController::class, 'settingsComments']);
Route::get('/admin/instellingen/urls', [AdminPanelController::class, 'settingsUrls']);
Route::get('/admin/instellingen/email-server', [AdminPanelController::class, 'settingsEmailServer']);

/**
 * technical
 */
Route::get('/admin/technisch/informatie', [AdminPanelController::class, 'SiteAndServerinfo']);
Route::get('/admin/technisch/cache', [AdminPanelController::class, 'settingsCache']);
Route::get('/admin/technisch/beveiliging', [AdminPanelController::class, 'settingsSecurity']);

/**
 * Logs
 */
Route::get('/admin/logs/systeem', [AdminPanelController::class, 'logSystem']);
Route::get('/admin/logs/error', [AdminPanelController::class, 'logError']);
Route::get('/admin/logs/access', [AdminPanelController::class, 'logAccess']);
