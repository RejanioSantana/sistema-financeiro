<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ReceitasDespesas>
 */
class ReceitasDespesasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $description = $this->faker->sentence(3);
        return [
            'description' => $description,
            'user_id' => User::pluck('id')->random(),
            'type' => $this->faker->randomElement(['RF','RV','DF','DV']),
            'value' => $this->faker->randomFloat(nbMaxDecimals:2,max:1000),
            'date' => $this->faker->date,
        ];
    }
}
