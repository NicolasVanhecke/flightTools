<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Pilot;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Validator;

class PilotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pilots = Pilot::all();

        return view( 'admin.pilots.index', [
            'pilots' => $pilots
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pilot = new Pilot;
        $stations = [ 'BRU', 'OST', 'ANR', 'BCN', 'LPA', 'TFS' ];
        $aircrafts = [ 'B737', 'B737-MAX', 'B737-800', 'B777' ];
        $statuses = [ 'training', 'active', 'retired' ];

        return view( 'admin.pilots.createOrUpdate', [
            'pilot' => $pilot,
            'stations' => $stations,
            'aircrafts' => $aircrafts,
            'statuses' => $statuses
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

        $pilot = new Pilot;
        $this->save( $pilot, $request );

        return redirect()->route( 'admin.pilots.index' )->with( 'success', 'New pilot created.' );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pilot = Pilot::findOrFail( $id );

        return view( 'admin.pilots.show', [
            'pilot' => $pilot
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
        $pilot = Pilot::findOrFail( $id );
        $stations = [ 'BRU', 'OST', 'ANR', 'BCN', 'LPA', 'TFS' ];
        $aircrafts = [ 'B737', 'B737-MAX', 'B737-800', 'B777' ];
        $statuses = [ 'training', 'active', 'retired' ];

        return view( 'admin.pilots.createOrUpdate', [
            'pilot' => $pilot,
            'stations' => $stations,
            'aircrafts' => $aircrafts,
            'statuses' => $statuses
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

        $pilot = Pilot::findOrFail( $id );
        $this->save( $pilot, $request );

        return redirect()->route( 'admin.pilots.index' )->with( 'success', 'Pilot updated.' );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pilot = Pilot::findOrFail( $id );
        $pilot->delete();

        return redirect()->back()->with( 'success', 'Pilot deleted.' );
    }

    /**
     * Validate form request.
     *
     * @param  Request  $request
     * @return object
     */
    private function formValidator( $request ){
        return Validator::make( $request->all(), [
            'code' => 'required|max:3',
            'first_name' => 'required',
            'last_name' => 'required',
            'rank' => 'required',
            'station' => 'required',
            'qualified_aircrafts' => 'required',
            'email' => 'required|email',
            'status' => 'required'
        ]);
    }

    /**
     * Saves the model for create and update.
     *
     * @param  Pilot $pilot
     * @param  Request $request
     */
    private function save( Pilot $pilot, Request $request ){
        $pilot->code = $request->input('code');
        $pilot->first_name = $request->input('first_name');
        $pilot->last_name = $request->input('last_name');
        $pilot->rank = $request->input('rank');
        $pilot->station = $request->input('station');
        $pilot->qualified_aircrafts = $request->input('qualified_aircrafts');
        $pilot->email = $request->input('email');
        $pilot->status = $request->input('status');
        $pilot->save();
    }
}
