<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class LoginController extends Controller
{
   public function login(){
    return view('Pengguna.login');
   } 

   public function postLogin(Request $request){
    if(Auth::attempt($request->only('email','password'))){
        return redirect('/home');
    }
    return redirect('login');
   } 

   public function Registerasi(){
    return view('Pengguna.register');
   }

   public function simpanregistrasi(Request $request){
    
    User::create([
        'name' => $request->nama,
        'level' => 'pegawai',
        'email' => $request->email,
        'password' => bcrypt($request->password),
        'delstatus' => true,

    ]);

    return redirect('login');
    }

    public function logout(){
        Auth::logout();
        return redirect('login');
    }
}
