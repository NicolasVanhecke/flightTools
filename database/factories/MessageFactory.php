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
        
        $short = $this->faker->sentence();
        $shortWithoutSpace = str_replace(' ', '-', $short);
        $shortWithoutSpaceAndDot = str_replace('.', '', $shortWithoutSpace);
        
        $statuses = [ 'published', 'draft', 'expired' ];

        return [
            'slug' => strtolower( $shortWithoutSpaceAndDot ),
            'short' => $short,
            'body' => $this->faker->paragraph( 25 ),
            'start_date' => $this->faker->dateTimeThisMonth( $max = 'now' ),
            'end_date' => $this->faker->dateTimeThisMonth( $max = 'now' ),
            'airport' => $this->faker->randomElement( $airports ),
            'status' => $this->faker->randomElement( $statuses ),
        ];
    }
}
