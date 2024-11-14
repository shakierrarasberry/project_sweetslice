<!-- resources/views/product/edit.blade.php -->
<h2>Edit Produk</h2>
<form action="{{ route('product.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="name">Nama Produk:</label>
    <input type="text" name="name" value="{{ $product->name }}">
    <label for="price">Harga Produk:</label>
    <input type="text" name="price" value="{{ $product->price }}">
    <button type="submit">Update</button>
</form>
