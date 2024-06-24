<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tweet\IndexController;
use App\Http\Controllers\Tweet\CreateController;

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

Route::get('/tweet', IndexController::class)->name('tweet.index');
Route::post('/tweet/create', CreateController::class)->name('tweet.create');
