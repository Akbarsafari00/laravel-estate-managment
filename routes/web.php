<?php

use App\Http\Controllers\Account\SettingsController;
use App\Http\Controllers\Auth\SocialiteLoginController;
use App\Http\Controllers\Documentation\ReferencesController;
use App\Http\Controllers\Logs\AuditLogsController;
use App\Http\Controllers\Logs\SystemLogsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return redirect('index');
// });

$menu = theme()->getMenu();
array_walk($menu, function ($val) {
    if (isset($val['path'])) {
        $route = Route::get($val['path'], [PagesController::class, 'index']);

        // Exclude documentation from auth middleware
        if (!Str::contains($val['path'], 'documentation')) {
            $route->middleware('auth');
        }
    }
});


Route::middleware('auth')->group(function () {
    // Account pages
    Route::prefix('account')->group(function () {
        Route::get('settings', [SettingsController::class, 'index'])->name('settings.index');
        Route::put('settings', [SettingsController::class, 'update'])->name('settings.update');
        Route::put('settings/email', [SettingsController::class, 'changeEmail'])->name('settings.changeEmail');
        Route::put('settings/password', [SettingsController::class, 'changePassword'])->name('settings.changePassword');
    });

    // Logs pages
    Route::prefix('log')->name('log.')->group(function () {
        Route::resource('system', SystemLogsController::class)
            ->middleware(['permission:system-log index'])
            ->only(['index', 'destroy']);
        Route::resource('audit', AuditLogsController::class)
            ->middleware(['permission:audit-log index'])
            ->only(['index', 'destroy']);
    });

    Route::prefix('users')->name('users.')->group(function () {

        Route::get('', [UsersController::class,'index'])
            ->middleware(['permission:user index'])
            ->name('index');

        Route::get('edit/{id}', [UsersController::class,'edit'])
            ->middleware(['permission:user update'])
            ->name('edit');

        Route::get('details/{id}', [UsersController::class,'show'])
            ->middleware(['permission:user details'])
            ->name('show');

        Route::get('delete/{id}', [UsersController::class,'delete'])
            ->middleware(['permission:user delete'])
            ->name('delete');

        Route::get('create', [UsersController::class,'create'])
            ->middleware(['permission:user create'])
            ->name('create');

        Route::post('', [UsersController::class,'store'])
            ->middleware(['permission:user create'])
            ->name('store');

        Route::put('{id}', [UsersController::class,'update'])
            ->middleware(['permission:user update'])
            ->name('update');

        Route::delete('{id}', [UsersController::class,'destroy'])
            ->middleware(['permission:user delete'])
            ->name('destroy');
    });

    Route::prefix('roles')->name('roles.')->group(function () {
        Route::get('', [RolesController::class,'index'])
            ->middleware(['permission:role index'])
            ->name('index');
        Route::get('edit/{id}', [RolesController::class,'edit'])
            ->middleware(['permission:role update'])
            ->name('edit');
        Route::get('details/{id}', [RolesController::class,'show'])
            ->middleware(['permission:role details'])
            ->name('show');
        Route::get('delete/{id}', [RolesController::class,'delete'])
            ->middleware(['permission:role delete'])
            ->name('delete');
        Route::get('create', [RolesController::class,'create'])
            ->middleware(['permission:role create'])
            ->name('create');
        Route::post('', [RolesController::class,'store'])
            ->middleware(['permission:role create'])
            ->name('store');
        Route::put('{id}', [RolesController::class,'update'])
            ->middleware(['permission:role update'])
            ->name('update');
        Route::delete('{id}', [RolesController::class,'destroy'])
            ->middleware(['permission:role delete'])
            ->name('destroy');
    });

});



/**
 * Socialite login using Google service
 * https://laravel.com/docs/8.x/socialite
 */
Route::get('/auth/redirect/{provider}', [SocialiteLoginController::class, 'redirect']);

require __DIR__.'/auth.php';
