<?php

namespace Database\Factories;

use App\Models\Pet;
use App\Models\Attendance;
use Illuminate\Database\Eloquent\Factories\Factory;

class ModelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Attendance::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_pet'            => Pet::factory(),
            'date_attendance'   => $this->faker->name,
            'description'       => $this->faker->name
        ];
    }
}
