<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Flight;
use App\Models\Message;
use App\Models\Pilot;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();
        Flight::factory(50)->create();
        Message::factory(100)->create();
        Pilot::factory(25)->create();
    }
}
