<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index() {
        return view('admin.index');
    }

    public function reset_password() {
        return view('auth.reset-password');
    }

    public function update_password(Request $request) {
        $user = Auth::user();
        if(Hash::check($request->old_password,$user->password)) {
           $updateUser=User::find($user->id);
           $updateUser->password = Hash::make($request->password);
           $updateUser->save();
           $request->session()->flash('success', 'Password Updated Successfully');
           return redirect()->route('login');
        } else {
            $request->session()->flash('error', 'Wrong Password');
            return back();
        }
    }
}
