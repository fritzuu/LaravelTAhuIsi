<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    function index()
    {
        return view("sesi/index");
    }
    function login(Request $request)
    {
        Session::flash('email', $request->email);
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ], [
            'email.required'=>'Email Wajib Diisi',
            'password.required'=>'Password Wajib Diisi'
        ]);

        $infologin = [
            'email'=> $request->email,
            'password'=> $request->password

        ];

        if(Auth::attempt($infologin)) {
            //kalau otentikasi sukses
           return redirect('siswa')->with('success', Auth::user()->name . ' Berhasil login');
        }else{
            //kalau otentikasi gagal
            //return 'gagal';
            return redirect('sesi')->withErrors('Username dan password yang dimasukan tidak valid !!');
        }
        

    }

    function logout(){
        Auth::logout();
        return redirect('sesi')->with('success', 'Berhasil Logout');
    }

    function register()
    {
        return view('sesi/register');
    }
    function create(Request $request)
    {   
        Session::flash('name', $request->name);
        Session::flash('email', $request->email);
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6'
        ], [
            'name.required'=>'Nama Wajib Diisi',
            'email.required'=>'Email Wajib Diisi',
            'email.email'=>'Masukan email yang valid',
            'email.unique'=>'Email sudah pernah digunakan, silahkan pilih email yang lain',
            'password.required'=>'Password Wajib Diisi',
            'password.min'=>'Minimum password yang diizinkan adalah 6 karakter'
        ]);

        $data = [
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ];
        User::create($data);

        $infologin = [
            'email'=> $request->email,
            'password'=> $request->password

        ];

        if(Auth::attempt($infologin)) {
            //kalau otentikasi sukses
           return redirect('siswa')->with('success', Auth::user()->name .' Berhasil login');
        }else{
            //kalau otentikasi gagal
            return redirect('sesi')->withErrors('Username dan password yang dimasukan tidak valid !!');
        }
    }
}
