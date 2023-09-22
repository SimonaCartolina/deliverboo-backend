<?php

use App\Http\Controllers\HomeController as HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController as RestaurantController;
use App\Http\Controllers\Admin\PlatesController as PlatesController;
use App\Http\Controllers\UserController as UserController;
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
    Route::get('/index', [RestaurantController::class, 'index'])->name('index');

    Route::get('/create', [RestaurantController::class, 'create'])->name('create');

    Route::post('/store', [RestaurantController::class, 'store'])->name('store');

    Route::get('/{id}', [RestaurantController::class, 'show'])->name('show');


    //first update, then edit
    Route::put('/{id}', [RestaurantController::class, 'update'])->name('update');
    Route::get('/{id}/edit', [RestaurantController::class, 'edit'])->name('edit');
});

Route::get('guest/create', [PlatesController::class, 'create'])->name('guest.create')->middleware('auth');
Route::post('guest/store', [PlatesController::class, 'store'])->name('guest.store')->middleware('auth');
Route::get('guest/menu', [RestaurantController::class, 'show'])->name('guest.menu')->middleware('auth');

Route::put('guest/{slug}', [PlatesController::class, 'update'])->name('guest.update')->middleware('auth');
Route::get('guest/{slug}/edit', [PlatesController::class, 'edit'])->name('guest.edit')->middleware('auth');
