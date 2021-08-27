<?php

use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\CrapIndex;
use App\Http\Controllers\Home;

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

Route::get('/',[Home::class , 'home']);

Auth::routes();

/** routes group untuk hak akses role users (admin , admin keuangan dan users) dan multi login */

/** jika controllernya berada dalam sub folder maka wajib pake namespace routes untuk menjalankan controllernya */
Route::prefix('users')->group(function (){
    Route::get('/dashboard', [\App\Http\Controllers\users\DashboardUsersController::class, 'index'])->name('dashboard')->middleware(['roleadmin','roleadminkeuangan']);
});

Route::prefix('admin')->group(function () {
    Route::get('/dashboard',[\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard')->middleware(['roleusers','roleadminkeuangan']);
});

Route::prefix('admin')->group( function(){
    Route::get('/keuangan',[\App\Http\Controllers\Admin\Keuangan\KeuanganController::class , 'index'])->name('adminkeuangan')->middleware(['roleusers','roleadmin']);
});
