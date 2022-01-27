<?php

namespace App\Http\Controllers;

use App\Models\Staffs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \Illuminate\Foundation\Auth\AuthenticatesUsers;

class StaffController extends Controller
{
    public function index(){
        $users = Staffs::all();
    }

    public function profileDashboard(){
        // $user = Auth::guard('admin');

        $data = array();
        if('Session'::has('StaffID')){
            $data = Staffs::where('username', '=', 'Session'::get('StaffID'))->first();
        }

        return view('profileStaff', compact('data'));
    }

    public function indexLogin(){
        return view('login2');
    }

    public function storeLogin(Request $request){
        $request->validate([
            'username' => 'required|max:255',
            'password' => 'required|min:8'
        ]);

        // if (!auth('admin')->attempt( $request->only('username', 'password') )){
        //     return back()->with('error', 'Invalid username or password');
        // }else{
        //     return redirect()->route('profileStaff');
        // }

        $staff = Staffs::where('username', '=', $request->username)->first();

        if($staff){
            if('Hash'::check($request->password, $staff->password)){
                $request->session()->put('StaffID', $staff->username);
                return redirect()->route('profileStaff');
            }
            else{
                return back()->with('error', 'Invalid username or password');
            }
        }
        
    }

    public function storeLogout(){
        // auth()->logout();
        if('Session'::has('StaffID')){
            'Session'::forget('StaffID');
            return redirect()->route('login-staff');
        }
    }
}
