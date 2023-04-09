<?php

namespace App\Models;

use App\Casts\UpeercaseCrypt;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FatherOccupation extends Model
{
    use HasFactory; use SoftDeletes;

    protected $guarded = [];

    protected $casts = [
        'occupation'    => UpeercaseCrypt::class,
        'employer'      => UpeercaseCrypt::class,
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
        'occupation',
        'employer',
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
