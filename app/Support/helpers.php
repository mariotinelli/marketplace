<?php

declare(strict_types = 1);

use App\Models\User;

function user(): User
{
    return auth()->user();
}
