<?php

declare(strict_types = 1);

namespace Database\Factories;

use App\Enums\StoreType;
use Illuminate\Database\Eloquent\Factories\Factory;

class StoreFactory extends Factory
{
    public function definition(): array
    {
        return [
            'type'    => $this->faker->randomElement(StoreType::cases()),
            'name'    => $this->faker->company(),
            'phone'   => $this->faker->numerify('###########'),
            'address' => $this->faker->streetAddress(),
            'city'    => $this->faker->city(),
            'state'   => $this->faker->stateAbbr(),
            'zipcode' => $this->faker->postcode(),
        ];
    }
}
