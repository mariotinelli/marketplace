<?php

declare(strict_types = 1);

namespace App\Models;

use App\Casts\ConvertFloatToInt;
use App\Enums\OrderStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'buyer_id',
        'status',
        'total',
    ];

    protected function casts(): array
    {
        return [
            'status' => OrderStatus::class,
            'total'  => ConvertFloatToInt::class,
        ];
    }
}
