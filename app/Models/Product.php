<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = ["nama_product", "id_kategori", "deskripsi", "harga"];
}

$products = new products ();
$products->nama_product = "bentocakw";
$products->id_kategori = 1;
$products->deskripsi = "product1";
$products->harga = 10000;
$products->save();

