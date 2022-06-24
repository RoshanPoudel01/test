<?php

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

Auth::routes();

Route::group(['middleware' => ['auth','isAdmin']], function () {

    Route::get('/dashboard', function () {
       return view('admin.dashboard');
    });
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['web','auth',])->group(function () {



     //Activity
     Route::get('activity', [App\Http\Controllers\ActivityController::class, 'index'])->name('activity.index');
     Route::get('activity/create', [App\Http\Controllers\ActivityController::class, 'create'])->name('activity.create');
     Route::post('activity', [App\Http\Controllers\ActivityController::class, 'store'])->name('activity');
     Route::get('activity/{id}', [App\Http\Controllers\ActivityController::class, 'show'])->name('activity.show');
     Route::get('activity/{id}/edit', [App\Http\Controllers\ActivityController::class, 'edit'])->name('activity.edit');
     Route::put('activity/{id}/update', [App\Http\Controllers\ActivityController::class, 'update'])->name('activity.update');
     Route::delete('activity/{id}/delete', [App\Http\Controllers\ActivityController::class, 'delete'])->name('activity.delete');



      //User
      Route::get('user', [App\Http\Controllers\UserController::class, 'index'])->name('user.index');
      Route::get('user/{id}', [App\Http\Controllers\UserController::class, 'show'])->name('user.show');



});
