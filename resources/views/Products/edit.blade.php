<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Product</title>
</head>

<body>
    <h1>Edit Product</h1>
    <br />
    <a href="{{ route('products.index') }}">Lihat Daftar Produk</a>
    <br />
    <br />

    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="name">Nama Produk:</label>
        <input type="text" name="name" value="{{ $product->name }}">
        @error('name')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <br>
        <label for="price">Harga Produk:</label>
        <input type="number" name="price" value="{{ $product->price }}">
        @error('price')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <br>
        <label for="stock">Stok Produk :</label>
        <input type="number" name="stock" value="{{ $product->stock }}">
        @error('stock')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <br>
        <label for="image">Gambar Produk:</label>
        <input type="file" name="image">
        @error('image')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <br>


        <button type="submit">Update</button>
        <br />
    </form>
</body>

</html>
