<?php

declare(strict_types = 1);

namespace App\Enums;

enum OrderStatus: int
{
    case Pending    = 1;
    case Processing = 2;
    case Shipped    = 3;
    case Delivered  = 4;
    case Canceled   = 5;
    case Returned   = 6;
    case Refunded   = 7;
    case Failed     = 8;

    public function label(): string
    {
        return match ($this) {
            self::Pending    => 'Pendente',
            self::Processing => 'Em processamento',
            self::Shipped    => 'Enviado',
            self::Delivered  => 'Entregue',
            self::Canceled   => 'Cancelado',
            self::Returned   => 'Devolvido',
            self::Refunded   => 'Reembolsado',
            self::Failed     => 'Falhou',
        };
    }
}
