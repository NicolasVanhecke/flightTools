<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Flight;
use App\Models\Message;
use App\Models\Pilot;

class DashboardController extends Controller
{
    public function __invoke(){
        $flightCount = Flight::count();
        $messageCount = Message::count();
        $pilotCount = Pilot::count();

        return view( 'admin.dashboard', [
            'flightCount' => $flightCount,
            'messageCount' => $messageCount,
            'pilotCount' => $pilotCount
        ] );
    }
}
