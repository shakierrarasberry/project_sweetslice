<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
       use App\Models\Post;


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
  


   



    /**
     * Show the form for editing the specified resource.
     */
     public function edit($id)
{
    $product = Product::findOrFail($id); // Cari data berdasarkan ID
    return view('products.edit', compact('product')); // Kirim data ke view
}


    /**
     * Update the specified resource in storage.
     */
 public function update(Request $request, $id)
{
    $product = Product::findOrFail($id); // Cari data berdasarkan ID

    // Pastikan mengacu ke nama kolom yang benar
    $product->nama_product = $request->nama_product; 
    $product->harga = $request->harga;
    $product->deskripsi = $request->deskripsi;
    $product->save(); // Simpan perubahan ke database

    return redirect('/admin/product')->with('success', 'Produk berhasil diupdate!');
}


   

    /**
     * Remove the specified resource from storage.
     */
  
public function destroy($id)
{
    // Cari data berdasarkan ID
    $product = Product::find($id);

    // Cek apakah data ditemukan
    if ($product) { 
        $product->delete(); // Hapus data
        return redirect()->back();
    } else {
        return redirect()->back();
    }
}


}
