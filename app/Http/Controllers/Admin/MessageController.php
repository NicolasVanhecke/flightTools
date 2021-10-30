<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function messages(){
        return view( 'admin.messages.index' );
    }

    public function messageId( $messageId ){
        return 'this is messageId: ' . $messageId;
    }
    //
}
