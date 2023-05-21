<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
    function transaction(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Transaction::class);
    }
}
