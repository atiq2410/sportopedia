<?php

namespace App\Http\Controllers;

use App\Models\Users;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class EditProfileController extends Controller
{
    public function index()
    {
        // $users = users::all();
        // return view('editProfileUser', compact('users'));
        $users = DB::select('select * from users');
        return view('editProfileUser', ['users' => $users]);
    }

    public function edit($id)
    {
        // $users = users::find($id);
        // return view('editProfileUser', compact('users'));
        $users = DB::select('select * from users where id = ?', [$id]);
        return view('editProfileUser', ['users' => $users]);
    }
    public function update(Request $request, $id)
    {
        $editProfile = Users::find(Auth::user()->id);
        $request->validate([
            'username' => 'required|unique:users|max:255',
            'phone'    => 'required|unique:users|min:9|max:11',
            'password' => 'required|confirmed|min:8',
        ]);

        $username = $request->input('username');
        $phone = $request->input('phone');
        $password = Hash::make($request->input('password'));
        
        // DB::table('users')->where('id', 'Auth::user()->id')->update([
        //     'username'=>$username,
        //     'phone' =>$phone,
        //     'password' =>$password,
        // ]);

        // DB::table('users')->save();

        $editProfile->username = $username;
        $editProfile->phone = $phone;
        $editProfile->password = $password;

        if($editProfile->save()){
            return back()->with('status', 'User profile updated successfully');
        }
        else{
            return back()->with('error', 'User is not updated successfully');
        }
        // DB::update('update users set username = '.$username.', email = '.$email.', password = '.$password.', phone = '.$phone.' where id = '.$id.'');
    }
}
