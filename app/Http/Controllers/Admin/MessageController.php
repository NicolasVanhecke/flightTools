<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function messages(){
        $messages = Message::all();

        return view( 'admin.messages.index', [
            'messages' => $messages
        ] );
    }

    public function detail( $messageId ){
        $message = Message::findOrFail( $messageId );

        return view( 'admin.messages.detail', [
            'message' => $message
        ] );
    }
}
