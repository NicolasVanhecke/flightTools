<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FlightFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $airports = [ 'BRU', 'OST', 'ANR', 'BCN', 'LPA', 'TFS' ];
        $commercialPrefix = [ 'JAF', 'TFL', 'TOM', 'BLX', 'TUI' ];

        return [
            'flight_number' => $this->faker->numberBetween( 10000000, 99999999 ),
            'commercial_number' => $this->faker->randomElement( $commercialPrefix ) . $this->faker->numberBetween( 1000, 9999 ),
            'departure' => $this->faker->randomElement( $airports ),
            'arrival' => $this->faker->randomElement( $airports ),
            'std' => $this->faker->dateTimeThisMonth( $max = 'now' ),
            'sta' => $this->faker->dateTimeThisMonth( $max = 'now' ),
        ];
    }
}
