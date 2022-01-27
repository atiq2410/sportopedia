<?php

namespace App\Http\Controllers;

use OCILob;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function index(){
        return view('register');
    }

    public function store(Request $request){
        // $data = $request->validate([

        // ]);

        // dd($request);
        $data = $request->validate([
            'username' => 'required|unique:users|max:255',
            'phone'    => 'required|unique:users|min:9|max:11',
            'email'    => 'required|unique:users',
            'password' => 'required|confirmed|min:8',
            'points'   => 'required'
        ]);

        $data['password'] = Hash::make($data['password']);

        Users::create($data);

        return redirect()->route('login');
    }
}
