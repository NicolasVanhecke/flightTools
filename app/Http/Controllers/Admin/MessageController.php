<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Message;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Validator;
use Illuminate\Pagination\Paginator;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = Message::paginate( 20 );

        return view( 'admin.messages.index', [
            'messages' => $messages
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $message = new Message;
        $airports = [ 'BRU', 'OST', 'ANR', 'BCN', 'LPA', 'TFS' ];
        $aircrafts = [ 'B737', 'B737-MAX', 'B737-800', 'B777' ];
        $statuses = [ 'draft', 'published', 'expired' ];

        return view( 'admin.messages.createOrUpdate', [
            'message' => $message,
            'airports' => $airports,
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

        $message = new Message;
        $this->save( $message, $request );

        return redirect()->route( 'admin.messages.index' )->with( 'success', 'New message created.' );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $message = Message::findOrFail( $id );

        return view( 'admin.messages.show', [
            'message' => $message
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $message = Message::findOrFail( $id );
        $airports = [ 'BRU', 'OST', 'ANR', 'BCN', 'LPA', 'TFS' ];
        $aircrafts = [ 'B737', 'B737-MAX', 'B737-800', 'B777' ];
        $statuses = [ 'draft', 'published', 'expired' ];

        return view( 'admin.messages.createOrUpdate', [
            'message' => $message,
            'airports' => $airports,
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

        $message = Message::findOrFail( $id );
        $this->save( $message, $request );

        return redirect()->route( 'admin.messages.index' )->with( 'success', 'Message updated.' );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $message = Message::findOrFail( $id );
        $message->delete();

        return redirect()->back()->with( 'success', 'Message deleted.' );
    }

    /**
     * Validate form request.
     *
     * @param  Request  $request
     * @return object
     */
    private function formValidator( $request ){
        return Validator::make( $request->all(), [
            'airport' => 'required|max:3',
            'start_date' => 'required',
            'end_date' => 'required',
            'short' => 'required',
            'body' => 'required',
            'status' => 'required',
        ]);
    }

    /**
     * Saves the model for create and update.
     *
     * @param  Pilot $message
     * @param  Request $request
     */
    private function save( Message $message, Request $request ){
        $message->airport = $request->input('airport');
        $message->start_date = $request->input('start_date');
        $message->end_date = $request->input('end_date');
        $message->short = $request->input('short');
        $message->status = $request->input('status');
        $message->save();
    }

}
