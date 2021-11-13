<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;

class FlightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $flights = Flight::paginate( 20 );

        return view( 'flights.index', [
            'flights' => $flights
        ] );
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show( Flight $flight ){
        return view( 'flights.show', [
            'flight' => $flight
        ] );
    }

}
