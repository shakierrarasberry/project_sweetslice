<form action="/products/update/{{ $product->id }}" method="POST">
    @csrf
    <label>Nama Produk:</label>
    <input type="text" name="nama_product" value="{{ $product->nama_product }}">
    
    <label>Harga Produk:</label>
    <input type="number" name="harga" value="{{ $product->harga }}">

     <label>deskripsi Produk:</label>
    <input type="text" name="deskripsi" value="{{ $product->deskripsi }}">

    <button type="submit">Update</button>
</form>
