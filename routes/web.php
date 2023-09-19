<?php

use App\Http\Controllers\HomeController as HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController as RestaurantController;
use Illuminate\Routing\Controllers\Middleware;

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

Auth::routes();


// Route::get('guest/index', [RestaurantController::class, 'index'])->name('index');
// Route::get('guest/index/guest/menu', [RestaurantController::class, 'show'])->name('guest.menu');


Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');
});
