<?php

use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

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

Route::view('', 'pages.newdate.index')->name('main');
Route::view('login', 'pages.login.index')->name('login');

Route::post('addTime', [RegisterController::class, 'checkDate'])->name('checkDate');
Route::post('addCheck', [RegisterController::class, 'addCheck'])->name('addCheck');
Route::post('adminPanel', [RegisterController::class, 'adminPanel'])->name('adminPanel');
Route::post('deleteUser', [RegisterController::class, 'deleteUser'])->name('deleteUser');
Route::post('serachTime', [RegisterController::class, 'serachTime'])->name('serachTime');
