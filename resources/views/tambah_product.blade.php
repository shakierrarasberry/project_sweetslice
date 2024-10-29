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
</body>
</html>