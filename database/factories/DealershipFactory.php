<?php

namespace Database\Factories;

use App\Models\Car;
use App\Models\Dealership;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dealership>
 */
class DealershipFactory extends Factory
{

    protected $model = Dealership::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'address' => $this->faker->address(),
        ];
    }
}
