<?php

declare(strict_types = 1);

namespace App\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Database\Eloquent\Model;

class ConvertCnpj implements CastsAttributes
{
    public function get(Model $model, string $key, mixed $value, array $attributes): string
    {
        return str($value)->insert('.', 2)->insert('.', 6)->insert('/', 10)->insert('-', 15)->toString();
    }

    public function set(Model $model, string $key, mixed $value, array $attributes): string
    {
        return str($value)->replace(['.', '-', '/'], '')->toString();
    }
}
