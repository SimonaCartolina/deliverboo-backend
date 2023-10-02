<?php

use App\Http\Controllers\HomeController as HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController as RestaurantController;
use App\Http\Controllers\Admin\PlateController as PlateController;
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




Route::get('/', function () {
    return view('auth.login');
});

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/index', [RestaurantController::class, 'index'])->name('index');

    Route::get('/create', [RestaurantController::class, 'create'])->name('create');

    Route::post('/store', [RestaurantController::class, 'store'])->name('store');

    //first update, then edit
    Route::get('/{id}/edit', [RestaurantController::class, 'edit'])->name('edit');
    Route::put('/{id}', [RestaurantController::class, 'update'])->name('update');
});

Route::get('admin/menu/menu', [RestaurantController::class, 'show'])->name('admin.menu.menu')->middleware('auth');
Route::get('admin/menu/create', [PlateController::class, 'create'])->name('admin.menu.create')->middleware('auth');
Route::post('admin/menu/store', [PlateController::class, 'store'])->name('admin.menu.store')->middleware('auth');

Route::get('admin/menu/{id}/edit', [PlateController::class, 'edit'])->name('admin.menu.edit')->middleware('auth');
Route::post('admin/menu/{id}', [PlateController::class, 'update'])->name('admin.menu.update')->middleware('auth');
