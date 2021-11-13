<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\FlightController as AdminFlightController;
use App\Http\Controllers\Admin\MessageController as AdminMessageController;
use App\Http\Controllers\Admin\PilotController as AdminPilotController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\MessageController;

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

Route::prefix( 'admin' )->middleware( 'isAdmin' )->group( function () {
    Route::get( '/', AdminDashboardController::class )->name( 'admin.dashboard' );

    Route::resource( '/flights', AdminFlightController::class , [
        'names' => [
            'index'     => 'admin.flights.index',
            'create'    => 'admin.flights.create',
            'store'     => 'admin.flights.store',
            'show'      => 'admin.flights.show',
            'edit'      => 'admin.flights.edit',
            'update'    => 'admin.flights.update',
            'destroy'   => 'admin.flights.destroy'
        ]
    ]);

    Route::resource( '/messages', AdminMessageController::class , [
        'names' => [
            'index'     => 'admin.messages.index',
            'create'    => 'admin.messages.create',
            'store'     => 'admin.messages.store',
            'show'      => 'admin.messages.show',
            'edit'      => 'admin.messages.edit',
            'update'    => 'admin.messages.update',
            'destroy'   => 'admin.messages.destroy'
        ]
    ]);

    Route::resource( '/pilots', AdminPilotController::class , [
        'names' => [
            'index'     => 'admin.pilots.index',
            'create'    => 'admin.pilots.create',
            'store'     => 'admin.pilots.store',
            'show'      => 'admin.pilots.show',
            'edit'      => 'admin.pilots.edit',
            'update'    => 'admin.pilots.update',
            'destroy'   => 'admin.pilots.destroy'
        ]
    ]);
});


Route::get( '/', HomeController::class )->name( 'home' );

Route::get( '/messages', [ MessageController::class, 'index' ] )->name( 'messages.index' );
Route::get( '/messages/{message:slug}', [ MessageController::class, 'show' ] )->name( 'messages.show' );

Route::get( '/flights', [ FlightController::class, 'index' ] )->name( 'flights.index' );
Route::get( '/flights/{flight:flight_number}', [ FlightController::class, 'show' ] )->name( 'flights.show' );

require __DIR__.'/auth.php';
