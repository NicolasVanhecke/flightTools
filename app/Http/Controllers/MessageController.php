<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $messages = Message::where( 'status', 'published' )->paginate( 20 );

        return view( 'messages.index', [
            'messages' => $messages
        ] );
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show( Message $message ){
        return view( 'messages.show', [
            'message' => $message
        ] );
    }
}
