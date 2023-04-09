<?php

namespace App\Models;

use App\Casts\UpeercaseCrypt;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MotherPassport extends Model
{
    use HasFactory; use SoftDeletes;

    protected $guarded = [];

    protected $casts = [
        'number'            => UpeercaseCrypt::class,
        'country'           => UpeercaseCrypt::class,
        'nationality'       => UpeercaseCrypt::class,
        'country_of_birth'  => UpeercaseCrypt::class,
        'place_of_birth'    => UpeercaseCrypt::class,
        'authority'         => UpeercaseCrypt::class,
        'issued'            => 'datetime:Y-m-d',
        'expires'           => 'datetime:Y-m-d',
    ];

    protected $fillable = [
        'number', 
        'country', 
        'nationality',
        'country_of_birth',
        'place_of_birth',
        'issued',
        'expires',
        'authority',
    ];
}
