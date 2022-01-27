<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookings extends Model
{
    //use HasFactory;
    protected $tableBookings = 'bookings';
    protected $fillable =[
        'username',
        'email',
        'phone',
        'bookingDate',
        'bookingTime',
        'endTime',
        'courtNo',
        'price',
    ];
}
