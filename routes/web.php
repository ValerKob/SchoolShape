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

Route::post('addTime', [RegisterController::class, 'checkDate'])->name('checkDate');
Route::post('addCheck', [RegisterController::class, 'addCheck'])->name('addCheck');

// Route::view('checkreq', 'pages.checkreq.index', compact('post'))->name('main');
