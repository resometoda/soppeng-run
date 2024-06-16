<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Registration;
use Illuminate\Database\Eloquent\Factories\Factory;

class RegistrationFactory extends Factory
{
    protected $model = Registration::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'age' => $this->faker->randomElement(['18-25','26-30','36-40','41+']),
            'gender' => $this->faker->randomElement(['male', 'female']),
            'message' => $this->faker->realText(),
        ];
    }
}
