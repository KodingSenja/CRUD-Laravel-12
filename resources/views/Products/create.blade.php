<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Product</title>
</head>

<body>
    <h1>Halaman Input Product</h1>
    <br />
    <a href="{{ route('products.index') }}">Lihat Daftar Produk</a>
    <br />
    <br />

    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <br>
        <label for="name">Nama Produk:</label>
        <input type="text" name="name">
        @error('name')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <br>
        <label for="price">Harga Produk:</label>
        <input type="number" name="price">
        @error('price')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <br>
        <label for="stock">Stok Produk:</label>
        <input type="number" name="stock">
        @error('stock')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <br />
        <label for="image">Gambar Produk:</label>
        <input type="file" name="image">
        @error('image')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <br />
        <button type="submit">Simpan</button>
        <br />




    </form>

</html>
