<?php

namespace App\Http\Controllers;

use OCILob;
use App\Models\Staffs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Register2Controller extends Controller
{
    //
    public function index(){
        return view('register2');
    }

    public function store(Request $request){
        // $data = $request->validate([

        // ]);

        // dd($request);
        $data = $request->validate([
            'username' => 'required|unique:users|max:255',
            'phone'    => 'required|unique:users|min:9|max:11',
            'password' => 'required|confirmed|min:8',
            'email'    => 'required|unique:users'
        ]);

        $data['password'] = Hash::make($data['password']);

        Staffs::create($data);

        return redirect()->route('login2');
    }
}
