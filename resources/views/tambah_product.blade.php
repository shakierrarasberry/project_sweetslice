<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="{{ url('/admin/product') }}">
        @csrf

        Nama product
        <input type="text" name="nama_product">
        Harga
        <input type="text" name="harga">
        Deskripsi
        <input type="text" name="deskripsi">


        <input type="submit" value="Simpan">
    </form>
  
    <div>
    <h1>Daftar Menu</h1>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Harga</th>
                <th>Deskripsi</th>
                <th>aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->nama_product }}</td>
                    <td>{{ $product->harga }}</td>
                    <td>{{ $product->deskripsi }}</td>
                    <td>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
</form>
                    <button type="submit">Update</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
