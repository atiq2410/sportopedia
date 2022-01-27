<?php

namespace App\Http\Controllers;

use App\Models\Bookings;
use App\Models\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use SimpleSoftwareIO\QrCode\Facades\QrCode;


class BookingController extends Controller
{

    public function index()
    {
        return view('courts');
    }

    public function myBooking()
    {
        $bookings = DB::table('bookings')->where('username', Auth::user()->username)->get();
        return view('mybookings', ['bookings' => $bookings]);
    }

    public function badmintonBooking()
    {
        $badminton_court = DB::table('courts')->where('courtType', 'BADMINTON')->get();
        return view('badminton', ['badminton_court' => $badminton_court]);
    }

    public function futsalBooking()
    {
        $futsal_court = DB::table('courts')->where('courtType', 'FUTSAL')->get();
        return view('futsal', ['futsal_court' => $futsal_court]);
    }

    public function basketballBooking()
    {
        $basketball_court = DB::table('courts')->where('courtType', 'BASKETBALL')->get();
        return view('basketball', ['basketball_court' => $basketball_court]);
    }

    public function storeBadmintonBooking(Request $request)
    {
        $data = $request->validate([
            'username' => 'required',
            'phone'    => 'required|max:11',
            'email'    => 'required|max:255',
            'date'     => 'required|date',
            'time'     => 'required',
            'endTime'  => 'required',
            'price'    => 'required',
            'courtNo'  => 'required|min:3',

        ]);

        $startTime = Carbon::parse($data['time'])->format('H');
        $endTime = Carbon::parse($data['endTime'])->format('H');

        $start = $startTime;
        $end = $endTime;
        $hours = $end - $start;
        $totalPrice = $hours * 10;


        Bookings::create([
            'username' => $data['username'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'bookingDate' => $data['date'],
            'bookingTime' => $data['time'],
            'endTime' => $data['endTime'],
            'price' => $totalPrice,
            'courtNo' => $data['courtNo'],


        ]);
        return redirect()->route('myBookings');
    }

    public function storeFutsalBooking(Request $request)
    {
        $data = $request->validate([
            'username' => 'required',
            'phone'    => 'required|max:11',
            'email'    => 'required|max:255',
            'date'     => 'required|date',
            'time'     => 'required',
            'endTime'  => 'required',
            'price'    => 'required',
            'courtNo'  => 'required|min:3',

        ]);

        $startTime = Carbon::parse($data['time'])->format('H');
        $endTime = Carbon::parse($data['endTime'])->format('H');

        $start = $startTime;
        $end = $endTime;

        $hours = $end - $start;
        $totalPrice = $hours * 10;



        Bookings::create([
            'username' => $data['username'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'bookingDate' => $data['date'],
            'bookingTime' => $data['time'],
            'endTime' => $data['endTime'],
            'price' => $totalPrice,
            'courtNo' => $data['courtNo'],


        ]);
        return redirect()->route('myBookings');
    }

    public function storeBasketballBooking(Request $request)
    {
        $data = $request->validate([
            'username' => 'required',
            'phone'    => 'required|max:11',
            'email'    => 'required|max:255',
            'date'     => 'required|date',
            'time'     => 'required',
            'endTime'  => 'required',
            'price'    => 'required',
            'courtNo'  => 'required|min:3',

        ]);

        $startTime = Carbon::parse($data['time'])->format('H');
        $endTime = Carbon::parse($data['endTime'])->format('H');

        $start = $startTime;
        $end = $endTime;

        $hours = $end - $start;
        $totalPrice = $hours * 10;

        Bookings::create([
            'username' => $data['username'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'bookingDate' => $data['date'],
            'bookingTime' => $data['time'],
            'endTime' => $data['endTime'],
            'price' => $totalPrice,
            'courtNo' => $data['courtNo'],


        ]);
        return redirect()->route('myBookings');
    }

    public function totalPrice($startTime, $endTime)
    {
        $start = Carbon::createFromFormat('H:i:s', $startTime);
        $end = Carbon::createFromFormat('H:i:s', $endTime);

        $hours = $end->diffInHours($start);
        $totalPrice = $hours * 10;

        return view('badminton', ['totalPrice' => $totalPrice]);
    }

    public function delete_function($id)
    {
        DB::delete('delete from bookings where id = ?', [$id]);

        return redirect('mybookings')->with('status', 'Booking details deleted successfully');
    }

    public function delete($id)
    {
        DB::delete('delete from bookings where id = ?', [$id]);

        return redirect('viewBookings')->with('status', 'Booking details deleted successfully');
    }

    public function update(Request $request, $id)
    {
        $bookings = Bookings::find($id);
        $bookings->username = $request->input('username');
        $bookings->phone = $request->input('phone');
        $bookings->email = $request->input('email');
        $bookings->bookingDate = $request->input('bookingDate');
        $bookings->bookingTime = $request->input('bookingTime');
        $bookings->endTime = $request->input('endTime');
        $bookings->price = $request->input('price');
        $bookings->courtNo = $request->input('courtNo');
        $bookings->save();

        return redirect('mybookings')->with('status', 'Booking details updated successfully');
    }

    public function edit_function($id)
    {
        $bookings = DB::select('select * from bookings where id = ?', [$id]);
        return view('editBooking', ['bookings' => $bookings]);
    }

    public function store(Request $request)
    {
        $data = new Bookings;
        $data->id = $request->id;
        $data->bookingDate = $request->bookingDate;
        $data->bookingTime = $request->bookingTime;
        $data->endTime = $request->endTime;
        $data->courtNo = $request->courtNo;
        $data->save();
        return back();
    }
    public function generate($id)
    {
        $data = Bookings::findOrFail($id);
        $fulldata = "$data->id  $data->bookingDate  $data->bookingTime  $data->endTime   $data->courtNo";
        $qrcode = QrCode::size(300)->generate($fulldata);
        return view('qrcode', ['qrcode' => $qrcode]);
    }
}
