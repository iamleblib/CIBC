<?php

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

Auth::routes(['verify' => true]);

Route::group(['middleware' => ['auth', 'verified'], 'prefix' => 'secure'], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('home');
    Route::get('/verify-phone', [DashboardController::class, 'verifyPhone'])->name('verify.phone');
    Route::post('/verify-phone-number', [DashboardController::class, 'verifyPhoneNumber'])->name('verify.phone.number');
});





// Logout page for users end session
Route::get('/logout/page', [DashboardController::class, 'logout'])->name('logout.page');
