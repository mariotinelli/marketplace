<?php

declare(strict_types = 1);

namespace App\Models;

use App\Casts\ConvertCpf;
use App\Enums\CommunicationPreference;
use App\Enums\Gender;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Buyer extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'gender',
        'communication_preference',
        'cpf',
        'birthdate',
    ];

    protected function casts(): array
    {
        return [
            'gender'                   => Gender::class,
            'communication_preference' => CommunicationPreference::class,
            'cpf'                      => ConvertCpf::class,
            'birthdate'                => 'date',
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }
}
