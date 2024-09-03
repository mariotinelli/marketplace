<?php

declare(strict_types = 1);

namespace Database\Factories;

use App\Models\Store;
use Illuminate\Database\Eloquent\Factories\Factory;

class IndividualStoreFactory extends Factory
{
    public function definition(): array
    {
        return [
            'store_id'  => Store::factory(),
            'cpf'       => $this->faker->numerify('###########'),
            'birthdate' => $this->faker->date(),
            'address'   => $this->faker->streetAddress(),
            'city'      => $this->faker->city(),
            'state'     => $this->faker->stateAbbr(),
            'zipcode'   => $this->faker->postcode(),
        ];
    }
}
