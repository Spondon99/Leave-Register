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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('', [App\Http\Controllers\Auth\LoginController::class, 'index'])->name('welcome');
Route::get('/profile/{user}', [App\Http\Controllers\IndexController::class, 'index'])->name('profile.show');
Route::get('/admin/{user}', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.show');
//Route::get('/apply/{user}', [App\Http\Controllers\ApplyController::class, 'index'])->name('apply.show');
Route::get('/requests/{user}', [App\Http\Controllers\RequestsController::class, 'index'])->name('requests.show');
Route::get('/leavetracker/{user}', [App\Http\Controllers\LeaveTrackerController::class, 'index'])->name('leavetracker.show');

Route::get('/profile/{user}', [App\Http\Controllers\IndexController::class, 'create']);
Route::post('/profile/{user}', [App\Http\Controllers\IndexController::class, 'store']);

Route::get('/apply/{user}', [App\Http\Controllers\ApplyController::class, 'create']);
Route::post('/apply/{user}', [App\Http\Controllers\ApplyController::class, 'store']);

Route::get('/requests/{user}', [App\Http\Controllers\RequestsController::class, 'create']);
Route::post('/requests/{user}', [App\Http\Controllers\RequestsController::class, 'store']);
