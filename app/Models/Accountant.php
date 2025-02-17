<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Accountant extends Authenticatable
{
    use HasFactory;

    protected $guard = 'accountant';
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
}
