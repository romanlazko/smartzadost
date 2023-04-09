<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * Class User
 *
 * @method address
 */

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function personal()
    {
        return $this->hasOne(Personal::class, 'user_id', 'id');
    }

    public function passport()
    {
        return $this->hasOne(Passport::class, 'user_id', 'id');
    }

    public function education()
    {
        return $this->hasOne(Education::class, 'user_id', 'id');
    }

    public function occupation()
    {
        return $this->hasOne(Occupation::class, 'user_id', 'id');
    }

    public function employment_before_arrival()
    {
        return $this->hasOne(EmploymentBeforeArrival::class, 'user_id', 'id');
    }

    public function employment_after_arrival()
    {
        return $this->hasOne(EmploymentAfterArrival::class, 'user_id', 'id');
    }

    public function address($address)
    {
        return $this->hasOne($address, 'user_id', 'id');
    }

    public function previous_stay_in_cz()
    {
        return $this->hasOne(PreviousStayInCz::class, 'user_id', 'id');
    }

    public function spouse()
    {
        return $this->hasOne(Spouse::class, 'user_id', 'id');
    }

    public function children()
    {
        return $this->hasMany(Child::class, 'user_id', 'id');
    }

    public function father()
    {
        return $this->hasOne(Father::class, 'user_id', 'id');
    }

    public function mother()
    {
        return $this->hasOne(Mother::class, 'user_id', 'id');
    }

    public function siblings()
    {
        return $this->hasMany(Sibling::class, 'user_id', 'id');
    }

    public function additional()
    {
        return $this->hasOne(Additional::class, 'user_id', 'id');
    }

    public function blank($blank)
    {
        return $this->hasOne($blank, 'user_id', 'id');
    }
}
