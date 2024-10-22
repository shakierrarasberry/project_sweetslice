<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin'); // Atur sesuai dengan tampilan admin yang ingin ditampilkan
    }
}
