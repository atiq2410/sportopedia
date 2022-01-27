<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Models\Data;

class DataController extends Controller
{
    public function index(){
        $bookings = Data::all();
        return view ('mybookings', ['data' => $bookings]);
    }
    public function store(Request $request){
        $data = new Data;
        $data->id = $request->id;
        $data->bookingDate = $request->bookingDate;
        $data->bookingTime = $request->bookingTime;
        $data->endTime = $request->endTime;
        $data->courtNo = $request->courtNo;
        $data->save();
        return back();
    }
    public function generate ($id)
    {
        $data = Data::findOrFail($id);
        $fulldata = "$data->id  $data->bookingDate  $data->bookingTime  $data->endTime   $data->courtNo";
        $qrcode = QrCode::size(80)->generate($fulldata);
        return view('qrcode',compact('qrcode'));
    }
}