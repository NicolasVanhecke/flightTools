<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Flight;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Validator;

class FlightController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $flights = Flight::all();

        return view( 'admin.flights.index', [
            'flights' => $flights
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $flight = new Flight;
        $airports = [ 'BRU', 'OST', 'ANR', 'BCN', 'LPA', 'TFS' ];
        $aircrafts = [ 'B737', 'B737-MAX', 'B737-800', 'B777' ];

        return view( 'admin.flights.createOrUpdate', [
            'flight' => $flight,
            'airports' => $airports,
            'aircrafts' => $aircrafts
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $this->formValidator( $request );
        if( $validator->fails() ){
            return redirect()->back()
                        ->withErrors( $validator )
                        ->withInput()
                        ->with( 'danger', 'Form is not valid, please check and try again.' );
        }

        $flight = new Flight;
        $this->save( $flight, $request );

        return redirect()->route( 'admin.flights.index' )->with( 'success', 'New flight created.' );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $flight = Flight::findOrFail( $id );

        return view( 'admin.flights.show', [
            'flight' => $flight
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( $id )
    {
        $flight = Flight::findOrFail( $id );
        $airports = [ 'BRU', 'OST', 'ANR', 'BCN', 'LPA', 'TFS' ];
        $aircrafts = [ 'B737', 'B737-MAX', 'B737-800', 'B777' ];

        return view( 'admin.flights.createOrUpdate', [
            'flight' => $flight,
            'airports' => $airports,
            'aircrafts' => $aircrafts
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = $this->formValidator( $request );
        if( $validator->fails() ){
            return redirect()->back()
                        ->withErrors( $validator )
                        ->withInput()
                        ->with( 'danger', 'Form is not valid, please check and try again.' );
        }

        $flight = Flight::findOrFail( $id );
        $this->save( $flight, $request );

        return redirect()->route( 'admin.flights.index' )->with( 'success', 'Flight updated.' );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $flight = Flight::findOrFail( $id );
        $flight->delete();

        return redirect()->back()->with( 'success', 'Flight deleted.' );
    }

    /**
     * Validate form request.
     *
     * @param  Request  $request
     * @return object
     */
    private function formValidator( $request ){
        return Validator::make( $request->all(), [
            'flight_number' => 'required|max:8',
            'commercial_number' => 'required',
            'departure' => 'required|max:3',
            'arrival' => 'required|max:3',
            'std' => 'required|date',
            'sta' => 'required|date'
        ]);
    }

    /**
     * Saves the model for create and update.
     *
     * @param  Pilot $flight
     * @param  Request $request
     */
    private function save( Flight $flight, Request $request ){
        $flight->flight_number = $request->input('flight_number');
        $flight->commercial_number = $request->input('commercial_number');
        $flight->departure = $request->input('departure');
        $flight->arrival = $request->input('arrival');
        $flight->std = $request->input('std');
        $flight->sta = $request->input('sta');
        $flight->save();
    }
}
