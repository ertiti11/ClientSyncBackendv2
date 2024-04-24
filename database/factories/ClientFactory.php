<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // $table->string('name');
        //     $table->string('lastNames');
        //     $table->string('email')->unique();
        //     $table->string('phone');
        //     $table->date('date');
        //     $table->string('address');
        //     $table->string('color');
        return [

            'name' => $this->faker->name(),
            'lastNames' => $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->phoneNumber(),
            'date' => $this->faker->date(),
            'address' => $this->faker->address(),
            'color' => $this->faker->colorName(),

            //
        ];
    }
}
