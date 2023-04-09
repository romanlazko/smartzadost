<?php

namespace App\Models;

use App\Casts\UpeercaseCrypt;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PreviousStayInCz extends Model
{
    use HasFactory; use SoftDeletes;

    protected $guarded = [];

    protected $casts = [
        'date_of_arrival'   => 'datetime:Y-m-d',
        'purpose_of_stay'   => UpeercaseCrypt::class,
        'place_of_stay'     => UpeercaseCrypt::class,
        'from'              => 'datetime:Y-m-d',
        'till'              => 'datetime:Y-m-d',
    ];
}
