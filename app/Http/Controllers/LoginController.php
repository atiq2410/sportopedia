<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    // public function index(){
    //     return view('login');
    // }

    // public function store(Request $request){
    //     $request->validate([
    //         'username' => 'required',
    //         'password' => 'required'
    //     ]);
    //     $data = Users::where('username', '=', $request->username)->first();
    //     if(!$data){
    //         return back()->with('error', 'Invalid username or password');
    //     }

    //     return redirect('UserController.showuser');
    // }
}
