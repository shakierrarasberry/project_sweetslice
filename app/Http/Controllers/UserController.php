<?php
namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function tampil()
    {
        $users = User::all(); // Mengambil semua data pengguna
        return view('user', compact('users'));
    }
}
