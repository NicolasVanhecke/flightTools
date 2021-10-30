<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PilotFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $airports = [ 'BRU', 'OST', 'ANR', 'BCN', 'LPA', 'TFS' ];
        $aircrafts = [ 'B737', 'B737-MAX', 'B737-800', 'B777' ];

        return [
            'code' => $this->faker->regexify('[A-Z]{3}'),
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'rank' => $this->faker->randomElement( [ 'FO', 'CP' ] ),
            'station' => $this->faker->randomElement( $airports ),
            'qualified_aircrafts' => $this->faker->randomElement( $aircrafts ),
            'email' => $this->faker->unique()->safeEmail(),
        ];
    }
}
