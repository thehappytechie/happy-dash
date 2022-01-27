<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DatatableController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\ForcePasswordChangeController;
use Spatie\Health\Http\Controllers\HealthCheckResultsController;

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

Route::middleware(['auth', 'force.password.change', 'prevent.back.history', 'disable.login'])->group(function () {
    /*
|--------------------------------------------------------------------------
| Resource Controllers
|--------------------------------------------------------------------------
*/
    Route::resources([
        'users' => UserController::class,
        'roles' => RoleController::class,
    ]);
    Route::resource('profile', UserProfileController::class)->only(['edit', 'update']);

    /*
|--------------------------------------------------------------------------
| Datatable Controllers
|--------------------------------------------------------------------------
*/
    Route::controller(DatatableController::class)->group(function () {
        Route::get('users', 'userDatatable')
            ->name('userDatatable');
        Route::get('roles', 'roleDatatable')
            ->name('roleDatatable');
    });

    Route::get('activity', [ActivityController::class, 'log'])->name('userActivity');

    /*
|--------------------------------------------------------------------------
| Single Action Controllers
|--------------------------------------------------------------------------
*/
    Route::get('health', HealthCheckResultsController::class);
    Route::get('my-activity', [PageController::class, 'myActivity'])
        ->name('myActivity');
    Route::get('profile/change-password', [UserProfileController::class, 'changePassword'])
        ->name('changePassword');
    Route::get('profile/security', [UserProfileController::class, 'security'])
        ->name('security')->middleware('password.confirm');
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::resource('password-change', ForcePasswordChangeController::class)
        ->only(['edit', 'update'])
        ->withoutMiddleware(['force.password.change']);
    Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('signout')->withoutMiddleware(['force.password.change']);
});
