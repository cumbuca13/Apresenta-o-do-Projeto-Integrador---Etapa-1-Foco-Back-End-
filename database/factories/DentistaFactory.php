<?php

namespace Database\Factories;

use App\Models\Dentista;
use Illuminate\Database\Eloquent\Factories\Factory;

class DentistaFactory extends Factory
{
    protected $model = Dentista::class;

    public function definition(): array
    {
        return [
            'nome' => 'Dr. ' . $this->faker->lastName(),
            'especialidade' => $this->faker->randomElement(['Ortodontia', 'Endodontia', 'Periodontia']),
            'telefone' => $this->faker->phoneNumber(),
            'email' => $this->faker->unique()->safeEmail(),
        ];
    }
}
