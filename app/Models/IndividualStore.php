<?php

declare(strict_types = 1);

namespace App\Models;

use App\Casts\ConvertCpf;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class IndividualStore extends Model
{
    use HasFactory;

    protected $fillable = [
        'store_id',
        'cpf',
        'birthdate',
        'address',
        'city',
        'state',
        'zipcode'
    ];

    protected function casts(): array
    {
        return [
            'cpf'       => ConvertCpf::class,
            'birthdate' => 'date',
        ];
    }

    public function store(): BelongsTo
    {
        return $this->belongsTo(Store::class);
    }
}
