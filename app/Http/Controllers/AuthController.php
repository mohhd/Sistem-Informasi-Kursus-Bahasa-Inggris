<?php

namespace App\Http\Controllers;

use Auth;
use Hash;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('login2');
    }

    public function loginAdmin()
    {
        return view('loginAdmin');
    }

    public function loginGuru()
    {
        return view('loginGuru');
    }

    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($request->only('email', 'password'))){
            return redirect('dashboard');
        }else {
            return back()->with('error', 'email atau password anda salah!');
        }

        return redirect('/login2');
    }

    public function postLoginAdmin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($request->only('email', 'password'))){
            return redirect('dashboard');
        }else {
            return back()->with('error', 'email atau password anda salah!');
        }

        return redirect('/login2');
    }

    public function postLoginGuru(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($request->only('email', 'password'))){
            return redirect('dashboard');
        }else {
            return back()->with('error', 'email atau password anda salah!');
        }

        return redirect('/login2');
    }

    public function keluar()
    {
        Auth::logout();
        return redirect('/');
    }

    public function gantiPass()
    {
        return view('gantipass');
    }

    public function updatePass()
    {
        request()->validate([
            'old_password'  => 'required',
            'new_password'  =>'required'
        ]);

        $currentPassword = auth()->user()->password;
        $old_password = request('old_password');

        if(Hash::check($old_password, $currentPassword)){
            auth()->user()->update([
                'password'  => bcrypt(request('new_password'))
            ]);
            return back()->with('success', 'password anda berhasil diubah');
        }else {
            return back()->withErrors(['old_password' => 'harap mengisi old password anda']);
        }
    }

    
}
