<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Staffs;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class EditProfile2Controller extends Controller
{
    public function index()
    {
        // $staffs = staffs::all();
        // return view('editProfileStaff', compact('staffs'));
        $staffs = DB::select('select * from staffs');
        return view('editProfileStaff', ['staffs' => $staffs]);
    }

    public function edit($id)
    {
        // $staffs = staffs::find($username);
        // return view('editProfileStaff', compact('staffs'));
        // $staffs = Staffs::find($id);
        // return view('editProfileStaff', ['staffs' => $staffs]);

        $data = array();
    
        $data = Staffs::where('id', '=', $id)->first();
        
        return view('editProfileStaff', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'username' => 'required|unique:users|max:255',
            'phone'    => 'required|unique:users|min:9|max:11',
            'password' => 'required|confirmed|min:8',
        ]);

        $username = $request->input('username');
        $password = Hash::make($request->input('password'));
        $phone = $request->input('phone');
        $email = $request->input('email');

        // $editProfile->username = $username;
        // $editProfile->phone = $phone;
        // $editProfile->password = $password;

        // if($editProfile->save()){
        //     return back()->with('status', 'User profile updated successfully');
        // }
        // else{
        //     return back()->with('error', 'User is not updated successfully');
        // }

        DB::update(
            'update staffs set username =?, password = ?, phone = ?, email = ? where id = ?',
            [$username, $password, $phone, $email, $id]
        );

        return redirect('profileStaff')->with('success', 'Staff profile updated successfully');
    }
}
