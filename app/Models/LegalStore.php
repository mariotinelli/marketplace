<?php

declare(strict_types = 1);

namespace App\Models;

use App\Casts\ConvertCnpj;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LegalStore extends Model
{
    use HasFactory;

    protected $fillable = [
        'store_id',
        'cnpj',
        'name',
        'corporate_name',
        'state_registration',
        'municipal_registration',
    ];

    protected function casts(): array
    {
        return [
            'cnpj' => ConvertCnpj::class,
        ];
    }

    public function store(): BelongsTo
    {
        return $this->belongsTo(Store::class);
    }
}
