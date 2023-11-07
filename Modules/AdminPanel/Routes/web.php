<?php
use Modules\AdminPanel\Http\Controllers\AdminPanelController;
use Modules\AdminPanel\Http\Controllers\ArticleController;
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

/**
 * 
 */

/**
 * Media
 */
Route::get('/admin/media/allemaal', [AdminPanelController::class, 'mediaAll']);
Route::get('/admin/media/toevoegen', [AdminPanelController::class, 'mediaAdd']);

/** 
 * Pages
 */
Route::get('/admin/paginas/allemaal', [AdminPanelController::class, 'pagesAll']);
Route::get('/admin/paginas/toevoegen', [AdminPanelController::class, 'pagesAdd']);

/**
 * Comments
 */
Route::get('/admin/comments', [AdminPanelController::class, 'comments']);

/**
 * Display
 */
Route::get('/admin/weergave/tekst', [AdminPanelController::class, 'editText']);
Route::get('/admin/weergave/afbeeldingen', [AdminPanelController::class, 'editImages']);

/**
 * Users
 */
Route::get('/admin/gebruikers/allemaal', [AdminPanelController::class, 'usersAll']);
Route::get('/admin/gebruikers/profiel/{uid}', [AdminPanelController::class, 'usersProfile']);
Route::get('/admin/gebruikers/toevoegen', [AdminPanelController::class, 'usersAdd']);

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
