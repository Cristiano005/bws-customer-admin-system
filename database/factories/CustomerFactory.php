<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'cpf' => $this->faker->numerify('##########'), 
            'birth_date' => $this->faker->date(max: '2006-01-01'),
            'income' => $this->faker->randomFloat(2, 0, 10000),
        ];
    }
}
