<?php

declare(strict_types = 1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'name',
        'phone',
        'address',
        'city',
        'state',
        'zipcode',
    ];

    protected function casts(): array
    {
        return [
            'type'  => StoreType::class,
            'phone' => ConvertPhone::class,
        ];
    }
}
