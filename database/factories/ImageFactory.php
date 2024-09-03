<?php

declare(strict_types = 1);

namespace Database\Factories;

use App\Models\Sku;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    public function definition(): array
    {
        return [
            'sku_id' => Sku::factory(),
            'url'    => $this->faker->imageUrl(),
        ];
    }
}
