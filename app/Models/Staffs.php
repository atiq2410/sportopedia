<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staffs extends Model
{
    // use HasFactory;

    protected $tableStaffs = 'staffs';

    protected $fillable = [
        'username',
        'phone',
        'password',
        'email'
    ];
}
