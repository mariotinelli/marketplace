<?php

declare(strict_types = 1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
