<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
 use Illuminate\Support\Facades\Auth;
 use App\Models\User;


class AuthController extends Controller
{
    function register(){
        return view('/register');

    }
    function login(){
        return view('/login');
        
    }

    function proseslogin(Request $request){
        $email =  $request->input("username");
        $password =  $request->input("password");
        
        $akun = [ 'email' => $email, 'password' => $password];

        if(Auth::attempt($akun)){
            return redirect('/home');
        }else{
            return redirect('/login');
        }
        
    }

    
    
public function prosesregister(Request $request) {
    $email = $request->input("email"); // Perbaiki di sini
    $password = $request->input("password");

    // Membuat user baru dengan password yang di-hash
    $user = User::create([
        'name' => 'Nama Pengguna', // Isi dengan nama default atau ambil dari input form
        'email' => $email,
        'password' => Hash::make($password)
    ]);

    // Mengotentikasi user yang baru dibuat
    if (Auth::attempt(['email' => $email, 'password' => $password])) {
        return redirect('/home');
    } else {
        return redirect('/login')->withErrors(['message' => 'Login failed.']);
    }
}


}



