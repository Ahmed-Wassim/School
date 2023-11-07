<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ParentController;
use App\Http\Controllers\ProfileController;

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

Route::middleware('auth')->group(function () {
    Route::get('/', HomeController::class)->name('home');
});

require __DIR__ . '/auth.php';

Route::group(['middleware' => 'auth', 'namespace' => 'App\Http\Controllers'], function () {
    Route::resource('parent', ParentController::class);
});
