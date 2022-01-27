<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \Illuminate\Foundation\Auth\AuthenticatesUsers;

class UserController extends Controller
{
    public function index(){
        $users = Users::all();
    }

    public function profileDashboard(){
        $user = Auth::user();

        return view('profileUser');
    }

    public function indexLogin(){
        return view('login');
    }

    public function storeLogin(Request $request){
        $request->validate([
            'username' => 'required|max:255',
            'password' => 'required|min:8'
        ]);

        if (!auth()->attempt( $request->only('username', 'password') )){
            return back()->with('error', 'Invalid username or password');
        }else{
            return redirect()->route('profileUser');
        }
        
    }

    public function storeLogout(){
        auth()->logout();
        return redirect()->route('login');
    }
}
