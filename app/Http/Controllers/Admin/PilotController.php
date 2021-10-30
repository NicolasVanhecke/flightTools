<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Pilot;

class PilotController extends Controller
{
    public function pilots(){
        $pilots = Pilot::all();

        return view( 'admin.pilots.index', [
            'pilots' => $pilots
        ]);
    }

    public function detail( $pilotId ){
        $pilot = Pilot::findOrFail( $pilotId );

        return view( 'admin.pilots.detail', [
            'pilot' => $pilot
        ]);
    }
}
