<?php

use App\Http\Controllers\FaqController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\WhoareweController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\WelcomeController;
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

Route::get('/', IndexController::class);

Route::get('welcome', WelcomeController::class);

Route::get('whoarewe', WhoareweController::class);

Route::get('contact', ContactController::class);

Route::get('faq', FaqController::class);
