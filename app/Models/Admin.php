<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasFactory;
    protected $casts = [
        'experience' => 'array',
    ];
    protected $guard = 'admin';

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
