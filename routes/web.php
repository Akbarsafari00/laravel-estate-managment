<?php

use App\Http\Controllers\Estates\Account\AccountController;
use App\Http\Controllers\Estates\Auth\SocialiteLoginController;
use App\Http\Controllers\Estates\Documentation\ReferencesController;
use App\Http\Controllers\Estates\EstateDocumentTypeController;
use App\Http\Controllers\Estates\EstateFeaturesController;
use App\Http\Controllers\Estates\EstateSubscriptionsController;
use App\Http\Controllers\Estates\Logs\AuditLogsController;
use App\Http\Controllers\Estates\Logs\SystemLogsController;
use App\Http\Controllers\Estates\EstateTypeController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\UsersController;
use App\Models\EstateDocumentType;
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

        Route::get('overview', [AccountController::class, 'overview'])
            ->middleware(['permission:account detail'])
            ->name('account.overview');


        Route::get('profile', [AccountController::class, 'index'])
            ->middleware(['permission:account update'])
            ->name('account.profile');

        Route::put('profile', [AccountController::class, 'update'])
            ->middleware(['permission:account update'])
            ->name('account.profile');


        Route::put('change-email', [AccountController::class, 'changeEmail'])
            ->middleware(['permission:account change-email'])
            ->name('account.changeEmail');


        Route::put('change-password', [AccountController::class, 'changePassword'])
            ->middleware(['permission:account change-password'])
            ->name('account.changePassword');
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

        Route::get('', [UsersController::class, 'index'])
            ->middleware(['permission:user index'])
            ->name('index');

        Route::get('edit/{id}', [UsersController::class, 'edit'])
            ->middleware(['permission:user update'])
            ->name('edit');

        Route::get('details/{id}', [UsersController::class, 'show'])
            ->middleware(['permission:user detail'])
            ->name('show');

        Route::get('delete/{id}', [UsersController::class, 'delete'])
            ->middleware(['permission:user delete'])
            ->name('delete');

        Route::get('create', [UsersController::class, 'create'])
            ->middleware(['permission:user create'])
            ->name('create');

        Route::post('', [UsersController::class, 'store'])
            ->middleware(['permission:user create'])
            ->name('store');

        Route::put('{id}', [UsersController::class, 'update'])
            ->middleware(['permission:user update'])
            ->name('update');

        Route::delete('{id}', [UsersController::class, 'destroy'])
            ->middleware(['permission:user delete'])
            ->name('destroy');
    });

    Route::prefix('roles')->name('roles.')->group(function () {
        Route::get('', [RolesController::class, 'index'])
            ->middleware(['permission:role index'])
            ->name('index');
        Route::get('edit/{id}', [RolesController::class, 'edit'])
            ->middleware(['permission:role update'])
            ->name('edit');
        Route::get('details/{id}', [RolesController::class, 'show'])
            ->middleware(['permission:role detail'])
            ->name('show');
        Route::get('delete/{id}', [RolesController::class, 'delete'])
            ->middleware(['permission:role delete'])
            ->name('delete');
        Route::get('create', [RolesController::class, 'create'])
            ->middleware(['permission:role create'])
            ->name('create');
        Route::post('', [RolesController::class, 'store'])
            ->middleware(['permission:role create'])
            ->name('store');
        Route::put('{id}', [RolesController::class, 'update'])
            ->middleware(['permission:role update'])
            ->name('update');
        Route::delete('{id}', [RolesController::class, 'destroy'])
            ->middleware(['permission:role delete'])
            ->name('destroy');
    });

    Route::prefix('estate-types')->name('estate-types.')->group(function () {
        Route::get('', [EstateTypeController::class, 'index'])
            ->middleware(['permission:estate-type index'])
            ->name('index');
        Route::get('edit/{id}', [EstateTypeController::class, 'edit'])
            ->middleware(['permission:estate-type update'])
            ->name('edit');
        Route::get('details/{id}', [EstateTypeController::class, 'show'])
            ->middleware(['permission:estate-type detail'])
            ->name('show');
        Route::get('delete/{id}', [EstateTypeController::class, 'delete'])
            ->middleware(['permission:estate-type delete'])
            ->name('delete');
        Route::get('create', [EstateTypeController::class, 'create'])
            ->middleware(['permission:estate-type create'])
            ->name('create');
        Route::post('', [EstateTypeController::class, 'store'])
            ->middleware(['permission:estate-type create'])
            ->name('store');
        Route::put('{id}', [EstateTypeController::class, 'update'])
            ->middleware(['permission:estate-type update'])
            ->name('update');
        Route::delete('{id}', [EstateTypeController::class, 'destroy'])
            ->middleware(['permission:estate-type delete'])
            ->name('destroy');
    });

    Route::prefix('estate-document-types')->name('estate-document-types.')->group(function () {
        Route::get('', [EstateDocumentTypeController::class, 'index'])
            ->middleware(['permission:estate-document-type index'])
            ->name('index');
        Route::get('edit/{id}', [EstateDocumentTypeController::class, 'edit'])
            ->middleware(['permission:estate-document-type update'])
            ->name('edit');
        Route::get('details/{id}', [EstateDocumentTypeController::class, 'show'])
            ->middleware(['permission:estate-document-type detail'])
            ->name('show');
        Route::get('delete/{id}', [EstateDocumentTypeController::class, 'delete'])
            ->middleware(['permission:estate-document-type delete'])
            ->name('delete');
        Route::get('create', [EstateDocumentTypeController::class, 'create'])
            ->middleware(['permission:estate-document-type create'])
            ->name('create');
        Route::post('', [EstateDocumentTypeController::class, 'store'])
            ->middleware(['permission:estate-document-type create'])
            ->name('store');
        Route::put('{id}', [EstateDocumentTypeController::class, 'update'])
            ->middleware(['permission:estate-document-type update'])
            ->name('update');
        Route::delete('{id}', [EstateDocumentTypeController::class, 'destroy'])
            ->middleware(['permission:estate-document-type delete'])
            ->name('destroy');
    });

    Route::prefix('estate-subscriptions')->name('estate-subscriptions.')->group(function () {
        Route::get('', [EstateSubscriptionsController::class, 'index'])
            ->middleware(['permission:estate-subscription index'])
            ->name('index');
        Route::get('edit/{id}', [EstateSubscriptionsController::class, 'edit'])
            ->middleware(['permission:estate-subscription update'])
            ->name('edit');
        Route::get('details/{id}', [EstateSubscriptionsController::class, 'show'])
            ->middleware(['permission:estate-subscription detail'])
            ->name('show');
        Route::get('delete/{id}', [EstateSubscriptionsController::class, 'delete'])
            ->middleware(['permission:estate-subscription delete'])
            ->name('delete');
        Route::get('create', [EstateSubscriptionsController::class, 'create'])
            ->middleware(['permission:estate-subscription create'])
            ->name('create');
        Route::post('', [EstateSubscriptionsController::class, 'store'])
            ->middleware(['permission:estate-subscription create'])
            ->name('store');
        Route::put('{id}', [EstateSubscriptionsController::class, 'update'])
            ->middleware(['permission:estate-subscription update'])
            ->name('update');
        Route::delete('{id}', [EstateSubscriptionsController::class, 'destroy'])
            ->middleware(['permission:estate-subscription delete'])
            ->name('destroy');
    });

    Route::prefix('estate-features')->name('estate-features.')->group(function () {
        Route::get('', [EstateFeaturesController::class, 'index'])
            ->middleware(['permission:estate-feature index'])
            ->name('index');
        Route::get('edit/{id}', [EstateFeaturesController::class, 'edit'])
            ->middleware(['permission:estate-feature update'])
            ->name('edit');
        Route::get('details/{id}', [EstateFeaturesController::class, 'show'])
            ->middleware(['permission:estate-feature detail'])
            ->name('show');
        Route::get('delete/{id}', [EstateFeaturesController::class, 'delete'])
            ->middleware(['permission:estate-feature delete'])
            ->name('delete');
        Route::get('create', [EstateFeaturesController::class, 'create'])
            ->middleware(['permission:estate-feature create'])
            ->name('create');
        Route::post('', [EstateFeaturesController::class, 'store'])
            ->middleware(['permission:estate-feature create'])
            ->name('store');
        Route::put('{id}', [EstateFeaturesController::class, 'update'])
            ->middleware(['permission:estate-feature update'])
            ->name('update');
        Route::delete('{id}', [EstateFeaturesController::class, 'destroy'])
            ->middleware(['permission:estate-feature delete'])
            ->name('destroy');
    });

});


/**
 * Socialite login using Google service
 * https://laravel.com/docs/8.x/socialite
 */
Route::get('/auth/redirect/{provider}', [SocialiteLoginController::class, 'redirect']);

require __DIR__ . '/auth.php';
