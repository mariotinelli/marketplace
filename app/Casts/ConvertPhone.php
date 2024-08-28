<?php

declare(strict_types = 1);

namespace App\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Database\Eloquent\Model;

class ConvertPhone implements CastsAttributes
{
    public function get(Model $model, string $key, mixed $value, array $attributes): string
    {
        return str($value)->insert(0, '(')->insert(3, ')')->insert(4, ' ')->insert(9, '-')->toString();
    }

    public function set(Model $model, string $key, mixed $value, array $attributes): string
    {
        return str($value)->replace(['(', ')', ' ', '-'], '')->toString();
    }
}
