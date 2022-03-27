<?php

namespace Database\Factories;

use App\Models\Dealership;
use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{

    protected $model = Car::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'dealership_id' => Dealership::factory(),
            'brand' => $this->faker->word(),
            'model' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'slug' => $this->faker->slug()
        ];
    }
}
