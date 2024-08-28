<?php

declare(strict_types = 1);

namespace App\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Database\Eloquent\Model;

class ConvertCnpj implements CastsAttributes
{
    public function get(Model $model, string $key, mixed $value, array $attributes): string
    {
        return str($value)->substrReplace('.', 2, 0)
            ->substrReplace('.', 6, 0)
            ->substrReplace('/', 10, 0)
            ->substrReplace('-', 15, 0)
            ->toString();
    }

    public function set(Model $model, string $key, mixed $value, array $attributes): string
    {
        return str($value)->replace(['.', '-', '/'], '')->toString();
    }
}
