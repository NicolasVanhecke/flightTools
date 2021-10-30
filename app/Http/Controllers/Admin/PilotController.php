<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PilotController extends Controller
{
    public function pilots(){
        return view( 'admin.pilots.index' );
    }

    public function pilotId( $pilotId ){
        return 'this is pilotId: ' . $pilotId;
    }
}
