<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect()->route('login');
});


Route::middleware(['auth','verified'])->group(function (){
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('dashboard');
    });
});

Route::middleware('auth')->group(function () {
    Route::controller(ProfileController::class)->group(function (){
        Route::get('/profile', 'edit')->name('profile.edit');
        Route::patch('/profile', 'update')->name('profile.update');
        Route::delete('/profile', 'destroy')->name('profile.destroy');
    });

    Route::controller(SettingController::class)->group(function (){
        Route::get('/setting/list', 'list')->name('setting.list');
        Route::get('/setting/create', 'create')->name('setting.create');
        Route::post('/setting/store', 'store')->name('setting.store');
        Route::post('/setting/delete', 'delete')->name('setting.delete');
        Route::get('/setting/edit/{ppv_settingid}', 'edit')->name('setting.edit');
        Route::patch('/setting/update/{ppv_settingid}', 'update')->name('setting.update');
    });

    Route::get('/photo/list', [PhotoController::class, 'list'])->name('photo.list');
    Route::get('/log/list', [LogController::class, 'list'])->name('log.list');

    Route::controller(StudentController::class)->group(function () {
        Route::get('/student/list', 'list')->name('student.list');
    });

});

require __DIR__.'/auth.php';
