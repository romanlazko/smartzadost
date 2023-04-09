<?php

namespace App\Models;

use App\Casts\UpeercaseCrypt;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Education extends Model
{
    use HasFactory; use SoftDeletes;

    protected $guarded = [];

    protected $casts = [
        'education'     => UpeercaseCrypt::class,
        'school'        => UpeercaseCrypt::class,
        'street'        => UpeercaseCrypt::class, 
        'number'        => UpeercaseCrypt::class, 
        'town'          => UpeercaseCrypt::class,
        'country'       => UpeercaseCrypt::class,
        'post_code'     => UpeercaseCrypt::class,
        'contact'       => UpeercaseCrypt::class,
        'from'          => 'datetime:Y-m-d',
        'till'          => 'datetime:Y-m-d',
    ];

    protected $fillable = [
        'education',
        'school',
        'street', 
        'number', 
        'town',
        'country',
        'post_code',
        'contact',
        'from',
        'till',
    ];
}