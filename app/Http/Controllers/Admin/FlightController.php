<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Flight;

class FlightController extends Controller
{
    
    public function flights(){
        $flights = Flight::all();

        return view( 'admin.flights.index', [
            'flights' => $flights
        ] );
    }

    public function detail( $flightId ){
        $flight = Flight::find( $flightId );

        return view( 'admin.flights.detail', [
            'flight' => $flight
        ] );
    }
}
