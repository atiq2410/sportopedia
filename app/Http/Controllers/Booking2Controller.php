<?php

namespace App\Http\Controllers;

use App\Models\Bookings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Booking2Controller extends Controller
{
    public function index(){
        return view('viewBookings');
    }

    public function viewBooking(){
        $bookings = DB::table('bookings')->get();
        return view('viewBookings', ['bookings' => $bookings]);
    }
}
