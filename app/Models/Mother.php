<?php

namespace App\Models;

use App\Casts\UpeercaseCrypt;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mother extends Model
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

    protected $fillable = [
        'surname', 
        'other_names', 
        'all_previous_surnames',
        'first_name',
        'birth',
        'sex',
    ];

    public function address()
    {
        return $this->hasOne(MotherAddress::class, 'mother_id', 'id');
    }

    public function passport()
    {
        return $this->hasOne(MotherPassport::class, 'mother_id', 'id');
    }

    public function occupation()
    {
        return $this->hasOne(MotherOccupation::class, 'mother_id', 'id');
    }
}
