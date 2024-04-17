<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\Work;
use Illuminate\Database\Eloquent\Factories\Factory;

class WorkFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Work::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // Define los valores predeterminados para tus columnas aquí.
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(3),
            'client_id' => Client::all()->random()-> id,
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->date(),
            'price' => $this->faker->randomFloat(2, 100, 1000),
            'status' => $this->faker->randomElement( ['pending', 'in_progress', 'finished']),
        ];
    }
}