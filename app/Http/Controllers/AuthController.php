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

   function proseslogin(Request $request) {
    $email = $request->input("username");
    $password = $request->input("password");
    
    $akun = ['email' => $email, 'password' => $password];

    if (Auth::attempt($akun)) {
        // Cek role setelah login
        $user = Auth::user();
        if ($user->role === 'admin') {
            return redirect('/admin'); // Arahkan ke halaman admin jika admin
        } else {
            return redirect('/home'); // Arahkan ke halaman user jika bukan admin
        }
    } else {
        return redirect('/login')->withErrors(['message' => 'Login gagal. Periksa kembali email dan password.']);
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



