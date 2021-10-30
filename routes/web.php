<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\FlightController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\PilotController;

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
    Route::get( '/flights', [ FlightController::class, 'flights' ] )->name( 'adminFlights' );
    Route::get( '/flights/{flightId}', [ FlightController::class, 'detail' ] );

    Route::get( '/messages', [ MessageController::class, 'messages' ] )->name( 'adminMessages' );
    Route::get( '/messages/{messageId}', [ MessageController::class, 'detail' ] );

    Route::get( '/pilots', [ PilotController::class, 'pilots' ] )->name( 'adminPilots' );
    Route::get( '/pilots/{pilotId}', [ PilotController::class, 'detail' ] );
});


Route::get( '/', function () {
    return view( 'welcome' );
});

Route::get( '/dashboard', function () {
    return view( 'dashboard' );
})->middleware( [ 'auth' ] )->name( 'dashboard' );

require __DIR__.'/auth.php';
