<?php

declare(strict_types = 1);

namespace App\Enums;

enum Role: int
{
    case Admin = 1;
    case Store = 2;
    case Buyer = 3;

    public function label(): string
    {
        return match ($this) {
            self::Admin => 'Admin',
            self::Store => 'Store',
            self::Buyer => 'Buyer'
        };
    }
}
