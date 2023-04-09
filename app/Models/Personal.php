<?php

namespace App\Models;

use App\Casts\UpeercaseCrypt;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Personal extends Model
{
    use HasFactory; use SoftDeletes;

    protected $guarded = [];

    protected $casts = [
        'surname'               => UpeercaseCrypt::class,
        'other_names'           => UpeercaseCrypt::class,
        'all_previous_surnames' => UpeercaseCrypt::class,
        'first_name'            => UpeercaseCrypt::class,
        'birth'                 => 'datetime:Y-m-d',
        'sex'                   => UpeercaseCrypt::class,
    ];
}
