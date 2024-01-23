<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class signupController extends Controller
{
    function registrasi(){
        return view('registrasi/signup');
    }

    function create(Request $request){
        Session::flash('name', $request->name);
        Session::flash('email', $request->email);
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ],[
            'name.required' => 'nama wajib diisi',
            'email.required' => 'email wajib diisi',
            'email.unique' => 'email sudah terdaftar',
            'password.required' => 'password wajib diisi',
            'password.min' => 'password minimal 6 karakter'
        ]);

        $data = [
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=>Hash::make($request->password)
        ];

        user::create($data);

        return redirect('/')->with('success', 'Berhasil daftar! Silakan login.');

    }

}
