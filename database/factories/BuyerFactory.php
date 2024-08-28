<?php

declare(strict_types = 1);

namespace Database\Factories;

use App\Enums\CommunicationPreference;
use App\Enums\Gender;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class BuyerFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id'                  => User::factory(),
            'gender'                   => $this->faker->randomElement(Gender::cases()),
            'communication_preference' => $this->faker->randomElement(CommunicationPreference::cases()),
            'cpf'                      => $this->faker->numerify('###########'),
            'birthdate'                => $this->faker->date(),
        ];
    }

    public function withGender(Gender $gender): static
    {
        return $this->state(fn (array $attributes) => ['gender' => $gender]);
    }

    public function withCommunicationPreference(CommunicationPreference $communicationPreference): static
    {
        return $this->state(fn (array $attributes) => ['communication_preference' => $communicationPreference]);
    }
}
