<?php

declare(strict_types = 1);

namespace App\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Database\Eloquent\Model;

class ConvertPhone implements CastsAttributes
{
    public function get(Model $model, string $key, mixed $value, array $attributes): string
    {
        return str($value)->substrReplace('(', 0, 0)
            ->substrReplace(')', 3, 0)
            ->substrReplace(' ', 4, 0)
            ->substrReplace('-', 9, 0)
            ->toString();
    }

    public function set(Model $model, string $key, mixed $value, array $attributes): string
    {
        return str($value)->replace(['(', ')', ' ', '-'], '')->toString();
    }
}
