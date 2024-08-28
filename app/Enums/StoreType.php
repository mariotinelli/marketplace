<?php

declare(strict_types = 1);

namespace App\Enums;

enum StoreType: int
{
    case Individual = 1;
    case Legal      = 2;

    public function label(): string
    {
        return match ($this) {
            self::Individual => 'Individual',
            self::Legal      => 'Legal'
        };
    }
}
