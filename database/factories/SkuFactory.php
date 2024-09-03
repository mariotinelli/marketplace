<?php

declare(strict_types = 1);

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class SkuFactory extends Factory
{
    public function definition(): array
    {
        return [
            'product_id' => Product::factory(),
            'name'       => $this->faker->sentence(2),
            'price'      => $this->faker->randomNumber(5),
            'quantity'   => $this->faker->numberBetween(1, 100),
        ];
    }
}
