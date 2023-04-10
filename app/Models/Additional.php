<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Additional extends Model
{
    use HasFactory; use SoftDeletes;

    protected $guarded = [];

    protected $casts = [
        'email'         => UpeercaseCrypt::class,
        'phone'         => UpeercaseCrypt::class,
        'information'   => UpeercaseCrypt::class,
    ];
}
