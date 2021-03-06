<?php

namespace Database\Factories;

use App\Models\Vaccine;
use Illuminate\Database\Eloquent\Factories\Factory;

class VaccineFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Vaccine::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'doses' => $this->faker->numberBetween(1,4),
            'minimum_age' => $this->faker->numberBetween(10, 20),
            'maximum_age' => $this->faker->numberBetween(40,100),
        ];
    }
}
