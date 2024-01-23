<?php

namespace App\Http\Controllers;

// use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class logincontroller extends Controller
{
    function index (){
        return view ("login/login");
    }

    function login (Request $request){
        Session::flash('email', $request->email);
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ],[
            'email.required'=>'email wajib diisi',
            'password.required'=>'password wajib diisi',
        ]);

        $islogin = [
            'email' =>$request->email,
            'password' =>$request->password,
        ];

        if (Auth::attempt($islogin)) {
            // Mendapatkan pengguna berdasarkan email
            $user = Auth::user();
            // Mengarahkan ke halaman edit profil berdasarkan email
            // return redirect()->route('profil', ['profil' => $user->email]);
            return redirect('profil/'.$user->email.'/edit')->with('success','berhasil login');
        } else {
            return 'gagal';
        }
    
    }

    function logout () {
        Auth::logout();
        return redirect('/')->with('success','berhasil logout');
    }
}
