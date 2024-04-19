<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class Admincontroller extends Controller
{
    public function logout(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();



        // $notification = array(
        // 'message' => 'user Logout  successfully',
        //'alert-type' =>'success'
        //);

        return redirect('/login');
    }

    public function Index()
    {
        return view('index');
    }
    public function profile()
    {
        $id = Auth::user()->id;
        $adminData = User::find($id);

        return view('admin.admin_profile', compact('adminData'));
    }
    public function Edit()
    {
        $id = Auth::user()->id;
        $editData = User::find($id);
        return view('admin.edit_admin_profile', compact('editData'));
    }
    public function StoreProfile(Request $request)
    {


        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $hashedPassword = Auth::user()->password;
        if (Hash::check($request->oldpassword, $hashedPassword)) {
            $data = user::find(Auth::id());
            $data->password = bcrypt($request->newpassword);
            $data->save();
            session()->flash('message', 'password updated successfully ');
            return redirect()->back();
        } else {
            session()->flash('message', 'old password is not match');
            return redirect()->back();
        }
    }
}
