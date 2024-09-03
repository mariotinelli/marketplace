<?php

declare(strict_types = 1);

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Store;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    public function definition(): array
    {
        return [
            'store_id'    => Store::factory(),
            'brand_id'    => Brand::factory(),
            'category_id' => Category::factory(),
            'name'        => $name = $this->faker->sentence(2),
            'slug'        => str($name)->slug()->toString(),
            'description' => $this->faker->paragraph(),
        ];
    }
}
