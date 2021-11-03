<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
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
    Route::get( '/', [ DashboardController::class, 'index' ] )->name( 'adminDashboard' );

    Route::resource( '/flights', FlightController::class , [
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

    Route::resource( '/messages', MessageController::class , [
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

    Route::resource( '/pilots', PilotController::class , [
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


Route::get( '/', function () {
    return view( 'welcome' );
});

// Unused now, replaced by adminDashboard
// Route::get( '/dashboard', function () {
//     return view( 'dashboard' );
// })->middleware( [ 'auth' ] )->name( 'dashboard' );

require __DIR__.'/auth.php';
