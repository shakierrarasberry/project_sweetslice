<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class ProductController extends Controller
{
    
    public function index()
    {
        return view("tambah_product");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dapatkan data
        $nama_product = $request->input("nama_product");
        $harga = $request->input("harga");
        $deskripsi = $request->input("deskripsi");

        // Masukan data ke table
        Product::create([
            "nama_product" => $nama_product,
            "harga" => $harga,
            "deskripsi" => $deskripsi,
            "id_kategori" => "1",
        ]);
    }

             public function tampilkanData()
    {
        $ngambilproduct = Product::all(); // Mengambil semua data produk
    return view('tambah_product', ['products' => $ngambilproduct]);
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
