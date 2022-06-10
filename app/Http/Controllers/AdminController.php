<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Admin;
use \App\User;

class AdminController extends Controller
{
    public function index()
    {
        $data = User::where('role',1)->get();
        return view('dashboard.beranda.admin', compact('data'));
    }

    public function tambah()
    {
        return view('dashboard.beranda.tambah_admin');
    }

    public function postAdmin(Request $request)
    {
        $this->validate($request, [
            'nama'  => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        $data2 = new User;
        $data2->role = '1';
        $data2->name = $request->nama;
        $data2->email = $request->email;
        $data2->password = bcrypt($request->password);
        $data2->save();

        $data = new Admin;
        $data->users = $data2->id;
        $data->save();

        return redirect('/adminn')->with('success', 'Data Guru Berhasil Ditambahkan');

    }
}
