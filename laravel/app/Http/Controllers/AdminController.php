<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login() {
        return view('login');
    }

    public function login_submit(Request $request) {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        $adminCheck = Admin::where(['username' => $request->username, 'password' => $request->password])->count();
        if( $adminCheck > 0 ) {
            $request->session()->put('AdminLogin', true);
            return redirect()->route('admin.dashboard');
        }else{
            return redirect()->route('admin.login')->with('msg', 'Invalid username/password');
        }
    }
    public function dashboard() {
        return view('index');
    }
    public function logout(Request $request) {
        $request->session()->forget('AdminLogin');
        return redirect()->route('admin.login');
    }
}
