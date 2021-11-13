<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $airports = [ 'BRU', 'OST', 'ANR', 'BCN', 'LPA', 'TFS' ];
        $short = $this->faker->paragraph( 1 );
        $slug = str_replace(' ', '-', $short);

        return [
            'slug' => $slug,
            'short' => $short,
            'body' => $this->faker->paragraph( 25 ),
            'start_date' => $this->faker->dateTimeThisMonth( $max = 'now' ),
            'end_date' => $this->faker->dateTimeThisMonth( $max = 'now' ),
            'airport' => $this->faker->randomElement( $airports ),
        ];
    }
}
