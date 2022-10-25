<?php

use App\Http\Controllers\AluminumWindowController;
use App\Http\Controllers\PlasticWindowController;
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

Route::view('/', 'welcome')->name('home.page');

Route::get('/plastic_window', [PlasticWindowController::class, 'makeWindow'])->name('plastic.window');
Route::get('/aluminum_window', [AluminumWindowController::class, 'makeWindow'])->name('aluminum.window');
