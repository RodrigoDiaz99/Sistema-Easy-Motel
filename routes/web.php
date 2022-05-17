<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/', function () {
    return view('auth.login');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

/**
 * New Controllers
 */
Route::middleware(['auth'])->group(function () {
    /**
     * Establisment Routes
     */
    Route::controller('EstablishmentController')->group(function () {
        Route::get('/establishment/index', 'index')->name('establishment.index');
        Route::post('/establishment', 'store')->name('establishment.store');
        Route::get('/establishment/create', 'create')->name('establishment.create');
        Route::get('/establishment/{id}', 'show')->name('establishment.show');
        Route::put('/establishment/{id}', 'update')->name('establishment.update');
        Route::delete('/establishment/{id}', 'delete')->name('establishment.delete');
        Route::get('/establishment/{id}/edit', 'edit')->name('establishment.edit');
    });

    /**
     * Area Routes
     */
    Route::controller('AreaController')->group(function () {
        Route::get('/area/index', 'index')->name('area.index');
        Route::post('/area', 'store')->name('area.store');
        Route::get('/area/create', 'create')->name('area.create');
        Route::get('/area/{id}', 'show')->name('area.show');
        Route::put('/area/{id}', 'update')->name('area.update');
        Route::delete('/area/{id}', 'delete')->name('area.delete');
        Route::get('/area/{id}/edit', 'edit')->name('area.edit');
    });

    /**
     * Product Routes
     */
    Route::controller('ProductController')->group(function () {
        Route::get('/product/index', 'index')->name('product.index');
        Route::post('/product', 'store')->name('product.store');
        Route::get('/product/create', 'create')->name('product.create');
        Route::get('/product/{id}', 'show')->name('product.show');
        Route::put('/product/{id}', 'update')->name('product.update');
        Route::delete('/product/{id}', 'delete')->name('product.delete');
        Route::get('/product/{id}/edit', 'edit')->name('product.edit');
    });

    /**
     * Inventory Routes
     */
    Route::controller('InventoryController')->group(function () {
        Route::get('/inventory/index', 'index')->name('inventory.index');
        Route::post('/inventory', 'store')->name('inventory.store');
        Route::get('/inventory/create', 'create')->name('inventory.create');
        Route::get('/inventory/{id}', 'show')->name('inventory.show');
        Route::put('/inventory/{id}', 'update')->name('inventory.update');
        Route::delete('/inventory/{id}', 'delete')->name('inventory.delete');
        Route::get('/inventory/{id}/edit', 'edit')->name('inventory.edit');
    });

    /**
     * Stretche Routes
     */
    Route::controller('StretchController')->group(function () {
        Route::get('/stretch/index', 'index')->name('stretch.index');
        Route::post('/stretch', 'store')->name('stretch.store');
        Route::get('/stretch/create', 'create')->name('stretch.create');
        Route::get('/stretch/{id}', 'show')->name('stretch.show');
        Route::put('/stretch/{id}', 'update')->name('stretch.update');
        Route::delete('/stretch/{id}', 'delete')->name('stretch.delete');
        Route::get('/stretch/{id}/edit', 'edit')->name('stretch.edit');
    });

    /**
     * Reservation Desk Routes
     */
    Route::controller('ReservationDeskController')->group(function () {
        Route::get('/reservationDesk/index', 'index')->name('ReservationDesk.index');
        Route::post('/reservationDesk', 'store')->name('ReservationDesk.store');
        Route::get('/reservationDesk/create', 'create')->name('ReservationDesk.create');
        Route::get('/reservationDesk/{id}', 'show')->name('ReservationDesk.show');
        Route::put('/reservationDesk/{id}', 'update')->name('ReservationDesk.update');
        Route::delete('/reservationDesk/{id}', 'delete')->name('ReservationDesk.delete');
        Route::get('/reservationDesk/{id}/edit', 'edit')->name('ReservationDesk.edit');
    });
});
