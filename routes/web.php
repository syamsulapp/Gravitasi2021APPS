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

    /** routes for users management */
    Route::get('/users-management',[\App\Http\Controllers\Admin\UsersManagementController::class , 'index'])->name('users-management')->middleware(['roleusers','roleadminkeuangan']);
    Route::get('/view-tambah-users',[\App\Http\Controllers\Admin\UsersManagementController::class , 'view_tambah'])->name('tambah-users')->middleware(['roleusers','roleadminkeuangan']);
    Route::post('/tambah-users',[\App\Http\Controllers\Admin\UsersManagementController::class , 'adddata'])->name('tambah-users')->middleware(['roleusers','roleadminkeuangan']);
    /** edit data */
    Route::get('/users-view/{editdata}/edit',[\App\Http\Controllers\Admin\UsersManagementController::class , 'viewedit'])->name('users-view-edit')->middleware(['roleusers','roleadminkeuangan']);
    Route::put('/users-view/{dataLama}/ubah',[\App\Http\Controllers\Admin\UsersManagementController::class ,'ubahdata'])->name('users-view-ubah')->middleware(['roleusers','roleadminkeuangan']);
    Route::delete('/users-management/{hapusdata}/delete',[\App\Http\Controllers\Admin\UsersManagementController::class ,'delete'])->name('delete-data')->middleware(['roleusers','roleadminkeuangan']);

    Route::get('/users/peserta',[\App\Http\Controllers\Admin\UsersManagementController::class ,'peserta'])->name('tampil-data-perserta')->middleware(['roleusers','roleadminkeuangan']);

    /** ============ end: routes USERS MANAGEMENT ================= */


    /** ============ begin: routes CRUD lomba ================= */
    /** routes for lomba */
    Route::get('/lomba-view',[\App\Http\Controllers\Admin\CreateJadwalLOmbaController::class ,'lombaGravitasi'])->name('lomba-view')->middleware(['roleusers','roleadminkeuangan']);
    Route::get('/lomba-tambah',[\App\Http\Controllers\Admin\CreateJadwalLOmbaController::class ,'formtambahlomba'])->name('lomba-tambah')->middleware(['roleusers','roleadminkeuangan']);
    Route::post('/lomba/insert',[\App\Http\Controllers\Admin\CreateJadwalLOmbaController::class ,'insertdatalomba'])->name('insert-data-lomba')->middleware(['roleusers','roleadminkeuangan']);

    Route::get('/lomba/{getlomba}/edit',[\App\Http\Controllers\Admin\CreateJadwalLOmbaController::class , 'edit'])->name('edit-data-lomba')->middleware(['roleusers','roleadminkeuangan']);
    Route::put('/lomba/{datalama}/update',[\App\Http\Controllers\Admin\CreateJadwalLOmbaController::class ,'updatelomba'])->name('update-data-lomba')->middleware(['roleusers','roleadminkeuangan']);

    Route::delete('/delete/{deletelomba}/lomba',[\App\Http\Controllers\Admin\CreateJadwalLOmbaController::class , 'delete_lomba'])->name('delete-lomba')->middleware(['roleusers','roleadminkeuangan']);
    /** ============ end: routes CRUD lomba ================= */


    /** routes for CRUD jadwal lomba */
    Route::get('/jadwal-lomba-view',[\App\Http\Controllers\Admin\CreateJadwalLOmbaController::class ,'jadwallomba'])->name('jadwal-lomba')->middleware(['roleusers','roleadminkeuangan']);
    Route::get('/jadwal-form',[\App\Http\Controllers\Admin\CreateJadwalLOmbaController::class ,'formtambahjadwal'])->name('form-jadwal-lomba')->middleware(['roleusers','roleadminkeuangan']);
    Route::post('/insert-jadwal-lomba',[\App\Http\Controllers\Admin\CreateJadwalLOmbaController::class ,'insertdatajadwal'])->name('insert-data-lomba')->middleware(['roleusers','roleadminkeuangan']);

    Route::get('/jadwal/{editjadwal}/edit',[\App\Http\Controllers\Admin\CreateJadwalLOmbaController::class , 'edit_jadwal'])->name('edit-jadwal')->middleware(['roleusers','roleadminkeuangan']);
    Route::put('/jadwal/{datalama}/update',[\App\Http\Controllers\Admin\CreateJadwalLOmbaController::class ,'update_jadwal'])->name('update-jadwal')->middleware(['roleusers','roleadminkeuangan']);
    Route::delete('/delete/{deletejadwal}/hapus-jadwal',[\App\Http\Controllers\Admin\CreateJadwalLOmbaController::class ,'delete_jadwal'])->name('delete-jadwal')->middleware(['roleusers','roleadminkeuangan']);
});

Route::prefix('admin')->group( function(){
    Route::get('/keuangan',[\App\Http\Controllers\Admin\Keuangan\KeuanganController::class , 'index'])->name('adminkeuangan')->middleware(['roleusers','roleadmin']);
});
