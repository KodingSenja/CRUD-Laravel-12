<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Produk</title>
</head>

<body>
    <H1>Daftar Produk Eletronik</H1>
    <a href="{{ route('products.create') }}">Tambah Produk</a>

    <br />
    <br />

    {{-- // Form pencarian --}}
    <form method="GET" action="{{ route('products.index') }}">
        <input type="text" name="search" placeholder="Cari produk..." value="{{ request('search') }}">

        <button type="submit">Cari</button>
    </form>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Gambar</th>
            <th colspan="2">Aksi</th>

        </tr>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                <td>{{ $product->stock }}</td>
                <td>
                    @if ($product->image)
                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" width="100">
                    @else
                        Tidak ada gambar
                    @endif
                <td>

                    <a href="{{ route('products.edit', $product->id) }}"> <button type="submit">Edit</button>
                </td>
                <td>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach

        <br />



    </table>
    <br />
    {{ $products->links('pagination::simple-default') }}


</body>

</html>
