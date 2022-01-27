<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    // use HasFactory;

    protected $tableUser = 'users';

    protected $fillable =[
        'id',
        'username',
        'email',
        'password',
        'phone',
        'points'
    ];
}
