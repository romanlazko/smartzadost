<?php

namespace App\Models;

use App\Casts\UpeercaseCrypt;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EmploymentAfterArrival extends Model
{
    use HasFactory; use SoftDeletes;

    protected $guarded = [];
    
    protected $casts = [
        'employer'  => UpeercaseCrypt::class,
        'position'  => UpeercaseCrypt::class,
        'street'    => UpeercaseCrypt::class,
        'number'    => UpeercaseCrypt::class,
        'town'      => UpeercaseCrypt::class,
        'country'   => UpeercaseCrypt::class,
    ];
}
