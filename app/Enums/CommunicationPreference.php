<?php

declare(strict_types = 1);

namespace App\Enums;

enum CommunicationPreference: int
{
    case Email    = 1;
    case SMS      = 2;
    case WhatsApp = 3;

    public function label(): string
    {
        return match ($this) {
            self::Email    => 'Email',
            self::SMS      => 'SMS',
            self::WhatsApp => 'WhatsApp'
        };
    }
}
