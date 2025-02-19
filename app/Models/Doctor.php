<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Doctor extends Authenticatable
{
    use HasFactory;
    protected $casts = [
        'experience' => 'array',
    ];

    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'address',
        'image',
        'age',
        'gender',
        'experience',
        'status',
        'about',
        'experiences',
        'website',
        'twitter',
        'facebook',
        'linkedin',
        'username',
        'date_of_birth',
        

    ];

    protected $guard = 'doctor';

    public function availableTimes()
    {
        return $this->hasMany(AvailableTime::class);
    }

    public function specializations()
    {
        return $this->belongsToMany(Specialization::class);
    }
}
