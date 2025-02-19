<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Accountant extends Authenticatable
{
    use HasFactory;

    protected $guard = 'accountant';
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
        'date_of_birth',
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
        




    ];

}
