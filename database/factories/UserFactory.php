<?php

declare(strict_types = 1);

namespace Database\Factories;

use App\Enums\Role;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    public function definition(): array
    {
        return [
            'role'           => 1,
            'avatar'         => 'https://www.gravatar.com/avatar/' . md5(Str::lower(trim($this->faker->unique()->safeEmail()))) . '.jpg',
            'name'           => $this->faker->name(),
            'email'          => $this->faker->unique()->freeEmail(),
            'password'       => Hash::make('password'),
            'phone'          => $this->faker->numerify('###########'),
            'address'        => $this->faker->address(),
            'city'           => $this->faker->city(),
            'state'          => $this->faker->stateAbbr(),
            'zipcode'        => $this->faker->postcode(),
            'remember_token' => Str::random(10),
        ];
    }

    public function asAdmin(): self
    {
        return $this->state([
            'role' => Role::Admin,
        ]);
    }
}
