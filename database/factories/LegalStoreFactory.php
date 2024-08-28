<?php

declare(strict_types = 1);

namespace Database\Factories;

use App\Models\Store;
use Illuminate\Database\Eloquent\Factories\Factory;

class LegalStoreFactory extends Factory
{
    public function definition(): array
    {
        return [
            'store_id' => Store::factory(),
            'cnpj' => $this->faker->numerify('##############'),
            'name' => $this->faker->company(),
            'corporate_name' => $this->faker->company(),
            'state_registration' => $this->faker->numerify('########'),
            'municipal_registration' => $this->faker->numerify('########'),
        ];
    }
}
