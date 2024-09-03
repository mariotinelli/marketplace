<?php

declare(strict_types = 1);

namespace App\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Database\Eloquent\Model;

class ConvertFloatToInt implements CastsAttributes
{
    public function get(Model $model, string $key, mixed $value, array $attributes): mixed
    {
        return $this->converterStringToFloat($value) / 100;
    }

    public function set(Model $model, string $key, mixed $value, array $attributes): mixed
    {
        return $this->converterStringToFloat($value) * 100;
    }

    protected function converterStringToFloat(mixed $value): float
    {
        return (float) $value;
    }
}
