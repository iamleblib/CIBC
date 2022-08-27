<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Role\RoleController;
use App\Http\Controllers\Guest\DashboardController;
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

Route::get('/', function () {
    return view('welcome');
});

/**
 * =================================
 * Users Routes
 * =================================
 */Auth::routes(['verify' => true]);

Route::group(['middleware' => ['auth','user', 'verified'], 'prefix' => 'secure'], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('home');
    Route::get('/verify-phone', [DashboardController::class, 'verifyPhone'])->name('verify.phone');
});
// Logout page for users end session
Route::get('/logout/page', [DashboardController::class, 'logout'])->name('logout.page');



/**
 * =================================
 * Admin Routes
 * =================================
 */

Route::group(/**
 * @return \Illuminate\Routing\Route
 */ ['middleware' => ['auth', 'admin', 'verified'], 'prefix' => 'control'], function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    /*
     * Role Group Route *
     */
    Route::resource('roles', RoleController::class);
});
