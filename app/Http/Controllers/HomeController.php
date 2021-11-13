<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Config\app;

class HomeController extends Controller
{
    public function __invoke(){
        $appEnv = config( 'app.env' ); ;

        return view( 'home', [
            'appEnv' => $appEnv
        ] );
    }
}
